<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/publications.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $type = "comment";
    $idevent = $_POST['idevent'];
    $idcustomer = $_SESSION['id'];
    $date = '1/5/2016';
    $comment = $_POST['comment'];

		createPublication("$type", $idevent, $idcustomer, $date, $comment, null);

  }

	header("Location: $BASE_URL" . "pages/events/eventPage.php?id=$idevent");


?>
