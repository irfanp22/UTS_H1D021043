<?php
$title = 'Perpustakaan';
//require 'resource/cek.php';
require 'model/perpustakaan.php';
require 'resource/header.php';
$perpus = new Perpustakaan;
$buku = $perpus->disp_buku();
$trx = $perpus->disp_trx();
?>
<div class="container">
    <h1 class="text-center">Daftar Buku</h1>
    <a class="btn btn-primary my-3" href="">Tambah Buku</a>
    <table id="tb_buku" class="display">
        <thead>
            <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>ISBN</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach($buku as $dt){?>
                <td><?= $dt['id'] ?></td>
                <td><?= $dt['judul'] ?></td>
                <td><?= $dt['pengarang'] ?></td>
                <td><?= $dt['ISBN'] ?></td>
                <td><a href="" class="btn btn-warning">Edit</a> | 
                    <a href="" class="btn btn-danger">Hapus</a></td>
                <?php } ?>
            </tr>
        </tbody>
    </table>

    <h1 class="text-center mt-5">Daftar Transaksi</h1>
    <a class="btn btn-primary my-3" href="tambah_pinjam.php">Tambah Peminjaman</a>
    <table id="tb_transaksi" class="display">
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>Judul Buku</th>
                <th>Peminjam</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <div class="badge badge-warning">On Process</div>
                <?php foreach($trx as $dt){?>
                <td><?= $dt['id'] ?></td>
                <td><?= $dt['judul'] ?></td>
                <td><?= $dt['nama'] ?></td>
                <td><?= $dt['tanggal_pinjam'] ?></td>
                <td><?= $dt['tanggal_kembali'] ?></td>
                <td><?php if($dt['tanggal_kembali']==NULL) echo 'On Process';
                            else echo 'Done' ?></td>
                <td><a href="" class="btn btn-warning">Edit</a> | 
                    <a href="" class="btn btn-danger">Hapus</a></td>
                <?php } ?>
            </tr>
        </tbody>
    </table>
</div>
<?php require 'resource/footer.php'; ?>