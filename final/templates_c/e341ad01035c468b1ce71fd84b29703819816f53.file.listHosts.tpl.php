<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 20:55:53
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/users/listHosts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1152376770592c786aacdda3-67515552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e341ad01035c468b1ce71fd84b29703819816f53' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/users/listHosts.tpl',
      1 => 1496087843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1152376770592c786aacdda3-67515552',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592c786ac56a86_39446278',
  'variables' => 
  array (
    'link' => 0,
    'user' => 0,
    'name' => 0,
    'surname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c786ac56a86_39446278')) {function content_592c786ac56a86_39446278($_smarty_tpl) {?>

<li class="host">
<div class="col-md-6">
	<a href=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
><img alt="user picture" src=<?php echo $_smarty_tpl->tpl_vars['user']->value['picture'];?>
  style="width:50%"/></a>

<div class="info">
<h6 class="name"><a href=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
</a></h6>
	</div>   
 </div>
</li>
<?php }} ?>
