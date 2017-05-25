<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  	$name = strip_tags($_POST['Name']);
  	$surname =  strip_tags($_POST['Surname']);
  	$birthday =  $_POST['date'];
  	$gender =  $_POST['Gender'];
  	$phoneNumber =  strip_tags($_POST['PhoneNumber']);
  	$email =  strip_tags($_POST['EmailAddress']);
  	$username = $_SESSION['username'];
	$age = getAge($birthday);
	
	if($age < 18)
	{
		$_SESSION['field_errors']['age'] = 'Your age cannot be below 18';
		header('Location: ../../pages/users/editProfile.php');
	}
	
	else{
		if (basename($_FILES["fileToUpload"]["name"]) != null){
		$target_dir = "../../images/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;

		if (file_exists($target_file)) {
			$_SESSION['error_messages'][] = 'Change the name of the picture';
			$uploadOk = 0;
		}

		if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
			$_SESSION['error_messages'][] = 'Upload Photo Error';
		}

		if($uploadOk == 1){
			$_SESSION['picture'] = $target_file;
			updateUserWPhoto($username, $name, $surname, $birthday, $gender, $phoneNumber,  $email, $_SESSION['picture']);
		}
		}
		else{
		updateUser($username, $name, $surname, $birthday, $gender, $phoneNumber,  $email);
		}

		$_SESSION['name'] = $name;
		$_SESSION['name'] .= " ";
		$_SESSION['name'] .= $surname;
		$_SESSION['date'] = $birthday;
		$_SESSION['gender'] = $gender;
		$_SESSION['phone'] = $phoneNumber;
		$_SESSION['email'] = $email;
		$_SESSION['username'] = $username;


		header('Location: ../../pages/users/profilePage.php?id=' . $_SESSION['id']);
	}
  }
?>
