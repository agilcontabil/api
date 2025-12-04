<?php
$urlIntegracao    = 'https://api.agilcontabil.net/nfse/emitirNfse';

$dados['usuario'] = 'teste';
$dados['senha']   = 'teste';
//Enviar dados se for certificado A1, caso seja certificado A3, não enviar os dados abaixo
$dados['certificadoDigital'] = bin2hex(file_get_contents("1234.pfx"));
$dados['senhaCertificadoDigital'] = '12345';

//dados da nota fiscal de serviços
$nfse = [
    "numeroLote" => "1846",
    "numeroRps" => "1846",
    "serie" => "1",
    "padraoNacional" => "nao",
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
    "outrasInformacoes" => "EPP Optante do simples nacional...",
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
        "responsavelRetencao"   => 4, //1-rtTomador | 2-rtPrestador | 3-rtIntermediario | 4-rtNenhum
        "itemListaServico"      => "4.03",
        "codigoTributacaoMunicipio" => "40300188",
        "codigoLcServ"          => "4.03",
        "codigoCnae"            => "8630506",
        "discriminacao"         => "Serviço",
        "codigoMunicipio"       => "3106200", //código do município onde ocorreu o fato gerador do serviço (geralmente o mesmo do prestador do serviço)
        "municipioIncidencia"   => "3106200",
        "exigibilidadeISS"      => 1, // 1=exiExigivel, 2=exiNaoIncidencia, 3=exiIsencao, 4=exiExportacao, 5=exiImunidade, 6=exiSuspensaDecisaoJudicial, 7=exiSuspensaProcessoAdministrativo
        "tributacao" => [
            "tributacaoMunicipal" => [
                "percentualAliquota" => "", //Valor percentual da alíquota (ex: "2.00", "5.00") ou vazio "" para municípios conveniados
                "tipoImunidade" => "0" //0=Nenhum, 1=Imunidade, 2=Patrimônio, 3=Templos, 4=Patrimônio Partidos, 5=Livros, 6=Fonogramas
            ],
            "tributacaoFederal" => [
                "CST" => "01", //00=CST 00, 01=CST 01, 02=CST 02, 03=CST 03, 04=CST 04, 05=CST 05, 06=CST 06, 07=CST 07, 08=CST 08, 09=CST 09
                "tipoRetencaoPisCofins" => "2" //1=Não Retido, 2=Retido
            ]
        ]
    ],
    "prestador" => [
        "logomarca"          => "", //binario de imagem jpeg ou png em hexadecimal
        "cnpj"               => "34345455454545",
        "inscricaoMunicipal" => "10600650011",
        "endereco"           => "rua teste",
        "numero"             => "243",
        "complemento"        => "teste",
        "bairro"             => "bairro teste",
        "municipio"          => "3106200",
        "nomeMunicipio"      => "Cidade teste",
        "uf"                 => "MG",
        "cep"                => "30110063",
        "razaoSocial"        => "Teste",
        "nomeFantasia"       => "Teste",
        "telefone"           => "3133373124",
        "email"              => "teste@teste.com",
        "usuario"            => "",
        "senha"              => "",
        "fraseSecreta"       => "",
        "chaveAcesso"        => "",
        "chaveAutorizacao"   => "",
        "codigoUf"           => "31"
    ],
    "tomador" => [
        "cpfCnpj"            => "07729385635",
        "inscricaoMunicipal" => "",
        "endereco"           => "rua teste",
        "numero"             => "4454",
        "complemento"        => "",
        "bairro"             => "bairro teste",
        "municipio"          => "3106200",
        "nomeMunicipio"      => "Cidade teste",
        "uf"                 => "MG",
        "codigoPais"         => "1058",
        "pais"               => "Brasil",
        "cep"                => "30411107",
        "razaoSocial"        => "Cliente Teste",
        "telefone"           => "",
        "email"              => "teste@teste.com"
    ]
];

$dados['dados'] = bin2hex(json_encode($nfse)); //os dados da nfse devem ser enviados em formato json e hexadecimal

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