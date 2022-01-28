<?php
include "../koneksi.php";
// var_dump($_POST);die;
if($_POST){
    $id_spp=$_POST['id_spp'];
    $bulan=$_POST['bulan'];
    $tahun=$_POST['tahun'];
    $angkatan=$_POST['angkatan'];
    $nominal=$_POST['nominal'];
    // $update = "";
    if(empty($bulan)){
        echo "<script>alert('Bulan tidak boleh kosong');location.href='tambah_spp.php';</script>";
    } elseif(empty($tahun)){
        echo "<script>alert('Tahun tidak boleh kosong');location.href='tambah_spp.php';</script>";
    } elseif(empty($angkatan)){
        echo "<script>alert('Angkatan tidak boleh kosong');location.href='tambah_spp.php';</script>";
    } elseif(empty($nominal)){
        echo "<script>alert('Nominal tidak boleh kosong');location.href='tambah_spp.php';</script>";
    } else {
        // die(1);
        // if ($update) {
            $update=mysqli_query($conn,"update spp set bulan='".$bulan."',tahun='".$tahun."',angkatan='".$angkatan."',nominal='".$nominal."' where id_spp = '".$id_spp."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update spp');location.href='tampil_spp.php';</script>";
            } else {
                echo "<script>alert('Gagal update spp');location.href='ubah_spp.php?id_spp=".$id_spp."';</script>";
            }
        }
        
    } 
// }
?>