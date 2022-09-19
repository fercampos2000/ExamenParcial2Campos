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
/*
$fecha=str_split($response,3);
echo($fecha[0]);*/
/*<?php echo $correo;?>
$datos['correo'] = $email;
$this->load->view('sistema/Page',$datos);*/
/*$datos['date'] = $response;
$this->load->view('login/ingresosistem',$datos);
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CAMPOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body background="black" text="white">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Ingreso al sistema satisfactorio</h2>
              <p class="text-white-50 mb-5">Bienvenido al sistema</p>

            <div>
                <p class="mb-0">¿Deseas regresar al inicio? <a href="logincampos" class="text-white-50 fw-bold">Regresar</a>
                </p>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

