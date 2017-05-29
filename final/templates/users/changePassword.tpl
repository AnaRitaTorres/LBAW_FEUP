<div class="row">
  <div class="col-md-10 ">
    <form class="form-horizontal" action="{$BASE_URL}actions/users/changePassword.php" method="post">
      <fieldset>
        <legend>Change Password</legend>
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

         <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-1 col-xs-3">
            <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-ok"></i> Submit</button>
          </div>
          <div class="col-md-1 col-xs-3">
            <button type="button" onclick="window.location.href='../common/home.php'" class="btn btn-info"><i class="glyphicon glyphicon-remove"></i> Cancel</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>