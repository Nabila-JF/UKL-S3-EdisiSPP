<?php
if ($_POST){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_petugas = $_POST['nama_petugas'];
    $level = $_POST['level'];

    // =================
    
    if (empty($username)){
        echo "<script>alert ('Username tidak boleh kosong');location.href = 'reg_petugas.php';</script>";
    }
    elseif (empty($password)){
        echo "<script>alert ('Password tidak boleh kosong');location.href = 'reg_petugas.php';</script>";
    }
    else if (empty($nama_petugas)){
        echo "<script>alert ('Nama petugas tidak boleh kosong');location.href = 'reg_petugas.php';</script>";
    }
    elseif (empty($level)){
        echo "<script>alert ('Level petugas tidak boleh kosong');location.href = 'reg_petugas.php';</script>";
    }
    
    
    // =================

    else {
        include "../koneksi.php";
        $insert = mysqli_query($conn, "insert into petugas (username, password, nama_petugas, level) 
        value ('".$username."','".md5($password)."', '".$nama_petugas."','".$level."')") or die (mysqli_error($conn));
        if($insert){
            echo "<script> alert ('Sukses menambahkan petugas'); location.href = 'tampil_petugas.php';</script>";
        } else {
            echo "<script> alert ('Gagal menambahlan petugas'); location.href = 'tampil_petugas.php';</script>";
        }
    }
}
?>