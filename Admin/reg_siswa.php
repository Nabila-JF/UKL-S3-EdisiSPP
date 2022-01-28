<?php
include '../Admin/header_admin.php'
?>


    <h3>Registrasi Siswa</h3>
    <form action = "proses_reg_siswa.php" method = "post">
    <!-- ========================== -->
    NIS:
    <input type = "text" name = "nis" value = "" class = "form-control">
<br>
    NAMA SISWA:
    <input type = "text" name = "nama" value = "" class = "form-control">
<br>
    KELAS:
    <select name = "id_kelas" class = "form-control">
    <option></option>
    <?php
        include "../koneksi.php";
        $qry_kelas = mysqli_query($conn, "select * from kelas");
        while ($data_kelas = mysqli_fetch_array($qry_kelas)){
        echo '<option value = "'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';
        }
    ?>
    </select>
<br>
    ALAMAT:
    <textarea name = "alamat" class = "form-control" rows = "4"></textarea>
<br>
    NO. TELEPON: 
    <input type = "text" name = "no_tlp" value = "" class = "form-control">
<br>
    USERNAME: 
    <input type = "text" name = "username" value = "" class = "form-control">
<br>
    PASSWORD:
    <input type="password" name="password" value="" class="form-control">
<br>
<input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-primary">
</form>


<?php
include 'footer_admin.php'
?>