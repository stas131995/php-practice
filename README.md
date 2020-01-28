<html>
<body>
<?php
$iso  = $_POST["ISO"];;
$date  =  $_POST["Date"];;
$soapUrl = "http://api.cba.am/exchangerates.asmx?wsdl";

$xml_post_string = '<?xml version="1.0" encoding="UTF-8"?><SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://www.cba.am/"><SOAP-ENV:Body><ns1:ExchangeRatesByDateByISO><ns1:date>'.$date.'</ns1:date><ns1:ISO>'.$iso.'</ns1:ISO></ns1:ExchangeRatesByDateByISO></SOAP-ENV:Body></SOAP-ENV:Envelope>';

$headers = array(
"POST /exchangerates.asmx HTTP/1.1",
"Host: api.cba.am",
"Content-Type: text/xml; charset=utf-8",
"Content-Length: ".strlen($xml_post_string)
); 

$url = $soapUrl;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch); 
curl_close($ch);
$response1 = str_replace("<soap:Body>","",$response);
$response2 = str_replace("</soap:Body>","",$response1);

$parser = simplexml_load_string($response2);

$result=$parser->ExchangeRatesByDateByISOResponse->ExchangeRatesByDateByISOResult->Rates->ExchangeRate->Rate[0]."";



?>
<form method="post" action="">


ISO: <input type="text" name="ISO">
<br><br>
Date:
<input type="text" name="Date">
<br><br>
Result:
<span class="error">* <?php echo $result;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">

</form>

</body>
</html>

