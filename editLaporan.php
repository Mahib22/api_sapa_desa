<?php

    include 'connect.php';

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $lokasi = $_POST['lokasi'];
    $img = $_FILES['img']['name'];
    $isi = $_POST['isi'];

    $imagePath = "uploads/".$img;

    move_uploaded_file($_FILES['img']['tmp_name'],$imagePath);

    $con->query("UPDATE laporan SET judul='".$judul."', kategori='".$kategori."', lokasi='".$lokasi."', img='".$img."', isi='".$isi."' WHERE id=". $id);

?>