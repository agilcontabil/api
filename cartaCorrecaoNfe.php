<?php
$urlIntegracao    = 'http://api.agilcontabil.net/nfe/cartaCorrecaoNfe';

$dados['usuario']      = 'teste';
$dados['senha']        = 'teste';

$dados["dados"] = bin2hex(json_encode([
    "ambiente" => "2",
    "modelo" => "55",
    "ufEmitente" => "TO",
    "idCsc" => "",
    "csc" => "",
    "chave" => "17200526888917000168550020000000471817994435",
    "numeroCorrecao" => "1",
    "textoCorrecao" => "Alteração de dados: CSOSN 1102 para CSOSN 1103 e CFOP 5102 para o CFOP 5405."
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

//mostra a resposta do envio da carta de correção
$arrayResposta = json_decode($resposta, true); //transforma resposta json em array do PHP
print_r($arrayResposta);
