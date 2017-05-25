<div class="row">
  <div class="col-md-10 ">
    <form class="form-horizontal" action="../../actions/users/changePassword.php" method="post">
      <fieldset>
        <!-- Form Name -->
        <legend>Change Password</legend>

        <!--Password Input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Password">Password</label>
           
              <div class="col-md-4">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-pencil"></i>
                   </div>
                  <input name="password" type="password" class="form-control" placeholder="Password" required>
                  <span class="field_error">{$FIELD_ERRORS.password}</span>
                </div>
             
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="New Password">New Password</label>
         
            <div class="col-md-4">
              <div class="input-group">
                 <div class="input-group-addon">
                    <i class="glyphicon glyphicon-pencil"></i>
                </div>
                <input name="new" type="password" class="form-control" placeholder="New Password" required>
             
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="Repeat Password">Repeat Password</label>
          
            <div class="col-md-4">
              <div class="input-group">
                 <div class="input-group-addon">
                    <i class="glyphicon glyphicon-pencil"></i>
                   </div>
                <input name="repeat" type="password" class="form-control" placeholder="Repeat Password" required>
                <span class="field_error">{$FIELD_ERRORS.new}</span>
              </div>
            
          </div>
        </div>

        <!-- Submit and Cancel Button -->
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4">
            <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-ok"></i> Submit</button>
          </div>
        </div>
      </fieldset>
    </form>
    
    <label class="col-md-4 control-label" ></label>
    <div class="col-md-1 pull-left">
      <a href="../common/home.php"><button class="btn btn-info"><i class="glyphicon glyphicon-remove"></i> Cancel</button></a>
    </div>

  </div>
</div>