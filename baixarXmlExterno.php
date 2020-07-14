<?php
$urlIntegracao    = 'https://api.agilcontabil.net/nfe/baixarXmlExterno';

$dados['usuario'] = 'teste';
$dados['senha']   = 'teste';

$dados['certificadoDigital'] = bin2hex(file_get_contents("C:\Users\billb\Downloads\hellen.pfx"));
$dados['senhaCertificadoDigital'] = '23101981';

//"dataInicio" => "01/01/2020"
$dados["dados"] = bin2hex(json_encode([
    "cnpj" => "26888917000168",
    "ultimoNsu" => "7400"
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
