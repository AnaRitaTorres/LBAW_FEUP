<?php
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = strip_tags($_POST['Name']);
	$surname =  strip_tags($_POST['Surname']);
	$birthday =  $_POST['DateOfBirth'];
	$gender =  $_POST['Gender'];
	$phoneNumber =  strip_tags($_POST['PhoneNumber']);
	$email =  strip_tags($_POST['EmailAddress']);
	$username = $_SESSION['username'];

	updateUser($username, $name, $surname, $birthday, $gender, $phoneNumber,  $email);
	$_SESSION['name'] = $name;
	$_SESSION['name'] .= " ";
	$_SESSION['name'] .= $surname;
	$_SESSION['date'] = $birthday;
	$_SESSION['gender'] = $gender;
	$_SESSION['phone'] = $phoneNumber;
	$_SESSION['email'] = $email;
	$_SESSION['username'] = $username;
	
	//if($document.getElementById('Upload photo').value != null){
	//echo $_POST['Upload_photo'];
	/*if($_POST['Upload_photo'] != null){
		$id = $_SESSION['username'] + $_SESSION['id'];
		$fileImageName = "../images/$id.jpg";
		imagecreatefromjpeg($fileImageName);
		
		$idSmall = $id + "Small";
		$_SESSION['picture'] = $id;
		
		
		$fileImageNameSmall = "../images/$idSmall.jpg";
		
		move_uploaded_file($_FILES['image']['tmp_name'], $fileImageName);
		
		$original = imagecreatefromjpeg($fileImageName);
		
		$width = imagesx($original);
		$height = imagesy($original);
		$square = min($width, $height);
		
		$small = imagecreatetruecolor(100, 100);
		imagecopyresized($small, $original, 0, 0, ($width>$square)?($width-$square)/2:0, ($height>$square)?($height-$square)/2:0, 200, 200, $square, $square);
		imagejpeg($small, $fileImageNameSmall);
	}*/

	header('Location: ../pages/profilePage.php');

  }



?>
