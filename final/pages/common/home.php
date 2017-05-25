<?php
 include_once('../../config/init.php');

 include_once('header.php');
 $smarty->display('home/home.tpl');

 include_once('../events/bestEvents.php');
 $smarty->display('home/closeHome.tpl');
 include_once('footer.php');

?>
