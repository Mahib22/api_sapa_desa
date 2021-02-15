<?php

    include 'connect.php';

    $telp = $_POST['telp'];
    $password = md5($_POST['password']);
    
    $queryResult = $con->query("SELECT * FROM masyarakat WHERE telp='".$telp."' and password='".$password."'");

    $result = array();

    while($fetchData = $queryResult->fetch_assoc()){
        $result[] = $fetchData;
    }

    echo json_encode($result);

?>