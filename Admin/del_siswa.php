<?php
include "../koneksi.php";
$id_siswa = $_GET['nisn'];
$qry_del_siswa = mysqli_query($conn, "DELETE FROM siswa WHERE nisn = '".$id_siswa."'");
if ($qry_del_siswa){
    echo "<script>alert('Sukses menghapus siswa');location.href='tampil_siswa.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus siswa');location.href='tampil_siswa.php';</script>";
}
?>