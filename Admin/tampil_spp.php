<?php
include '../Admin/header_admin.php'
?>

<h3>Tampil SPP | <a href="tambah_spp.php" class="btn btn-outline-dark">Tambah SPP</a></h3>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>ID SPP</th>
                    <th>BULAN</th>
                    <th>TAHUN</th>
                    <th>ANGKATAN</th>
                    <th>NOMINAL</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../koneksi.php";
                $qry_spp = mysqli_query($conn, "select * from spp");
                $no = 0;
                while ($data_spp = mysqli_fetch_array ($qry_spp)){
                    $no++; ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$data_spp['id_spp']?></td>
                        <td><?=$data_spp['bulan']?></td>
                        <td><?=$data_spp['tahun']?></td>
                        <td><?=$data_spp['angkatan']?></td>
                        <td><?=$data_spp['nominal']?></td>
                        <td><a href="ubah_spp.php?id_spp=<?=$data_spp['id_spp']?>" 
                        >Ubah</a> | <a href="del_spp.php?id_spp=<?=$data_spp['id_spp']?>" 
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