<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/publications.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $idpub = $_POST['idpub'];
    $idevent = $_POST['idevent'];
    $idcustomer = $_SESSION['id'];
    $description = $_POST['description'];

		createReply($idpub, $idcustomer, $description);

  }

	header("Location: $BASE_URL" . "pages/events/eventPage.php?id=$idevent");


?>
