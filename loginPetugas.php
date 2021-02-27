<?php

    include "connect.php";

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $queryResult=$con->query("SELECT * FROM users WHERE email='".$email."' and password='".$password."' ");

	$result=array();

	while($fetchData=$queryResult->fetch_assoc()){
		$result[]=$fetchData;
	}
    
	echo json_encode($result);

?>