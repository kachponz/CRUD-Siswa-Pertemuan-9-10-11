<?php
include("config.php");

if (isset($_GET['id'])) {
    // Ambil ID dari query string
    $id = $_GET['id'];

    // Buat query untuk menghapus data
    $sql = "DELETE FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // Apakah query hapus berhasil?
    if ($query) {
        header('Location: list-siswa.php');
    } else {
        die("Gagal menghapus data...");
    }
} else {
    die("Akses dilarang...");
}
?>
