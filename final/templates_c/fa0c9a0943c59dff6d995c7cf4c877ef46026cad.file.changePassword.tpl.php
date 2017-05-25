<?php /* Smarty version Smarty-3.1.15, created on 2017-04-26 18:39:39
         compiled from "/opt/lbaw/lbaw1661/public_html/proto/templates/users/changePassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152301757758ff1fb46c91f3-91375696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa0c9a0943c59dff6d995c7cf4c877ef46026cad' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/proto/templates/users/changePassword.tpl',
      1 => 1493224522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152301757758ff1fb46c91f3-91375696',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58ff1fb4775b74_07209378',
  'variables' => 
  array (
    'FIELD_ERRORS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ff1fb4775b74_07209378')) {function content_58ff1fb4775b74_07209378($_smarty_tpl) {?><div class="row">
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
				  <span class="field_error"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['password'];?>
</span>
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
					<span class="field_error"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['new'];?>
</span>
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
</div><?php }} ?>
