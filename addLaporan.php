<?php

    include 'connect.php';

    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $lokasi = $_POST['lokasi'];
    $img = $_FILES['img']['name'];
    $isi = $_POST['isi'];

    $imagePath = "uploads/".$img;

    move_uploaded_file($_FILES['img']['tmp_name'],$imagePath);

    $con->query("INSERT INTO laporan (judul,kategori,lokasi,img,isi) VALUES ('".$judul."','".$kategori."','".$lokasi."','".$img."','".$isi."')")

?>