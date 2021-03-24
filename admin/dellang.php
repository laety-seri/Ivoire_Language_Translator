<?php
 	include("connection.php");

 	if (isset($_GET['id'])) {
 		$id = $_GET['id'];
 		$query = "DELETE FROM langues WHERE id = $id";
 		$result = mysqli_query($con, $query);

 		if (!$result) {
 			die("Failed");
 		}
 		
 		header("location: dbd.php");

 	}
 ?>