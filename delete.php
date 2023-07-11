<?php
include "koneksi.php";
$hasil=mysqli_query($conn ,"SELECT * FROM penulis");
while($baris=mysqli_fetch_array($hasil))
{
echo   "nama $baris[nmpenulis] alamat $baris[alamat] <br>";
}
mysqli_query($conn,"DELETE FROM penulis where idpenulis='3'");
echo "</br>";
echo "isi tabel sesudah di hapus <br>";
$hasil=mysqli_query($conn,"SELECT * from penulis");
while($baris=mysqli_fetch_array($hasil))
{echo $baris['idpenulis']."".$baris['nmpenulis'];
echo "</br>";

}
?>