<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"
/>
<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span <span class="glyphicon glyphicon-user"></span>&nbsp;Register</a>
  <ul id="register-dp" class="dropdown-menu">
    <div class="row">
      <div class="col-md-26">
        <form id="form_register" class="form" role="form" method="post" action="{$BASE_URL}actions/users/register.php" accept-charset="UTF-8">
          <div class="form-group">
            <div class="row">
              <div class="col-xs-2 col-xs-offset-0">
                <label>Name</label>
              </div>
              <div class="col-xs-8 col-xs-offset-1">
                <input name="name" type="text" class="form-control" placeholder="Name*" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-xs-2 col-xs-offset-0">
                <label>Surname</label>
              </div>
              <div class="col-xs-8 col-xs-offset-1">
                <input name="surname" type="text" class="form-control" placeholder="Surname*" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-xs-2 col-xs-offset-0">
                <label>Username</label>
              </div>
              <div class="col-xs-8 col-xs-offset-1">
                <input name="username" type="text" class="form-control" placeholder="Username*" required>
				<span class="field_error">{$FIELD_ERRORS.username}</span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-xs-2 col-xs-offset-0">
                <label>Date</label>
              </div>
              <div class="col-xs-8 col-xs-offset-1">
               <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY*" type="text" required>
			   <span class="field_error">{$FIELD_ERRORS.age}</span>
              </div>
              <script type="text/javascript" src="../../js/calendar.js"></script>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-xs-2 col-xs-offset-0">
                <label>Gender</label>
              </div>
              <div class="col-xs-8 col-xs-offset-1">
                <label class="radio-inline" for="Gender-0">
                                <input type="radio" name="gender" id="Gender-0" value="male" checked="checked">Male 
                            </label>
                <label class="radio-inline" for="Gender-1">
                                <input type="radio" name="gender" id="Gender-1" value="female">Female
                            </label>
                <label class="radio-inline" for="Gender-2">
                                <input type="radio" name="gender" id="Gender-2" value="other">Other
                            </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-xs-2 col-xs-offset-0">
                <label>Email Address</label>
              </div>
              <div class="col-xs-8 col-xs-offset-1">
                <input name="email" type="email" class="form-control" placeholder="Email Address*" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-xs-2 col-xs-offset-0">
                <label>Phone Number</label>
              </div>
              <div class="col-xs-8 col-xs-offset-1">
                <input name="phone" type="text" class="form-control" placeholder="Phone">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-xs-2 col-xs-offset-0">
                <label>Password</label>
              </div>
              <div class="col-xs-8 col-xs-offset-1">
                <input name="password" type="password" class="form-control" placeholder="Password*" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-xs-2 col-xs-offset-0">
                <label>Repeat Password</label>
              </div>
              <div class="col-xs-8 col-xs-offset-1">
                <input name="repeat" type="password" class="form-control" placeholder="Repeat Password*" required>
				<span class="field_error">{$FIELD_ERRORS.password}</span>
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
          <button type="submit" class="btn btn-info pull-right"><i class="glyphicon glyphicon-ok"></i> Submit</button>
        </form>
      </div>
    </div>
  </ul>
</li>