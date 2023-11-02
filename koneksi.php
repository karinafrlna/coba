<?php

$host="localhost";
$user= "root";
$pass="";
$database="lat";

$koneksi=mysqli_connect($host, $user, $pass);
if ($koneksi) {
    $buka=mysqli_select_db($koneksi, $database);
    echo "Database terhubung";
    if (!$buka) {
        echo "Database tidak dapat terhubung";
    }
}else{
    echo "MySQL tidak terhubung ";
}

?>