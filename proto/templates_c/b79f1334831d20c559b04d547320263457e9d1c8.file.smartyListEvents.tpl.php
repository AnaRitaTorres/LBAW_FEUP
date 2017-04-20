<?php /* Smarty version Smarty-3.1.15, created on 2017-04-19 19:29:08
         compiled from "/opt/lbaw/lbaw1661/public_html/proto/templates/common/smartyListEvents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97885849358f7ac748448c8-18831923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b79f1334831d20c559b04d547320263457e9d1c8' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/proto/templates/common/smartyListEvents.tpl',
      1 => 1492620196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97885849358f7ac748448c8-18831923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'day' => 0,
    'month' => 0,
    'year' => 0,
    'event' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f7ac749ad346_88523531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f7ac749ad346_88523531')) {function content_58f7ac749ad346_88523531($_smarty_tpl) {?>

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
