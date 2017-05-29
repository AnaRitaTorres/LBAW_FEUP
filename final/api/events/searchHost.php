<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  include_once($BASE_DIR .'database/events.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $idevent = $_POST['idevent'];
    $username = $_POST['username'];

    if($username != null){
      $users = searchUsersString($username);
    }
    else{
      $users = listUsers();
    }

    foreach ($users as $user) {

      $name = $user['name'];
      $surname = $user['surname'];
      $username = $user['username'];
      $link = "../../pages/users/profilePage.php?id=";
      $link .= $user['idcustomer'];
      $smarty->assign('idevent', $idevent);
      $smarty->assign('user', $user);
      $smarty->assign('name',$name);
      $smarty->assign('username',$username);
      $smarty->assign('surname',$surname);
      $smarty->assign('link',$link);
      $smarty->display('users/listUsersToAdd.tpl');
    }

	}
?>
