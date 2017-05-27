<?php /* Smarty version Smarty-3.1.15, created on 2017-05-27 00:58:59
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/users/listUsers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5146615195928b52eaf08f2-94924363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a58fd6e6df1fd2253ee52cca369931a54c064318' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/users/listUsers.tpl',
      1 => 1495842920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5146615195928b52eaf08f2-94924363',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5928b52ec8ea59_85288134',
  'variables' => 
  array (
    'link' => 0,
    'user' => 0,
    'name' => 0,
    'surname' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5928b52ec8ea59_85288134')) {function content_5928b52ec8ea59_85288134($_smarty_tpl) {?><li class="user">
<a href=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
><img src=<?php echo $_smarty_tpl->tpl_vars['user']->value['picture'];?>
 /></a>
<div class="info">
<h2 class="name"><a href=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
</a></h2>
	<p class="desc">@<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</p>
 </div>   
</li><?php }} ?>
