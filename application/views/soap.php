<?php
$location = "https://banguat.gob.gt/variables/ws/TipoCambio.asmx?WSDL";

$request= '
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ws="http://www.banguat.gob.gt/variables/ws/">
   <soapenv:Header/>
   <soapenv:Body>
      <ws:TipoCambioDia/>
   </soapenv:Body>
</soapenv:Envelope>
';
/*
print("Resquest : <br>");
print("<pre>".htmlentities($request)."</pre>");
*/
$action = "TipoCambioDia";
$headers = [
    'Method: POST',
    'Connection: Keep-Alive',
    'User-Agent: Apache-HttpClient/4.5.5 (Java/16.0.1)',
    'Content-Type: text/xml;charset=UTF-8',
    'SOAPAction: http://www.banguat.gob.gt/variables/ws/TipoCambioDia',
];

//Segun Documentacion
$ch = curl_init($location);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

$response = curl_exec($ch);
$err_status = curl_errno($ch);

print("<h2>Fecha y precio del dolar : </h2>");
print("<h2>".$response."</h2>");
$fecha=str_split($response,3);
echo($fecha[0]);
/*<?php echo $correo;?>
$datos['correo'] = $email;
$this->load->view('sistema/Page',$datos);*/
/*$datos['date'] = $response;
$this->load->view('login/ingresosistem',$datos);
*/
?>