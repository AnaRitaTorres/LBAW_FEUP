<?php
  include_once('../config/init.php');

  function createUser($birthday, $email, $gender, $name, $surname, $username, $password, $phoneNumber) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO customer (name, surname, email, gender, birthday, password, phoneNumber, username) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute(array($name, $surname, $email, $gender, $birthday, hash('sha256', $password), $phoneNumber, $username));
  }

  function updateUser($username, $name, $surname,$birthday, $gender, $phoneNumber, $email){
    global $conn;
    $stmt = $conn->prepare('UPDATE customer SET
								name = ?,
								surname = ?,
								birthday = ?,
								gender = ?,
								phonenumber = ?,
								email = ?
							WHERE username = ?');
    $stmt->execute(array($name, $surname, $birthday, $gender, $phoneNumber, $email, $username));
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
    $stmt = $conn->prepare("SELECT cinemacount, concertcount, dancecount, exhbitioncount, theatrecount FROM statistics WHERE stattype=? AND idcustomer=?");
    $stmt->execute(array($stattype, $id));
    return $stmt->fetch();
  }

?>
