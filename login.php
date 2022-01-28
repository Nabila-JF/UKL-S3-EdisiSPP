<?php
session_start();
include "koneksi.php";

$role = $_POST['role'];
$username = stripslashes($_POST['username']);
$password = md5($_POST['password']);

// ----------------------------
 

if ($role == 'petugas'){
    $query = "SELECT * FROM petugas WHERE username = '$username' AND password = '$password'";
    $row = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($row);
    $cek = mysqli_num_rows($row);
    if ($cek > 0){
            if ($data['level'] == 'admin'){
            $_SESSION['level'] = 'admin';
            $_SESSION['username'] = $data['username'];
            $_SESSION['id_petugas'] = $data['id_petugas'];
            $_SESSION['nama_petugas'] = $data['nama_petugas'];
            $_SESSION['status_login']=true;
        header("location: Admin");
        } else {
            $_SESSION['level'] = 'petugas';
            $_SESSION['username'] = $data['username'];
            $_SESSION['id_petugas'] = $data['id_petugas'];
            $_SESSION['nama_petugas'] = $data['nama_petugas'];
            $_SESSION['status_login']=true;
            header("location: Petugas");
        }
    }
} else {
    $query1 = "SELECT * FROM siswa WHERE username = '$username' AND password = '$password'";
    $row1 = mysqli_query($conn, $query1);
    $data1 = mysqli_fetch_assoc($row1);
    $cek1 = mysqli_num_rows($row1);
    if ($cek1 > 0){
        $_SESSION['level'] = 'siswa';
        $_SESSION['username'] = $data1['username'];
        $_SESSION['nisn'] = $data1['nisn'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['status_login']=true;
        header("location: Siswa");
    }
}
?>