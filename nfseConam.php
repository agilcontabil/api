<?php
$urlIntegracao    = 'https://www.agilcontabil.net/sistemaInstalado/ajax';

$dados['usuario'] = 'teste';
$dados['senha']   = 'teste';
$dados['acao']    = 'emitirNfseA3';

//dados da nota fiscal de serviços
$nfse = [
  "numeroLote" => "3",
  "numeroRps" => "3",
  "serie" => "1",
  "ambiente" => "1", //1=produção, 2=homologação
  "simplesNacional" => "1", //1=sim, 2=não
  "regimeEspecialTributacao" => "7",
  //"tipo"=>"1", //(1= trRPS, 2=trNFConjugada, 3=trCupom );
  //"naturezaOperacao"=>"1", //(1=no1, 2=no2, 3=no3, 4=no4, 5=no5, 6=no6, 7=no7, 8=no9, 9=no11, 10=no12, 11=no14,
  //12=no50, 13=no51, 14=no52, 15=no53, 16=no54, 17=no55, 18=no56, 19=no57, 20=no58, 21=no59,
  //22=no60, 23=no61, 24=no62, 25=no63, 26=no64, 27=no65, 28=no66, 29=no67, 30=no68, 31=no69,
  //32=no70, 33=no71, 34=no72, 35=no78, 36=no79, 37=no101, 38=no111, 39=no121, 40=no201, 41=no301,
  //42=no501, 43=no511, 44=no541, 45=no551, 46=no601, 47=no701);
  "incentivadorCultural" => "2", //1=sim, 2=não 
  "codigoObra" => "",
  "codigoArt" => "",
  "servico" => [
    "valor"                 => 1.00,
    "deducoes"              => 0.00,
    "pis"                   => 0.00,
    "cofins"                => 0.00,
    "inss"                  => 0.00,
    "ir"                    => 0.00,
    "csll"                  => 0.00,
    "issRetido"             => 2, //1=stRetencao(sim), 2=stNormal(não), 3=stSubstituicao
    "valorIssRetido"        => 0.00,
    "outrasRetencoes"       => 0.00,
    "descontoIncondicionado" => 0.00,
    "descontoCondicionado"  => 0.00,
    "aliquota"              => 2.00,
    "responsavelRetencao"   => 4, //1-rtTomador | 2-rtPrestador | 3-rtIntermediario | 4-rtNenhum
    "itemListaServico"      => "4.03",
    "codigoTributacaoMunicipio" => "4.03",
    "codigoCnae"            => "8630503",
    "discriminacao"         => "Descrição Teste",
    "codigoMunicipio"       => "3528502", //código do município onde ocorreu o fato gerador do serviço (geralmente o mesmo do prestador do serviço)
    "municipioIncidencia"   => "3528502",
    "exigibilidadeISS"      => 1 // 1=exiExigivel, 2=exiNaoIncidencia, 3=exiIsencao, 4=exiExportacao, 5=exiImunidade, 6=exiSuspensaDecisaoJudicial, 7=exiSuspensaProcessoAdministrativo
  ],
  "prestador" => [
    "cnpj"               => "21947602000120",
    "inscricaoMunicipal" => "18256",
    "endereco"           => "teste",
    "numero"             => "111",
    "complemento"        => "teste",
    "bairro"             => "teste",
    "municipio"          => "3528502",
    "uf"                 => "SP",
    "cep"                => "75701040",
    "razaoSocial"        => "TESTE",
    "nomeFantasia"       => "TESTE",
    "telefone"           => "",
    "email"              => "teste@teste.com",
    "usuario"            => "", //35744098000176",
    "senha"              => "", //123",
    "fraseSecreta"       => "",
    "chaveAcesso"        => "",
    "chaveAutorizacao"   => "",
    "codigoUf"           => "35"
  ],
  "tomador" => [
    "cpfCnpj"            => "00863364101",
    "inscricaoMunicipal" => "",
    "endereco"           => "teste",
    "numero"             => "111",
    "complemento"        => "",
    "bairro"             => "teste",
    "municipio"          => "3528502",
    "uf"                 => "SP",
    "cep"                => "75701040",
    "razaoSocial"        => "Teste",
    "telefone"           => "3423452345",
    "email"              => ""
  ]
];

$dados['nfse']   = base64_encode(json_encode($nfse)); //os dados da nfse devem ser enviados em formato json e base64

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

//mostra a resposta da emissão da nota
//o xml da nota fiscal emitida está dentro da variavel $resposta["xml"] e deve ser gravado em sua base de dados
echo "<pre>";
print_r(json_decode($resposta, false));
echo "</pre>";

$array = json_decode($resposta, true);
echo '<textarea rows="40" cols="100">';
echo base64_decode($array["xml"]);
echo "</textarea>";

?>
<object data="data:application/pdf;base64,<?php echo base64_encode(hex2bin($array["pdf"])); ?>" type="application/pdf" width="100%" height="800px"></object>
<?php
