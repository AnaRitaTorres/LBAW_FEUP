<?php
  $picture = $_SESSION['picture'];
  $username = $_SESSION['username'];
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
  $profilePath = "../users/profilePage.php?id=";
  $profilePath .= $_SESSION['id'];

  $smarty->assign('picture', $picture);
  $smarty->assign('username', $username);
  $smarty->assign('name', $name);
  $smarty->assign('email', $email);
  $smarty->assign('profilePath', $profilePath);

  $smarty->display('users/functions.tpl');
  $smarty->display('users/logout.tpl');
?>
