<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://dokar.dishub.grobogan.go.id/dokar/pkb/8e60374537a3590b9d9b001dff7eedfd?no_uji=PW6659',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded',
    'Authorization: Basic RGlzaHViUEtCMTIzNERva2FyOlBLQkRpc2h1YjEyMzREb2thcg==',
    'Cookie: PHPSESSID=1fhrq4j6b7n775fc0jbf0jclo3'
  ),
));

$data_kir = curl_exec($curl);

curl_close($curl);
// $response=json_encode($response);
echo $data_kir;
?>
