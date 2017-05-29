<?php
    include_once('../../config/init.php');
    include_once('../common/header.php');
  	include_once ('../../database/events.php');

    $id = $_GET['id'];
    $create = $_GET['create'];
    if($create == 0){
      $info = getEventInfo($_GET['id']);
    }

    if($create == 0 && $info != null){
      if(isEventFromUser($_SESSION['id'], $_GET['id'])){
        $smarty->assign('id',$id);
        $smarty->assign('info',$info);
        $smarty->assign('create', $create);
        $smarty->display('events/editEvent.tpl');
      }
      else{
        $smarty->display('common/notReachable.tpl');
      }

    }
    else if($create == 1){
      $smarty->display('events/editEvent.tpl');
    }
    else{
      $smarty->display('common/error.tpl');
    }

    include_once('../common/footer.php');

?>
