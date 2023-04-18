<?php
require 'resource/noacc.php';
require 'model/perpustakaan.php';
$perpus = new Perpustakaan;

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    
}

?>