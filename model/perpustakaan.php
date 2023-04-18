<?php
class Perpustakaan{
    function __construct()
    {
        require 'model/koneksi.php';
    }
    function disp_buku()
    {
        $buku = $this->db->query('SELECT * FROM buku');
        $buku->execute();
        return $buku;
    }
    function disp_trx()
    {
        $trx = $this->db->query('SELECT a.judul, b.id, b.tanggal_pinjam, b.tanggal_kembali, c.nama FROM buku a JOIN transaksi b ON a.id = b.id_buku JOIN peminjam c ON c.id = b.id_peminjam');
        $trx->execute();
        return $trx;
    }
    function disp_peminjam()
    {
        $usr = $this->db->query('SELECT * FROM peminjam');
        $usr->execute();
        return $usr;
    }
}
?>