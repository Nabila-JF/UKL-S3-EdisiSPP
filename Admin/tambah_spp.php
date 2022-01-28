<?php
include '../Admin/header_admin.php'
?>


    <h3>Tambah SPP</h3>
    <form action = "proses_tambah_spp.php" method = "post">
    <!-- ========================== -->

    BULAN:
    <input type = "text" name = "bulan" value = "" class = "form-control">
<br>
    TAHUN: 
    <input type = "text" name = "tahun" value = "" class = "form-control">
<br>
    ANGKATAN:
    <input type = "text" name = "angkatan" value = "" class = "form-control">
<br>
    NOMINAL:
    <input type = "text" name = "nominal" value = "" class = "form-control">
<br>
<input type="submit" name="simpan" value="Tambah spp" class="btn btn-primary">
</form>


<?php
include 'footer_admin.php'
?>