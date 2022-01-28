<?php
include '../Admin/header_admin.php'
?>


    <h3>Tambah Petugas</h3>
    <form action = "proses_tambah_petugas.php" method = "post">
    <!-- ========================== -->
    USERNAME: 
    <input type = "text" name = "username" value = "" class = "form-control">
<br>
    PASSWORD:
    <input type="password" name="password" value="" class="form-control">
<br>
    NAMA PETUGAS:
    <input type = "text" name = "nama_petugas" value = "" class = "form-control">
<br>
    LEVEL:
    <select name = "level" class = "form-control">
    <option></option>
    <option value = "petugas">Petugas</option>
    <option value = "admin">Admin</option>
    </select>
<br>
<input type="submit" name="simpan" value="Tambah petugas" class="btn btn-primary">
</form>


<?php
include 'footer_admin.php'
?>