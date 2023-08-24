<?php

// Mengkoneksikan web server dengan database utama
$koneksi = mysqli_connect('localhost', 'root', '', 'mst_server');

// Mengecek apabila koneksi mysql gagal
if (mysqli_connect_error()) {
    echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
} else {
    
}

// Mengambil data dari database
$dataServer = mysqli_query($koneksi, "SELECT * FROM data_server");
$commandServer = mysqli_query($koneksi, "SELECT * FROM command_server");

// Mengambil filter dari URL
$filter = isset($_GET['filter']) ? $_GET['filter'] : array();

?>