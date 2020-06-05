<?php
$urlIntegracao    = 'http://api.agilcontabil.net/nfe/emitirNfe';

$dados['usuario'] = 'teste';
$dados['senha']   = 'teste';

$dados['certificadoDigital'] = bin2hex(file_get_contents("C:\Users\billb\Downloads\hellen.pfx"));
$dados['senhaCertificadoDigital'] = '23101981';

$dados["nfe"] = bin2hex(json_encode(
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
        'veiculo' =>
        array(
            'placa' => '',
            'uf' => '',
            'rntc' => '',
        ),
        'volumes' =>
        array(
            0 =>
            array(
                'quantidade' => '0',
                'descricao' => '',
                'pesoLiquido' => '0.0000',
                'pesoBruto' => '0.0000',
            ),
        ),
        'exportacao' =>
        array(
            'ufEmbarque' => '',
            'localEmbarque' => '',
        ),
        'empresa' =>
        array(
            'id' => '39678831569137928',
            'cnpj' => '26888917000168',
            'cpf' => '',
            'inscricaoEstadual' => '290396719',
            'inscricaoMunicipal' => '',
            'inscricaoSuframa' => '',
            'telefone' => '6324144544',
            'email' => 'financeiro@hellen.net.br',
            'municipio' => 'ARAGUAINA - TO',
            'codigoMunicipio' => '170210',
            'uf' => 'TO',
            'nfseUsuario' => '',
            'nfseSenha' => '',
            'nfseFraseSecreta' => '',
            'nfseNumero' => '0',
            'nfseSerie' => '',
            'nfseLote' => '',
            'cnae' => '',
            'tipoAtividade' => '3',
            'serie' => '2',
            'tokenIbpt' => '',
            'idCodigoSegurancaContribuinte' => '',
            'codigoSegurancaContribuinte' => '',
            'arquivoCertificadoDigital' => '39678831569137928.pfx',
            'senhaCertificadoDigital' => '23101981',
            'modeloCertificadoDigital' => 'A1',
            'versaoNfe' => '4.0',
            'contingencia' => 'nao',
            'aliquotaIss' => '',
            'ibptAutomatico' => 'sim',
            'codigoRegimeTributarioIssqn' => '7',
            'aliquotaInternaIcms' => '',
            'aliquotaInterestadualIcms' => '',
            'razaoSocial' => 'HELLEN CONFECCOES LTDA',
            'nomeFantasia' => 'HELLEN CONFECCOES',
            'logradouro' => 'Rua Tiburcio Dantas',
            'numero' => '87',
            'complemento' => '',
            'bairro' => 'Conjunto Urbanistico',
            'cep' => '77818773',
            'codigoRegimeTributario' => '1',
            'informacaoAdicionalFisco' => '',
            'informacaoComplementar' => '',
            'cpfContador' => '',
            'cnpjContador' => '',
            'logomarca' => '',
            'numeroNotaAtual' => '53',
        ),
        'cliente' =>
        array(
            'id' => '529604351509829594',
            'cnpj' => '',
            'cpf' => '00863364101',
            'inscricaoEstadual' => '',
            'consumidorFinal' => '1',
            'indicadorIEDestinatario' => '9',
            'inscricaoMunicipal' => '',
            'inscricaoSuframa' => '',
            'telefone' => '63992158117',
            'email' => 'billbarschgmail.com',
            'logradouro' => 'Rua Perimetral-002',
            'numero' => '87',
            'complemento' => '',
            'bairro' => 'Loteamento Manoel Gomes da Cunha',
            'codigoMunicipio' => '170210',
            'municipio' => 'ARAGUAINA - TO',
            'codigoPais' => '1058',
            'nomePais' => 'Brasil',
            'uf' => 'TO',
            'aliquotaInternaIcms' => '',
            'razaoSocial' => 'Bill Barsch',
            'nomeFantasia' => '',
            'cep' => '77818120',
            'codigoRegimeTributario' => '0',
        ),
        'numero' => '',
        'codigoNumerico' => '68158474',
        'dataSaida' => '2020-06-05 01:38:17',
        'dataEmissao' => '2020-06-05 01:38:17',
        'modelo' => '55',
        'chave' => '',
        'protocolo' => '',
        'ambiente' => '2',
        'tipo' => '1',
        'frete' => '9',
        'finalidade' => '1',
        'informacaoAdicionalFisco' => '',
        'informacaoComplementar' => 'teste de informacoes complementares (cadastro da empresa...)',
        'notaFiscalReferencia' => '',
        'idNaturezaOperacao' => '1',
        'naturezaOperacao' => 'Venda de Produtos ou Servicos',
        'numeroVenda' => '',
        'tipoPagamento' => '99',
        'usarValorTotalInformado' => '',
        'valorTotal' => '20.00',
        'itens' =>
        array(
            0 =>
            array(
                'desconto' => '0.00000000',
                'frete' => '0.00000000',
                'outro' => '0.00000000',
                'quantidade' => '1.00000000',
                'valorUnitario' => '20.00000000',
                'valorTotal' => '20.00',
                'informacaoAdicional' => '',
                'ncmProduto' => '07099911',
                'cest' => '',
                'itemListaServico' => '',
                'codigoServico' => '',
                'tipoItem' => '00',
                'eanProduto' => '2005965311527',
                'codigoProduto' => '1',
                'idProduto' => '464007451587949468',
                'nomeProduto' => 'Produto',
                'cfop' => '5102',
                'codigoAnp' => '',
                'nomeAnp' => '',
                'ufAnp' => '',
                'unidadeMedidaProduto' => 'UNID',
                'origemProduto' => '0',
                'impostoIbpt' =>
                array(
                    'id' => '302006',
                    'uf' => 'TO',
                    'ncmEx' => '07099911',
                    'nacionalFederal' => '4.20',
                    'importadosFederal' => '6.20',
                    'estadual' => '0.00',
                    'municipal' => '0.00',
                    'sincronizar' => '',
                    'lastUpdate' => '1461182172',
                ),
                'diNumero' => '',
                'diData' => '',
                'diLocalDesembarque' => '',
                'diUfDesembarque' => '',
                'diTipoVia' => '1',
                'diDataDesembaraco' => '',
                'diAfrmm' => '0.00000000',
                'diTipoIntermedio' => '1',
                'diExportador' => '0',
                'nomeExportador' => '',
                'icmsCst' => '',
                'icmsModBc' => '0',
                'icmsBc' => '0.00000000',
                'icmsRedBc' => '0.00000000',
                'icmsAliquota' => '0.00000000',
                'icmsValor' => '0.00000000',
                'icmsModBcSt' => '',
                'icmsMva' => '0.00000000',
                'icmsRedBcSt' => '0.00000000',
                'icmsBcSt' => '0.00000000',
                'icmsCredito' => '0.00000000',
                'icmsStAliquota' => '0.00000000',
                'icmsStValor' => '0.00000000',
                'ipiCst' => '',
                'ipiBc' => '0.00000000',
                'ipiAliquota' => '0.00000000',
                'ipiValor' => '0.00000000',
                'iiBc' => '0.00000000',
                'iiDespAdu' => '0.00000000',
                'iiValor' => '0.00000000',
                'iiIof' => '0.00000000',
                'pisCst' => '',
                'pisAliquota' => '0.00000000',
                'pisBc' => '0.00000000',
                'pisValor' => '0.00000000',
                'cofinsCst' => '',
                'cofinsBc' => '0.00000000',
                'cofinsValor' => '0.00000000',
                'cofinsAliquota' => '0.00000000',
                'iss' => '',
                'issAliquota' => '',
                'issItemListaServico' => '',
                'issRetido' => '',
                'issIndicador' => '',
                'issCodigoServico' => '',
                'issIndicadorIncentivo' => '',
                'impostos' =>
                array(
                    'id' => '847154691482051017',
                    'bancoDados' => '20',
                    'nome' => 'simples nacional consumidor final',
                    'modelo' => '55',
                    'tipoOperacao' => 'saida',
                    'empresa' => '',
                    'participante' => '',
                    'uf' => '',
                    'ncm' => '',
                    'produto' => '',
                    'cfop' => '',
                    'consumidorFinal' => 'sim',
                    'origemProduto' => '',
                    'itemListaServico' => '',
                    'codigoRegimeTributarioDestinatario' => '',
                    'tipoItem' => '',
                    'cest' => '',
                    'situacaoTributaria' => '102',
                    'reducaoBaseCalculoIcms' => '0.0000',
                    'reducaoBaseCalculoIcmsSt' => '0.0000',
                    'modalidadeBaseCalculoIcms' => '3',
                    'zerarBaseCalculoIcms' => 'nao',
                    'aliquotaOutrasRetencoes' => '0.0000',
                    'aliquotaICMS' => '0.0000',
                    'aliquotaCreditoICMS' => '0.0000',
                    'modalidadeSt' => '',
                    'margemValorAgregado' => '0.0000',
                    'aliquotaFundoCombatePobreza' => '2.0000',
                    'cstPisCofinsEntrada' => '99',
                    'aliquotaPisEntrada' => '0.0000',
                    'aliquotaCofinsEntrada' => '0.0000',
                    'cstPisCofinsSaida' => '49',
                    'aliquotaPisSaida' => '0.0000',
                    'aliquotaCofinsSaida' => '0.0000',
                    'cstIpiEntrada' => '',
                    'aliquotaIpiEntrada' => '0.0000',
                    'cstIpiSaida' => '99',
                    'aliquotaIpiSaida' => '0.0000',
                    'ipiBcIcms' => 'nao',
                    'aliquotaIbptFederal' => '',
                    'aliquotaIbptFederalImportado' => '',
                    'aliquotaIbptEstadual' => '',
                    'aliquotaIbptMunicipal' => '',
                    'aliquotaIi' => '0.0000',
                    'aliquotaIss' => '0.0000',
                    'issRetido' => 'nao',
                    'indicadorIss' => '0',
                    'indicadorIncentivo' => '1',
                    'federaisRetido' => 'nao',
                    'aliquotaIrrf' => '0.0000',
                    'aliquotaCsll' => '0.0000',
                    'aliquotaInss' => '0.0000',
                    'observacao' => 'regra que se aplica todos os produtos na hora da venda (simples nacional)',
                    'informacaoComplementar' => '',
                    'codigoAnp' => '',
                    'ufAnp' => '',
                    'status' => 'ativo',
                    'sincronizar' => '',
                    'lastUpdate' => '1588068717',
                ),
            ),
        ),
        'fatura' =>
        array(),
        'codigoTabelaIbpt' => 'ca7gi3',
        'pastaXml' => 'arquivosClientes/20/39678831569137928',
        'logomarcaEmitente' => 'logomaraGrande.jpg',
        'idVenda' => '0',
        'numeroNotaEmitir' => '53',
    )
));

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