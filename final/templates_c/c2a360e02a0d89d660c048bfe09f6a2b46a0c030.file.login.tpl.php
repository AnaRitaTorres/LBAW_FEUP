<?php /* Smarty version Smarty-3.1.15, created on 2017-05-04 08:20:53
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/users/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1899618860590ad655c6c9f8-45743480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2a360e02a0d89d660c048bfe09f6a2b46a0c030' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/users/login.tpl',
      1 => 1493882357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1899618860590ad655c6c9f8-45743480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590ad655c97451_58068754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590ad655c97451_58068754')) {function content_590ad655c97451_58068754($_smarty_tpl) {?><li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a>
    <ul id="login-dp" class="dropdown-menu">
        <div class="row">
            <div class="col-md-26">
                <form id="form_login" class="form" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" accept-charset="UTF-8">
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
					</div>	
                    <button type="submit" form="form_login" class="btn btn-info pull-right"><i class="glyphicon glyphicon-ok"></i> Submit</button>
                </form>
            </div>
        </div>
		
    </ul>
</li><?php }} ?>
