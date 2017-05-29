

<li class="registerButton" data-toggle="modal" data-target="#myModalRegister">
    <a>
    <span class="glyphicon glyphicon-user"></span>&nbsp;Register
    </a>
</li>
<div id="myModalRegister" class="modal fade" role="dialog">
  <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header">
        
		<button type="button" id="closeRegister" class="pull-right btn btn-lg btn-default" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Register</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-26">
          
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-2 col-xs-offset-0">
                    <label>Name</label>
                  </div>
                  <div class="col-xs-8 col-xs-offset-1">
                    <input name="name" id="name" type="text" class="form-control" placeholder="Name" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-2 col-xs-offset-0">
                    <label>Surname</label>
                  </div>
                  <div class="col-xs-8 col-xs-offset-1">
                    <input name="surname" id="surname" type="text" class="form-control" placeholder="Surname" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-2 col-xs-offset-0">
                    <label>Username</label>
                  </div>
                  <div class="col-xs-8 col-xs-offset-1">
                    <input name="username" id="username" type="text" class="form-control" placeholder="Username" required>
                   <div class="form-group">
                      <div class="row">
                         <div>
							<div hidden id="usernameError" class="field_error"><p>Username Already Exists<a class="close"><i class="glyphicon glyphicon-remove"></i></a></p></div>                           
                         </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-2 col-xs-offset-0">
                    <label>Date</label>
                  </div>
                  <div class="col-xs-8 col-xs-offset-1">
                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" required>
                    <div class="form-group">
                      <div class="row">
                         <div>
						   <div hidden  id="ageError" class="field_error"><p>Your Age Cannot Be Under 18<a class="close"><i class="glyphicon glyphicon-remove"></i></a></p></div>
                        </div>
                      </div>
                    </div>
                  </div>
                 </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-2 col-xs-offset-0">
                    <label>Gender</label>
                  </div>
                  <div class="col-xs-8 col-xs-offset-1">
                    <label class="radio-inline" for="Gender-0">
                                <input type="radio" name="gender" id="gender" value="male" checked="checked">Male 
                            </label>
                    <label class="radio-inline" for="Gender-1">
                                <input type="radio" name="gender" id="gender" value="female">Female
                            </label>
                    <label class="radio-inline" for="Gender-2">
                                <input type="radio" name="gender" id="gender" value="other">Other
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
                    <input name="email" id="email" type="email" class="form-control" placeholder="Email Address" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-2 col-xs-offset-0">
                    <label>Phone Number</label>
                  </div>
                  <div class="col-xs-8 col-xs-offset-1">
                    <input name="phone" id="phone" type="text" class="form-control" placeholder="Phone">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-2 col-xs-offset-0">
                    <label>Password</label>
                  </div>
                  <div class="col-xs-8 col-xs-offset-1">
                    <input name="password" id="password" type="password" class="form-control" placeholder="Password" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-2 col-xs-offset-0">
                    <label>Repeat Password</label>
                  </div>
                  <div class="col-xs-8 col-xs-offset-1">
                    <input name="repeat" id="repeat" type="password" class="form-control" placeholder="Repeat Password" required>
                    <div class="form-group">
                      <div class="row">
                         <div>
							<div hidden  id="passwordError" class="field_error"><p>Passwords Do Not Match<a class="close"><i class="glyphicon glyphicon-remove"></i></a></p></div>
                         </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			   <div class="form-group">
                        <div class="row">
                         <div class="col-xs-12 col-xs-offset-0">
                            <div id="error_messages">
                               {foreach $ERROR_MESSAGES as $error}
                                    <div hidden class="error"><p>{$error}</a></p></div>
                                {/foreach}
                           </div>
                         </div>
                        </div>
                    </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-2 col-xs-offset-0">
                    <button type="submit" id="submitRegister" class="btn btn-info"><i class="glyphicon glyphicon-ok"></i> Submit</button>
                  </div>
                </div>
                </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 <script type="text/javascript" src="../../js/calendar.js"></script>
<script type="text/javascript" src="../../js/users/register.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
