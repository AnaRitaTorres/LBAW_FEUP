<?php
  $picture = $_SESSION['picture'];
  $username = $_SESSION['username'];
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];

  $smarty->assign('picture', $picture);
  $smarty->assign('username', $username);
  $smarty->assign('name', $name);
  $smarty->assign('email', $email);

  $smarty->display('users/functions.tpl');
  $smarty->display('users/logout.tpl');
?>
