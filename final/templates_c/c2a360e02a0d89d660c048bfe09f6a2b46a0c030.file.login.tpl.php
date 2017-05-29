<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 18:22:46
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/users/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1899618860590ad655c6c9f8-45743480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2a360e02a0d89d660c048bfe09f6a2b46a0c030' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/users/login.tpl',
      1 => 1496078564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1899618860590ad655c6c9f8-45743480',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590ad655c97451_58068754',
  'variables' => 
  array (
    'ERROR_MESSAGES' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590ad655c97451_58068754')) {function content_590ad655c97451_58068754($_smarty_tpl) {?>
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
                               <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                                    <div hidden class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a class="close"><i class="glyphicon glyphicon-remove"></i></a></div>
                                <?php } ?>
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
<script type="text/javascript" src="../../js/users/login.js"></script><?php }} ?>
