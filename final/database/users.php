<?php
  include_once('../../config/init.php');

  function createUser($birthday, $email, $gender, $name, $surname, $username, $password, $phoneNumber) {
    global $conn;
	$age = getAge($birthday);
    $stmt = $conn->prepare("INSERT INTO customer (name, surname, email, gender, birthday, password, phoneNumber,age, username) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute(array($name, $surname, $email, $gender, $birthday, hash('sha256', $password), $phoneNumber,$age, $username));
  }

  function updateUserWPhoto($username, $name, $surname,$birthday, $gender, $phoneNumber, $email, $picture){
    global $conn;
    $stmt = $conn->prepare('UPDATE customer SET
								name = ?,
								surname = ?,
								birthday = ?,
								gender = ?,
								phonenumber = ?,
								email = ?,
                picture = ?
							WHERE username = ?');
    $stmt->execute(array($name, $surname, $birthday, $gender, $phoneNumber, $email, $picture, $username));
  }
	

  function updateUser($username, $name, $surname,$birthday, $gender, $phoneNumber, $email){
	global $conn;
	$age = getAge($birthday);
    $stmt = $conn->prepare('UPDATE customer SET
								name = ?,
								surname = ?,
								birthday = ?,
								gender = ?,
								phonenumber = ?,
								email = ?,age = ?
							WHERE username = ?');
    $stmt->execute(array($name, $surname, $birthday, $gender, $phoneNumber, $email, $age, $username));
  }

  function isLoginCorrect($username, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM customer WHERE username = ? AND password = ?");
    $stmt->execute(array($username, hash('sha256', $password)));
    return $stmt->fetch() == true;
  }

  function getUserInfo($username) {
	  global $conn;
	  $stmt = $conn->prepare("SELECT * FROM customer WHERE username = ?");
	  $stmt->execute(array($username));
	  return $stmt->fetch();
  }

  function getUserInformation($id) {
	  global $conn;
	  $stmt = $conn->prepare("SELECT * FROM customer WHERE idcustomer = ?");
	  $stmt->execute(array($id));
	  return $stmt->fetch();
  }

  function updateUserPassword($id, $password) {
	  global $conn;
    $stmt = $conn->prepare("UPDATE customer SET password=? WHERE idcustomer=?");
    $stmt->execute(array(hash('sha256',$password), $id));
  }

  function updateUserEmail($id, $email) {
	  global $conn;
    $stmt = $conn->prepare("UPDATE customer SET email=? WHERE idcustomer=?");
    $stmt->execute(array($email, $id));
  }

  function updateUserPicture($id, $path) {
	  global $conn;
    $stmt = $conn->prepare("UPDATE customer SET picture=? WHERE idcustomer=?");
    $stmt->execute(array($path, $id));
  }

  function getUserStatistics($id, $stattype){
    global $conn;
    $stmt = $conn->prepare("SELECT cinemacount, concertcount, dancecount, exhibitioncount, theatrecount FROM statistics WHERE stattype=? AND idcustomer=?");
    $stmt->execute(array($stattype, $id));
    return $stmt->fetch();
  }

	function getUserEvents($id) {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM event JOIN host USING(idevent) WHERE idcustomer = ? ORDER BY time DESC");
		$stmt->execute(array($id));
		return $stmt->fetchAll();
	}
	
	function getAge($birthday){
		$now = time();
		$dob = strtotime($birthday);
		$difference = $now - $dob;
		$age = floor($difference / 31556926);
		return $age;
	}

  function searchUsersString($string){
		global $conn;
		$stmt = $conn->prepare("SELECT *, ts_rank(to_tsvector(name),query) AS rank FROM customer, to_tsquery(?) AS query ORDER BY rank DESC");
		$string = $string.":*";
		$stmt->execute(array($string));
		return $stmt->fetchAll();
	}

	function listUsers(){
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM customer");
		$stmt->execute();
		return $stmt->fetchAll();
	}


?>
