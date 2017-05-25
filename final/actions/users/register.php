<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      if (!$_POST['username'] || !$_POST['password'] || !$_POST['repeat'] || !$_POST['name'] || !$_POST['surname'] || !$_POST['gender'] || !$_POST['email']
      || !$_POST['date']){
    		$_SESSION['error_messages'][] = 'All fields are mandatory';
      }
    $password = $_POST['password'];
    $rPassword = $_POST['repeat'];
	$username = trim(strip_tags($_POST['username']));
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$phone = $_POST['phone'];
	$age = getAge($date);
	
	if($age < 18)
	{
		$_SESSION['field_errors']['age'] = 'Your age cannot be below 18';
		header("Location: $BASE_URL" . 'index.php');
	}
	else{
		if(strcmp($password, $rPassword) == 0){
			try {
				createUser($date, $email, $gender, $name, $surname, $username, $password, $phone);

			} catch (PDOException $e){
        
			if (strpos($e->getMessage(), 'customer_username_key') !== false) {
				$_SESSION['field_errors']['username'] = 'Username already exists';
			}
			else $_SESSION['error_messages'][] = 'Error creating user';
			header("Location: $BASE_URL" . 'index.php');
		
			}
			$userInfo = getUserInfo($username);
			$_SESSION['username'] = $username;
			$_SESSION['id'] = $userInfo['idcustomer'];
			$_SESSION['email'] = $userInfo['email'];
			$_SESSION['name'] = $userInfo['name'];
			$_SESSION['name'] .= " ";
			$_SESSION['name'] .= $userInfo['surname'];
			$_SESSION['picture'] = $userInfo['picture'];
			$_SESSION['gender'] = $userInfo['gender'];
			$_SESSION['date'] = $userInfo['birthday'];
			$_SESSION['phone'] = $userInfo['phonenumber'];
		
			$_SESSION['success_messages'][] = 'User registered successfully';  
		}
		else
		{
			$_SESSION['field_errors']['password'] = 'Passwords do not match';
			 
		}
	}

	header("Location: $BASE_URL" . 'index.php');
}

?>
