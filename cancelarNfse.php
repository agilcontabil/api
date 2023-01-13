<?php
$urlIntegracao    = 'https://api.agilcontabil.net/nfse/cancelarNfse';

$dados['usuario'] = 'teste';
$dados['senha']   = 'teste';

//dados da nota fiscal de serviços
//"codigoCancelamento" =>"2", //1 - Erro de emissão, 2 - Serviço não concluido, 3 - RPS Cancelado na Emissão  
//"codigoCancelamento" =>"E506",
$xml = file_get_contents("zzteste-xmlnfse.xml");
$nfse = [
    "ambiente"           => "1", //1=produção, 2=homologação
    "xml"                => bin2hex($xml),
    "codigoCancelamento" => '2', //1 - Erro de emissão, 2 - Serviço não concluido, 3 - RPS Cancelado na Emissão (passo fundo)
    "prestador" => [
        "cnpj"               => "29320709000156",
        "inscricaoMunicipal" => "10600650011",
        "endereco"           => "AVE DO CONTORNO",
        "numero"             => "9495",
        "complemento"        => "SALA 302",
        "bairro"             => "Prado",
        "municipio"          => "3106200",
        "uf"                 => "MG",
        "cep"                => "30110063",
        "razaoSocial"        => "VACINE-SE CENTRO DE IMUNIZACOES E IMUNOTERAPIA LTDA",
        "nomeFantasia"       => "VACINE-SE",
        "telefone"           => "3133373124",
        "email"              => "vacinese@vacine.se",
        "usuario"            => "1234",
        "senha"              => "1234",
        "fraseSecreta"       => "",
        "chaveAcesso"        => "",
        "codigoUf"           => "31"
    ]
];

$dados['dados']   = bin2hex(json_encode($nfse)); //os dados da nfse devem ser enviados em formato json e base64

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
echo "<pre>";
print_r(json_decode($resposta, false));
echo "</pre>";
