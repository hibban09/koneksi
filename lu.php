<?php

include "koneksi.php";
$hasil=mysqli_query($conn ,"SELECT * FROM penulis");
while($baris=mysqli_fetch_array($hasil))
{
echo   "nama $baris[nmpenulis] alamat $baris[alamat] <br>";
}
mysqli_query($conn,"UPDATE penulis set nmpenulis='erwandi' WHERE idpenulis='3'");
echo"<br/>";
echo"isi tabel sesudah di update <br/>";
$hasil=mysqli_query($conn,"SELECT * FROM penulis");
while($baris=mysqli_fetch_array($hasil))
{
echo$baris['idpenulis']."".$baris['nmpenulis'];
echo"<br/>";
}




?>