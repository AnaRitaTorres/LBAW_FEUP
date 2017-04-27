<?php
    include_once('../../config/init.php');
    include_once('../common/header.php');
  	include_once ('../../database/events.php');

    $id = $_GET['id'];
    $create = $_GET['create'];
    if($create == 0){
      $info = getEventInfo($_GET['id']);
    }

    $smarty->assign('create',$create);
    $smarty->assign('id',$id);
    $smarty->assign('info',$info);
    $smarty->display('events/editEvent.tpl');

    include_once('../common/footer.php');

?>
