<?php
    include_once('../pages/header.php');
    include_once('../database/users.php');

    $info = getUserInfo($_SESSION['username']);
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"
/>

    <div class="row">
      <div class="col-md-10 ">
        <form class="form-horizontal" action="../actions/editProfile.php" method="post">
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
                <input id="Name" name="Name" type="text" placeholder="Name" class="form-control input-md" value=<?php echo $info['name'] ?>>
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
                <input id="Surname" name="Surname" type="text" placeholder="Surname" class="form-control input-md" value=<?php echo $info['surname'] ?>>
              </div>
            </div>
          </div>
            <!-- Upload Photo Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Upload_photo">Upload photo</label>
            <div class="col-md-4">
              <input id="Upload_photo" name="Upload_photo" class="input-file" type="file">			  
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
    								<input class="form-control" id="date" name="DateOfBirth" placeholder="MM/DD/YYYY" type="text" id="DateOfBirth" value=<?php echo $info['birthday'] ?> />
    							<script>
    								$(document).ready(function () {
    									var date_input = $('input[name="DateOfBirth"]'); //our date input has the name "date"
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
          <!-- Gender Radios (inline) -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Gender">Gender</label>
            <div class="col-md-4">
              <label class="radio-inline" for="Gender-0">
                <input type="radio" name="Gender" id="Gender-0" value="male" checked="checked">Male
              </label>
              <label class="radio-inline" for="Gender-1">
                <input type="radio" name="Gender" id="Gender-1" value="female">Female
             </label>
             <label class="radio-inline" for="Gender-2">
               <input type="radio" name="Gender" id="Gender-2" value="other">Other
             </label>
          </div>
        </div>
        <!-- Phone Number input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Phone Number ">Phone Number </label>
          <div class="col-md-4">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="glyphicon glyphicon-phone"></i>
              </div>
                <input id="Phone Number " name="PhoneNumber" type="text" placeholder="Primary Phone Number " class="form-control input-md" value=<?php echo $info['phonenumber'] ?>>
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
            <input id="Email Address" name="EmailAddress" type="text" placeholder="Email Address" class="form-control input-md" value=<?php echo $info['email'] ?>>
          </div>
          </div>
        </div>

          <!-- Submit and Cancel Button -->
          <div class="form-group">
          <label class="col-md-4 control-label" ></label>
            <div class="col-md-4">
            <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-ok"></i> Submit</button>
            <button type="cancel" class="btn btn-info"><i class="glyphicon glyphicon-remove"></i> Cancel</button>
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
