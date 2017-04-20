<?php
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/events.php');
  
    
  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	deleteEvent($_GET['id']); 
	header('Location: ../pages/home.php');
  }

?>