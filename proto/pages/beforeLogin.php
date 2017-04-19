<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"
	/>
<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span <span class="glyphicon glyphicon-user"></span>&nbsp;Register</a>
              <ul id="register-dp" class="dropdown-menu">
                <div class="row">
                  <div class="col-md-26">
                    <form id="form_register" class="form" role="form" method="post" action="../actions/register.php" accept-charset="UTF-8">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-2 col-xs-offset-0">
                            <label>Name</label>
                          </div>
                          <div class="col-xs-8 col-xs-offset-1">
                            <input name="name" type="text" class="form-control" placeholder="Name" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-2 col-xs-offset-0">
                            <label>Surname</label>
                          </div>
                          <div class="col-xs-8 col-xs-offset-1">
                            <input name="surname" type="text" class="form-control" placeholder="Surname" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-2 col-xs-offset-0">
                            <label>Username</label>
                          </div>
                          <div class="col-xs-8 col-xs-offset-1">
                            <input name="username" type="text" class="form-control" placeholder="Username" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-2 col-xs-offset-0">
                            <label>Date</label>
                          </div>
                          <div class="col-xs-8 col-xs-offset-1">
                            <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" />
                          </div>
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
                            <input name="email" type="email" class="form-control" placeholder="Email Address" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-2 col-xs-offset-0">
                            <label>Phone Number</label>
                          </div>
                          <div class="col-xs-8 col-xs-offset-1">
                            <input name="phone" type="text" class="form-control" placeholder="Phone" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-2 col-xs-offset-0">
                            <label>Password</label>
                          </div>
                          <div class="col-xs-8 col-xs-offset-1">
                            <input name="password" type="password" class="form-control" placeholder="Password" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-2 col-xs-offset-0">
                            <label>Repeat Password</label>
                          </div>
                          <div class="col-xs-8 col-xs-offset-1">
                            <input name="repeat" type="password" class="form-control" placeholder="Repeat Password" required>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-info pull-right"><i class="glyphicon glyphicon-ok"></i> Submit</button>
                    </form>
                  </div>
                </div>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a>
              <ul id="login-dp" class="dropdown-menu">
                <div class="row">
                  <div class="col-md-26">
                    <form id="form_login" class="form" role="form" method="post" action="../actions/login.php" accept-charset="UTF-8">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-2 col-xs-offset-0">
                            <label>Username</label>
                          </div>
                          <div class="col-xs-8 col-xs-offset-2">
                            <input name="username" type="text" class="form-control" placeholder="Username" required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-2 col-xs-offset-0">
                            <label >Password</label>
                          </div>
                          <div class="col-xs-8 col-xs-offset-2">
                            <input name="password" type="password" class="form-control"  placeholder="Password" required>
                          </div>
                        </div>
                      </div>
                      <button type="submit" form="form_login" class="btn btn-info pull-right"><i class="glyphicon glyphicon-ok"></i> Submit</button>
                     </form>
                  </div>
                </div>
              </ul>
            </li>