<?php
  include_once('../../config/init.php');
  include_once('../common/header.php');
  include_once ('../../database/users.php');

  $info = getUserInfo($_SESSION['username']);

  $smarty->assign('info', $info);

  $smarty->display('users/editUser.tpl');

  include_once('../common/footer.php');
?>
