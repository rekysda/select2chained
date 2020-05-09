<?php
$server="localhost";
$username="root"; // username mysql
$password=""; // password mysql
$db="select2chained"; // nama database
$koneksi=mysql_connect($server,$username,$password) or die ("Gagal terkoneksi ke server");
$database=mysql_select_db($db) or die ("Database tidak ditemukan");
?>