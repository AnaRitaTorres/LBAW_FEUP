<?php /* Smarty version Smarty-3.1.15, created on 2017-05-26 18:45:10
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/users/changePassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93928288959150cb73f09c8-62213560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9191b71b90ff02f02d498ed05cc283b9a07c25aa' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/users/changePassword.tpl',
      1 => 1495820560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93928288959150cb73f09c8-62213560',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59150cb755ff48_94636889',
  'variables' => 
  array (
    'FIELD_ERRORS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59150cb755ff48_94636889')) {function content_59150cb755ff48_94636889($_smarty_tpl) {?><div class="row">
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
                  <span class="field_error"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['password'];?>
</span>
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
                <span class="field_error"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['new'];?>
</span>
              </div>
            
          </div>
        </div>

        <!-- Submit and Cancel Button -->
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-1">
            <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-ok"></i> Submit</button>
          </div>
          <div class="col-md-1">
            <button type="button" onclick="window.location.href='../common/home.php'" class="btn btn-info"><i class="glyphicon glyphicon-remove"></i> Cancel</button>
          </div>
        </div>
      </fieldset>
    </form>
      </div>
</div><?php }} ?>
