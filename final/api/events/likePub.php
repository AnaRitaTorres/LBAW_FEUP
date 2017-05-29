<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/publications.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $idpub = $_POST['idpub'];
    $idcustomer = $_SESSION['id'];

    if( userLiked($idpub, $idcustomer)){
      unlikePublication($idpub, $idcustomer);
    } else{
      likePublication($idpub, $idcustomer);
    }
  }

  $likes = countLikes($idpub);

	echo $likes;
?>
