<?php
session_start();
unset($_SESSION["id_petugas"]);
unset($_SESSION["username"]);
unset($_SESSION["nama_petugas"]);
session_destroy();
header("Location:../index.php");
?>