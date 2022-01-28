<?php
require "../Petugas/header_petugas.php";
require "../koneksi.php";
?>

    <div class="all-table">
    <!-- Konten -->
    <h3>History Pembayaran Siswa</h3>

    <form class="formnya-history" action="" method="POST" autocomplete="off">
        <h3>Cari Siswa</h3> <input type="text" name="nisn" placeholder="Cari berdasarkan NISN"> <button class="btn btn-outline-dark" type="submit" name="cari">Cari</button>
    </form>

<?php
// Kita lakukan proses pencariannya disini
if(isset($_POST['cari'])){
    $nisn = $_POST['nisn'];
    // Kita panggil table siswa
    $biodataSiswa = mysqli_query($conn, "SELECT * FROM siswa 
                    JOIN kelas ON siswa.id_kelas=kelas.id_kelas 
                    WHERE nisn='$nisn'");
    // Table pembayaran wajib kita panggil
    $historyPembayaran = mysqli_query($conn, "SELECT * FROM pembayaran
                         JOIN petugas ON pembayaran.id_petugas=petugas.id_petugas
                         JOIN spp ON pembayaran.id_spp=spp.id_spp
                         WHERE nisn='$nisn'
                         ORDER BY tgl_bayar");
    $r_siswa = mysqli_fetch_assoc($biodataSiswa);
?>
    <!-- Kita tampilkan Biodata Siswa -->
        <h3>Biodata Siswa</h3>
        <table class="table table-stripped" cellpadding="5">
    
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td><?= $r_siswa['nisn']; ?></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><?= $r_siswa['nis']; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $r_siswa['nama']; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?= $r_siswa['nama_kelas'] . " | " . $r_siswa['jurusan']; ?></td>
            </tr>
        </table>

        <!-- Sekarang kita tampilkan history pembayarannya -->
        <table class="table table-stripped" cellpadding="5" cellspacing="0" >
            <tr>
                <th>No. </th>
                <th>Tanggal Pembayaran</th>
                <th style="display:none">Pembayaran Melalui</th>
                <th>Tahun SPP | Nominal yang harus dibayar</th>
                <th>Jumlah yang sudah dibayar</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
<?php 
$no=1;
while($r_trx = mysqli_fetch_assoc($historyPembayaran)){ ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $r_trx['tgl_bayar'] . "/" . $r_trx['bulan_spp'] . "/" .
                        $r_trx['tahun_spp']; ?></td>
                <td style="display:none"><?= $r_trx['nama_petugas']; ?></td>
                <td><?= $r_trx['tahun'] . " | Rp. " . $r_trx['nominal']; ?></td>
                <td><?= "Rp. " . $r_trx['jumlah_bayar']; ?></td>
<?php
if($r_trx['jumlah_bayar'] == $r_trx['nominal']){ ?>
                <td><font style="color: aqua; font-weight: bold;">LUNAS</font></td>
                <td>-</td>
<?php }else{ ?> <td><font style="color: tomato; font-weight: bold;">BELUM LUNAS</font></td>
                <td><a href="../Petugas/transaksi.php?lunas&id=<?= $r_trx['id_pembayaran']; ?>">
                BAYAR LUNAS</a></td>
<?php } ?>
            </tr>
<?php $no++; }?>
        </table>
<?php } ?>
</div>
<br>
    <!-- Panggil footer -->

<?php require_once("../Petugas/footer_petugas.php"); ?>
