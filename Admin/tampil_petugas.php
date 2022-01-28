<?php
include '../Admin/header_admin.php'
?>
<h3>Tampil Petugas | <a href="tambah_petugas.php" class="btn btn-outline-dark">Tambah petugas</a></h3><br>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>USERNAME</th>
                    <th>NAMA PETUGAS</th>
                    <th>LEVEL</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../koneksi.php";
                $qry_petugas = mysqli_query($conn, "select * from petugas");
                $no = 0;
                while ($data_petugas = mysqli_fetch_array ($qry_petugas)){
                    $no++; ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$data_petugas['username']?></td>
                        <td><?=$data_petugas['nama_petugas']?></td>
                        <td><?=$data_petugas['level']?></td>
                        <td><a href="ubah_petugas.php?id_petugas=<?=$data_petugas['id_petugas']?>" 
                        >Ubah</a> | <a href="del_petugas.php?id_petugas=<?=$data_petugas['id_petugas']?>" 
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