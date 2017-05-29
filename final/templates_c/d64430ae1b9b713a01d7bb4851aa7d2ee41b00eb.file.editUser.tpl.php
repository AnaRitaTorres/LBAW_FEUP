<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 22:57:57
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/users/editUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:632745890590ad96e6d02b5-15089355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd64430ae1b9b713a01d7bb4851aa7d2ee41b00eb' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/users/editUser.tpl',
      1 => 1496091441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '632745890590ad96e6d02b5-15089355',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590ad96e84d8a3_61199279',
  'variables' => 
  array (
    'info' => 0,
    'FIELD_ERRORS' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590ad96e84d8a3_61199279')) {function content_590ad96e84d8a3_61199279($_smarty_tpl) {?>

    <div class="row">
      <div class="col-md-10 ">
        <form class="form-horizontal" action="../../actions/users/editProfile.php" method="post" enctype="multipart/form-data">
          <fieldset>
            <legend>Edit Profile</legend>
           <div class="form-group">
            <label class="col-md-4 control-label" for="Name">Name</label>
            <div class="col-md-4">
             <div class="input-group">
              <div class="input-group-addon">
                <i class="glyphicon glyphicon-user"></i>
              </div>
                <input id="Name" name="Name" type="text" placeholder="Name*" class="form-control input-md" required value=<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="Surname" >Surname</label>
            <div class="col-md-4">
             <div class="input-group">
              <div class="input-group-addon">
                <i class="glyphicon glyphicon-user"></i>
              </div>
                <input id="Surname" name="Surname" type="text" placeholder="Surname*" class="form-control input-md" required value=<?php echo $_smarty_tpl->tpl_vars['info']->value['surname'];?>
>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="Upload_photo">Upload photo</label>
            <div class="col-md-4">
              <input id="fileToUpload" name="fileToUpload" class="input-file" type="file">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="Date Of Birth">Date Of Birth</label>
              <div class="col-md-4">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-birthday-cake"></i>
                  </div>
    				<input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY*" type="text" id="DateOfBirth" required value=<?php echo $_smarty_tpl->tpl_vars['info']->value['birthday'];?>
 />
			  </div>
			  <span class="field_error"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['age'];?>
</span>
            </div>
			
          </div>
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
        <div class="form-group">
          <label class="col-md-4 control-label" for="Phone Number ">Phone Number </label>
          <div class="col-md-4">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="glyphicon glyphicon-phone"></i>
              </div>
                <input id="Phone Number " name="PhoneNumber" type="text" placeholder="Primary Phone Number " class="form-control input-md" value=<?php echo $_smarty_tpl->tpl_vars['info']->value['phonenumber'];?>
>
              </div>
            </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="Email Address">Email Address</label>
          <div class="col-md-4">
          <div class="input-group">
            <div class="input-group-addon">
            <i class="glyphicon glyphicon-envelope"></i>
            </div>
            <input id="Email Address" name="EmailAddress" type="text" placeholder="Email Address*" class="form-control input-md" required value=<?php echo $_smarty_tpl->tpl_vars['info']->value['email'];?>
>
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
          <div class="form-group">
            <label class="col-md-4 control-label" ></label>
            <div class="col-md-1 col-xs-3">
              <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-ok"></i> Submit</button>
            </div>
            <div class="col-md-1 col-xs-3 ">
              <button type="button"  onclick="window.location.href='profilePage.php?id=<?php echo $_smarty_tpl->tpl_vars['info']->value['idcustomer'];?>
'" class="btn btn-info"><i class="glyphicon glyphicon-remove"></i> Cancel</button>
            </div>
          </div>

      </fieldset>
    </form>
    </div>
  </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script type="text/javascript" src="../../js/calendar.js"></script><?php }} ?>
