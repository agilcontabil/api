<?php
$urlIntegracao    = 'https://api.agilcontabil.net/nfe/emitirNfe';

$dados['usuario'] = 'teste';
$dados['senha']   = 'teste';

$dados['certificadoDigital'] = bin2hex(file_get_contents("C:\Users\billb\Downloads\hellen.pfx"));
$dados['senhaCertificadoDigital'] = '23101981';

//$dados["xml"] = bin2hex(file_get_contents("nfe.xml")); //caso ja tenha um xml pronto

//a chave ["cliente"] pode ser totalmente removida caso não haja cliente na nota
//ou pode ser informado apenas o CPF ou apenas nome e CPF se desejar
$dados["nfe"] = bin2hex(json_encode(
    array(
        'empresa' =>
        array(
            'cnpj' => '26888917000168',
            'inscricaoEstadual' => '290396719',
            'telefone' => '6324144544',
            'email' => 'financeiro@hellen.net.br',
            'municipio' => 'ARAGUAINA - TO',
            'codigoMunicipio' => '170210',
            'uf' => 'TO',
            'tipoAtividade' => '3',
            'serie' => '2',
            'idCodigoSegurancaContribuinte' => '00001',
            'codigoSegurancaContribuinte' => '234134234124123423412344123',
            'contingencia' => 'nao',
            'razaoSocial' => 'HELLEN CONFECCOES LTDA',
            'nomeFantasia' => 'HELLEN CONFECCOES',
            'logradouro' => 'Rua Tiburcio Dantas',
            'numero' => '87',
            'complemento' => '',
            'bairro' => 'Conjunto Urbanistico',
            'cep' => '77818773',
            'codigoRegimeTributario' => '1',
            'informacaoComplementar' => '',
            'logomarca' => '' //enviar em formato hexadecimal
        ),
        'cliente' =>
        array(
            'cnpj' => '',
            'cpf' => '00863364101',
            'inscricaoEstadual' => '',
            'consumidorFinal' => '1',
            'indicadorIEDestinatario' => '9',
            'telefone' => '63992158117',
            'email' => 'billbarschgmail.com',
            'logradouro' => 'Rua Perimetral-002',
            'numero' => '87',
            'complemento' => '',
            'bairro' => 'Loteamento Manoel Gomes da Cunha',
            'codigoMunicipio' => '170210',
            'municipio' => 'ARAGUAINA - TO',
            'codigoPais' => '1058',
            'nomePais' => 'Brasil',
            'uf' => 'TO',
            'razaoSocial' => 'Bill Barsch',
            'nomeFantasia' => '',
            'cep' => '77818120'
        ),
        'indicativoIntermediador' => '0',
        'numeroNotaEmitir' => '55',
        'codigoNumerico' => '68158475',
        'dataSaida' => '2020-06-05 01:38:17',
        'dataEmissao' => '2020-06-05 01:38:17',
        'modelo' => '65',
        'ambiente' => '2',
        'tipo' => '1',
        'frete' => '9',
        'finalidade' => '1',
        'informacaoComplementar' => 'teste de informacoes complementares (cadastro da empresa...)',
        'notaFiscalReferencia' => '',
        'naturezaOperacao' => 'Venda de Produtos ou Servicos',
        'numeroVenda' => '',
        'itens' =>
        array(
            0 =>
            array(
                'numeroPedido' => null,
                'numeroItemPedido' => null,
                'desconto' => '0.00000000',
                'frete' => '0.00000000',
                'outro' => '0.00000000',
                'quantidade' => '1.00000000',
                'valorUnitario' => '20.00000000',
                'valorTotal' => '20.00',
                'informacaoAdicional' => '',
                'ncmProduto' => '07099911',
                'cest' => '',
                'tipoItem' => '00',
                'eanProduto' => '2005965311527',
                'codigoProduto' => '1',
                'nomeProduto' => 'Produto',
                'cfop' => '5102',
                'unidadeMedidaProduto' => 'UNID',
                'origemProduto' => '0',
                'icmsCst' => '102',
                'pisCst' => '8',
                'pisAliquota' => '0.65',
                'cofinsCst' => '8',
                'cofinsAliquota' => '3.0'
            ),
        )
    )
));

//Inicia comunicação com servidor agilcontabil.net
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $urlIntegracao);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($dados));

//recebe a resposta
$resposta = curl_exec($ch);

//finaliza comunicação
curl_close($ch);

//mostra a resposta da emissão da nota
//o xml da nota fiscal emitida está dentro da variavel $resposta["xml"] e deve ser gravado em sua base de dados
echo "<pre>";
echo $resposta;
echo "</pre>";

echo "<pre>";
print_r(json_decode($resposta, false));
echo "</pre>";

$array = json_decode($resposta, true);

/*
 * Variáveis retornadas pela API após emissão da NFe:
 * 
 * $resposta - String JSON contendo:
 *   - result: "sucesso" ou "erro"
 *   - protocolo: Número do protocolo de autorização
 *   - xml: XML da nota fiscal em formato hexadecimal
 *   - pdf: PDF da nota fiscal em formato hexadecimal
 *   - mensagem: Mensagem de retorno do SEFAZ
 *   - cStat: Código de status da resposta
 *   - chave: Chave de acesso da NFe
 */

$xml = hex2bin($array["xml"]);

$dom = new DOMDocument();
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml);
$out = $dom->saveXML();
pre(htmlentities($out));

//mostra pdf na tela
?><object data="data:application/pdf;base64,<?php echo base64_encode(hex2bin($array["pdf"])); ?>" type="application/pdf" width="100%" height="800px"></object>