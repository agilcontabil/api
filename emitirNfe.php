<?php
$urlIntegracao    = 'http://api.agilcontabil.net/nfe/emitirNfe';

$dados['usuario'] = 'teste';
$dados['senha']   = 'teste';

$dados['certificadoDigital'] = bin2hex(file_get_contents("1234.pfx"));
$dados['senhaCertificadoDigital'] = '12345';

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
            'municipio' => 'ARAGUAINA',
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
            'modeloCertificadoDigital' => 'A3',
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
            'numeroNotaAtual' => '47',
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
            'municipio' => 'ARAGUAINA',
            'codigoPais' => '1058',
            'nomePais' => 'Brasil',
            'uf' => 'TO',
            'aliquotaInternaIcms' => '',
            'razaoSocial' => 'Bill Barsch',
            'nomeFantasia' => '',
            'cep' => '77818120',
            'codigoRegimeTributario' => '0',
            'entrega' => [
                "cnpj" => "",
                "cpf" => "00863364101",
                "inscricaoEstadual" => "",
                "nome" => "Bill Barsch",
                "logradouro" => "Rua Perimetral-002",
                "numero" => "87",
                "complemento" => "",
                "bairro" => "Loteamento Manoel Gomes da Cunha",
                "codigoMunicipio" => "170210",
                "municipio" => "ARAGUAINA",
                "uf" => "TO",
                "cep" => "77818120",
                "codigoPais" => "1058",
                "nomePais" => "Brasil",
                "telefone" => "63992158117",
                "email" => "billbarschgmail.com"
            ]
        ),
        'autorizadosXml' => [
            0 => ["cnpj" => '26888917000168'],
            1 => ["cpf" => "00863364101"]
        ],
        'indicadorIntermediador' => '0',
        'numero' => '',
        'codigoNumerico' => '49028638',
        'dataSaida' => '2020-05-13 17:23:56',
        'dataEmissao' => '2020-05-13 17:23:56',
        'fusoHorario' => '-03:00',
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
                'unidadeMedidaProduto' => 'UN',
                'origemProduto' => '0',
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
                'icmsCst' => '102',
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
                'issIndicadorIncentivo' => ''
            ),
        ),
        'fatura' =>
        array(
            'numero' => '1',
            'valor' => '213.50',
            'desconto' => '0',
            'valorLiquido' => '213.50',
            'duplicatas' =>
            array(
                0 =>
                array(
                    'numero' => '1-1',
                    'dataVencimento' => '2020-07-31',
                    'valor' => '20.00',
                    'codigoPagamento' => '01',
                ),
                1 =>
                array(
                    'numero' => '1-2',
                    'dataVencimento' => '2020-09-25',
                    'valor' => '193.50',
                    'codigoPagamento' => '01',
                ),
            ),
        ),
        'pagamento' => array(
            'troco' => 0.00,
            'detalhamento' => array(
                0 => array(
                    'tipo' => '03', //01=Dinheiro | 02=Cheque | 03=Cartão de Crédito | 04=Cartão de Débito | 05=Crédito Loja | 10=Vale Alimentação | 11=Vale Refeição | 12=Vale Presente | 13=Vale Combustível | 14=Duplicata Mercantil | 15=Boleto Bancário | 90=Sem Pagamento | 99=Outros
                    'valor' => 10.00,
                    'cnpjCredenciadora ' => '05577343000137',
                    'tipoBandeira' => '02', //01=Visa | 02=Mastercard | 03=American Express | 04=Sorocred | 05=Diners Club | 06=Elo | 07=Hipercard | 08=Aura | 09=Cabal | 99=Outros
                    'autorizacao' => '20010afsct',
                    'tipoIntegracao' => '2', //1 - integrado (TEF) | 2 - não integrado (POS)
                    'indicadorPagamento' => '0', // 0=Pagamento à Vista | 1=Pagamento à Prazo
                ),
                1 => array(
                    'tipo' => '03', //01=Dinheiro | 02=Cheque | 03=Cartão de Crédito | 04=Cartão de Débito | 05=Crédito Loja | 10=Vale Alimentação | 11=Vale Refeição | 12=Vale Presente | 13=Vale Combustível | 14=Duplicata Mercantil | 15=Boleto Bancário | 90=Sem Pagamento | 99=Outros
                    'valor' => 10.00,
                    'cnpjCredenciadora ' => '31551765000143',
                    'tipoBandeira' => '01', //01=Visa | 02=Mastercard | 03=American Express | 04=Sorocred | 05=Diners Club | 06=Elo | 07=Hipercard | 08=Aura | 09=Cabal | 99=Outros
                    'autorizacao' => 'akkakaj87272727',
                    'tipoIntegracao' => '2', //1 - integrado (TEF) | 2 - não integrado (POS)
                    'indicadorPagamento' => '0', // 0=Pagamento à Vista | 1=Pagamento à Prazo
                )
            )
        ),
        'codigoTabelaIbpt' => 'ca7gi3',
        'logomarcaEmitente' => 'logomaraGrande.jpg',
        'idVenda' => '0',
        'numeroNotaEmitir' => '48',
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