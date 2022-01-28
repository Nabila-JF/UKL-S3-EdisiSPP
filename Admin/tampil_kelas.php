<?php
include '../Admin/header_admin.php'
?>
<h3>Tampil Kelas | <a href="tambah_kelas.php" class="btn btn btn-outline-dark">Tambah Kelas</a></h3>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA KELAS</th>
                    <th>JURUSAN</th>
                    <th>ANGKATAN</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../koneksi.php";
                $qry_kelas = mysqli_query($conn, "select * from kelas");
                $no = 0;
                while ($data_kelas = mysqli_fetch_array ($qry_kelas)){
                    $no++; ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$data_kelas['nama_kelas']?></td>
                        <td><?=$data_kelas['jurusan']?></td>
                        <td><?=$data_kelas['angkatan']?></td>
                        <td><a href="ubah_kelas.php?id_kelas=<?=$data_kelas['id_kelas']?>" 
                        >Ubah</a> | <a href="del_kelas.php?id_kelas=<?=$data_kelas['id_kelas']?>" 
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