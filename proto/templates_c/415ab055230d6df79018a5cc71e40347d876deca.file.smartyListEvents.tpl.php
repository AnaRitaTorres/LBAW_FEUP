<?php /* Smarty version Smarty-3.1.15, created on 2017-04-20 09:56:55
         compiled from "/opt/lbaw/lbaw1661/public_html/proto/templates/events/smartyListEvents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92837380158f876b8893182-65238565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '415ab055230d6df79018a5cc71e40347d876deca' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/proto/templates/events/smartyListEvents.tpl',
      1 => 1492678539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92837380158f876b8893182-65238565',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f876b88c5963_95458533',
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
<?php if ($_valid && !is_callable('content_58f876b88c5963_95458533')) {function content_58f876b88c5963_95458533($_smarty_tpl) {?>	<li>
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
