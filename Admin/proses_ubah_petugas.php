<?php
// var_dump($_POST);die();
if ($_POST){
    $id_petugas = $_POST['id_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_petugas = $_POST['nama_petugas'];
    $level = $_POST['level'];


    // =================
    
    if(empty($nama_petugas)){
        echo "<script>alert('Nama petugas petugas tidak boleh kosong');location.href='tampil_petugas.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='tampil_petugas.php';</script>";
    } else {
        include "../koneksi.php";
        if(empty($password)){
            // die(1);
            $update=mysqli_query($conn,"update petugas set username='".$username."', nama_petugas='".$nama_petugas."', level='".$level."'  where id_petugas = '".$id_petugas."' ") or die(mysqli_error($conn));
            if($update){
                // die(2);
                echo "<script>alert('Sukses update petugas');location.href='tampil_petugas.php';</script>";
            } else {
                // die(3);
                echo "<script>alert('Gagal update petugas');location.href='ubah_petugas.php?id_petugas=".$id_petugas."';</script>";
            }
        } else {
            // die(4);
            $update=mysqli_query($conn,"update petugas set username='".$username."', password='".md5($password)."', nama_petugas='".$nama_petugas."', level='".$level."' where id_petugas = '".$id_petugas."'") or die(mysqli_error($conn));
            if($update){
                // die(5);
                echo "<script>alert('Sukses update petugas');location.href='tampil_petugas.php';</script>";
            } else {
                // die(6);
                echo "<script>alert('Gagal update petugas');location.href='ubah_petugas.php?id_petugas=".$id_petugas."';</script>";
            }
        }
    }
}
?>