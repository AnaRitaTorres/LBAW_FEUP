<?php
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/events.php');

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   $create = $_POST['create'];
   $title = strip_tags($_POST['EventTitle']);
   $type = $_POST['EventType'];
   $district = strip_tags($_POST['Location']);
   $area = strip_tags($_POST['Area']);
   $address = strip_tags($_POST['address']);
   $zip_code = strip_tags($_POST['ZipCode']);
   $date = strip_tags($_POST['EventDate']);
   $time =$_POST['EventTime'];
   $price = $_POST['EventPrice'];
   $overview = strip_tags($_POST['Overview']);
   $id = getEventID($title);

   if($create == 1){
      createEvent($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type);
      $id = getEventID($title);
	  becameHost($_SESSION['id'], $id);
    }
   else {
     $id = $_POST['id'];
     updateEvent($id, $title, $type, $district, $area, $address, $zip_code, $date, $time, $price, $overview);
   }


   header('Location: ../pages/eventPage.php?id='. $id .'');
 }

?>
