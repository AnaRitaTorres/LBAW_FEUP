<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a>
    <ul id="login-dp" class="dropdown-menu">
        <div class="row">
            <div class="col-md-26">
                <form id="form_login" class="form" role="form" method="post" action="{$BASE_URL}actions/users/login.php" accept-charset="UTF-8">
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
                                <label>Password</label>
                            </div>
                            <div class="col-xs-8 col-xs-offset-2">
                                <input name="password" type="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
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
					</div>	
                    <button type="submit" form="form_login" class="btn btn-info pull-right"><i class="glyphicon glyphicon-ok"></i> Submit</button>
                </form>
            </div>
        </div>
		
    </ul>
</li>