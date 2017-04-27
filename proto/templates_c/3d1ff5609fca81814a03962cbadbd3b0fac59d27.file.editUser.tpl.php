<?php /* Smarty version Smarty-3.1.15, created on 2017-04-26 20:07:59
         compiled from "/opt/lbaw/lbaw1661/public_html/proto/templates/users/editUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205059601858fb8ca911f608-35001423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d1ff5609fca81814a03962cbadbd3b0fac59d27' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/proto/templates/users/editUser.tpl',
      1 => 1493233721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205059601858fb8ca911f608-35001423',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58fb8ca929a1b9_78664738',
  'variables' => 
  array (
    'info' => 0,
    'FIELD_ERRORS' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb8ca929a1b9_78664738')) {function content_58fb8ca929a1b9_78664738($_smarty_tpl) {?><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script type="text/javascript" src="../../js/calendar.js"></script>

    <div class="row">
      <div class="col-md-10 ">
        <form class="form-horizontal" action="../../actions/users/editProfile.php" method="post">
          <fieldset>
            <!-- Form Name -->
            <legend>Edit Profile</legend>
            <!-- Name input-->
           <div class="form-group">
            <label class="col-md-4 control-label" for="Name">Name</label>
            <div class="col-md-4">
             <div class="input-group">
              <div class="input-group-addon">
                <i class="glyphicon glyphicon-user"></i>
              </div>
                <input id="Name" name="Name" type="text" placeholder="Name" class="form-control input-md" value=<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
 required>
              </div>
            </div>
          </div>
          <!--Surname Input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Surname">Surname</label>
            <div class="col-md-4">
             <div class="input-group">
              <div class="input-group-addon">
                <i class="glyphicon glyphicon-user"></i>
              </div>
                <input id="Surname" name="Surname" type="text" placeholder="Surname" class="form-control input-md" value=<?php echo $_smarty_tpl->tpl_vars['info']->value['surname'];?>
 required>
              </div>
            </div>
          </div>
            <!-- Upload Photo Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Upload_photo">Upload photo</label>
            <div class="col-md-4">
              <input id="Upload_photo" name="Upload_photo" class="input-file" type="file">
            </div>
          </div>
          <!-- Date Of Birth Input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Date Of Birth">Date Of Birth</label>
              <div class="col-md-4">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-birthday-cake"></i>
                  </div>
    				<input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" id="DateOfBirth" value=<?php echo $_smarty_tpl->tpl_vars['info']->value['birthday'];?>
 required/>
			  </div>
			  <span class="field_error"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['date'];?>
</span>
            </div>
          </div>
          <!-- Gender Radios (inline) -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Gender">Gender</label>
            <div class="col-md-4">
              <label class="radio-inline" for="Gender-0">
                <input type="radio" name="Gender" id="Gender-0" value="male" checked="checked">Male
              </label>
              <label class="radio-inline" for="Gender-1">
                <input type="radio" name="Gender" id="Gender-1" value="female">Female
             </label>
             <label class="radio-inline" for="Gender-2">
               <input type="radio" name="Gender" id="Gender-2" value="other">Other
             </label>
          </div>
        </div>
        <!-- Phone Number input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Phone Number ">Phone Number </label>
          <div class="col-md-4">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="glyphicon glyphicon-phone"></i>
              </div>
                <input id="Phone Number " name="PhoneNumber" type="text" placeholder="Primary Phone Number " class="form-control input-md" value=<?php echo $_smarty_tpl->tpl_vars['info']->value['phonenumber'];?>
 required>
              </div>
            </div>
        </div>
        <!-- Email address input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Email Address">Email Address</label>
          <div class="col-md-4">
          <div class="input-group">
            <div class="input-group-addon">
            <i class="glyphicon glyphicon-envelope"></i>
            </div>
            <input id="Email Address" name="EmailAddress" type="text" placeholder="Email Address" class="form-control input-md" value=<?php echo $_smarty_tpl->tpl_vars['info']->value['email'];?>
 required>
          </div>
          </div>
        </div>
		<div class="form-group">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-3">
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
				</div>
			</div>
        </div>
          <!-- Submit and Cancel Button -->
          <div class="form-group">
          <label class="col-md-4 control-label" ></label>
            <div class="col-md-4">
            <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-ok"></i> Submit</button>
            <button type="cancel" class="btn btn-info"><i class="glyphicon glyphicon-remove"></i> Cancel</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
  </div>
</div>

<<?php ?>?php
  include ('../pages/footer.php');
?<?php ?>>
<?php }} ?>
