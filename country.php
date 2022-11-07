

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://ipgeolocation.abstractapi.com/v1/?api_key=21f5b92cca444af8a47aafda070efe85',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_POSTFIELDS => 'ecid=00120D9A2888202E&model=iPhone10%2C2',
  CURLOPT_HTTPHEADER => array(
    ': ',
    ': ',
    'Content-Type: application/x-www-form-urlencoded'
  ),
));

$response = curl_exec($curl);

curl_close($curl);


//echo $response;


$update = json_decode($response, true);

$pais = $update['country'];
$ciudad = $update['city'];
$ip = $update['ip_address'];
$emoji = $update['flag']['emoji'];


echo "Pais:$pais | Ciudad: $ciudad: | IP:$ip $emoji" ;

?>