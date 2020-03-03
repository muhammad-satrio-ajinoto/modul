<?php
$id = $_POST["id"];
$pass = $_POST["pass"];

if($_POST["submit"] == "login"){
echo "SELAMAT DATANG : $id";	
echo "ANDA TELAH BERHASIL LOGIN";
}
else if($_POST["submit"] == "keluar"){
echo "ANDA TELAH KELUAR";
}
?>