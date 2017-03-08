<?php
    include_once('header.php');
?>

    <div class="row">
      <div class="col-md-10 ">
        <form class="form-horizontal">
          <fieldset>
            <!-- Form Name -->
            <legend>Create Event</legend>
            <!--<legend>Edit Event</legend>-->
            <!-- Event Title input-->
           <div class="form-group">
            <label class="col-md-4 control-label" for="EventTitle">Event Title</label>
            <div class="col-md-4">
             <div class="input-group">
              <div class="input-group-addon">
                <i class="glyphicon glyphicon-music"></i>
              </div>
                <input id="EventTitle" name="EventTitle" type="text" placeholder="Event Title" class="form-control input-md">
              </div>
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
            <input id="Location" name="Location" type="text" placeholder="District" class="form-control input-md ">
          </div>
          <div class="col-md-2 col-xs-4">
             <input id="Address" name="Address" type="text" placeholder="Area" class="form-control input-md ">
          </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="Address"></label>
            <div class="col-md-2  col-xs-4">
                <input id="Address" name="Address" type="text" placeholder="Street" class="form-control input-md ">
            </div>
            <div class="col-md-2 col-xs-4">
                <input id="Address" name="Address" type="text" placeholder="Zip-Code" class="form-control input-md ">
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
                <input id="EventDate" name="EventDate" type="date" placeholder="EventDate" class="form-control input-md">
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
                <input id="EventTime" name="EventTime" type="time" placeholder="EventTime" class="form-control input-md">
              </div>
            </div>
          </div>
        
        <!-- Overview textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Overview (max 200 words)">Overview</label>
          <div class="col-md-4">
            <textarea class="form-control" rows="10"  id="Overview (max 200 words)" placeholder="max 200 words"></textarea>
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
  include ('footer.php');
?>
