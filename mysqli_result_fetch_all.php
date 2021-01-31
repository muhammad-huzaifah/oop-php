<?php
$mysqli = new mysqli("localhost", "root", "", "ilkoom");

//ambil semua data di tabel barang
$query = "SELECT * FROM barang";
$result = $mysqli->query($query);

$arr = $result->fetch_all();

echo "<pre>";
print_r($arr);
echo "</pre>";

$result->free();