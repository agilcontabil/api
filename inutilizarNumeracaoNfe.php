<?php
$urlIntegracao    = 'https://api.agilcontabil.net/nfe/inutilizarNumeracaoNfe';

$dados['usuario']      = 'teste';
$dados['senha']        = 'teste';
//para usar certificado A1 apenas descomentar os dados abaixo
$dados['certificadoDigital'] = bin2hex(file_get_contents("./certificado.pfx"));
$dados['senhaCertificadoDigital'] = '12345';

$dados["dados"] = bin2hex(json_encode([
    "ambiente" => "2",
    "modelo" => "55",
    "ano" => "2022",
    "ufEmitente" => "TO",
    "idCsc" => "",
    "csc" => "",
    "serie" => "1",
    "numeroInicial" => "40",
    "numeroFinal" => "40",
    "cnpj" => "26888917000168",
    "justificativa" => "Números não utilizados devido a erro de operação do sistema"
]));

//Inicia comunicação com servidor agilcontabil.net
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $urlIntegracao);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($dados));
curl_setopt($ch, CURLOPT_TIMEOUT, 90); // Timeout de 90 segundos
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); // Timeout de conexão
// Desabilita verificação SSL (apenas para desenvolvimento/teste)
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

//recebe a resposta
$resposta = curl_exec($ch);

var_dump($resposta);

//finaliza comunicação
curl_close($ch);

$resposta = json_decode($resposta, true);

if (!empty($resposta["result"])) {
    if ($resposta["result"] == 'sucesso') {
        echo 'Sucesso: cStat=' . $resposta["cStat"] . ' xMotivo=' . $resposta["mensagem"];
    } else {
        echo 'Rejeição: cStat=' . $resposta["cStat"] . ' xMotivo=' . $resposta["mensagem"];
    }
} else {
    echo 'erro ao inutilizar numeração';
}
