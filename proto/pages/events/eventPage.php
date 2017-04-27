<?php
  include_once('../../config/init.php');
  include_once('../common/header.php');
  include_once ('../../database/events.php');
  include_once ('../../database/publications.php');
  include_once ('../../database/users.php');

	$info = getEventInfo($_GET['id']);

  if($info == null){
     $smarty->display('common/erro.tpl');
  }

  else{
    $smarty->assign('info', $info);

    $smarty->display('events/event1.tpl');

    $i=0;
    for (; $i < $info['average_rate']; $i++) {
      $smarty->display('events/emptyStar.tpl');
    }
    for(;$i < 5; $i++){
      $smarty->display('events/fullStar.tpl');
    }

    $smarty->display('events/event2.tpl');

  	if(isEventFromUser($_SESSION['id'], $_GET['id'])){
      $smarty->display('events/signedButtons.tpl');
  	}
    else{
      $smarty->display('events/unsignedButtons.tpl');
    }

    $smarty->display('events/event3.tpl');

    $publications = getEventPublication($_GET['id']);

    foreach($publications as $pub){
      $user = getUserInformation($pub['idcustomer']);

      $smarty->assign('user', $user);
      $smarty->assign('pub', $pub);
      $smarty->display('events/publication.tpl');

      $replys = getPublicationReplys($pub['idpub']);

      foreach($replys as $rep){
        $userR = getUserInformation($rep['idcustomer']);

        $smarty->assign('userR', $userR);
        $smarty->assign('rep', $rep);
        $smarty->display('events/reply.tpl');
      }
    }

    $smarty->display('events/event4.tpl');
  }
  
  include_once('../common/footer.php');

?>
