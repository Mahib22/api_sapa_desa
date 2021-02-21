<?php

    include 'connect.php';

    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $lokasi = $_POST['lokasi'];
    $img = $_POST['img'];
    $isi = $_POST['isi'];

    $con->query("INSERT INTO laporan (judul,kategori,lokasi,img,isi) VALUES ('".$judul."','".$kategori."','".$lokasi."','".$img."','".$isi."')")

?>