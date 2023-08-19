<?php

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

// Mengecek apakah checkbox "semua" terpilih
$semuaTerpilih = in_array('semua', $filter);
$availableFilters = array('tipe1', 'tipe2', 'tipe3', 'tipe4', 'tipe5');

?>