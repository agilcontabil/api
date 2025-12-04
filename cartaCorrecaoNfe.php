<?php
$urlIntegracao    = 'https://api.agilcontabil.net/nfe/cartaCorrecaoNfe';

$dados['usuario']            = 'teste';
$dados['senha']              = 'teste';
//Enviar dados se for certificado A1, caso seja certificado A3, não enviar os dados abaixo
$dados['certificadoDigital'] = bin2hex(file_get_contents("certificado.pfx"));
$dados['senhaCertificadoDigital'] = '3434234';

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
curl_setopt($ch, CURLOPT_TIMEOUT, 90); // Timeout de 90 segundos
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); // Timeout de conexão
// Desabilita verificação SSL (apenas para desenvolvimento/teste)
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//recebe a resposta
$resposta = curl_exec($ch);
//finaliza comunicação
curl_close($ch);

//mostra a resposta do envio da carta de correção
$arrayResposta = json_decode($resposta, true); //transforma resposta json em array do PHP
print_r($arrayResposta);
