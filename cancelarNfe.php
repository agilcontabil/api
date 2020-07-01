<?php
$urlIntegracao    = 'http://api.agilcontabil.net/nfe/cancelarNfe';

$dados['usuario']            = 'teste';
$dados['senha']              = 'teste';
//para usar certificado A1 apenas descomentar os dados abaixo
$dados['certificadoDigital'] = bin2hex(file_get_contents("./certificado.pfx"));
$dados['senhaCertificadoDigital'] = '12345';

$dados["dados"] = bin2hex(json_encode([
    "razaoSocial" => "Sottile",
    "ambiente" => "1",
    "modelo" => "65",
    "ufEmitente" => "GO",
    "chave" => "52200716890284000179650100000001031491472119",
    "protocolo" => "152203235576728",
    "justificativa" => "Nota fiscal emitida com erro nos valores"
]));

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

//mostra a resposta do cancelamento da nota
var_dump($resposta);
$arrayResposta = json_decode($resposta, true); //transforma resposta json em array
print_r($arrayResposta);
