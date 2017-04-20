<?php
include_once('../config/init.php');


	function createEvent($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type) {
		global $conn;
		$stmt = $conn->prepare("INSERT INTO event (address, district, area, zip_code, DATE, TIME, overview, price, title, TYPE) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->execute(array($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type));
	}

	function getEventInfo($id) {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM event WHERE idevent = ?");
		$stmt->execute(array($id));
		return $stmt->fetch();
	}

	function getEventID($title) {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM event WHERE title = ?");
		$stmt->execute(array($title));
		return $stmt->fetch()['idevent'];
	}

	function getUserEvents($id) {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM event JOIN host USING(idCustomer) WHERE idCustomer = ? ORDER BY time DESC");
		$stmt->execute(array($id));
		return $stmt->fetchAll();
	}

	function get5BestEvents() {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM event ORDER BY average_rate DESC LIMIT 5");
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function updateEvent($idevent, $title, $type, $district, $area, $address, $zip_code, $date, $time, $price, $overview){
		global $conn;
		$stmt = $conn->prepare("UPDATE event SET
									title=?,
									type=?,
									district=?,
									area=?,
									address=?,
									zip_code=?,
									date=?,
									time=?,
									price=?,
									overview=?
								WHERE idevent=?");
		$stmt->execute(array($title, $type, $district, $area, $address, $zip_code, $date, $time, $price, $overview, $idevent));
	}

	function updatePicture($idevent, $path){
		global $conn;
		$stmt = $conn->prepare("UPDATE event SET picture=? WHERE idevent=?");
		$stmt->execute(array($path, $idevent));
	}

	function isEventFromUser($idcustomer, $idevent){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM host WHERE idcustomer = ? AND idevent = ?");
    $stmt->execute(array($idcustomer, $idevent));
    return $stmt->fetch() == true;

  }
  
  function becameHost($idcustomer, $idevent){
		global $conn;
		$stmt = $conn->prepare("INSERT INTO host (idcustomer, idevent) VALUES (?, ?)");
		$stmt->execute(array($idcustomer, $idevent));
  }
  
  function deleteEvent($idevent)
  {
	  global $conn;
		$stmt = $conn->prepare("DELETE FROM event WHERE idevent = ?");
		$stmt->execute(array($idevent));
  }
  
  
?>
