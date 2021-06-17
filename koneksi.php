<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "hasbi_311910711";
$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false)
{
echo "Koneksi ke server gagal.";
die();
} #else echo "Koneksi berhasil";
?>