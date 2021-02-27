<?php

    include "connect.php";

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $level = $_POST['level'];
    $password = md5($_POST['password']);

    $sql = "SELECT email FROM users WHERE email = '".$email."'";

	$result = mysqli_query($con,$sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo json_encode("Error");
	}else{
		$insert = "INSERT INTO users(nama,email,level,password)VALUES('".$nama."','".$email."','".$level."','".$password."')";
		$query = mysqli_query($con,$insert);
		if ($query) {
			echo json_encode("Success");
		}
	}

?>