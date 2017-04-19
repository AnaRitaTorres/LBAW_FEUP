<?php
  
  function createUser($birthday, $email, $gender, $name, $surname, $username, $password, $phoneNumber) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO customer (name, surname, email, gender, birthday, password, phoneNumber, username) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute(array($name, $surname, $email, $gender, $birthday, sha1($password), $phoneNumber, $username));
  }

  function isLoginCorrect($username, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM customer WHERE username = ? AND password = ?");
    $stmt->execute(array($username, sha1($password)));
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
    $stmt->execute(array(sha1($password), $id));
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

?>
