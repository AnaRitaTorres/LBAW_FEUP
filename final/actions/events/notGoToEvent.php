<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/events.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $idcustomer = $_SESSION['id'];
    $idevent = $_POST['idevent'];

    $eventInfo = getEventInfo($idevent);

    if(strcmp($eventInfo['type'], 'cinema')==0)
      notGoToCinemaEvent($idcustomer, $idevent);
    else if(strcmp($eventInfo['type'], 'concert')==0)
      notGoToConcertEvent($idcustomer, $idevent);
    else if(strcmp($eventInfo['type'], 'dance')==0)
      notGoToDanceEvent($idcustomer, $idevent);
    else if(strcmp($eventInfo['type'], 'exhibition')==0)
      notGoToExhibitionEvent($idcustomer, $idevent);
    else if(strcmp($eventInfo['type'], 'theatre')==0)
      notGoToTheatreEvent($idcustomer, $idevent);
  }

  header('Location: ../../pages/events/eventPage.php?id='. $idevent .'');

?>
