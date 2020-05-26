<?php
$urlIntegracao    = 'http://api.agilcontabil.net/nfe/baixarXmlExterno';

$dados['usuario'] = 'croques@criarsistemas.net';
$dados['senha']   = 'D2014info5';
$dados["dados"] = bin2hex(json_encode([
    "cnpj" => "02007384000108",
    "dataInicio" => "19/03/2020"
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

//mostra a resposta da emissão da nota
var_dump($resposta);
$array = json_decode($resposta, true);
echo "<pre>";
var_dump($array);
echo "</pre>";
