<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/events.php');
  include_once($BASE_DIR .'database/users.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $idevent = $_POST['idevent'];
    $idcustomer = $_POST['idcustomer'];

    if(verifyIfIsHost($idcustomer, $idevent)){
      echo 'memHost';
    } else if (verifyHosts($idevent) >= 5){
      echo 'maxReached';
    } else {
      becameHost($idcustomer, $idevent);

      $user = getUserInformation($idcustomer);

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
