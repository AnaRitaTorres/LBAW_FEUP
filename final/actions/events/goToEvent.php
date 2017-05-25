<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/events.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $idcustomer = $_SESSION['id'];
    $idevent = $_POST['idevent'];

    $eventInfo = getEventInfo($idevent);

    if(strcmp($eventInfo['type'], 'cinema')==0)
      goToCinemaEvent($idcustomer, $idevent);
    else if(strcmp($eventInfo['type'], 'concert')==0)
      goToConcertEvent($idcustomer, $idevent);
    else if(strcmp($eventInfo['type'], 'dance')==0)
      goToDanceEvent($idcustomer, $idevent);
    else if(strcmp($eventInfo['type'], 'exhibition')==0)
      goToExhibitionEvent($idcustomer, $idevent);
    else if(strcmp($eventInfo['type'], 'theatre')==0)
      goToTheatreEvent($idcustomer, $idevent);
  }

  header('Location: ../../pages/events/eventPage.php?id='. $idevent .'');

?>
