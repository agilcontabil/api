<?php
$urlIntegracao    = 'https://api.agilcontabil.net/nfe/emitirDanfe';

$dados['usuario'] = 'teste';
$dados['senha']   = 'teste';
//$dados['xml']     = hex2bin(file_get_contents('/var/www/maisagil/modulos/api/testeXml.xml')); //o xml deve ser enviado em formato base64
$dados['xml']     = hex2bin('<?xml version="1.0" encoding="UTF-8"?><nfeProc versao="4.00" xmlns="http://www.portalfiscal.inf.br/nfe"><NFe xmlns="http://www.portalfiscal.inf.br/nfe"><infNFe Id="NFe17210926888917000168550020000000901147830990" versao="4.00"><ide><cUF>17</cUF><cNF>14783099</cNF><natOp>Venda de Produtos ou Servicos</natOp><mod>55</mod><serie>2</serie><nNF>90</nNF><dhEmi>2021-09-28T14:35:15-03:00</dhEmi><dhSaiEnt>2021-09-28T14:35:15-03:00</dhSaiEnt><tpNF>1</tpNF><idDest>1</idDest><cMunFG>1702109</cMunFG><tpImp>1</tpImp><tpEmis>1</tpEmis><cDV>0</cDV><tpAmb>2</tpAmb><finNFe>1</finNFe><indFinal>1</indFinal><indPres>9</indPres><indIntermed>0</indIntermed><procEmi>0</procEmi><verProc>3.10.66</verProc></ide><emit><CNPJ>26888917000168</CNPJ><xNome>HELLEN CONFECCOES LTDA</xNome><xFant>Hellen Uniformes</xFant><enderEmit><xLgr>Rua Tiburcio Dantas</xLgr><nro>87</nro><xBairro>Conjunto Urbanistico</xBairro><cMun>1702109</cMun><xMun>ARAGUAINA</xMun><UF>TO</UF><CEP>77818773</CEP><cPais>1058</cPais><xPais>BRASIL</xPais><fone>6324144544</fone></enderEmit><IE>290396719</IE><CRT>1</CRT></emit><dest><CPF>00863364101</CPF><xNome>NF-E EMITIDA EM AMBIENTE DE HOMOLOGACAO - SEM VALOR FISCAL</xNome><enderDest><xLgr>Rua Tiburcio Dantas</xLgr><nro>87</nro><xCpl>hellen confeccoes</xCpl><xBairro>Conjunto Urbanistico</xBairro><cMun>1702109</cMun><xMun>ARAGUAINA</xMun><UF>TO</UF><CEP>77818773</CEP><cPais>1058</cPais><xPais>Brasil</xPais><fone>6392158117</fone></enderDest><indIEDest>9</indIEDest><email>billbarsch@gmail.com</email></dest><det nItem="1"><prod><cProd>2</cProd><cEAN>2007364051165</cEAN><xProd>Camisetas</xProd><NCM>01012900</NCM><CEST>0100600</CEST><indEscala>S</indEscala><CNPJFab>26888917000168</CNPJFab><CFOP>5102</CFOP><uCom>UN</uCom><qCom>1.0000</qCom><vUnCom>30.0000000000</vUnCom><vProd>30.00</vProd><cEANTrib>2007364051165</cEANTrib><uTrib>UN</uTrib><qTrib>1.0000</qTrib><vUnTrib>30.0000000000</vUnTrib><indTot>1</indTot></prod><imposto><vTotTrib>6.00</vTotTrib><ICMS><ICMSSN102><orig>0</orig><CSOSN>102</CSOSN></ICMSSN102></ICMS><PIS><PISOutr><CST>99</CST><vBC>0.00</vBC><pPIS>0.0000</pPIS><vPIS>0.00</vPIS></PISOutr></PIS><COFINS><COFINSOutr><CST>99</CST><vBC>0.00</vBC><pCOFINS>0.0000</pCOFINS><vCOFINS>0.00</vCOFINS></COFINSOutr></COFINS></imposto></det><total><ICMSTot><vBC>0.00</vBC><vICMS>0.00</vICMS><vICMSDeson>0.00</vICMSDeson><vFCP>0.00</vFCP><vBCST>0.00</vBCST><vST>0.00</vST><vFCPST>0.00</vFCPST><vFCPSTRet>0.00</vFCPSTRet><vProd>30.00</vProd><vFrete>0.00</vFrete><vSeg>0.00</vSeg><vDesc>0.00</vDesc><vII>0.00</vII><vIPI>0.00</vIPI><vIPIDevol>0.00</vIPIDevol><vPIS>0.00</vPIS><vCOFINS>0.00</vCOFINS><vOutro>0.00</vOutro><vNF>30.00</vNF><vTotTrib>6.00</vTotTrib></ICMSTot></total><transp><modFrete>9</modFrete></transp><pag><detPag><indPag>0</indPag><tPag>99</tPag><xPag>Dinheiro</xPag><vPag>30.00</vPag></detPag></pag><infAdic><infCpl>Voce pagou aproximadamente 3,00 de tributos federais. 3,00 de tributos estaduais. 24,00 pelos produtos. Fonte IBPT ca7gi3</infCpl></infAdic><infRespTec><CNPJ>31102330000111</CNPJ><xContato>Bill Barsch</xContato><email>agilcontabil.net@gmail.com</email><fone>63992158117</fone></infRespTec></infNFe><Signature xmlns="http://www.w3.org/2000/09/xmldsig#"><SignedInfo><CanonicalizationMethod Algorithm="http://www.w3.org/TR/2001/REC-xml-c14n-20010315"/><SignatureMethod Algorithm="http://www.w3.org/2000/09/xmldsig#rsa-sha1"/><Reference URI="#NFe17210926888917000168550020000000901147830990"><Transforms><Transform Algorithm="http://www.w3.org/2000/09/xmldsig#enveloped-signature"/><Transform Algorithm="http://www.w3.org/TR/2001/REC-xml-c14n-20010315"/></Transforms><DigestMethod Algorithm="http://www.w3.org/2000/09/xmldsig#sha1"/><DigestValue>r0BBJwtxxNaYRiL4FhUQI5YgEY4=</DigestValue></Reference></SignedInfo><SignatureValue>oR3W7CALizCb0XkuI69IVZOg3LrMDtCXKryDNmlyFlt9iTNqJ55i9QJ+h45nkmwEpw46iZGmOZeRbuGpb1ui9CXlZQe3y7bRHm+z3okQDHmQUa1eA5Kuw0t689lX6zCH4YsH+Lz7JchpgsyUI8MTmROlaTbXx8qJs87ctzKAKYPoxsd7viqUwtRNz/LYZN+J+22gEHHZrApO+nErzZdK94yIN22Ps6T/9CzD7iBb/C+5mvoI7zROCGiQkz5GxBbdbE40sFEF31N8z0i3xvL5kq6d1t7yobz38tSyAAtVX87HRq4JnF3IfoJPM2A45RRgjwbckp9SVu1lVK+PL7SRqg==</SignatureValue><KeyInfo><X509Data><X509Certificate>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</X509Certificate></X509Data></KeyInfo></Signature></NFe><protNFe versao="4.00"><infProt><tpAmb>2</tpAmb><verAplic>SVRS202109271011</verAplic><chNFe>17210926888917000168550020000000901147830990</chNFe><dhRecbto>2021-09-28T14:36:55-03:00</dhRecbto><nProt>317210000018850</nProt><digVal>r0BBJwtxxNaYRiL4FhUQI5YgEY4=</digVal><cStat>100</cStat><xMotivo>Autorizado o uso da NF-e</xMotivo></infProt></protNFe></nfeProc>'); //o xml deve ser enviado em formato base64

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

//mostra pdf na tela
?><object data="data:application/pdf;base64,<?php echo base64_encode(hex2bin($array["pdf"])); ?>" type="application/pdf" width="100%" height="800px"></object>