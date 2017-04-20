<?php
	include_once('../config/init.php');
	
	$id = $_SESSION['name'] + $_SESSION['id'];
	$idSmall = $id + "Small";
	
	$fileImageName = "images/$id.jpg";
	$fileImageNameSmall = "images/$idSmall.jpg";
	
	move_uploaded_file($_FILES['image']['tmp_name'], $fileImageName);
	
	$original = imagecreatefromjpeg($fileImageName);
	
	$width = imagesx($original);
	$height = imagesy($original);
	$square = min($width, $height);
	
	$small = imagecreatetruecolor(100, 100);
	imagecopyresized($small, $original, 0, 0, ($width>$square)?($width-$square)/2:0, ($height>$square)?($height-$square)/2:0, 200, 200, $square, $square);
	imagejpeg($small, $fileImageNameSmall);
	
	header('Location: ../pages/editProfile.php');
?>