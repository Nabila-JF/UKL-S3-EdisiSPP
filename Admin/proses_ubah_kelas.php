<?php
include "../koneksi.php";
// var_dump($_POST);die;
if($_POST){
    $id_kelas=$_POST['id_kelas'];
    $nama_kelas=$_POST['nama_kelas'];
    $jurusan=$_POST['jurusan'];
    $angkatan=$_POST['angkatan'];
    // $update = "";
    if(empty($nama_kelas)){
        echo "<script>alert('nama kelas tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } elseif(empty($jurusan)){
        echo "<script>alert('jurusan tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } elseif(empty($angkatan)){
        echo "<script>alert('angkatan tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } else {
        // die(1);
        // if ($update) {
            $update=mysqli_query($conn,"update kelas set nama_kelas='".$nama_kelas."',jurusan='".$jurusan."',angkatan='".$angkatan."' where id_kelas = '".$id_kelas."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update kelas');location.href='tampil_kelas.php';</script>";
            } else {
                echo "<script>alert('Gagal update kelas');location.href='ubah_kelas.php?id_kelas=".$id_kelas."';</script>";
            }
        }
        
    } 
// }
?>