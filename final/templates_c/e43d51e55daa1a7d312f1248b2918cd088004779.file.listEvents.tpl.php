<?php /* Smarty version Smarty-3.1.15, created on 2017-05-27 17:11:43
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/events/listEvents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2067154891590ad636ce54d2-04621071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e43d51e55daa1a7d312f1248b2918cd088004779' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/events/listEvents.tpl',
      1 => 1495901499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2067154891590ad636ce54d2-04621071',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590ad636cfd403_91023416',
  'variables' => 
  array (
    'zone' => 0,
    'type' => 0,
    'date' => 0,
    'price' => 0,
    'day' => 0,
    'month' => 0,
    'year' => 0,
    'link' => 0,
    'event' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590ad636cfd403_91023416')) {function content_590ad636cfd403_91023416($_smarty_tpl) {?><li class="event <?php echo $_smarty_tpl->tpl_vars['zone']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['price']->value;?>
">
	<time>
		<span class="day"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</span>
		<span class="month"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</span>
		<span class="year"><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</span>
	</time>
	<a href=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
><img src=<?php echo $_smarty_tpl->tpl_vars['event']->value['picture'];?>
 /></a>
	<div class="info">
		<h2 class="title"><a href=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
><?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
</a></h2>
		<p class="desc"><?php echo $_smarty_tpl->tpl_vars['event']->value['type'];?>
</p>
		<p class="desc"><?php echo $_smarty_tpl->tpl_vars['event']->value['district'];?>
</p>
		<p class="desc"><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</p>
	</div>
</li>
<?php }} ?>
