<?php
include "../koneksi.php";
$id_spp = $_GET['id_spp'];
$qry_del_spp = mysqli_query($conn, "DELETE FROM spp WHERE id_spp = '".$id_spp."'");
if ($qry_del_spp){
    echo "<script>alert('Sukses menghapus spp');location.href='tampil_spp.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus spp');location.href='tampil_spp.php';</script>";
}
?>