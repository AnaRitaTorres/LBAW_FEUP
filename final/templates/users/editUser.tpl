<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script type="text/javascript" src="../../js/calendar.js"></script>

    <div class="row">
      <div class="col-md-10 ">
        <form class="form-horizontal" action="../../actions/users/editProfile.php" method="post" enctype="multipart/form-data">
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
                <input id="Name" name="Name" type="text" placeholder="Name*" class="form-control input-md" required value={$info.name}>
              </div>
            </div>
          </div>
          <!--Surname Input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Surname" >Surname</label>
            <div class="col-md-4">
             <div class="input-group">
              <div class="input-group-addon">
                <i class="glyphicon glyphicon-user"></i>
              </div>
                <input id="Surname" name="Surname" type="text" placeholder="Surname*" class="form-control input-md" required value={$info.surname}>
              </div>
            </div>
          </div>
            <!-- Upload Photo Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Upload_photo">Upload photo</label>
            <div class="col-md-4">
              <input id="fileToUpload" name="fileToUpload" class="input-file" type="file">
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
    				<input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY*" type="text" id="DateOfBirth" required value={$info.birthday} />
			  </div>
			  <span class="field_error">{$FIELD_ERRORS.age}</span>
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
                <input id="Phone Number " name="PhoneNumber" type="text" placeholder="Primary Phone Number " class="form-control input-md" value={$info.phonenumber}>
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
            <input id="Email Address" name="EmailAddress" type="text" placeholder="Email Address*" class="form-control input-md" required value={$info.email}>
          </div>
          </div>
        </div>
		<div class="row">
			<div class="col-md-12 col-offset-1">
				<div id="error_messages">
				{foreach $ERROR_MESSAGES as $error}
						<div class="error">{$error}<a class="close" href="#"><i class="glyphicon glyphicon-remove"></i></a></div>
				{/foreach}
				</div>
				<div id="success_messages">
				{foreach $SUCCESS_MESSAGES as $success}
						<div class="success">{$success}<a class="close" href="#"><i class="glyphicon glyphicon-remove"></i></a></div>
				{/foreach}
			    </div>
			</div>
		</div>
          <!-- Submit and Cancel Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" ></label>
            <div class="col-md-1">
              <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-ok"></i> Submit</button>
            </div>
            <div class="col-md-1">
              <button type="button"  onclick="window.location.href='profilePage.php?id={$info.idcustomer}'" class="btn btn-info"><i class="glyphicon glyphicon-remove"></i> Cancel</button>
            </div>
        </div>

      </fieldset>
    </form>
    </div>
  </div>
</div>
