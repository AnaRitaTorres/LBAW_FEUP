<?php
include_once('../../config/init.php');


	function createCinemaEvent($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $idcustomer) {
		global $conn;
		$stmt = $conn->prepare("
			BEGIN;
			SET TRANSACTION ISOLATION LEVEL REPEATABLE READ;
			INSERT INTO event
			(address, district, area, zip_code, date, time, overview, price, title, type)
			VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);

			INSERT INTO host
			(idcustomer, idevent)
			VALUES (?, currval(pg_get_serial_sequence('event', 'idevent')));

			UPDATE statistics
			SET cinemacount = cinemacount + 1
			WHERE stattype = 'hosted'
			AND idcustomer = ?;
			COMMIT;
			");
			$stmt->execute(array($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $idcustomer, $idcustomer));
	}

	function createConcertEvent($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $idcustomer) {
		global $conn;
		$stmt = $conn->prepare("
			BEGIN;
			SET TRANSACTION ISOLATION LEVEL REPEATABLE READ;
			INSERT INTO event
			(address, district, area, zip_code, date, time, overview, price, title, type)
			VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);

			INSERT INTO host
			(idcustomer, idevent)
			VALUES (?, currval(pg_get_serial_sequence('event', 'idevent')));

			UPDATE statistics
			SET concertcount = concertcount + 1
			WHERE stattype = 'hosted'
			AND idcustomer = ?;
			COMMIT;
			");
			$stmt->execute(array($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $idcustomer, $idcustomer));
	}

	function createDanceEvent($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $idcustomer) {
		global $conn;
		$stmt = $conn->prepare("
			BEGIN;
			SET TRANSACTION ISOLATION LEVEL REPEATABLE READ;
			INSERT INTO event
			(address, district, area, zip_code, date, time, overview, price, title, type)
			VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);

			INSERT INTO host
			(idcustomer, idevent)
			VALUES (?, currval(pg_get_serial_sequence('event', 'idevent')));

			UPDATE statistics
			SET dancecount = dancecount + 1
			WHERE stattype = 'hosted'
			AND idcustomer = ?;
			COMMIT;
			");
			$stmt->execute(array($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $idcustomer, $idcustomer));
	}

	function createExhibitionEvent($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $idcustomer) {
		global $conn;
		$stmt = $conn->prepare("
			BEGIN;
			SET TRANSACTION ISOLATION LEVEL REPEATABLE READ;
			INSERT INTO event
			(address, district, area, zip_code, date, time, overview, price, title, type)
			VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);

			INSERT INTO host
			(idcustomer, idevent)
			VALUES (?, currval(pg_get_serial_sequence('event', 'idevent')));

			UPDATE statistics
			SET exhibitioncount = exhibitioncount + 1
			WHERE stattype = 'hosted'
			AND idcustomer = ?;
			COMMIT;
			");
			$stmt->execute(array($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $idcustomer, $idcustomer));
	}

	function createTheatreEvent($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $idcustomer) {
		global $conn;
		$stmt = $conn->prepare("
			BEGIN;
			SET TRANSACTION ISOLATION LEVEL REPEATABLE READ;
			INSERT INTO event
			(address, district, area, zip_code, date, time, overview, price, title, type)
			VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);

			INSERT INTO host
			(idcustomer, idevent)
			VALUES (?, currval(pg_get_serial_sequence('event', 'idevent')));

			UPDATE statistics
			SET theatrecount = theatrecount + 1
			WHERE stattype = 'hosted'
			AND idcustomer = ?;
			COMMIT;
			");
			$stmt->execute(array($address, $district, $area, $zip_code, $date, $time, $overview, $price, $title, $type, $idcustomer, $idcustomer));
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

	function searchEventsString($string){
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM event WHERE to_tsvector('english', TRIM(title)) @@ plainto_tsquery('english', TRIM(?)) OR title LIKE TRIM(?)");
		$stmt->execute(array($string, $string));
		return $stmt->fetchAll();
	}

	function get10NextEvents() {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM event WHERE event.date >= current_date ORDER BY date ASC LIMIT 10");
		$stmt->execute();
		return $stmt->fetchAll();
	}

?>
