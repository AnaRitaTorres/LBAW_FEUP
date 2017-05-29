<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $search = $_POST['user'];

    if($string!=null){
      $users = searchUsersString($string);
    }
    else{
      $users = listUsers();
    }

    foreach($users as $user){

       $name = $user['name'];
       $surname = $user['surname'];
       $username = $user['username'];
       $link = "../../pages/users/profilePage.php?id=";
       $link .= $user['idcustomer'];
       $smarty->assign('user', $user);
       $smarty->assign('name',$name);
       $smarty->assign('username',$username);
       $smarty->assign('surname',$surname);
       $smarty->assign('link',$link);
       $smarty->display('users/listUsers.tpl');
    }

  }
?>
