<?php

namespace VerificacaoLocal;

function file_get_contents(string $caminho): string
{
    return 'arquivo ficticio para verificacao local';
}

function conferir(bool $condicao, string $mensagem): void
{
    if (!$condicao) {
        throw new \RuntimeException($mensagem);
    }
}

function lerDadosExemplo(string $arquivo): array
{
    $codigo = \file_get_contents(dirname(__DIR__) . '/' . $arquivo);
    $inicioComunicacao = strpos($codigo, '$ch = curl_init();');
    conferir($inicioComunicacao !== false, 'Inicio da comunicacao nao encontrado: ' . $arquivo);
    $codigo = substr($codigo, 0, $inicioComunicacao);
    $codigo = substr($codigo, strlen('<?php'));
    $dados = [];
    ob_start();
    try {
        eval('namespace VerificacaoLocal;' . $codigo);
    } finally {
        ob_end_clean();
    }
    $campo = array_key_exists('nfe', $dados) ? 'nfe' : 'dados';
    conferir(isset($dados[$campo]), 'Dados fiscais ausentes: ' . $arquivo);
    return json_decode(hex2bin($dados[$campo]), true, 512, JSON_THROW_ON_ERROR);
}

foreach (['emitirNfe.php', 'emitirNfeSimples.php', 'emitirNfceSimples.php'] as $arquivo) {
    $nota = lerDadosExemplo($arquivo);
    foreach (['unidadeTributavel', 'quantidadeTributavel', 'valorUnitarioTributavel'] as $campo) {
        conferir(array_key_exists($campo, $nota['itens'][0]), $arquivo . ': campo ausente ' . $campo);
        conferir($nota['itens'][0][$campo] === '', $arquivo . ': opcional alterou dados comerciais');
    }
    if ($arquivo === 'emitirNfe.php') {
        conferir(array_key_exists('baseCalculoIbscbs', $nota['itens'][0]), 'Base IBS/CBS ausente');
        conferir(array_key_exists('pRedAliqCbs', $nota['itens'][0]), 'Reducao CBS ausente');
        conferir(array_key_exists('identificadorTerminalPagamento', $nota['pagamento']['detalhamento'][0]),
            'Terminal de pagamento ausente');
    }
}

$nota = lerDadosExemplo('emitirNfse.php');
conferir($nota['servico']['tributacao']['tributacaoFederal']['tipoRetencaoPisCofins'] === '2',
    'Exemplo mudou indevidamente para PIS/COFINS retidos');
conferir(array_key_exists('codigoServicoNacional', $nota['servico']), 'Codigo nacional separado ausente');
conferir(array_key_exists('dataCompetencia', $nota), 'Competencia opcional ausente');
$cancelamento = lerDadosExemplo('cancelarNfse.php');
conferir($cancelamento['codigoCancelamento'] === '2', 'Codigo de cancelamento alterado');

echo "5 exemplos conferidos localmente; nenhum HTTP realizado e nenhum certificado real lido.\n";
