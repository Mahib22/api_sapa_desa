<?php

	include 'connect.php';

	$id = $_POST['id'];

	$con->query("DELETE FROM laporan WHERE id=".$id);

?>