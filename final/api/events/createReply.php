<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/publications.php');
  include_once($BASE_DIR .'database/users.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $idpub = $_POST['idpub'];
    $idevent = $_POST['idevent'];
    $idcustomer = $_SESSION['id'];
    $description = $_POST['description'];

		createReply($idpub, $idcustomer, $description);

    $userR = getUserInformation($_SESSION['id']);
    $userRLink = "../users/profilePage.php?id=";
    $userRLink .= $_SESSION['id'];

    $rep['description'] = $description;

    $smarty->assign('userR', $userR);
    $smarty->assign('userRLink', $userRLink);
    $smarty->assign('rep', $rep);
    $smarty->display('events/reply.tpl');

  }

?>
