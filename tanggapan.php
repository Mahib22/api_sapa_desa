<?php

    include 'connect.php';

    $id = $_POST['id'];
    $tanggapan = $_POST['tanggapan'];

    $con->query("UPDATE laporan SET tanggapan='".$tanggapan."' WHERE id=". $id)

?>