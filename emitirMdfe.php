<?php
$urlIntegracao    = 'https://api.agilcontabil.net/mdfe/emitirMdfe';

$dados['usuario'] = 'teste';
$dados['senha']   = 'teste';

$dados['certificadoDigital'] = bin2hex(file_get_contents("1234.pfx"));
$dados['senhaCertificadoDigital'] = '12345';

$dados["mdfe"] = bin2hex(
    json_encode(
        array(
            'transportador' =>
            array(
                'cnpj' => '',
                'cpf' => '',
                'razaoSocial' => '',
                'inscricaoEstadual' => '',
                'endereco' => '',
                'municipio' => '',
                'uf' => '',
            ),
            'motorista' =>
            array(
                'nome' => 'MAURIVAN GABRIEL ROPKE SCHUSTER',
                'cpf' => '1234',
            ),
            'seguradora' =>
            array(
                'nome' => '',
                'cnpj' => '',
            ),
            'veiculo1' =>
            array(
                'codigo' => '1',
                'placa' => 'LWX2466',
                'renavam' => '00635837854',
                'capacidadeKg' => '0',
                'capacidadeM3' => '0',
                'tipoRodado' => '6',
                'tipoCarroceria' => '0',
                'uf' => 'MT',
                'cnpjProprietario' => '',
                'cpfProprietario' => '',
                'rntrcProprietario' => '',
                'nomeProprietario' => '',
                'ieProprietario' => '',
                'ufProprietario' => '',
            ),
            'veiculo2' =>
            array(
                'codigo' => '2',
                'placa' => 'JZI8187',
                'renavam' => '',
                'capacidadeKg' => '0',
                'capacidadeM3' => '0',
                'tipoCarroceria' => '0',
                'uf' => 'MT',
            ),
            'volumes' =>
            array(
                0 =>
                array(
                    'quantidade' => '',
                    'descricao' => '',
                    'pesoLiquido' => '',
                    'pesoBruto' => '',
                ),
            ),
            'exportacao' =>
            array(
                'ufEmbarque' => '',
                'localEmbarque' => '',
            ),
            'empresa' =>
            array(
                'id' => '99111481609155148',
                'cnpj' => '',
                'cpf' => '42543460187',
                'inscricaoEstadual' => '137407700',
                'inscricaoMunicipal' => '',
                'inscricaoSuframa' => '',
                'telefone' => '66999076428',
                'email' => 'anaschuster27@hotmail.com',
                'municipio' => 'ITAUBA - MT',
                'codigoMunicipio' => '510455',
                'uf' => 'MT',
                'nfseUsuario' => '',
                'nfseSenha' => '',
                'nfseFraseSecreta' => '',
                'nfseNumero' => '0',
                'nfseSerie' => '',
                'nfseLote' => '',
                'rntrc' => '',
                'cnae' => '',
                'tipoAtividade' => '4',
                'mdfeSerie' => '1',
                'serie' => '920',
                'tokenIbpt' => '',
                'idCodigoSegurancaContribuinte' => '',
                'codigoSegurancaContribuinte' => '',
                'arquivoCertificadoDigital' => '99111481609155148.pfx',
                'certificadoDigital' => '30820eaa02010330820e6606092a864886f70d010701a0820e5704820e5330820e4f3082060006092a864886f70d010701a08205f1048205ed308205e9308205e5060b2a864886f70d010c0a0102a08204fe308204fa301c060a2a864886f70d010c0103300e040857a620b059f425d3020207d0048204d8c05e9bb53fddde04b092c49eff0149419d4a4ab03528d2686d268fdbafbe3bc7d31d9bfd138200200bcabd1f27665796e83389f1938a1f362e005cff81713423f98c034dd7660671929543ea21df91db5225b4781eeb12158b07b2a3cf7442129dc77328ed08a227143c2dbb490c22e63c556272701a1c6d1d6c27d4a9d0479568aa412e6e22f79788b2f81de78c56a396eaa361e92d93d0d7ee5182bfbe2519c42a93797ba770a7b31c0e0b1b764d2fd08f0d00f2fc01a713f9a700cdd67841cab8c218c1396aa62e38d9b7d69677fcf4c985ea9e26e3b9432425ef3693c172bc30581ab37ece7dd68aa1f291eb291dc1c221e66378a3c2f152f86a5d2ff861cd10173c5a0161a4cbf5dfe6cf977055b4dc2b3ebcf6255625269ca1a36502d968a7009e531acd2eb7417b8c000f8d1b1269a0643b9618439e135beece3443db3803cbb3c754cb39c75e6ad9dd80cf3ceca1204976423c995867964683b419759f9d54a9a568a7cffa2b5680d84262f5f068e2eb7ba4273b4fc2dac534bca5afaf425983e62c81cb9be6c899645b3ae22bb028a2ca44d87866ce5c3eab0796ae28600d372a1e86d8283a26bf69d86b996970dadd6babb78b34fb7ab4f4e2ee247fb087f4e3eb439083a8976adb5232a4febb4e79d592d676db36265eff0e6f4598c989d0e54bef78fa2ebad5e3527be894161b7cb4609afa1f1331e826ee3aa356fffc8f8404227c254f5404acb1c3c27ed7eed37d4b19a9a5f0a894edd2e189e3a94a2bd0cffbae0345c8abd4672015c4de11d80b4f053bd93306ffad95d09303339eb067bf0da46ce4f3c03f0be3406be9d52ea1238c8c82c2df207dee539bbdadcb04d051829e9795d24d24085fc3a7a8e3d28870755e1c49b25d25122c05521ae21155938c8252d4e04d8aa8c76cbe96b1a5da42aac0b869a9f57ddb30212f0c73ff6257294e1108a775af4f6ede1078694b0905af5c8b09df15decd7f3db2b225168633bde201493d4df90782db3b79e00a104ba473d346a903848395c695e16db59750f6396558f078058b005f4834374e7ac3604b3f2ee6f7f44935c596cee33cd117be853c7bfae627ddfdb60c1586502efee1e8d19f0d807ca6971282299583861b330522194f9dde253b34bc0e8a38f5aefaa96ac4aa04c55178e72d4c44a3e613221858f72405b05f6a898f72c592f06faf4e4b4833f3350a0a363686543755d70f7eddcb425700a4aa6d65522f487d6980e8bafd80cfa71caead526f6dcd3fa9639b2a86cec3ca8af08b505d94657eaf4d1077054be7be3690bfa8b84fad2bcb59e02225f0f4bf831d8db0f39140c59971aa9274a7c4c198a41c4a75901e693f2fe8dc8ed7a74970ab44b1155ae1be05c8883c1cce8fb8c5369cf966057b38a51ae3dfe813280378d6884b2d46f80faff98c6b69322beb58287e50cf01820a72b0bf60e4cdcca5fa91d78792ebdb03ebb8724adcebfb946021e433855a020a341aed41b0e8f18ef09ee6328c3a86857471c02693e09fab09ac551c124fb2df44d26a020560451aea80df9ee553d247be974119e184bc3186bac01b285e16c0e9c7ec2b83567c71726f1d0a2871c0edcc74ce7c9a629597890102d723b6e9bb5b56b5039676e1f6fb7a5cce8585d6e36b34ebe9fd1a071862db5f2f5ab0af0fb00b0b9949cc2297f889356f501dd8867797fe2e6cc27c25d4a006cc3df8b6acba10d519a78a906078a59aa00215b75e7115a23181d3301306092a864886f70d0109153106040401000000305d06092a864886f70d01091431501e4e00740070002d00360065003100640062003500380031002d0030003000650038002d0034003600360031002d0062003600300036002d006100630035003400330035003600620062006300610031305d06092b060104018237110131501e4e004d006900630072006f0073006f006600740020005300740072006f006e0067002000430072007900700074006f0067007200610070006800690063002000500072006f007600690064006500723082084706092a864886f70d010706a0820838308208340201003082082d06092a864886f70d010701301c060a2a864886f70d010c0103300e040858ea77994f5ed8b6020207d080820800481105137a56f7a656e6d03e4d02e742290dd537240841b67ea7eaf2123d31b96acbefbf66823f6f4e5807767da5d4969884a6f6912480d1c019fa16a2495462e3b828716a5c648c6232a8393474795624255a35b21eb7b0bbaea0aea81406fb9f34b07529a06e0441c9cf7842981baf25bd79726381b805a90176f2d7e4ef9f2d66c82d4f653268562f879a15e17b8df964e2af1462ca406a154ca32e0ab28fe4edc965f324748f5542018a8b992e2009b52e69559c62e506303a63a876964046faad19dc9099de83ae11d34b2c1bfa017954fbc70e3582cc7d7a8058b424dd26128f4f072bda323ffc6f50d1233c92970f446b82c1f15a49a33665aa1c50f8daac8e593e0a48577fb6dab803fc1b3ef94121f869e37e34306ae263d247a8d1b43d72411cf71403c795bc5c3cd0c6edd840bc45d90fc50e7e4fdad64753e35bb5b2e62fcaffdae10eaa89a1636bb252194d5bc7fd5f7c61b9719aad49996cf3eaaa3364bbb7d77af48090c6679d2da9c033fc034463f7343357e9687be3bcf1e6209a73eb56b8c1d127f678a88fe5c98bbe91683880f702e673edeb341039f729e44a3468612106a0db338c03c0d09c7180ade1b12e28b794d683e6448606b968fd9374548032d828abacaf90ca2b36e7e68d33d63bf28d15f3d34374ef2406e8931e31f02a2dfcbb7d03880549f63f6230d22064e8209263bc9e8df2110c944f25511df62bf7f0af1802aefb51c8624062579092a4fbd0e0326e71d0ff97c9956e3e2c7dceb28693e3fb603d85e1c2c8d4d7033f1529fa1fc7f50c90f5a4ab444a534ab22dc15ce1a9577290522c267b05d0072cac3aa0c1f8f5283efb3f11cd085a580ede9771bbbd23df5da0be2060faeed883e33d10c0c5f97589f3d219cb04da5a66d1af1215ee6562f5463d821b3826f149b74fe8b0dbe36b84564b2ed665f5c99aa1a91f0dd3356ef62e2eac946590250a9ec7ef1264638a139577692615aa56661a2776d92ed1e2f8eb6ca05cf54c1757cd371c1be71b449f95587c4992d883672348de78dea8e220f15049b90788385bcfbad3c8906848a842e780a5f32880396cbf93e3f79ef3aaa0ca40ce53414116eac87cfef728e26f7324b981def66b938c5f2d2690cdbf8a3e1ad4889fccdfe39a94aed2094c9e01dd2b2eed11556952aff3d04a1bd08edb5d6cb836d2fa42c2394449c21b81223c7b2764ca963977bc0614943fd91bc34f0f6b5a6693c9b3f6520f2eec5bd2e8418e0fe0b3821433f8841100b8716395cd9f1000ff379ed0092a436c1ca4f6fac5411703851e7d7e3fec1f7792bc95d13b283c45355e0449332b0a028c3ba5a0a8feb2f11599c241fd14a855692ca52d9c1171dac5037207eaa82090fffc90208d3704c2a982990e059df44d16f5fb190fe34da1ca9e9a0351d2ccce02e1e30c737cb787da0afaf771be7d308e2c6d5278fd1f629222b864341c3ca8b44307cec654925378c42f43eb4615e36a639e5aff7e428f8ce8d4559a0b612d4c5979f8d21aae258d156326539bfd20a53587d5abc76ea3a2b396db8bc2f6411b5e69743d109791b156f2e31a548231758963d15442a5aca358079f4e3c47fc8d6f2d286cdcde81923d004df12060552bbb3da75c20e5d9b0ab500375343c8df9c92bbbbd6ad522725f23b5748f161d5c40a80deb91ea1553acf3587525ed04763434ec3170178dab817a8de8305660bd83ee886354e4e29d1f1da22f0ee0feb738659bc4cd0df78f5a4cdb2df12bef0b5c9e274251c9b42380beb099ce66a900bc19e0db2b4d367e2e23cbda3ebd53ac1f1e605552f552e70cda6d2ded61ad9a349e421e0b3e94f7dac1e41c753400e7eec15fdb3d01b51680f92ca66b8d6ea21d1b5ff7ca1d8338d9bae0ae3fdd90b303aee11e415382e68124290f588fb39af842df02b74da628f4b3818dbb438298501ae72870131aa33d070dee5ef322b076031bcd6613fae0fd3feacd644bb75758443f685ffced35750b5e9ec713a176705bcbb39d39264c435a5fa9bffd2d81e92f017401f54b22c00a179bd3231ae7cb3a384f8cff8f151f4bef6bb9dfea4b03150b5b55f381e5c53f550400bb24f4aba63dcb289f3b9091caeca41508b0222adc2bb2019f6f14766ee9702a8f4fa5d6bcdedac399643139f9d4e7fc384dddae2d66b831b80ed56793d1805a3e6b01d79b2007f9fbf241de754229f8f28ca863e81c53cfc1206dea49bae1b74bfeb7f8e326633c28029399a471f0f504633257f44395d1fc68603a2d948da973bb940a75e48e335cbf4999910fe3c1fc1bc0387c05eb4b0a9c6f4ef856d3b35398fedb6423c5577b2b6fe5bd82442d6376a28558893b3e656c574b8c171d3e7b6a94349d23e649074d3d435c5becb2f14f48cbb0da98511ffeb58332bd34a9cc92febd018c166a1fc9d7f5e2fc4302e1335037d1844f1e2f5b43ec6d871454e6aee162d4f4c904a02b70bfdbbcfd118e9b74690b06146e3bbb442c2898f81deccfef140e9f44cfd5daebc6cb95d7d1d4f5b75597d852c5a353e028905337726533e830adf60bb651903bde7ed7709c70d4de012108b9dca232b2e3401387b5d199e38faa9ee75fa2611a79710a455839503c4adf3dbab770c96d5c39c981ea4157ef6beac8aae5bd464d9a3c58fc8b1fc9b7595e3846591f3a0d4ef863c6bb788f3f7e94fa4c0fc61a394a8d4b123de74aad684b574f619d591bdf0da073d46da09c291ac6fd7bdae8f135bd36cc0e1e121d68bb80a48b9df79dfa3cf80e6c47012de49258ef082d4e455012a01e4f58a7f0af0243da93fe7ec17b4106052830d8658ae3ed1614855605ec544a92345feae466bdeba60a0cbdfb248eceeb151072e3ac6c4980d65402303b301f300706052b0e03021a041475742e3996002a1ce94c3fbb959419a498254d920414c2efbaa119035255eff749ae37fee75c1674fd16020207d0',
                'senhaCertificadoDigital' => '12345678',
                'modeloCertificadoDigital' => 'A1',
                'versaoNfe' => '4.0',
                'aliquotaIss' => '',
                'ibptAutomatico' => 'nao',
                'codigoRegimeTributarioIssqn' => '7',
                'razaoSocial' => 'GERSON GENIR SCHUSTER',
                'nomeFantasia' => 'FAZENDA ARARA AZUL',
                'logradouro' => 'GLEBA ITAUBA',
                'numero' => 's/n',
                'complemento' => 'FAZENDA ARARA AZUL',
                'bairro' => 'ZONA RURAL',
                'cep' => '78510000',
                'codigoRegimeTributario' => '3',
                'informacaoAdicionalFisco' => '',
                'informacaoComplementar' => '',
                'cpfContador' => '',
                'cnpjContador' => '',
                'logomarca' => '', //enviar em formato hexadecimal
            ),
            'cliente' =>
            array(
                'id' => '',
                'cnpj' => '',
                'cpf' => '',
                'inscricaoEstadual' => '',
                'consumidorFinal' => '',
                'indicadorIEDestinatario' => '',
                'inscricaoMunicipal' => '',
                'inscricaoSuframa' => '',
                'telefone' => '',
                'email' => '',
                'logradouro' => '',
                'numero' => '',
                'complemento' => '',
                'bairro' => '',
                'codigoMunicipio' => '',
                'municipio' => '',
                'codigoPais' => '',
                'nomePais' => '',
                'uf' => '',
                'razaoSocial' => '',
                'nomeFantasia' => '',
                'cep' => '',
                'codigoRegimeTributario' => '',
            ),
            'carregamento' =>
            array(
                'codigoMunicipio' => '510455',
                'municipio' => 'ITAUBA - MT',
                'uf' => 'MT',
            ),
            'descarga' =>
            array(
                'codigoMunicipio' => '510619',
                'municipio' => 'NOVA SANTA HELENA - MT',
                'uf' => 'MT',
            ),
            'numeroApolice' => '',
            'responsavelSeguro' => '0',
            'tipoEmitenteMdfe' => '2',
            'cfopPrincipal' => '',
            'nomeProdutoPredominante' => '',
            'tomador' => '',
            'numero' => '',
            'codigoNumerico' => '92261144',
            'dataSaida' => '',
            'dataEntrega' => '',
            'dataEmissao' => '2021-01-18 18:16:52',
            'modelo' => '58',
            'chave' => '',
            'protocolo' => '',
            'ambiente' => '1',
            'tipo' => '',
            'tipoServico' => '',
            'frete' => '',
            'finalidade' => '',
            'informacaoAdicionalFisco' => '',
            'informacaoComplementar' => '',
            'notaFiscalReferencia' => '',
            'naturezaOperacao' => '',
            'numeroVenda' => '',
            'usarValorTotalInformado' => '',
            'chaveCarga' => '',
            'valorCarga' => '',
            'quantidadeCarga' => '',
            'unidadeMedida' => '',
            'valorTotal' => '1.00',
            'itens' =>
            array(
                0 =>
                array(
                    'id' => '124746811611004404',
                    'bancoDados' => '909300371591473755',
                    'empresa' => '99111481609155148',
                    'mdfe' => '365065281611004404',
                    'ordem' => '1',
                    'numero' => '160',
                    'modelo' => '55',
                    'ufDescargaItem' => '510619',
                    'valor' => '1.00',
                    'peso' => '1000.0000',
                    'numeroAverbacao' => '',
                    'chave' => '51210100042543460187559200000001601706702637',
                ),
            ),
            'fatura' =>
            array(),
            'codigoTabelaIbpt' => 'ca7gi3',
            'idVenda' => '',
            'numeroNotaEmitir' => '1',
            'percursos' =>
            array(
                0 =>
                array(
                    'id' => '669591051611004612',
                    'estado' => 'MT',
                ),
            ),
        )
    )
);

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
echo $resposta;
echo "</pre>";

echo "<pre>";
print_r(json_decode($resposta, false));
echo "</pre>";

$array = json_decode($resposta, true);
$xml = hex2bin($array["xml"]);

$dom = new DOMDocument();
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml);
$out = $dom->saveXML();
pre(htmlentities($out));

//mostra pdf na tela
?><object data="data:application/pdf;base64,<?php echo base64_encode(hex2bin($array["pdf"])); ?>" type="application/pdf" width="100%" height="800px"></object>