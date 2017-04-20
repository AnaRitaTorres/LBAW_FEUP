<?php
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  
  session_start();
  session_destroy();
  
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $username = trim(strip_tags($_POST['username']));
    $password = $_POST['password'];
    $rPassword = $_POST['repeat'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $phone = $_POST['phone'];

    if( strcmp($password, $rPassword) == 0){


        createUser($date, $email, $gender, $name, $surname, $username, $password, $phone);

        session_start();

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
        header('Location: ../index.php');
    }

    
    
}

?>
