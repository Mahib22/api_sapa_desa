<?php

require "connect.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $response = array();
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $password = md5($_POST['password']);
    $cek = "SELECT * FROM masyarakat WHERE nik='$nik'";
    $result = mysqli_fetch_array(mysqli_query($con, $cek));

    if(isset($result)){
        $response['value'] = 2;
        $response['message'] = 'NIK Telah Terdaftar';
        echo json_encode($response);

    } else{
        $insert = "INSERT INTO masyarakat VALUE(NULL, '$nik', '$nama', '$telp', '$password')";
        if(mysqli_query($con, $insert)){
            $response ['value'] = 1;
            $response ['message'] = "Register Berhasil";
            echo json_encode($response);

        }else{
            $response['value'] = 0;
            $response['message'] = "Register Gagal";
            echo json_encode($response);
        }
    }
}

?>