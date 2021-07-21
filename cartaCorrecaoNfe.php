<?php
$urlIntegracao    = 'https://api.agilcontabil.net/nfe/cartaCorrecaoNfe';

$dados['usuario']            = 'teste';
$dados['senha']              = 'teste';
//para usar certificado A1 apenas descomentar os dados abaixo
//$dados['certificadoDigital'] = bin2hex(file_get_contents("/var/www/html/public/modulos/api/zzteste-certificadoHellen.pfx"));
//$dados['senhaCertificadoDigital'] = '23101981';
//echo var_export($dados);
//die();
$dados["dados"] = bin2hex(json_encode([
    "razaoSocial" => "Hellen",
    "cnpj" => "26888917000168",
    "ambiente" => "2",
    "modelo" => "55",
    "ufEmitente" => "TO",
    "chave" => "17210726888917000168550020000000841633419481",
    "numeroCorrecao" => "9",
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
