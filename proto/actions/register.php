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

    echo $password;
    echo $rPassword;

    if( strcmp($password, $rPassword) == 0){


        createUser($date, $email, $gender, $name, $surname, $username, $password, $phone);

        session_start();

        $userInfo = getUserInfo($username);

        $_SESSION['username'] = $username;    
        $_SESSION['id'] = $userInfo['idCustomer'];
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        $_SESSION['name'] .= " ";
        $_SESSION['name'] .= $surname;
        $_SESSION['picture'] = $userInfo['picture'];
        header('Location: ../index.php');
    }

    
    
}

?>
