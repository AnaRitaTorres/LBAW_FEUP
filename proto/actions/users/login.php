<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = trim(strip_tags($_POST['username']));
    $password = $_POST['password'];

    if (isLoginCorrect($username, $password)) {

        $_SESSION['username'] = $username;

        $userInfo = getUserInfo($username);

        $_SESSION['id'] = $userInfo['idcustomer'];
        $_SESSION['email'] = $userInfo['email'];
        $_SESSION['name'] = $userInfo['name'];
        $_SESSION['name'] .= " ";
        $_SESSION['name'] .= $userInfo['surname'];
        $_SESSION['picture'] = $userInfo['picture'];
        $_SESSION['gender'] = $userInfo['gender'];
        $_SESSION['date'] = $userInfo['birthday'];
        $_SESSION['phone'] = $userInfo['phonenumber'];
		$_SESSION['success_messages'][] = 'Login successful';
    }
	else
	{
		 $_SESSION['error_messages'][] = 'Login failed';
	}
     header("Location: $BASE_URL" . 'index.php');
}

?>
