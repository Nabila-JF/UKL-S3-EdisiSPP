<?php
session_start();
if($_SESSION['status_login']!=true){
    header('location: ../index.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>SPP APP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../sidebar-03/css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="index.html" class="logo">SPP APP</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="../Admin/index.php"><span class="fa fa-home mr-3"></span> Dashboard</a>
	          </li>
	          <li>
	            <a href="../Admin/tampil_kelas.php"><span class="fa fa-home mr-3"></span> Kelas</a>
	          </li>
	          <li>
	              <a href="../Admin/tampil_siswa.php"><span class="fa fa-user mr-3"></span> Siswa</a>
	          </li>
	          <li>
              <a href="../Admin/tampil_petugas.php"><span class="fa fa-briefcase mr-3"></span> Petugas</a>
	          </li>
	          <li>
				  <a href="../Admin/tampil_spp.php"><span class="fa fa-sticky-note mr-3"></span> SPP</a>
				</li>
				<li>
					<a href="../Transaksi/transaksi.php"><span class="fa fa-paper-plane mr-3"></span> Transaksi</a>
				</li>
				<li>
					<a href="../Transaksi/histori_pembayaran.php"><span class="fa fa-sticky-note mr-3"></span> Histori Transaksi</a>
				</li>
				<li>
				<a href="../Admin/logout.php" onclick="return confirm('Are you sure?');"><span class="fa mr-3" ></span> Logout</a>
				</li>
	        </ul>
			</nav>
			<div id="content" class="p-4 p-md-5 pt-5">

