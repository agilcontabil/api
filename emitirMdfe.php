<?php

/**
 * EXEMPLO DE EMISSÃO DE MDF-e VIA API
 * 
 * NOVOS CAMPOS OBRIGATÓRIOS (Conforme exigências SEFAZ):
 * 
 * 1. ncmProdutoPredominante - NCM do produto predominante da carga lotação
 * 2. dadosPagamento - Informações de pagamento obrigatórias para carga lotação
 *    - xNome: Nome do responsável pelo pagamento
 *    - CNPJ/CPF: Documento do responsável
 *    - Comp: Componentes do pagamento (tpComp: 04 = Frete)
 *    - vContrato: Valor total do contrato
 *    - indPag: Indicador de pagamento (0=À vista, 1=À prazo)
 *    - infPrazo: Informações de prazo (se indPag = 1)
 *    - infBanc: Informações bancárias (se aplicável)
 * 
 * OBSERVAÇÕES:
 * - Para tipoEmitenteMdfe = "2" (Transportador de Carga Própria): usar dados da empresa
 * - Para outros tipos: usar dados do cliente/destinatário
 * - Campos de pagamento são obrigatórios para evitar erro 302 da SEFAZ
 */

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
                'rntrc' => '',
                'cnae' => '',
                'tipoAtividade' => '4',
                'mdfeSerie' => '1',
                'serie' => '920',
                'idCodigoSegurancaContribuinte' => '',
                'codigoSegurancaContribuinte' => '',
                'certificadoDigital' => '30820eaa02010330820e6606092a864886f70d010701a0820e57...',
                'senhaCertificadoDigital' => '12345678',
                'modeloCertificadoDigital' => 'A1',
                'versaoNfe' => '4.0',
                'aliquotaIss' => '',
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
                'cnpj' => '',
                'cpf' => '',
                'inscricaoEstadual' => '',
                'consumidorFinal' => '',
                'indicadorIEdestinatario' => '',
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
            'ncmProdutoPredominante' => '01010101',
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
            'valorCarga' => '',
            'quantidadeCarga' => '',
            'unidadeMedida' => '',
            'valorTotal' => '1.00',
            'itens' =>
            array(
                0 =>
                array(
                    'numero' => '160',
                    'modelo' => '55',
                    'ufDescargaItem' => '510619',
                    'valor' => '1.00',
                    'peso' => '1000.0000',
                    'numeroAverbacao' => '',
                    'chave' => '51210100042543460187559200000001601706702637',
                ),
            ),
            'numeroNotaEmitir' => '1',
            'percursos' =>
            array(
                0 =>
                array(
                    'id' => '669591051611004612',
                    'estado' => 'MT',
                ),
            ),
            'dadosPagamento' =>
            array(
                'xNome' => 'GERSON GENIR SCHUSTER', // Nome do responsável pelo pagamento
                'CNPJ' => '', // CNPJ do responsável (se aplicável)
                'CPF' => '42543460187', // CPF do responsável (se aplicável)
                'Comp' =>
                array(
                    0 =>
                    array(
                        'tpComp' => '04', // 04 - Frete
                        'vComp' => '1.00', // Valor do componente
                    ),
                ),
                'vContrato' => '1.00', // Valor total do contrato
                'indPag' => '0', // 0 - À vista, 1 - À prazo
                'vAdiant' => '0.00', // Valor do adiantamento (se aplicável)
                'infPrazo' =>
                array(
                    0 =>
                    array(
                        'nParcela' => '1', // Número da parcela
                        'dVenc' => '2021-01-18', // Data de vencimento
                        'vParcela' => '1.00', // Valor da parcela
                    ),
                ),
                'infBanc' =>
                array(
                    'CNPJIPEF' => '42543460187', // CNPJ da instituição financeira (se aplicável)
                    'codAgencia' => '', // Código da agência
                    'codContaCorrente' => '', // Código da conta corrente
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

echo "<pre>";
echo $xml;
echo "</pre>";

//mostra pdf na tela
?><object data="data:application/pdf;base64,<?php echo base64_encode(hex2bin($array["pdf"])); ?>" type="application/pdf" width="100%" height="800px"></object>

<?php
/**
 * EXEMPLO ALTERNATIVO PARA PRESTADOR DE SERVIÇOS (tipoEmitenteMdfe != "2")
 * 
 * Neste caso, os dados de pagamento devem referenciar o cliente/destinatário:
 */

/*
'dadosPagamento' =>
array(
    'xNome' => 'CLIENTE DESTINATÁRIO LTDA', // Nome do cliente
    'CNPJ' => '12345678000199', // CNPJ do cliente
    'CPF' => '', // CPF do cliente (se aplicável)
    'Comp' => 
    array(
        0 =>
        array(
            'tpComp' => '04', // 04 - Frete
            'vComp' => '1500.00', // Valor do frete
        ),
    ),
    'vContrato' => '1500.00', // Valor total do contrato
    'indPag' => '1', // 1 - À prazo
    'vAdiant' => '500.00', // Adiantamento de R$ 500,00
    'infPrazo' => 
    array(
        0 =>
        array(
            'nParcela' => '1', // Primeira parcela
            'dVenc' => '2021-02-18', // Vencimento em 30 dias
            'vParcela' => '1000.00', // Valor da parcela
        ),
    ),
    'infBanc' =>
    array(
        'CNPJIPEF' => '12345678000199', // CNPJ do cliente como instituição financeira
        'codAgencia' => '1234', // Código da agência
        'codContaCorrente' => '56789-0', // Código da conta corrente
    ),
),
*/
?>