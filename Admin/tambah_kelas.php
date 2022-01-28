<?php
include '../Admin/header_admin.php'
?>


    <h3>Tambah Kelas</h3>
    <form action = "proses_tambah_kelas.php" method = "post">
    <!-- ========================== -->

    NAMA KELAS:
    <input type = "text" name = "nama_kelas" value = "" class = "form-control">
<br>
    JURUSAN: 
    <input type = "text" name = "jurusan" value = "" class = "form-control">
<br>
    ANGKATAN:
    <input type = "text" name = "angkatan" value = "" class = "form-control">
<br>
<input type="submit" name="simpan" value="Tambah Kelas" class="btn btn-primary">
</form>


<?php
include 'footer_admin.php'
?>