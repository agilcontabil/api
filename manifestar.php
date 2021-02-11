<?php
$urlIntegracao    = 'http://api.agilcontabil.net/nfe/manifestar';
$dados['usuario'] = 'teste';
$dados['senha']   = 'teste';
//para usar certificado A1 apenas descomentar os dados abaixo
$dados['certificadoDigital'] = bin2hex(file_get_contents("modulos/api/cert-hellen.pfx"));
$dados['senhaCertificadoDigital'] = '23101981';

$dados["dados"] = bin2hex(json_encode([
    "evento" => "210200", //210200 - Confirmação da Operação | 210210 - Ciência da Operação | 210220 - Desconhecimento da Operação | 210240 - Operação não Realizada
    "razaoSocial" => "Hellen Confeccoes",
    "cnpj" => "26.888.917/0001-68",
    "ambiente" => "1",
    "modelo" => "55",
    "ufEmitente" => "TO",
    "chave" => "17210218958029000146550010000170681111770138",
    "justificativa" => "Recuso devido não tem ciência da nota..."
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
