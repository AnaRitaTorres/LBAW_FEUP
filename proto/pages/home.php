 <?php
include_once('header.php');
?>
	<div class="row">
       <div class="col-md-12 ">
           <nav id="event-image" class="navbar navbar-default">

             <div class="row">
                    <div class="col-md-6">
                    <img src="../images/events.png" alt="" class="img-responsive">
                    </div>
                     <div class="col-md-6 text-center">
                    <div class="title">
                      <h1>evO</h1>
                      <h3>The Best Event Manager!</h3>
                    </div>
                     </div>
             </div>
            </nav>
       </div>
   </div>
   <div class="row">
    <div class="col-md-12">
    <div class="gira">
      <br/>
      <br/>
      <ul class="event-list">
          <div class="topic">
              <h4>Top 5</h4>
            </div>

             <?php
             include_once('bestEvents.php');
             ?>
         </ul>
    </div>
    </div>
  </div>
<?php
include_once('footer.php');
?>
        
