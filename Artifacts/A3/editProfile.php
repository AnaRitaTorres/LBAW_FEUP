<?php
    include_once('header.php');
?>

    <div class="row">
      <div class="col-md-10 ">
        <form class="form-horizontal">
          <fieldset>
            <!-- Form Name -->
            <legend>Edit Profile</legend>
            <!-- Name input-->
           <div class="form-group">
            <label class="col-md-4 control-label" for="Name">Name</label>
            <div class="col-md-4">
             <div class="input-group">
              <div class="input-group-addon">
                <i class="glyphicon glyphicon-user"></i>
              </div>
                <input id="Name" name="Name" type="text" placeholder="Name" class="form-control input-md">
              </div>
            </div>
          </div>
          <!--Surname Input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Surname">Surname</label>
            <div class="col-md-4">
             <div class="input-group">
              <div class="input-group-addon">
                <i class="glyphicon glyphicon-user"></i>
              </div>
                <input id="Surname" name="Surname" type="text" placeholder="Surname" class="form-control input-md">
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
          <!-- Date Of Birth Input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Date Of Birth">Date Of Birth</label>
              <div class="col-md-4">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-birthday-cake"></i>
                </div>
                <input id="Date Of Birth" name="Date Of Birth" type="date" placeholder="Date Of Birth" class="form-control input-md">
              </div>
            </div>
          </div>
          <!-- Gender Radios (inline) -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Gender">Gender</label>
            <div class="col-md-4">
              <label class="radio-inline" for="Gender-0">
                <input type="radio" name="Gender" id="Gender-0" value="1" checked="checked">Male
              </label>
              <label class="radio-inline" for="Gender-1">
                <input type="radio" name="Gender" id="Gender-1" value="2">Female
             </label>
             <label class="radio-inline" for="Gender-2">
               <input type="radio" name="Gender" id="Gender-2" value="3">Other
             </label>
          </div>
        </div>
        <!-- Adress inputs -->
        <div class="form-group">
          <label class="col-md-4 control-label col-xs-12" for="Address">Address</label>
          <div class="col-md-2  col-xs-4">
            <input id="Address" name="Address" type="text" placeholder="District" class="form-control input-md ">
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
      <!-- Job input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Job">Job</label>
        <div class="col-md-4">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-briefcase"></i>
            </div>
             <input id="Job" name="Job" type="text" placeholder="Job" class="form-control input-md">
            </div>
          </div>
        </div>
        <!-- Phone Number input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Phone number ">Phone Number </label>
          <div class="col-md-4">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="glyphicon glyphicon-phone"></i>
              </div>
                <input id="Phone Number " name="Phone Number " type="tel" placeholder="Primary Phone Number " class="form-control input-md">
              </div>
            </div>
        </div>
        <!-- Email address input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Email Address">Email Address</label>
          <div class="col-md-4">
          <div class="input-group">
            <div class="input-group-addon">
            <i class="glyphicon glyphicon-envelope"></i>
            </div>
            <input id="Email Address" name="Email Address" type="text" placeholder="Email Address" class="form-control input-md">
          </div>
          </div>
        </div>
        <!-- Overview textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Overview (max 200 words)">Overview (max 200 words)</label>
          <div class="col-md-4">
            <textarea class="form-control" rows="10"  id="Overview (max 200 words)" name="Overview (max 200 words)">Overview</textarea>
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
