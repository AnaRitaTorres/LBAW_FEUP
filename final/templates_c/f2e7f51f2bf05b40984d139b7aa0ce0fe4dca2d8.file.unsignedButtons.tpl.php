<?php /* Smarty version Smarty-3.1.15, created on 2017-05-11 16:28:38
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/events/unsignedButtons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77248648590ad6d035a012-63053830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2e7f51f2bf05b40984d139b7aa0ce0fe4dca2d8' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/events/unsignedButtons.tpl',
      1 => 1494516516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77248648590ad6d035a012-63053830',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590ad6d035c487_19590948',
  'variables' => 
  array (
    'idevent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590ad6d035c487_19590948')) {function content_590ad6d035c487_19590948($_smarty_tpl) {?><div class="go">
  <form method="post" action="../../actions/events/goToEvent.php">
    <input type="hidden" name="idevent" value=<?php echo $_smarty_tpl->tpl_vars['idevent']->value;?>
 />
    <button class="btn btn-success" type="submit">Going</button>
  </form>
</div>
<?php }} ?>
