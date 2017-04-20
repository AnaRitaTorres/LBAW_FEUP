<?php
    include_once('../pages/header.php');
    include_once('../database/users.php');

    $info = getUserInfo($_SESSION['username']);
?>
<div class="row">
  <div class="col-md-10 ">
      <form class="form-horizontal" action="../actions/changePassword.php" method="post">
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
                  </div>
                </div>
              </div>
            <div class="form-group">
              <div class="row">
                <div class="col-xs-2 col-xs-offset-9">
                <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-ok"></i> Submit</button>
                </div>
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
