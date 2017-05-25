<?php /* Smarty version Smarty-3.1.15, created on 2017-05-03 11:38:11
         compiled from "/opt/lbaw/lbaw1661/public_html/proto/templates/events/listEvents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47275724958f879df82af89-65223311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a57ca518f1cdf35b378398f73df720ad9c65acdb' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/proto/templates/events/listEvents.tpl',
      1 => 1493807062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47275724958f879df82af89-65223311',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f879df987124_58276745',
  'variables' => 
  array (
    'day' => 0,
    'month' => 0,
    'year' => 0,
    'link' => 0,
    'event' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f879df987124_58276745')) {function content_58f879df987124_58276745($_smarty_tpl) {?><li>
	<time>
		<span class="day"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</span>
		<span class="month"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</span>
		<span class="year"><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</span>
	</time>
	<a href=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
><img alt="Logan" src=<?php echo $_smarty_tpl->tpl_vars['event']->value['picture'];?>
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
