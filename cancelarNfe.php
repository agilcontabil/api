<?php
$urlIntegracao    = 'https://api.agilcontabil.net/nfe/cancelarNfe';

$dados['usuario']            = 'teste';
$dados['senha']              = 'teste';
//para usar certificado A1 apenas descomentar os dados abaixo
$dados['certificadoDigital'] = bin2hex(file_get_contents("./certificado.pfx"));
$dados['senhaCertificadoDigital'] = '12345';

$dados["dados"] = bin2hex(json_encode([
    "razaoSocial" => "Empresa Teste",
    "cnpj" => "26888917000168",
    "cpf" => "26888917000168",
    "ambiente" => "2",
    "modelo" => "55",
    "ufEmitente" => "TO",
    "chave" => "17201226888917000168550020000000811304435046",
    "protocolo" => "317200000030770",
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
