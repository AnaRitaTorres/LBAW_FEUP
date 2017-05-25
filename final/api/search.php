<?php
  include_once('../../config/init.php');
  include_once('../common/header.php');
  include_once ('../../database/events.php');
  
  $event = $_GET["Search"];

  $events = searchEventsString($_GET['Search']);

  echo json_encode($events);
?>
