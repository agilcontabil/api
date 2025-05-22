<?php
$urlIntegracao    = 'https://api.agilcontabil.net/cte/emitirCte';

$dados['usuario'] = 'teste';
$dados['senha']   = 'teste';

$dados['certificadoDigital'] = bin2hex(file_get_contents("1234.pfx"));
$dados['senhaCertificadoDigital'] = '12345';

$dados["cte"] = bin2hex(
    json_encode(
        array(
            'empresa' =>
            array(
                'cnpj' => '12345678000190',
                'cpf' => '',
                'inscricaoEstadual' => '0035523040053',
                'inscricaoMunicipal' => '111312',
                'inscricaoSuframa' => '',
                'telefone' => '3491657777',
                'email' => 'contato@empresaexemplo.com.br',
                'municipio' => 'UBERABA - MG',
                'codigoMunicipio' => '317010',
                'uf' => 'MG',
                'rntrc' => '53960444',
                'cnae' => '',
                'tipoAtividade' => '3',
                'cteSerie' => '1',
                'serie' => '1',
                'ibptAutomatico' => 'sim',
                'idCodigoSegurancaContribuinte' => '',
                'codigoSegurancaContribuinte' => '',
                'certificadoDigital' => '30820ea802010330820e6406092a8648...',
                'modeloCertificadoDigital' => 'A1',
                'senhaCertificadoDigital' => 'ARSOLUTI',
                'versaoNfe' => '4.0',
                'aliquotaIss' => '',
                'aliquotaFunrural' => '',
                'codigoRegimeTributarioIssqn' => '7',
                'aliquotaInternaIcms' => '',
                'aliquotaInterestadualIcms' => '',
                'razaoSocial' => 'EXEMPLO MONTAGEM & MANUTENCAO INDUSTRIAL LTDA',
                'nomeFantasia' => 'EXEMPLO MONTAGEM & MANUTENCAO',
                'logradouro' => 'Rua Artur Machado',
                'numero' => '40',
                'complemento' => 'ate 998/999',
                'bairro' => 'Centro',
                'cep' => '38010020',
                'codigoRegimeTributario' => '1',
                'informacaoAdicionalFisco' => '',
                'informacaoComplementar' => '',
                'cpfContador' => '',
                'cnpjContador' => '',
                'logomarca' => '',
            ),
            'cliente' =>
            array(
                'cnpj' => '98765432000198',
                'cpf' => '',
                'inscricaoEstadual' => '083675558',
                'consumidorFinal' => '',
                'indicadorIE' => '1',
                'inscricaoMunicipal' => '',
                'inscricaoSuframa' => '',
                'telefone' => '2799932364',
                'email' => 'comercial@clienteexemplo.com',
                'logradouro' => 'Rua Alecrim',
                'numero' => '312',
                'complemento' => 'GALPAO.',
                'bairro' => 'Jardim Asteca',
                'codigoMunicipio' => '320520',
                'municipio' => 'VILA VELHA - ES',
                'codigoPais' => '1058',
                'nomePais' => 'Brasil',
                'uf' => 'ES',
                'aliquotaInternaIcms' => '',
                'razaoSocial' => 'CLIENTE EXEMPLO COMERCIO & SERVICOS LTDA',
                'nomeFantasia' => 'CLIENTE EXEMPLO',
                'cep' => '29104455',
                'codigoRegimeTributario' => '0',
            ),
            'remetente' =>
            array(
                'cnpj' => '45678912000134',
                'cpf' => '',
                'inscricaoEstadual' => '0010812110951',
                'consumidorFinal' => '',
                'indicadorIE' => '1',
                'inscricaoMunicipal' => '',
                'inscricaoSuframa' => '',
                'telefone' => '3433261900',
                'email' => 'fiscal@remetenteexemplo.com.br',
                'logradouro' => 'Area Rural',
                'numero' => 's/n',
                'complemento' => 'KM 151 FAZ. EXEMPLO',
                'bairro' => 'Area Rural de Uberaba',
                'codigoMunicipio' => '317010',
                'municipio' => 'UBERABA - MG',
                'codigoPais' => '1058',
                'nomePais' => 'Brasil',
                'uf' => 'MG',
                'aliquotaInternaIcms' => '',
                'razaoSocial' => 'REMETENTE AGROINDUSTRIA LTDA',
                'nomeFantasia' => '',
                'cep' => '38099899',
                'codigoRegimeTributario' => '0',
            ),
            'destinatario' =>
            array(
                'cnpj' => '45678912000134',
                'cpf' => '',
                'inscricaoEstadual' => '0010812110951',
                'consumidorFinal' => '',
                'indicadorIE' => '1',
                'inscricaoMunicipal' => '',
                'inscricaoSuframa' => '',
                'telefone' => '3433191300',
                'email' => 'contabilidade@remetenteexemplo.com.br',
                'logradouro' => 'Area Rural',
                'numero' => 'S/N',
                'complemento' => 'ACESSO PELA BR-050 KM 151 SEGUINDO A DIREITA 6.5 KM SENTIDO',
                'bairro' => 'Area Rural de Uberaba',
                'codigoMunicipio' => '317010',
                'municipio' => 'UBERABA - MG',
                'codigoPais' => '1058',
                'nomePais' => 'Brasil',
                'uf' => 'MG',
                'aliquotaInternaIcms' => '',
                'razaoSocial' => 'REMETENTE AGROINDUSTRIA LTDA',
                'nomeFantasia' => '',
                'cep' => '38099899',
                'codigoRegimeTributario' => '0',
            ),
            'expedidor' =>
            array(
                'cnpj' => '98765432000198',
                'cpf' => '',
                'inscricaoEstadual' => '083675558',
                'consumidorFinal' => '',
                'indicadorIE' => '1',
                'inscricaoMunicipal' => '',
                'inscricaoSuframa' => '',
                'telefone' => '2799932364',
                'email' => 'comercial@clienteexemplo.com',
                'logradouro' => 'Rua Alecrim',
                'numero' => '312',
                'complemento' => 'GALPAO.',
                'bairro' => 'Jardim Asteca',
                'codigoMunicipio' => '320520',
                'municipio' => 'VILA VELHA - ES',
                'codigoPais' => '1058',
                'nomePais' => 'Brasil',
                'uf' => 'ES',
                'aliquotaInternaIcms' => '',
                'razaoSocial' => 'CLIENTE EXEMPLO COMERCIO & SERVICOS LTDA',
                'nomeFantasia' => 'CLIENTE EXEMPLO',
                'cep' => '29104455',
                'codigoRegimeTributario' => '0',
            ),
            'recebedor' =>
            array(
                'cnpj' => '98765432000198',
                'cpf' => '',
                'inscricaoEstadual' => '083675558',
                'consumidorFinal' => '',
                'indicadorIE' => '1',
                'inscricaoMunicipal' => '',
                'inscricaoSuframa' => '',
                'telefone' => '2799932364',
                'email' => 'comercial@clienteexemplo.com',
                'logradouro' => 'Rua Alecrim',
                'numero' => '312',
                'complemento' => 'GALPAO.',
                'bairro' => 'Jardim Asteca',
                'codigoMunicipio' => '320520',
                'municipio' => 'VILA VELHA - ES',
                'codigoPais' => '1058',
                'nomePais' => 'Brasil',
                'uf' => 'ES',
                'aliquotaInternaIcms' => '',
                'razaoSocial' => 'CLIENTE EXEMPLO COMERCIO & SERVICOS LTDA',
                'nomeFantasia' => 'CLIENTE EXEMPLO',
                'cep' => '29104455',
                'codigoRegimeTributario' => '0',
            ),
            'codigoMunicipioFim' => '317020',
            'municipioFim' => 'UBERLANDIA - MG',
            'cfopPrincipal' => '5353',
            'nomeProdutoPredominante' => 'AGUA MINERAL COM GAS PO',
            'tomador' => '0',
            'numero' => '',
            'codigoNumerico' => '65703069',
            'dataSaida' => '2025-05-08 06:20:22',
            'dataEntrega' => '2025-05-08 00:00:00',
            'dataEmissao' => '2025-05-08 06:20:22',
            'modelo' => '57',
            'ambiente' => '1',
            'tipo' => '1',
            'tipoServico' => '0',
            'frete' => '',
            'finalidade' => '0',
            'informacaoAdicionalFisco' => '',
            'informacaoComplementar' => 'R$ 2.600,00 FRETE + R$ 400,00 AJUDANTE FRETE- 22/04 UBERLANDIA - R$ 3.000,00 FRETE - 23/04 UBERLANDIA R$ 3.000,00',
            'notaFiscalReferencia' => '',
            'naturezaOperacao' => '5353 - Prestacao de servico de transporte a estabelecimento comercial',
            'valorCarga' => '2400.00',
            'quantidadeCarga' => '2400.0000',
            'unidadeMedida' => '3', //00-M3; 01-KG; 02-TON; 03-UNIDADE; 04-LITROS; 05-MMBTU
            'valorTotal' => '800.00',
            'itensFrete' =>
            array(
                0 =>
                array(
                    'descricao' => 'composicao 1',
                    'valorUnitario' => '200.00000000',
                ),
                1 =>
                array(
                    'descricao' => 'composicao 2',
                    'valorUnitario' => '600.00000000',
                ),
            ),
            'documentos' =>
            array(
                0 =>
                array(
                    'numero' => '',
                    'modelo' => '',
                    'ufDescargaItem' => '',
                    'valor' => '',
                    'peso' => '',
                    'numeroAverbacao' => '',
                    'chave' => '31250410208566001139550010000175421189805510',
                ),
            ),
            'numeroNotaEmitir' => '128',
            'impostos' =>
            array(
                'situacaoTributaria' => '102',
                'reducaoBaseCalculoIcms' => '0.0000',
                'aliquotaICMS' => '',
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

echo "<pre>";
print_r(htmlentities($out));
echo "</pre>";

//mostra pdf na tela
?><object data="data:application/pdf;base64,<?php echo base64_encode(hex2bin($array["pdf"])); ?>" type="application/pdf" width="100%" height="800px"></object>