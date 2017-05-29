<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 21:38:58
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/users/listUsersToAdd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:591083220592c5e5c159811-61263592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faab70a51e63355336306d30662bcdcc7c27f89d' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/users/listUsersToAdd.tpl',
      1 => 1496090417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '591083220592c5e5c159811-61263592',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592c5e5c309394_26841054',
  'variables' => 
  array (
    'link' => 0,
    'name' => 0,
    'surname' => 0,
    'user' => 0,
    'idevent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c5e5c309394_26841054')) {function content_592c5e5c309394_26841054($_smarty_tpl) {?><li class="users">
	<div class="row">
	<div class="col-md-3 col-xs-3">
		<div class="info">
			<h6 class="name"><a href=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
</a></h6>
		</div> 
		</div>	
		<div class="col-md-4 col-xs-4 col-md-offset-1">
		<a href=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
><img alt="user picture" src=<?php echo $_smarty_tpl->tpl_vars['user']->value['picture'];?>
  style="width:35%"/></a>
		
		</div>
		<div class="col-md-1 col-xs-1">
		<form method="post" onsubmit="return addUser(<?php echo $_smarty_tpl->tpl_vars['idevent']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['user']->value['idcustomer'];?>
);">
		  <div class="input-group">
			<button type="submit" class="btn btn-small btn-info pull-right addUser"><i class="glyphicon glyphicon-plus"></i></button>
		  </div>
		</form>
		</div>
		</div>
 </li>
<?php }} ?>
