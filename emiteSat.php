<?php
$urlIntegracao    = 'https://www.agilcontabil.net/sistemaInstalado/ajax';

$dados['usuario'] = 'usuario';
$dados['senha']   = 'senha';
$dados['acao']    = 'emitirCfe';

//dados da nota fiscal de serviços
$cfe =  [
  "numeroCaixa" => "1",
  "ambiente" => "2", //(1 - taProducao, 2 - taHomologacao)
  "cnpjEmpresaSoftwareSat" => "11111111111111",
  "cnpjEmitente" => "11111111111111",
  "inscricaoEstadualEmitente" => "111111111111",
  "inscricaoMunicipalEmitente" => "",
  "regimeTributario" => "0", //(0 - RTSimplesNacional, 1 - RTRegimeNormal); 
  "descontoFinal" => 0.00,
  "troco" => 0.00,
  "informacaoComplementar" => "",
  "itens" => [
    0 => [
      "nomeProduto"      => "Produto Teste",
      "codigoProduto"    => "12345",
      "ncm"              => "19059010",
      "cfop"             => "5102",
      "unidadeMedida"    => "UNID",
      "quantidade"       => 10,
      "precoUnitario"    => 2.50,
      "desconto"         => 0.00
    ]
  ],
  "parcelas" => [
    0 =>
    [
      "formaPagamento"     => 0, // (0-mpDinheiro, 1-mpCheque, 2-mpCartaodeCredito, 3-mpCartaodeDebito, 4-mpCreditoLoja, 5-mpValeAlimentacao, 6-mpValeRefeicao, 7-mpValePresente, 8-mpValeCombustivel, 9-mpOutros);  
      "valor"              => 25.00
    ]
  ],
  "destinatario" => [
    "cnpjCpf"            => "00863364101",
    "nome"               => "Bill Barsch",
    "endereco"           => "RUA LEOPOLDINA REGO",
    "numero"             => "471",
    "complemento"        => "",
    "bairro"             => "PENHA",
    "municipio"          => "3304557",
    "uf"                 => "RJ",
    "cep"                => "21521021",
    "telefone"           => "",
    "email"              => ""
  ]
];

$dados['cfe']   = base64_encode(json_encode($cfe)); //os dados da nfse devem ser enviados em formato json e base64

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
//o xml da nota fiscal emitida está dentro da variavel $resposta["xml"] e deve ser gravado em sua base de dados
var_dump($resposta);

$arrayResposta = json_decode($resposta, true);
//mostra a resposta da emissão da nota
//o xml da nota fiscal emitida está dentro da variavel $resposta["xml"] e deve ser gravado em sua base de dados
echo "<pre>";
print_r($arrayResposta);
echo "</pre>";

echo "<textarea cols=\"100\" rows=\"70\">";
echo base64_decode($arrayResposta["xml"]);
echo "</textarea>";
