<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/publications.php');
  include_once($BASE_DIR .'database/users.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $idreply = $_POST['idreply'];

    deleteReply($idreply);
}


?>
