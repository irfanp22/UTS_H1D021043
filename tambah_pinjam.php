<?php
$title = 'Tambah Peminjaman';
require 'model/perpustakaan.php';
require 'resource/header.php';
$perpus = new Perpustakaan;
$peminjam = $perpus->disp_peminjam();
$buku = $perpus->disp_buku();
?>

<div class="container w-50">
    <h3 class="text-center my-3">Tambah Peminjaman</h3>
    <form action="aksi.php" method="post">
        <label for="buku">Buku:</label>
        <select name="buku" class="form-control sl2">
            <option value="">Masukan buku</option>
            <?php foreach($buku as $dt){} ?>
            <option value="<?= $dt['id'] ?>"><?= $dt['id'].' - '.$dt['judul'] ?></option>
        </select>
        <label for="peminjam">Peminjam:</label>
        <select name="peminjam" class="form-control sl2">
            <option value="">Masukan peminjam</option>
            <?php foreach($peminjam as $dt){} ?>
            <option value="<?= $dt['id'] ?>"><?= $dt['id'].' - '.$dt['nama'] ?></option>
        </select>
        <input type="submit" name="tambah_pinjam" value="Tambah" class="btn btn-primary mt-2">
    </form>
</div>

<?php
require 'resource/footer.php';
?>