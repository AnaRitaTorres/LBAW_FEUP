<div class="row">
  <div class="col-md-10 ">
      <form class="form-horizontal" action="../../actions/users/changePassword.php" method="post">
          <fieldset>
            <!-- Form Name -->
            <legend>Change Password</legend>
             <div class="form-group">
              <div class="row">
                <div class="col-xs-2 col-xs-offset-0">
                  <label>Password</label>
                </div>
                <div class="col-xs-8 col-xs-offset-1">
                  <input name="password" type="password" class="form-control" placeholder="Password" required>
				  <span class="field_error">{$FIELD_ERRORS.password}</span>
                </div>
               </div>
              </div>
               <div class="form-group">
                <div class="row">
                  <div class="col-xs-2 col-xs-offset-0">
                    <label>New Password</label>
                  </div>
                  <div class="col-xs-8 col-xs-offset-1">
                    <input name="new" type="password" class="form-control" placeholder="New Password" required>
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
					<span class="field_error">{$FIELD_ERRORS.new}</span>
                  </div>
                </div>
              </div>
			  <div class="form-group">
                <div class="row">
                  <div class="col-xs-8 col-xs-offset-3">
                    <div id="error_messages">
						{foreach $ERROR_MESSAGES as $error}
						<div class="error">{$error}<a class="close" href="#"><i class="glyphicon glyphicon-remove"></i></a></div>
						{/foreach}
				</div>
                  </div>
			   </div>
              </div>
			 
            <div class="form-group">
              <div class="row">
                <div class="col-xs-2 col-xs-offset-9">
                <button type="submit" id="subPassword" class="btn btn-info"><i class="glyphicon glyphicon-ok"></i> Submit</button>
                </div>
              </div>
            </div>
           </fieldset>
    </form>
  </div>
</div>