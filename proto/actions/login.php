<?php
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  
  session_start();
  session_destroy();
  
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $username = trim(strip_tags($_POST['username']));
    $password = $_POST['password'];
        
    if (isLoginCorrect($username, $password)) {
        session_start();
        
        $_SESSION['username'] = $username;

        $userInfo = getUserInfo($username);

        $_SESSION['id'] = $userInfo['idCustomer'];
        $_SESSION['email'] = $userInfo['email'];
        $_SESSION['name'] = $userInfo['name'];
        $_SESSION['name'] .= " ";
        $_SESSION['name'] .= $userInfo['surname'];
        $_SESSION['picture'] = $userInfo['picture'];
    }
    header('Location: ../index.php');
}

?>
