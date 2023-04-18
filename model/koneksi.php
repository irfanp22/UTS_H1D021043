<?php
    $pdo = 'mysql:dbname=perpustakaan;host=localhost';
    $usr = 'root';
    $pass = '';
    $this->db = new PDO($pdo, $usr, $pass);
?>