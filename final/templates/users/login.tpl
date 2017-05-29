
<li class="loginButton" data-toggle="modal" data-target="#myModalLogin">
     <a>
        <span class="glyphicon glyphicon-log-in"></span>&nbsp;Login
    </a>
</li>
<div id="myModalLogin" class="modal fade" role="dialog">
  <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header">
        <button id="closeLogin" type="button" class="pull-right btn btn-default btn-lg" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-26">
            <form id="form_login" >
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2 col-xs-offset-0">
                                <label>Username</label>
                            </div>
                            <div class="col-xs-8 col-xs-offset-2">
                                <input id="username1" name="username" type="text" class="form-control" placeholder="Username" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2 col-xs-offset-0">
                                <label>Password</label>
                            </div>
                            <div class="col-xs-8 col-xs-offset-2">
                                <input id="password1" name="password" type="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                         <div class="col-xs-12 col-xs-offset-0">
                            <div id="error_messages">
                               {foreach $ERROR_MESSAGES as $error}
                                    <div hidden class="error">{$error}<a class="close"><i class="glyphicon glyphicon-remove"></i></a></div>
                                {/foreach}
                           </div>
                         </div>
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="row">
                         <div class="col-xs-2 col-xs-offset-0">
                    <button type="submit" id="submitLogin"  class="btn btn-info"><i class="glyphicon glyphicon-ok"></i> Submit</button>
                    </div>
                    </div>
                    </div>
            </form>
                  </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="../../js/users/login.js"></script>