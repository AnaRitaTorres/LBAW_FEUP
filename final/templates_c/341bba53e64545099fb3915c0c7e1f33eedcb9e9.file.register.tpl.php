<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 19:41:34
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/users/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1624615959590ad655ac2413-24644074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '341bba53e64545099fb3915c0c7e1f33eedcb9e9' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/users/register.tpl',
      1 => 1496083379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1624615959590ad655ac2413-24644074',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590ad655c5fe51_62697380',
  'variables' => 
  array (
    'ERROR_MESSAGES' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590ad655c5fe51_62697380')) {function content_590ad655c5fe51_62697380($_smarty_tpl) {?>

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
                               <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                                    <div hidden class="error"><p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</a></p></div>
                                <?php } ?>
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
<?php }} ?>
