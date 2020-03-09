<?php
$angka1 = $_POST["angka1"];
$angka2 = $_POST["angka2"];
$p = 22/7;
$a = 2;


if($_POST["submit"] == "volume"){
	$hasil = $p * $angka1 * $angka1 * $angka2;
	echo "$hasil";
}
else if($_POST["submit"] == "alas"){
	$hasil = $a * $p * $angka1 * $angka2;
	echo "$hasil";
	
}
?>