<?php
// var_dump($_POST);die();
if ($_POST){
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // =================
    
    if(empty($nama)){
        echo "<script>alert('Nama siswa tidak boleh kosong');location.href='tampil_siswa.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='tampil_siswa.php';</script>";
    } else {
        include "../koneksi.php";
        if(empty($password)){
            // die(1);
            $update=mysqli_query($conn,"update siswa set nis='".$nis."',nama='".$nama."', id_kelas='".$id_kelas."', alamat='".$alamat."', no_tlp='".$no_tlp."', username='".$username."' where nisn = '".$nisn."' ") or die(mysqli_error($conn));
            if($update){
                // die(2);
                echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
            } else {
                // die(3);
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?nisn=".$nisn."';</script>";
            }
        } else {
            // die(4);
            $update=mysqli_query($conn,"update siswa set nis='".$nis."',nama='".$nama."', id_kelas='".$id_kelas."', alamat='".$alamat."', no_tlp='".$no_tlp."', username='".$username."', password='".md5($password)."' where nisn = '".$nisn."'") or die(mysqli_error($conn));
            if($update){
                // die(5);
                echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
            } else {
                // die(6);
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?nisn=".$id_siswa."';</script>";
            }
        }
    }
}
?>