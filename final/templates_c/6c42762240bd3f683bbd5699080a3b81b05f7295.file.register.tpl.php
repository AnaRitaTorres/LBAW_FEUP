<?php /* Smarty version Smarty-3.1.15, created on 2017-05-03 11:38:11
         compiled from "/opt/lbaw/lbaw1661/public_html/proto/templates/users/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67237301758f87b7da4b398-48341033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c42762240bd3f683bbd5699080a3b81b05f7295' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/proto/templates/users/register.tpl',
      1 => 1493807062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67237301758f87b7da4b398-48341033',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f87b7dba0d23_45666614',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'FIELD_ERRORS' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f87b7dba0d23_45666614')) {function content_58f87b7dba0d23_45666614($_smarty_tpl) {?><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"
/>
<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span <span class="glyphicon glyphicon-user"></span>&nbsp;Register</a>
  <ul id="register-dp" class="dropdown-menu">
    <div class="row">
      <div class="col-md-26">
        <form id="form_register" class="form" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" accept-charset="UTF-8">
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
				<span class="field_error"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['username'];?>
</span>
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
				<span class="field_error"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['password'];?>
</span>
              </div>
            </div>
          </div>
		  <div class="row">
			<div class="col-md-12 col-offset-1">
				<div id="error_messages">
				<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
						<div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a class="close" href="#"><i class="glyphicon glyphicon-remove"></i></a></div>
				<?php } ?>
				</div>
				<div id="success_messages">
				<?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
						<div class="success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<a class="close" href="#"><i class="glyphicon glyphicon-remove"></i></a></div>
				<?php } ?>
			    </div>
			</div>
		  </div>
          <button type="submit" class="btn btn-info pull-right"><i class="glyphicon glyphicon-ok"></i> Submit</button>
        </form>
      </div>
    </div>
  </ul>
</li><?php }} ?>
