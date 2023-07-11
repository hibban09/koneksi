<?php

include "koneksi.php";
$hasil=mysqli_query($conn ,"SELECT * FROM penulis");
while($baris=mysqli_fetch_array($hasil))
{
echo   "nama $baris[nmpenulis] alamat $baris[alamat] <br>";
}



?>