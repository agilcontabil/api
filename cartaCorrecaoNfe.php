<?php
$urlIntegracao    = 'http://api.agilcontabil.net/nfe/cartaCorrecaoNfe';

$dados['usuario']            = 'teste';
$dados['senha']              = 'teste';
//para usar certificado A1 apenas descomentar os dados abaixo
$dados['certificadoDigital'] = bin2hex(file_get_contents("./certificado.pfx"));
$dados['senhaCertificadoDigital'] = '1234';

$dados["dados"] = bin2hex(json_encode([
    "razaoSocial" => "Sottile",
    "cnpj" => "43454545456556",
    "ambiente" => "1",
    "modelo" => "55",
    "ufEmitente" => "GO",
    "chave" => "52200716890284000179650100000001031491472119",
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
