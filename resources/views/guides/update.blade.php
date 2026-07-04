<?php
include 'koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];

$query = "UPDATE nama_tabel SET judul='$judul', isi='$isi' WHERE id='$id'";
mysqli_query($conn, $query);

header("Location: index.php");
?>