<?php
include '../Admin/header_admin.php'
?>

<h3>Tampil Siswa | <a href="reg_siswa.php" class="btn btn-outline-dark">Tambah Siswa</a></h3>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NISN</th>
                    <th>NIS</th>
                    <th>NAMA SISWA</th>
                    <th>KELAS</th>
                    <th>ALAMAT</th>
                    <th>NO. TLP</th>
                    <th>USERNAME</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../koneksi.php";
                $qry_siswa = mysqli_query($conn, "select * from siswa join kelas on kelas.id_kelas = siswa.id_kelas");
                $no = 0;
                while ($data_siswa = mysqli_fetch_array ($qry_siswa)){
                    $no++; ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?= $data_siswa ['nisn']?></td>
                        <td><?= $data_siswa ['nis']?></td>
                        <td><?= $data_siswa ['nama']?></td>
                        <td><?=$data_siswa['nama_kelas']?></td>
                        <td><?=$data_siswa['alamat']?></td>
                        <td><?=$data_siswa['no_tlp']?></td>
                        <td><?=$data_siswa['username']?></td>
                        <td><a href="ubah_siswa.php?nisn=<?=$data_siswa['nisn']?>" 
                        >Ubah</a> | <a href="del_siswa.php?nisn=<?=$data_siswa['nisn']?>" 
                        onclick="return confirm('Apakah anda yakin menghapus data ini?')" 
                        >Hapus</a></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

<?php
include 'footer_admin.php'
?>