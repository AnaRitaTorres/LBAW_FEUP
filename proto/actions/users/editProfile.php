<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	  
	if (!$_POST['Name'] || !$_POST['Surname'] || !$_POST['Gender'] || !$_POST['date'] || !$_POST['PhoneNumber'] ||!$_POST['EmailAddress'])
	{
		$_SESSION['error_messages'][] = 'All fields are mandatory';
		header("Location: ../../pages/users/editProfile.php");
	} 
	
  	$name = strip_tags($_POST['Name']);
  	$surname =  strip_tags($_POST['Surname']);
  	$birthday =  $_POST['date'];
  	$gender =  $_POST['Gender'];
  	$phoneNumber =  strip_tags($_POST['PhoneNumber']);
  	$email =  strip_tags($_POST['EmailAddress']);
  	$username = $_SESSION['username'];

	try {
		updateUser($username, $name, $surname, $birthday, $gender, $phoneNumber,  $email);
	} catch (PDOException $e){
        
	if (strpos($e->getMessage(), 'age') !== false) {
		$_SESSION['field_errors']['date'] = 'Error inserting date';
		header('Location: ../../pages/users/editProfile.php');
	}
	else $_SESSION['error_messages'][] = 'Error editing user';
		header('Location: ../../pages/users/editProfile.php');
		exit;
	}
  	
	$_SESSION['name'] = $name;
  	$_SESSION['name'] .= " ";
  	$_SESSION['name'] .= $surname;
  	$_SESSION['date'] = $birthday;
  	$_SESSION['gender'] = $gender;
  	$_SESSION['phone'] = $phoneNumber;
  	$_SESSION['email'] = $email;
  	$_SESSION['username'] = $username;

  	header('Location: ../../pages/users/profilePage.php');
  }
?>
