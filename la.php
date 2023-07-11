<?php

include "koneksi.php";
$hasil=mysqli_query($conn ,"SELECT * FROM penulis");
while($baris=mysqli_fetch_array($hasil))
{
echo   "nama $baris[nmpenulis] alamat $baris[alamat] <br>";
}
mysqli_query($conn,"INSERT INTO penulis(nmpenulis,alamat,tgllahir,tinggibadan)VALUES('Donald','jln.banggirs','2003-10-23','172')");
echo "<br/>";
echo"isi tabel sesudahdi insert<br/>";
$hasil=mysqli_query($conn,"SELECT * FROM penulis");
while($baris=mysqli_fetch_array($hasil))
{
echo $baris['idpenulis']."
".$baris['nmpenulis']."
".$baris['alamat'];
echo "<br/>";
}
?>