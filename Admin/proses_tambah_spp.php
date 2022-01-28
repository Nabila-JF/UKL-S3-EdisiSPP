<?php
require'../koneksi.php';
if($_POST){
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $angkatan = $_POST['angkatan'];
    $nominal = $_POST['nominal'];
    if(empty($bulan)){
        echo "<script> alert ('Bulan tidak boleh kosong'); 
        location.href = 'tambah_spp.php';</script>";
    } elseif (empty($tahun)){
        echo "<script> alert ('Tahun tidak boleh kosong'); 
        location.href = 'tambah_spp.php';</script>";
    } elseif (empty($angkatan)){
        echo "<script> alert ('Angkatan tidak boleh kosong'); 
        location.href = 'tambah_spp.php';</script>";
    } elseif (empty($nominal)){
        echo "<script> alert ('Nominal tidak boleh kosong'); 
        location.href = 'tambah_spp.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "insert into spp (bulan, tahun, angkatan, nominal) 
        value('".$bulan."','".$tahun."','".$angkatan."','".$nominal."')");
        if ($insert){
            echo "<script> alert ('Sukses menambahkan spp'); 
            location.href = 'tampil_spp.php';</script>";
        } else {
            echo "<script> alert ('Gagal menambahkan spp'); 
            location.href = 'tampil_spp.php';</script>";
        }
    }
}
?>