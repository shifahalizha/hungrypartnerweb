<?php
$host           ="localhost";
$user           ="root";
$pass           ="";
$db             ="db_resep";
$port           = 3307;

$mysqli        = mysqli_connect($host,$user,$pass,$db, $port);
if(!$mysqli){
    die("gagal terkoneksi");
}
//echo"Berhasil";
?>