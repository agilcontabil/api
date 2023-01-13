<?php
$urlIntegracao    = 'https://www.agilcontabil.net/sistemaInstalado/ajax';

$dados['usuario']      = 'teste';
$dados['senha']        = 'teste';
$dados['acao']         = 'emitirNfseSaoPauloA1';
//$dados['certificado']  = bin2hex(file_get_contents('/var/www/agilcontabil/modulos/api/zz-certificadoNOVANDI.p12'));
$dados['certificado']  = bin2hex(file_get_contents('D:\laragon\www\maisagil\public\modulos\api\zz-certificadoNOVANDI.p12'));
$dados['senhaCertificado'] = "YJKmaa1894KLT";

//iniício da emissão
//dados da nota fiscal de serviços
$nfse = [
  "numeroLote" => "5",
  "numeroRps" => "5",
  "serie" => "NF",
  "ambiente" => "1", //1=produção, 2=homologação
  "simplesNacional" => "1", //1=sim, 2=não
  "tipo" => "1", //(1= trRPS, 2=trNFConjugada, 3=trCupom );  
  "naturezaOperacao" => "14", //(1=no1, 2=no2, 3=no3, 4=no4, 5=no5, 6=no6, 7=no7, 8=no9, 9=no11, 10=no12, 11=no14,
  //12=no50, 13=no51, 14=no52, 15=no53, 16=no54, 17=no55, 18=no56, 19=no57, 20=no58, 21=no59,
  //22=no60, 23=no61, 24=no62, 25=no63, 26=no64, 27=no65, 28=no66, 29=no67, 30=no68, 31=no69,
  //32=no70, 33=no71, 34=no72, 35=no78, 36=no79, 37=no101, 38=no111, 39=no121, 40=no201, 41=no301,
  //42=no501, 43=no511, 44=no541, 45=no551, 46=no601, 47=no701 );  
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
    "itemListaServico"      => "03115",
    "codigoTributacaoMunicipio" => "03115",
    "codigoCnae"            => "8630503",
    "discriminacao"         => "Serviço teste",
    "codigoMunicipio"       => "3550308", //código do município onde ocorreu o fato gerador do serviço (geralmente o mesmo do prestador do serviço)
    "municipioIncidencia"   => "3550308",
    "exigibilidadeISS"      => 1 // 1=exiExigivel, 2=exiNaoIncidencia, 3=exiIsencao, 4=exiExportacao, 5=exiImunidade, 6=exiSuspensaDecisaoJudicial, 7=exiSuspensaProcessoAdministrativo
  ],
  "prestador" => [
    "cnpj"               => "64656465000188",
    "inscricaoMunicipal" => "98007815",
    "endereco"           => "Rua dos Três Irmãos",
    "numero"             => "201",
    "complemento"        => "CONJ 87",
    "bairro"             => "Vila Progredior",
    "municipio"          => "3550308",
    "uf"                 => "SP",
    "cep"                => "05.615-190",
    "razaoSocial"        => "NOVANDI INFORMATICA EIRELI",
    "nomeFantasia"       => "NOVANDI INFORMATICA EIRELI",
    "telefone"           => "(11) 3449-8551",
    "email"              => "marcos@novandi.com.br",
    "usuario"            => "",
    "senha"              => "",
    "fraseSecreta"       => "",
    "chaveAcesso"        => "",
    "codigoUf"           => "35"
  ],
  "tomador" => [
    "cpfCnpj"            => "09356343802",
    "inscricaoMunicipal" => "",
    "endereco"           => "Rua Bonifacio",
    "numero"             => "169",
    "complemento"        => "Ap 141 Bl 2",
    "bairro"             => "Butanta",
    "municipio"          => "3550308",
    "uf"                 => "SP",
    "cep"                => "05529060",
    "razaoSocial"        => "Marcos Araujo Andrade",
    "telefone"           => "11994855686",
    "email"              => "marcos@novandi.com.br"
  ]
];

$dados["nfse"] = bin2hex(json_encode($nfse));


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

//array resposta
$array = json_decode($resposta, true);

//print array
echo "<pre>";
print_r($array);
echo "</pre>";

//print xml
echo '<textarea rows="40" cols="100">';
echo hex2bin($array["xml"]);
echo "</textarea>";
