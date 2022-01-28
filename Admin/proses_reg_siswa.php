<?php
if ($_POST){
    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // =================
    
    if (empty($nis)){
        echo "<script>alert ('NIS siswa tidak boleh kosong');location.href = 'reg_siswa.php';</script>";
    }
    else if (empty($nama_siswa)){
        echo "<script>alert ('Nama siswa tidak boleh kosong');location.href = 'reg_siswa.php';</script>";
    }
    elseif (empty($username)){
        echo "<script>alert ('Username tidak boleh kosong');location.href = 'reg_siswa.php';</script>";
    }
    elseif (empty($password)){
        echo "<script>alert ('Password tidak boleh kosong');location.href = 'reg_siswa.php';</script>";
    }
    
    
    // =================

    else {
        include "../koneksi.php";
        $insert = mysqli_query($conn, "insert into siswa (nis, nama, id_kelas, alamat, no_tlp, username, password) 
        value ('".$nis."','".$nama_siswa."','".$id_kelas."','".$alamat."','".$no_tlp."','".$username."','".md5($password)."')") or die (mysqli_error($conn));
        if($insert){
            echo "<script> alert ('Sukses menambahkan siswa'); location.href = 'tampil_siswa.php';</script>";
        } else {
            echo "<script> alert ('Gagal menambahlan siswa'); location.href = 'tampil_siswa.php';</script>";
        }
    }
}
?>