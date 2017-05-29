<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/events.php');

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   $create = $_POST['create'];


   $title = strip_tags($_POST['EventTitle']);
   $type = $_POST['EventType'];
   $district = strip_tags($_POST['Location']);
   $area = strip_tags($_POST['Area']);
   $address = strip_tags($_POST['address']);
   $zip_code = strip_tags($_POST['ZipCode']);
   $date = strip_tags($_POST['date']);
   $time =$_POST['EventTime'];
   $price = $_POST['EventPrice'];
   $overview = strip_tags($_POST['Overview']);
   $id = getEventID($title);
   $picture = '../../images/event-default.jpg';

   if (basename($_FILES["fileToUpload"]["name"]) != null){
     $target_dir = "../../images/";
     $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
     $uploadOk = 1;

     if (file_exists($target_file)) {
       $_SESSION['error_messages'][] = 'Change the name of the picture';
       $uploadOk = 0;
     }

     if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
       $_SESSION['error_messages'][] = 'Upload Photo Error';
       $uploadOk = 0;
     }

     if($uploadOk == 1){
       $picture = $target_file;
     }
   }
	
	
   if($create == 1){
        if(eventDateValid($date) == false){
          $_SESSION['field_errors']['date'] = 'Invalid date!';
          header('Location: ../../pages/events/editEvent.php?create=1');
        }
        else{
          try{
              if(strcmp($type, 'cinema')==0)
                  createCinemaEvent($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $_SESSION['id'], $picture);
                else if(strcmp($type, 'concert')==0)
                  createConcertEvent($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $_SESSION['id'], $picture);
                else if(strcmp($type, 'dance')==0)
                  createDanceEvent($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $_SESSION['id'], $picture);
                else if(strcmp($type, 'exhibition')==0)
                  createExhibitionEvent($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $_SESSION['id'], $picture);
                else if(strcmp($type, 'theatre')==0)
                  createTheatreEvent($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $_SESSION['id'], $picture);
                $id = getEventID($title);
          } catch (PDOException $e){
            if (strpos($e->getMessage(), 'PDOException') !== false) {
              $_SESSION['field_errors']['date'] = 'Invalid Date';
            }
            else $_SESSION['error_messages'][] = 'Error creating event';
            header('../../pages/events/editEvent.php?create=1');
          }
        }
    }
    else {
         $id = $_POST['id'];
        if(eventDateValid($date) == false){
            $_SESSION['field_errors']['date'] = 'Invalid date!';
            header('Location: ../../pages/events/editEvent.php?create=0&id=' . $id);
        }
        else{
            try{
              updateEvent($id, $title, $type, $district, $area, $address, $zip_code, $date, $time, $price, $overview, $picture);
              header('Location: ../../pages/events/eventPage.php?id=' . $id);
            }catch (PDOException $e){

              if (strpos($e->getMessage(), 'date') !== false) {
                  $_SESSION['field_errors']['date'] = 'Invalid Date';
              }
              else $_SESSION['error_messages'][] = 'Error Editing Event';

              header('Location: ../../pages/events/editEvent.php?create=0&id=' . $id);
            }
        }
    }
 }

?>
