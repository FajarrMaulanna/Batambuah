<?php
    include '../koneksi.php';

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM kuliner WHERE id = $id");

    echo '<script>alert("Data berhasil dihapus");location="index.php";</script>';
?>