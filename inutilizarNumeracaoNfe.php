<?php
$urlIntegracao    = 'http://api.agilcontabil.net/nfe/inutilizarNumeracaoNfe';

$dados['usuario']      = 'teste';
$dados['senha']        = 'teste';

$dados["dados"] = bin2hex(json_encode([
    "ambiente" => "2",
    "modelo" => "55",
    "ano" => "2020",
    "ufEmitente" => "TO",
    "idCsc" => "",
    "csc" => "",
    "serie" => "1",
    "numeroInicial" => "40",
    "numeroFinal" => "40",
    "cnpj" => "26888917000168",
    "justificativa" => "Números não utilizados devido a erro de operação do sistema"
]));

//Inicia comunicação com servidor agilcontabil.net
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $urlIntegracao);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($dados));

//recebe a resposta
$resposta = curl_exec($ch);

var_dump($resposta);

//finaliza comunicação
curl_close($ch);

$resposta = json_decode($resposta, true);

if (!empty($resposta["result"])) {
    if ($resposta["result"] == 'sucesso') {
        echo 'Sucesso: cStat=' . $resposta["cStat"] . ' xMotivo=' . $resposta["mensagem"];
    } else {
        echo 'Rejeição: cStat=' . $resposta["cStat"] . ' xMotivo=' . $resposta["mensagem"];
    }
} else {
    echo 'erro ao inutilizar numeração';
}
