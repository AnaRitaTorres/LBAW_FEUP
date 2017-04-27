<?php
  include_once('../../config/init.php');
  include_once('../common/header.php');
	include_once ('../../database/users.php');

  $picture = $_SESSION['picture'];
  $name = $_SESSION['name'];
  $username = $_SESSION['username'];
  $date = $_SESSION['date'];
  $gender = $_SESSION['gender'];
  $email = $_SESSION['email'];
  $phone = $_SESSION['phone'];

  $smarty->assign('picture', $picture);
  $smarty->assign('name', $name);
  $smarty->assign('username', $username);
  $smarty->assign('date', $date);
  $smarty->assign('gender', $gender);
  $smarty->assign('email', $email);
  $smarty->assign('phone', $phone);

  $smarty->display('users/profile1.tpl');

	include_once('../users/userEvents.php');

  $hosted = getUserStatistics($_SESSION['id'], 'hosted');
	$invited = getUserStatistics($_SESSION['id'], 'invited');

  $smarty->display('users/profile2.tpl');

  include_once('../common/footer.php');
?>
