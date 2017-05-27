<?php
  include_once('../../config/init.php');
  include_once('../common/header.php');
  include_once ('../../database/events.php');
  include_once ('../../database/publications.php');
  include_once ('../../database/users.php');

  $idevent = $_GET['id'];
	$info = getEventInfo($idevent);

  if($info == null){
     $smarty->display('common/erro.tpl');
  }

  else{
    $smarty->assign('info', $info);
    $smarty->assign('idevent', $idevent);

    $smarty->display('events/event1.tpl');

    $i=0;
    for (; $i < $info['average_rate']; $i++) {
      $smarty->display('events/emptyStar.tpl');
    }
    for(;$i < 5; $i++){
      $smarty->display('events/fullStar.tpl');
    }

    $smarty->display('events/event2.tpl');

    if ($_SESSION['username'] != NULL){
      if(isEventFromUser($_SESSION['id'], $_GET['id'])){
        $smarty->display('events/signedButtons.tpl');
    	}
      else{
        if(isGoingToTheEvent($_SESSION['id'], $_GET['id']))
          $smarty->display('events/unsignedGoing.tpl');
        else
          $smarty->display('events/unsignedButtons.tpl');
      }
    }
    $smarty->display('events/event3.tpl');

    $publications = getEventPublication($_GET['id']);

    if ($_SESSION['username'] != NULL){
      $session = $_SESSION;
      $smarty->assign('session', $session);
      $smarty->display('events/createPublication.tpl');
    }

    foreach($publications as $pub){
      $user = getUserInformation($pub['idcustomer']);
      $userLink = "../users/profilePage.php?id=";
      $userLink .= $user['idcustomer'];

      $smarty->assign('user', $user);
      $smarty->assign('userLink', $userLink);
      $smarty->assign('pub', $pub);
      $smarty->display('events/publication.tpl');

      $replys = getPublicationReplys($pub['idpub']);
      $smarty->assign('idpub', $pub['idpub']);

      if ($_SESSION['username'] != NULL)
        //só dar display quando se clica no botão de reply
        $smarty->display('events/createReply.tpl');

      foreach($replys as $rep){
        $userR = getUserInformation($rep['idcustomer']);
        $userRLink = "../users/profilePage.php?id=";
        $userRLink .= $userR['idcustomer'];

        $smarty->assign('userR', $userR);
        $smarty->assign('userRLink', $userRLink);
        $smarty->assign('rep', $rep);
        $smarty->display('events/reply.tpl');
      }
    }

    $smarty->display('events/event4.tpl');
  }

  include_once('../common/footer.php');

?>
