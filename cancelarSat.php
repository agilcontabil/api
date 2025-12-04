<?php
$urlIntegracao    = 'https://www.agilcontabil.net/sistemaInstalado/ajax';

$dados['usuario'] = 'teste';
$dados['senha']   = 'teste';
$dados['acao']    = 'cancelarCfe';

$dados["cnpjEmitente"] = "12321232123213";

$xml = '<?xml version="1.0" encoding="UTF-8"?><CFe><infCFe Id="CFe35180911111111111111591234567890000052162791" versao="0.06" versaoDadosEnt="0.07" versaoSB="000003"><ide><cUF>35</cUF><cNF>216279</cNF><mod>59</mod><nserieSAT>123456789</nserieSAT><nCFe>000005</nCFe><dEmi>20180903</dEmi><hEmi>081129</hEmi><cDV>1</cDV><tpAmb>2</tpAmb><CNPJ>11111111111111</CNPJ><signAC>gTuyoOXx7hIPYXko1sY8/uZVPRNZWT3RHd0iHLF6SnuqTJB8MjjMgE6wQRxFLkHd2iOdHDqPRu2+10hCTFnO5yldu2dm7Fj2s+MRg/o1nWZ5h5ZrqSEp4cruGCt2iAbQrOo7MeApNZSLiRz6y0/1Etjz0hlChkCvB/uCRxnJZhMTzQVxZfq2waKXj1XE/ZaDaDEaifELmRRQ1NEDjExKQobPmtylBlkNLDLJL3s8LaX3CIwTW1zpB+5HKJBfIL6VQ30VRJACjgsYq1CQPhna7ylk/D5W2taAqFtsHP1GfjYi1bd6woUVYoK1GQmBZVCZfA8Ze3MubI1X5v0o9R6fjQ==</signAC><assinaturaQRCODE>ffE82F3iJ9svp1EWxT5B0ld8nkcTC/2WNXVvB3lHsMOvub9V9/lq0W52i3zGLUONiGObReUQcn5spI3Qe8f1Hh57KxH7i2zXuQjxjZlXlx45khvlNnbHu2VXsD9TriP+uFp/BMdxWP3t60e5qsbrCMTwe2/GIfKfKVWWeb21ckf6aMITAXoEltiNceZOWZxswC65uDP7vaOi3vHFt97Y5r4b9SRRIiKT4Hj3djPKCETs6ekutvHA4cgISIe4OUrLeag9MRUdvLW8j/lwdwQiIUz2BiSYearwPHtYAKfa2Ju28WBPonAE/Qf+OfMnCe6+02Aw4Q48309sktD5mw7+Rw==</assinaturaQRCODE><numeroCaixa>001</numeroCaixa></ide><emit><CNPJ>11111111111111</CNPJ><xNome>Estabelecimento de Teste 2</xNome><xFant>Estabelecimento Fantasia 2</xFant><enderEmit><xLgr>rua das flores</xLgr><nro>1005</nro><xCpl>frente</xCpl><xBairro>centro</xBairro><xMun>Sao Paulo</xMun><CEP>00000000</CEP></enderEmit><IE>111111111111</IE><cRegTrib>3</cRegTrib><indRatISSQN>S</indRatISSQN></emit><dest><CPF>00863364101</CPF><xNome>Bill Barsch</xNome></dest><det nItem="1"><prod><cProd>12345</cProd><xProd>Produto Teste</xProd><NCM>19059010</NCM><CFOP>5102</CFOP><uCom>UNID</uCom><qCom>10.0000</qCom><vUnCom>2.50</vUnCom><vProd>25.00</vProd><indRegra>A</indRegra><vItem>25.00</vItem></prod><imposto><ICMS><ICMSSN102><Orig>0</Orig><CSOSN>102</CSOSN></ICMSSN102></ICMS><PIS><PISSN><CST>49</CST></PISSN></PIS><COFINS><COFINSSN><CST>49</CST></COFINSSN></COFINS></imposto></det><total><ICMSTot><vICMS>0.00</vICMS><vProd>25.00</vProd><vDesc>0.00</vDesc><vPIS>0.00</vPIS><vCOFINS>0.00</vCOFINS><vPISST>0.00</vPISST><vCOFINSST>0.00</vCOFINSST><vOutro>0.00</vOutro></ICMSTot><vCFe>25.00</vCFe><vCFeLei12741>0.00</vCFeLei12741></total><pgto><MP><cMP>01</cMP><vMP>25.00</vMP></MP><vTroco>0.00</vTroco></pgto></infCFe><Signature xmlns="http://www.w3.org/2000/09/xmldsig#"><SignedInfo><CanonicalizationMethod Algorithm="http://www.w3.org/TR/2001/REC-xml-c14n-20010315"/><SignatureMethod Algorithm="http://www.w3.org/2001/04/xmldsig-more#rsa-sha256"/><Reference URI="#CFe35180911111111111111591234567890000052162791"><Transforms><Transform Algorithm="http://www.w3.org/2000/09/xmldsig#enveloped-signature"/><Transform Algorithm="http://www.w3.org/TR/2001/REC-xml-c14n-20010315"/></Transforms><DigestMethod Algorithm="http://www.w3.org/2001/04/xmlenc#sha256"/><DigestValue>B4DawH/jZmkjwovxQn70NmGbNrtVM0LxgnuQ4sZSeYw=</DigestValue></Reference></SignedInfo><SignatureValue>CP8OnsYTabeGfRc24z0oPB70HsLjbudlciShojdt77vr0kb0lxzPjMfNYKlE75FZ4eGu1FjUieje2M2hxyOZkfTcD3/VoKalZ54lwS2T7TwNc1iNKMSAZo9pppGGxAsjfCZr14JtEDVL/H6Fcg2YVDE35jgWE27Gd+4J5kxGe/66/L0+377eW8BrhUtiGs5TxCY/ag+9EzpVt9QOhEe7C7t3LhlVtDgYLHijV74RXn48/GSXN/PCaB+Ol1fTSaNL8Ls6ZhlUNO4Ouh77lX+tlBc9pv0spFme4bw2lgiSDw57GW0aBlJI87zRZ5mPYtUwydWs/sg9d7sEf6lJAvD7ng==</SignatureValue><KeyInfo><X509Data><X509Certificate>MIICyTCCAbGgAwIBAgIIVLwZ/yBEsDEwDQYJKoZIhvcNAQELBQAwDjEMMAoGA1UEBhMDU0FUMB4XDTE4MDkwMzA5NDAyOFoXDTIwMDgyMzA5NDAyOFowDjEMMAoGA1UECwwDU0FUMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAiDZblEXNw1Tsa2WwDk15F/E/qpeBq7JBuVe4ud1XSBHblMCKXrd/ZH5zmgdjFSQfBBV2QpgFjVRPFYohp/7Qlxvuc7njx5uUsMk0HROk+azByiFJixlBsB1p7pyiBoOHtpDv+54vTVTWSsG5LK7PMhBYHF5aDQYc55ji5z0xP6TfKhmaslmcPAMpauzQ65UE+9PiwNiy9/NEn45szBAULI0Ob+9ieADwZ3d3p0xjmtqJp60iJ5/nArETjT/qmsvkt2ouqYYR1bUqXf6PgwcvoviKPpDHIgeFo6vHTLyC6fjBOQeL5qposrrxAR1A5OuqbBz+TPbo/L0B9CAj4iUKfQIDAQABoyswKTAnBgNVHREEIDAeoBwGCCsGAQUFBwgFoBAMDnd3dy5zYXQuY29tLmJyMA0GCSqGSIb3DQEBCwUAA4IBAQCB/Au92Bp+2Cltjvz/hzWRp4yrurRMx/Li0s7YOTB4vw/i11S1lO4xDeeEr9nQVljsOuZ+7iiOBCzv+jUyET84qw1tY4RhigJyx+AZMfX+6E1TtE7p4DGGHHud5c6Xpz8i0KKNN1hqGphujeBJNVZEX/JMXoRuAKdDw2s4sYRevwcEvOajUSPLE2G9XCkXyMMG3F7H3/dMDKoRtp65tJqr3bjpDKVtoH0XuBMuy5Ik5u53FMvHDup2GvA9ehj19172t/wiQdLguK6HHAYbCj3MW7mj3HkBIHM7EYFORAqAmSO4Yvixv/Mq5YyqDV7XMxrt0Th4NqoRLrB42+yu8ffX</X509Certificate></X509Data></KeyInfo></Signature></CFe>';
$dados['cfe']   = base64_encode($xml); //os dados da nfse devem ser enviados em formato json e base64

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
var_dump($resposta);

$arrayResposta = json_decode($resposta, true);
//mostra a resposta da emissão da nota
//o xml da nota fiscal emitida está dentro da variavel $resposta["xml"] e deve ser gravado em sua base de dados
echo "<pre>";
print_r($arrayResposta);
echo "</pre>";

echo "<textarea cols=\"100\" rows=\"70\">";
echo base64_decode($arrayResposta["xml"]);
echo "</textarea>";
