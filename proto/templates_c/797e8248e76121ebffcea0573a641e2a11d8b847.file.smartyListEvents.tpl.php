<?php /* Smarty version Smarty-3.1.15, created on 2017-04-19 17:43:19
         compiled from "/opt/lbaw/lbaw1661/public_html/proto/templates/cenas/smartyListEvents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121163143958f78596f26d35-86718922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '797e8248e76121ebffcea0573a641e2a11d8b847' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/proto/templates/cenas/smartyListEvents.tpl',
      1 => 1492620196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121163143958f78596f26d35-86718922',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f78597171695_48664908',
  'variables' => 
  array (
    'day' => 0,
    'month' => 0,
    'year' => 0,
    'event' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f78597171695_48664908')) {function content_58f78597171695_48664908($_smarty_tpl) {?>

	<li>
	 <time>
	  <span class="day"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</span>
	  <span class="month"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</span>
	  <span class="year"><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</span>
	</time>
	<a href="#"><img alt="Logan" src="../images/logan1.jpg"/></a>
	<div class="info">
	 <h2 class="title"><a href="#"><?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
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
