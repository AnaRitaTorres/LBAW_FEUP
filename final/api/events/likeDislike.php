<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/publications.php');
  include_once($BASE_DIR .'database/users.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $idpub = $_POST['idpub'];
    $idevent = $_POST['idevent'];
    $nlikes = $_POST['nlikes'];
    $idcustomer = $_POST['idcustomer'];

    updateLikes($idpub, $idevent, $idcustomer, $nlikes);

    $likes = getLikes($idpub, $idevent, $idcustomer);
    $smarty->assign('likes', $likes);
  }

?>