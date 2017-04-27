<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  
  session_start();
  

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (!$_POST['password'] || !$_POST['new'] || !$_POST['repeat']){
				$_SESSION['error_messages'][] = 'All fields are mandatory';
				header("Location: ../../pages/users/changePassword.php");
		}
		
        $password = $_POST['password'];
        $newPassword = $_POST['new'];
        $rPassword = $_POST['repeat'];
        $username = $_SESSION['username'];
        $id = $_SESSION['id'];
        if(isset($username)){
			if (isLoginCorrect($username, $password)){
				if(strcmp($newPassword, $rPassword) == 0){
					updateUserPassword($id, $newPassword);
					header("Location: $BASE_URL" . 'index.php');
				}
				else
				{
					$_SESSION['field_errors']['new'] = 'Passwords do not match!';
					header("Location: ../../pages/users/changePassword.php");
				}
					
			}
			else{
				$_SESSION['field_errors']['password'] = 'Passwords is not correct!';
				header("Location:  ../../pages/users/changePassword.php");
			}
        }
		
    }
    
  ?>