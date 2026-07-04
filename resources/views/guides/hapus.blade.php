<?php
include 'koneksi.php'; // Hubungkan ke database

$id = $_GET['id'];

$query = "DELETE FROM nama_tabel WHERE id = '$id'";
$result = mysqli_query($conn, $query);

if($result) {
    header("Location: index.php?pesan=hapus_berhasil");
} else {
    echo "Gagal menghapus data";
}
?>