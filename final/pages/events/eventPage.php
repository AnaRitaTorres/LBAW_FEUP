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

    $val = intval($info['average_rate']);

	if($val===0){
		 for (; $i < 5; $i++) {
			 $smarty->display('events/emptyStar.tpl');
		 }
	}

    $i=0;
    for (; $i < $val; $i++) {
      $smarty->display('events/fullStar.tpl');
    }

    $smarty->display('events/event2.tpl');

    $newDate = date("m-d-Y", strtotime($info['date']));

    if ($_SESSION['username'] != NULL){
      if(eventDateValid($newDate)){
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
    }

    if ($_SESSION['username'] != NULL){
      $session = $_SESSION;
      $smarty->assign('session', $session);
    }

    $smarty->display('events/event3.tpl');

    $publications = getEventPublication($_GET['id']);

    if ($_SESSION['username'] != NULL){
      $smarty->display('events/createPublication.tpl');
    }

    foreach($publications as $pub){
      $user = getUserInformation($pub['idcustomer']);
      $userLink = "../users/profilePage.php?id=";
      $userLink .= $user['idcustomer'];

      $smarty->assign('idevent',$idevent);
      $smarty->assign('user', $user);
      $smarty->assign('userLink', $userLink);
      $smarty->assign('pub', $pub);

      $likes = countLikes($pub['idpub']);
      $smarty->assign('likes', $likes);

      if (isMyPublication($_SESSION['id'], $pub['idpub']) || isEventFromUser($_SESSION['id'], $_GET['id']))
          $clear = 1;
      else
          $clear = 0;

      $smarty->assign('clear', $clear);

      $smarty->display('events/publication.tpl');

      $replys = getPublicationReplys($pub['idpub']);
      $smarty->assign('idpub', $pub['idpub']);

      if ($_SESSION['username'] != NULL)
        $smarty->display('events/createReply.tpl');

      foreach($replys as $rep){
        if (isMyReply($_SESSION['id'], $rep['idreply']))
          $clear = 1;

          $smarty->assign('clear', $clear);

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

    $usersID = getEventHosts($idevent);

    foreach ($usersID as $id) {
      $user = getUserInformation($id['idcustomer']);

      $name = $user['name'];
      $surname = $user['surname'];
      $username = $user['username'];
      $link = "../../pages/users/profilePage.php?id=";
      $link .= $user['idcustomer'];
      $smarty->assign('user', $user);
      $smarty->assign('name',$name);
      $smarty->assign('username',$username);
      $smarty->assign('surname',$surname);
      $smarty->assign('link',$link);
      $smarty->display('users/listHosts.tpl');
    }



    $smarty->display('events/event5.tpl');
}

  include_once('../common/footer.php');

?>
