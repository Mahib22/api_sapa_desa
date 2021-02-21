<?php

    include 'connect.php';

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $lokasi = $_POST['lokasi'];
    $img = $_POST['img'];
    $isi = $_POST['isi'];

    $con->query("UPDATE laporan SET judul='".$judul."', kategori='".$kategori."', lokasi='".$lokasi."', img='".$img."', isi='".$isi."' WHERE id=". $id);

?>