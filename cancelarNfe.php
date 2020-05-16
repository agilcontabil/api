<?php
$urlIntegracao    = 'http://api.agilcontabil.net/nfe/cancelarNfe';

$dados['usuario']      = 'teste';
$dados['senha']        = 'teste';

$dados["dados"] = bin2hex(json_encode([
    "ambiente" => "2",
    "modelo" => "55",
    "ufEmitente" => "TO",
    "idCsc" => "",
    "csc" => "",
    "chave" => "17200526888917000168550020000000471817994435",
    "protocolo" => "317200000005036",
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
