<?php
  include_once('../../config/init.php');
  include_once('../common/header.php');
  include_once ('../../database/events.php');

  $smarty->display("events/searchPage.tpl");

  $string = $_GET['Search'];


  $events = searchEventsString($_GET['Search']);


 foreach($events as $event){
    $time = date('g:ia', strtotime($event['time']));
    $orderdate = explode('-', $event['date']);
    $monthNum = $orderdate[1];
    $day   = $orderdate[2];
    $year  = $orderdate[0];
    $monthName = date('F', mktime(0, 0, 0, $monthNum, 10));
    $link = "../../pages/events/eventPage.php?id=";
    $link .= $event['idevent'];
    $zone = $event['area'];
    $date = 'date' . $monthNum . $day . $year;
    $price = 'price' . ceil($event['price']);
    $type = $event['type'];
    $smarty->assign('zone', $zone);
    $smarty->assign('type', $type);
    $smarty->assign('date', $date);
    $smarty->assign('price', $price);
    $smarty->assign('month',$monthName);
    $smarty->assign('day',$day);
    $smarty->assign('year',$year);
    $smarty->assign('time',$time);
    $smarty->assign('event',$event);
    $smarty->assign('link', $link);
    $smarty->display('events/listEvents.tpl');
  }

  $smarty->display("events/closeEventSearch.tpl");

  include_once('../common/footer.php');
?>
