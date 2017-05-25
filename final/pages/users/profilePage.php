<?php
  include_once('../../config/init.php');
  include_once('../common/header.php');
	include_once ('../../database/users.php');

  $info = getUserInformation($_GET['id']);

  if($info == null){
     $smarty->display('common/erro.tpl');
  }

  else{
    $picture = $info['picture'];
    $name = $info['name'];
    $name .= " ";
    $name .= $info['surname'];
    $username = $info['username'];
    $date = $info['birthday'];
    $gender = $info['gender'];
    $email = $info['email'];
    $phone = $info['phonenumber'];
    $id = $_GET['id'];

    $smarty->assign('picture', $picture);
    $smarty->assign('name', $name);
    $smarty->assign('username', $username);
    $smarty->assign('date', $date);
    $smarty->assign('gender', $gender);
    $smarty->assign('email', $email);
    $smarty->assign('phone', $phone);
    $smarty->assign('id', $id);

    $smarty->display('users/profile1.tpl');

    $events = getUserEvents($id);

     foreach($events as $event){
        $time = date('g:ia', strtotime($event['time']));
        $orderdate = explode('-', $event['date']);
         $day = $orderdate[2];
        $monthNum = $orderdate[1];
        $year  = $orderdate[0];
        $monthName = date('F', mktime(0, 0, 0, $monthNum, 10));
        $link = "../../pages/events/eventPage.php?id=";
        $link .= $event['idevent'];
        $smarty->assign('month',$monthName);
        $smarty->assign('day',$day);
        $smarty->assign('year',$year);
        $smarty->assign('time',$time);
        $smarty->assign('event',$event);
        $smarty->assign('link', $link);
        $smarty->display('events/listEvents.tpl');
      }

    $hosted = getUserStatistics($id, 'hosted');
  	$invited = getUserStatistics($id, 'invited');

    $smarty->assign('hosted', json_encode($hosted));
    $smarty->assign('invited', json_encode($invited));

    $smarty->display('users/profile2.tpl');
  }

  include_once('../common/footer.php');
?>
