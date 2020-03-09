<?php
$angka1 = $_POST["angka1"];
$angka2 = $_POST["angka2"];


if($_POST["submit"] == "tambah"){
	$hasil = $angka1 + $angka2;
	echo "<h3>ANGKA1 : $angka1</h3>";
echo "<h3>ANGKA2 : $angka2</h3>";
echo "$angka1 + $angka2 = $hasil";
}
else if($_POST["submit"] == "kurang"){
	$hasil = $angka1 - $angka2;
	echo "<h3>ANGKA1 : $angka1</h3>";
echo "<h3>ANGKA2 : $angka2</h3>";
echo "$angka1 - $angka2 = $hasil";
}
else if($_POST["submit"] == "kali"){
	$hasil = $angka1 * $angka2;
	echo "<h3>ANGKA1 : $angka1</h3>";
echo "<h3>ANGKA2 : $angka2</h3>";
echo "$angka1 * $angka2 = $hasil";
}
else if($_POST["submit"] == "bagi"){
	$hasil = $angka1 / $angka2;
	echo "<h3>ANGKA1 : $angka1</h3>";
echo "<h3>ANGKA2 : $angka2</h3>";
echo "$angka1 % $angka2 = $hasil";
}
?>