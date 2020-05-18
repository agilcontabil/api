<?php
$urlIntegracao    = 'http://api.agilcontabil.net/nfse/emitirNfse';

$dados['usuario'] = 'teste';
$dados['senha']   = 'teste';


//dados da nota fiscal de serviços
$nfse = [
    "numeroNfse" => "1846",
    "numeroLote" => "1846",
    "serie" => "2",
    "ambiente" => "1", //1=produção, 2=homologação
    "simplesNacional" => "2", //1=sim, 2=não
    "regimeEspecialTributacao" => "1", //( retNenhum, retMicroempresaMunicipal, retEstimativa, retSociedadeProfissionais, retCooperativa, retMicroempresarioIndividual, retMicroempresarioEmpresaPP ); 
    "incentivadorCultural" => "2", //( snSim, snNao );
    "tipo" => "1", //( trRPS, trNFConjugada, trCupom );    
    "naturezaOperacao" => "1", //( no0, no1, no2, no3, no4, no5, no6, no7, no8,
    //no9, no10, no11, no12, no13, no14, no15,
    //no50, no51, no52, no53, no54, no55, no56, no57, no58, no59,
    //no60, no61, no62, no63, no64, no65, no66, no67, no68, no69,
    //no70, no71, no72, no78, no79, no101, no102, no103, no104, no105,
    //no107, no108, no110, no111, no121, no201, no301, no501, no511,
    //no512, no515, no521, no522, no539, no541, no549, no551, no601,
    //no611, no612, no613, no615, no621, no622, no701, no711,no712,
    //no901, no902, no911, no912, no921, no931, no951, no952, no971,
    //no981, no991  );    
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
        "aliquota"              => 3.00,
        "responsavelRetencao"   => 1, //1=ptTomador, 2=rtPrestador
        "itemListaServico"      => "4.03",
        "codigoTributacaoMunicipio" => "40300188",
        "codigoCnae"            => "8630506",
        "discriminacao"         => "Aplicacao",
        "codigoMunicipio"       => "3106200", //código do município onde ocorreu o fato gerador do serviço (geralmente o mesmo do prestador do serviço)
        "municipioIncidencia"   => "3106200",
        "exigibilidadeISS"      => 1 // 1=exiExigivel, 2=exiNaoIncidencia, 3=exiIsencao, 4=exiExportacao, 5=exiImunidade, 6=exiSuspensaDecisaoJudicial, 7=exiSuspensaProcessoAdministrativo
    ],
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
        "codigoUf"           => "31"
    ],
    "tomador" => [
        "cpfCnpj"            => "07729385635",
        "inscricaoMunicipal" => "",
        "endereco"           => "RUA OESTE",
        "numero"             => "241",
        "complemento"        => "",
        "bairro"             => "PRADO",
        "municipio"          => "3106200",
        "uf"                 => "MG",
        "cep"                => "30411107",
        "razaoSocial"        => "Bill Teste",
        "telefone"           => "",
        "email"              => "alinecamargo@me.com"
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
//o xml da nota fiscal emitida está dentro da variavel $resposta["xml"] e deve ser gravado em sua base de dados
echo "<pre>";
print_r(json_decode($resposta, false));
echo "</pre>";

$array = json_decode($resposta, true);
echo '<textarea rows="40" cols="100">';
echo hex2bin($array["xml"]);
echo "</textarea>";

//mostra pdf da nota na tela
?><object data="data:application/pdf;base64,<?php echo base64_encode(hex2bin($array["pdf"])); ?>" type="application/pdf" width="100%" height="800px"></object>