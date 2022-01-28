<?php
include "../Petugas/header_petugas.php";
?>

    <div class="all-table">
    <h3>Tambah data transaksi</h3>
    <form action="" method="POST">
        <table class="table  table-stripped" >
            <tr>
                <td>Petugas :</td>
                <td><select class="form-control" name="petugas">
<?php
include '../koneksi.php';
// Kita akan ambil Nama Petugas yang ada pada tabel Petugas
$petugas = mysqli_query($conn, "SELECT * FROM petugas");
while($r = mysqli_fetch_assoc($petugas)){ ?>
                        <option value="<?= $r['id_petugas']; ?>"><?= $_SESSION['nama_petugas']; ?></option>
<?php } ?>          </select></td>
            </tr>
            <tr>
                <td>Nama siswa :</td>
                <td><select class="form-control" name="siswa">
<?php
// Sekarang kita ambil NISN Siswa 
$siswa = mysqli_query($conn, "SELECT * FROM siswa");
while($r = mysqli_fetch_assoc($siswa)){ ?>
                        <option value="<?= $r['nisn']; ?>"><?= $r['nama']; ?></option>
<?php } ?>          </select></td>
            </tr>   
            <tr>
                <td>Tgl. / Bulan / Tahun bayar :</td>
                <td><input class="form-control" type="text" name="tgl" size="5" placeholder="Tanggal.">
                    <input class="form-control" type="text" name="bulan" size="10" placeholder="Bulan.">
                    <input class="form-control" type="text" name="tahun" size="5" placeholder="Tahun."></td>
            </tr>
            <tr>
                <td>SPP / Nominal yang harus dibayar</td>
                <td><select class="form-control" name="spp">
<?php
// Ambil juga data SPP
$spp = mysqli_query($conn, "SELECT * FROM spp");
while($r = mysqli_fetch_assoc($spp)){ ?>
                        <option value="<?= $r['id_spp']; ?>">
                        <?= $r['bulan'] . " | " . $r['tahun'] . " | " . $r['nominal']; ?></option>
<?php } ?>          </select></td>
            </tr>
            <tr>
                <td>Jumlah bayar</td>
                <td><input class="form-control" type="text" name="jumlah" placeholder="1000000"></tdd>
            </tr>
            <tr>
                <td colspan="2">
                <button class="btn btn-outline-dark" onclick="history.back()" type="button">Kembali</button>
                <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
            </td>
            </tr>
        </table>
</div>

<?php
include "../Petugas/footer_petugas.php";
?>
<?php
// Kita simpan proses simpan datanya disini
if(isset($_POST['simpan'])){
    $petugas = $_POST['petugas'];
    $nama = $_POST['siswa'];
    $tgl = $_POST['tgl']; $bulan = $_POST['bulan']; $tahun = $_POST['tahun'];
    $spp = $_POST['spp'];
    $cek = mysqli_query($conn, "SELECT * FROM pembayaran WHERE nisn='$nama'");
    $ambil = mysqli_fetch_assoc($cek);
    $jumlah = $_POST['jumlah'];
    if($spp == $ambil['id_spp']){
        echo "<script>alert('Tahun spp tersebut sudah ada pada siswa');</script>";
    }else{
    $s = mysqli_query($conn,"INSERT INTO pembayaran VALUES
                (NULL, '$petugas', '$nama', '$tgl', '$bulan', '$tahun', '$spp', '$jumlah')");
    // Arahkan ke menu transaksi
    if($s){
        echo "<script>alert('Data Berhasil Ditambahkan !');location.href='../Petugas/histori_pembayaran.php';</script>";
    }else{
        $error = mysqli_error($conn);
        echo $error;
        echo "<script>alert('Data gagal disimpan : '$error' !');location.href='tambah_transaksi.php'</script>";
    }}}
?>