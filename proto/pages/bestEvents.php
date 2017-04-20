<?php
  include_once('../config/init.php');
  include_once('../database/events.php');
  
  $events = get5BestEvents();
  ?>
  <div class="col-sm-offset-0 col-sm-12">
 <nav class="navbar navbar-default ES">
  <ul class="event-list">
      <?php 
        foreach($events as $event){
          $time = date('g:ia', strtotime($event['time']));
          $orderdate = explode('-', $event['date']);
          $monthNum = $orderdate[0];
          $day   = $orderdate[1];
          $year  = $orderdate[2];
          $monthName = date('F', mktime(0, 0, 0, $monthNum, 10)); 
          $smarty->assign('month',$monthName);
          $smarty->assign('day',$day);
          $smarty->assign('year',$year);
          $smarty->assign('time',$time);
          $smarty->assign('event',$event);  
          $smarty->display('common/smartyListEvents.tpl');
        }
       ?>
</ul>
</nav>
</div>
