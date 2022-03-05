
<?php

// Request data dari API Untuk berita 
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://dokar.dishub.grobogan.go.id/dokar/pkb/e5118c930603c0f727c40bb793caed7d',
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

//array penampung data API Berita 
$data_berita =json_decode(curl_exec($curl),1);
$data_berita =$data_berita['tipe'];
curl_close($curl);


// Request data dari api untuk Data KIR
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

// array penampung data api KIR
$data_kir =json_decode(curl_exec($curl),1);
$data_kir=$data_kir['tipe'];


curl_close($curl);

//function untuk mengubah format bulan manjadi bahasa indonesia
function tanggal_indonesia($tanggal)
{

    $bulan = array(
        1 =>       'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );

    $var = explode('-', $tanggal);

    return $var[2] . ' ' . $bulan[(int)$var[1]] . ' ' . $var[0];
    // var 0 = tanggal
    // var 1 = bulan
    // var 2 = tahun
}

//request Api untuk data jumlah perhitungan jenis mobil
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://dokar.dishub.grobogan.go.id/dokar/pkb/78263cc332efa68a5cc0b2335d5c9149',
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

$data_jenis_mobil =json_decode( curl_exec($curl),1);
$data_jenis_mobil = $data_jenis_mobil['tipe'];
curl_close($curl);




?>

