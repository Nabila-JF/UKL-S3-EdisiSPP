<?php
include "../koneksi.php";
$id_kelas = $_GET['id_kelas'];
$qry_del_kelas = mysqli_query($conn, "DELETE FROM kelas WHERE id_kelas = '".$id_kelas."'");
if ($qry_del_kelas){
    echo "<script>alert('Sukses menghapus kelas');location.href='tampil_kelas.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus kelas');location.href='tampil_kelas.php';</script>";
}
?>