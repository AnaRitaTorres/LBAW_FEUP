<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/publications.php');
  include_once($BASE_DIR .'database/users.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $idevent = $_POST['idevent'];
    $idcustomer = $_SESSION['id'];

    $comment = $_POST['comment'];
    createPublication("comment", $idevent, $idcustomer,  $comment, null);

    $user = getUserInformation($_SESSION['id']);
    $userLink = "../users/profilePage.php?id=";
    $userLink .= $user['idcustomer'];
    $pub['comment'] = $comment;

    $smarty->assign('user', $user);
    $smarty->assign('userLink', $userLink);
    $smarty->assign('pub', $pub);
    $smarty->assign('session', $_SESSION);
    $smarty->display('events/publication.tpl');
    $smarty->display('events/createReply.tpl');
}


?>
