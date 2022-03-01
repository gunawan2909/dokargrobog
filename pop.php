<?php 
include 'json.php';
foreach($data_kir['tipe'] as $kir):
endforeach;


?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/pop.css">
<body>
<main>
<div class="alert">
    <h3 id="judul">Selamat Datang Tuan <br><?= $kir['namapemilik']?></h3>
    <p>Nomor Kendaraan </p>
    <p>:<?= $kir['nopol']?></p>
    <p>Nomor Uji </p>
    <p>:<?= $kir['nouji'] ?></p>
    <p>Nama Pemilik Kendaraan</p>
    <p>:<?= $kir['namapemilik'] ?></p>
    <p>Masa Berlaku Uji</p>
    <p>:<?= $kir['habisuji'] ?></p>
    <p>Besar Biyaya Uji</p>
    <p>:Rp.<?= $kir['nominal_retribusi'] ?></p>
    <p>Nomor Mesin</p> 
    <P>-</P>
    <p>Nomor Rangka </p>
    <P>-</P>
    <button id="tombol">close</button>
</div>

</main>

<script>
 const   alert = document.querySelector('.alert');
 const   close = document.querySelector('#tombol');

 function hapus(){
     alert.style.opacity = 0;
 }
 close.onclick = hapus;
    
</script>
</body>



</html>

