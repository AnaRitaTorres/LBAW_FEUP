<?php
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  
  session_start();
  session_destroy();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $password = $_POST['password'];
        $newPassword = $_POST['new'];
        $rPassword = $_POST['repeat'];
        $username = $_SESSION['username'];
        $id = $_SESSION['id'];
        
        if (isLoginCorrect($username, $password)) {
         if(strcmp($newPassword, $rPassword) == 0){
                updateUserPassword($id, $newPassword);
              }
        }
    }
     header('Location: ../index.php');


  ?>