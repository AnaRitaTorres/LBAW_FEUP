<?php
  include_once($BASE_DIR .'config/init.php');
  include_once($BASE_DIR .'database/users.php');

  $events = getUserEvents($_SESSION['id']);

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
?>
