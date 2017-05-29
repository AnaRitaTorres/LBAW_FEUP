<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/events.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $idevent = $_POST['idevent'];
    $idcustomer = $_SESSION['id'];
    $rate = $_POST['rate'];

    if(userRated($idevent, $idcustomer)){
       updateRateEvent($idevent, $idcustomer, $rate);
    } else {
      rateEvent($idevent, $idcustomer, $rate);
    }

    $info = getEventInfo($idevent);

    $val = intval($info['average_rate']);

    $i=0;
    for (; $i < $val; $i++) {
      $smarty->display('events/fullStar.tpl');
    }
  }

?>
