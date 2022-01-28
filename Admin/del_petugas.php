<?php
include "../koneksi.php";
$id_petugas = $_GET['id_petugas'];
$qry_del_petugas = mysqli_query($conn, "DELETE FROM petugas WHERE id_petugas = '".$id_petugas."'");
if ($qry_del_petugas){
    echo "<script>alert('Sukses menghapus petugas');location.href='tampil_petugas.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus petugas');location.href='tampil_petugas.php';</script>";
}
?>