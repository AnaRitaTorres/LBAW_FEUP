<?php
    include_once('../pages/header.php');
  	include_once ('../database/events.php');

    $create = $_GET['create'];
    if($create == 0){
      $info = getEventInfo($_GET['id']);
    }
?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"
/>

    <div class="row">
      <div class="col-md-10 ">
        <form class="form-horizontal" method="post" action="../actions/createEvent.php">
          <input type="hidden" name="create" value=<?php echo $create ?> />
          <input type="hidden" name="id" value=<?php echo $_GET['id'] ?> />
          <fieldset>
            <!-- Form Name -->
            <?php
              if($create == 1){
                echo '<legend>Create Event</legend>';
              }
              else{
                echo '<legend>Edit Event</legend>';
              }
             ?>
            <!-- Event Title input-->
           <div class="form-group">
            <label class="col-md-4 control-label" for="EventTitle">Event Title</label>
            <div class="col-md-4">
             <div class="input-group">
              <div class="input-group-addon">
                <i class="glyphicon glyphicon-music"></i>
              </div>
                <input id="EventTitle" name="EventTitle" type="text" placeholder="Event Title" class="form-control input-md" value=<?php if($create == 0)echo $info['title'] ?>>
              </div>
            </div>
          </div>
 	  <!-- Gender Radios (inline) -->
	 <div class="form-group">
  		 <label class="col-md-4 control-label" for="EventType">Type</label>
		   <div class="col-md-4">
  		    <select class="form-control col-md-4" id="EventType" name="EventType">
    	              <option>theatre</option>
                      <option>exhibition</option>
                      <option>cinema</option>
                      <option>concert</option>
		      <option>dance</option>
                   </select>
           </div>
         </div>
            <!-- Upload Photo Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Upload photo">Upload photo</label>
            <div class="col-md-4">
              <input id="Upload photo" name="Upload photo" class="input-file" type="file">
            </div>
         </div>

        <!-- Adress inputs -->
        <div class="form-group">
          <label class="col-md-4 control-label col-xs-12" for="Location">Location</label>
          <div class="col-md-2  col-xs-4">
            <input id="Location" name="Location" type="text" placeholder="District" class="form-control input-md " value=<?php if($create == 0)echo $info['district'] ?>>
          </div>
          <div class="col-md-2 col-xs-4">
             <input id="Area" name="Area" type="text" placeholder="Area" class="form-control input-md" value=<?php if($create == 0)echo $info['area'] ?>>
          </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="Address"></label>
            <div class="col-md-2  col-xs-4">
                <input id="Street" name="address" type="text" placeholder="Street" class="form-control input-md" value=<?php if($create == 0)echo $info['address'] ?>>
            </div>
            <div class="col-md-2 col-xs-4">
                <input id="ZipCode" name="ZipCode" type="text" placeholder="Zip-Code" class="form-control input-md" value=<?php if($create == 0)echo $info['zip_code'] ?>>
            </div>
      </div>

        <!-- Date Of Event Input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="EventDate">Date</label>
              <div class="col-md-4">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                </div>
                  <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" />
                  <script>
    								$(document).ready(function () {
    									var date_input = $('input[name="date"]'); //our date input has the name "date"
    									var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    									var options = {
    										format: 'mm/dd/yyyy',
    										container: container,
    										todayHighlight: true,
    										autoclose: true,
    									};
    									date_input.datepicker(options);
    								})
    							</script>
              </div>
            </div>
          </div>

            <!-- Time Of Event Input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="EventDate">Time</label>
              <div class="col-md-4">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-time"></i>
                </div>
                <input id="EventTime" name="EventTime" type="time" placeholder="EventTime" class="form-control input-md" value=<?php if($create == 0)echo $info['time'] ?>>
              </div>
            </div>
          </div>
            <!-- Price Of Event Input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="EventPrice">Price</label>
              <div class="col-md-4">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-euro"></i>
                </div>
                <input id="EventPrice" name="EventPrice" type="number" placeholder="EventPrice" class="form-control input-md" value=<?php if($create == 0)echo $info['price'] ?>>
              </div>
            </div>
          </div>

        <!-- Overview textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Overview (max 200 words)">Overview</label>
          <div class="col-md-4">
            <textarea class="form-control" rows="10"  id="Overview" name="Overview" placeholder="max 200 words"><?php if($create == 0)echo $info['overview'] ?></textarea>
          </div>
          </div>
          <!-- Submit and Cancel Button -->
          <div class="form-group">
          <label class="col-md-4 control-label" ></label>
            <div class="col-md-4">
            <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-ok"></i> Submit</button>
            <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-remove"></i> Cancel</button>
		  </div>
        </div>
      </fieldset>
    </form>
  </div>
  </div>
</div>

<?php
  include ('../pages/footer.php');
?>
