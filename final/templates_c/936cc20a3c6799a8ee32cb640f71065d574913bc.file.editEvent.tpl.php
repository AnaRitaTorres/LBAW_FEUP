<?php /* Smarty version Smarty-3.1.15, created on 2017-05-25 10:13:17
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/events/editEvent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2028092910590ad748bc2061-14048315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '936cc20a3c6799a8ee32cb640f71065d574913bc' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/events/editEvent.tpl',
      1 => 1495703661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2028092910590ad748bc2061-14048315',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590ad748dc60c1_09033524',
  'variables' => 
  array (
    'create' => 0,
    'id' => 0,
    'info' => 0,
    'FIELD_ERRORS' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590ad748dc60c1_09033524')) {function content_590ad748dc60c1_09033524($_smarty_tpl) {?><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>



<div class="row">
  <div class="col-md-10 ">
    <form class="form-horizontal" method="post" action="../../actions/events/createEvent.php" enctype="multipart/form-data">
      <input type="hidden" name="create" value=<?php echo $_smarty_tpl->tpl_vars['create']->value;?>
 />
      <input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 />
      <fieldset>
        <?php if ($_smarty_tpl->tpl_vars['create']->value==1) {?>
        <legend>Create Event</legend>
         <?php } else { ?>
        <legend>Edit Event</legend>
         <?php }?>
        <div class="form-group">
          <label class="col-md-4 control-label" for="EventTitle">Event Title</label>
          <div class="col-md-4">
            <div class="input-group">
              <div class="input-group-addon">
                <i class="glyphicon glyphicon-music"></i>
              </div>
              <input id="EventTitle" name="EventTitle" type="text" placeholder="Event Title*" class="form-control input-md" required value=<?php if ($_smarty_tpl->tpl_vars['create']->value==0) {?><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
<?php }?>>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="EventType">Type</label>
          <div class="col-md-4">
            <select class="form-control col-md-4" id="EventType" name="EventType" required>
                  <option>theatre</option>
                  <option>exhibition</option>
                  <option>cinema</option>
                  <option>concert</option>
                  <option>dance</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="Upload photo">Upload photo</label>
          <div class="col-md-4">
            <input id="fileToUpload" name="fileToUpload" class="input-file" type="file">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label col-xs-12" for="Location">Location</label>
          <div class="col-md-2  col-xs-4">
            <input id="Location" name="Location" type="text" placeholder="District" class="form-control input-md " value=<?php if ($_smarty_tpl->tpl_vars['create']->value==0) {?><?php echo $_smarty_tpl->tpl_vars['info']->value['district'];?>
<?php }?>>
          </div>
          <div class="col-md-2 col-xs-4">
            <input id="Area" name="Area" type="text" placeholder="Area" class="form-control input-md" value=<?php if ($_smarty_tpl->tpl_vars['create']->value==0) {?><?php echo $_smarty_tpl->tpl_vars['info']->value['area'];?>
<?php }?>>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="Address"></label>
          <div class="col-md-2  col-xs-4">
            <input id="Street" name="address" type="text" placeholder="Street*" class="form-control input-md" required value=<?php if ($_smarty_tpl->tpl_vars['create']->value==0) {?><?php echo $_smarty_tpl->tpl_vars['info']->value['address'];?>
<?php }?>>
          </div>
          <div class="col-md-2 col-xs-4">
            <input id="ZipCode" name="ZipCode" type="text" placeholder="Zip-Code*" class="form-control input-md" required value=<?php if ($_smarty_tpl->tpl_vars['create']->value==0) {?><?php echo $_smarty_tpl->tpl_vars['info']->value['zip_code'];?>
<?php }?>>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="EventDate">Date</label>
          <div class="col-md-4">
            <div class="input-group">
              <div class="input-group-addon">
                <i class="glyphicon glyphicon-calendar"></i>
              </div>
              <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY*" type="text" required  value=<?php if ($_smarty_tpl->tpl_vars['create']->value==0) {?><?php echo $_smarty_tpl->tpl_vars['info']->value['date'];?>
<?php }?>>
			  <span class="field_error"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['date'];?>
</span>             
			 <script type="text/javascript" src="../../js/calendar.js"></script>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="EventDate">Time</label>
          <div class="col-md-4">
            <div class="input-group">
              <div class="input-group-addon">
                <i class="glyphicon glyphicon-time"></i>
              </div>
               <input id="EventTime" name="EventTime" type="time" placeholder="EventTime*" class="form-control input-md" value=<?php if ($_smarty_tpl->tpl_vars['create']->value==0) {?><?php echo $_smarty_tpl->tpl_vars['info']->value['time'];?>
<?php }?> required>

            </div>
          </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="EventPrice">Price</label>
            <div class="col-md-4">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="glyphicon glyphicon-euro"></i>
                </div>
                <input id="EventPrice" name="EventPrice" type="number" placeholder="EventPrice*" class="form-control input-md" value=<?php if ($_smarty_tpl->tpl_vars['create']->value==0) {?><?php echo $_smarty_tpl->tpl_vars['info']->value['price'];?>
<?php }?> required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="Overview (max 200 words)">Overview</label>
            <div class="col-md-4">
              <textarea class="form-control" rows="10" id="Overview" name="Overview" placeholder="max 200 words*"><?php if ($_smarty_tpl->tpl_vars['create']->value==0) {?><?php echo $_smarty_tpl->tpl_vars['info']->value['overview'];?>
<?php }?></textarea>
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
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
              <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-ok"></i> Submit</button>
              <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-remove"></i> Cancel</button>
            </div>
          </div>
      </fieldset>
    </form>
    </div>
  </div>
</div>
<?php }} ?>
