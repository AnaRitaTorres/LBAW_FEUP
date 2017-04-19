<?php
  
  function createEvent($address, $district, $area, $zip_code, $average_rate, $date, $time, $overview, $price, $title, $type, $picture) {
	  global $conn;
	  $stmt = $conn->prepare("INSERT INTO event (address, district, area, zip_code, average_rate, DATE, TIME, overview, price, title, TYPE, picture) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->execute(array($address, $district, $area, $zip_code, $average_rate, $date, $time, $overview, $price, $title, $type, $picture));
	}
	
	function getEventInfo($id) {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM event WHERE idEvent = ?");
		$stmt->execute(array($id));
	}
  
  function getUserEvents($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM tweets JOIN host USING(idCustomer) WHERE idCustomer = ? ORDER BY time DESC");
    $stmt->execute(array($id));
    return $stmt->fetchAll();
  }
  
  function get5BestEvents() {
	 global $conn;
	 $stmt = $conn->prepare("SELECT average_rate FROM event ORDER BY average_rate DESC LIMIT 5");
	 $stmt->execute();
     return $stmt->fetchAll();
  } 

?>
