<?php /* Smarty version Smarty-3.1.15, created on 2017-05-11 16:28:24
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/events/unsignedGoing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176070578359147dd1e31c22-97950502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96c251aed4cccfbb4542dee30042fa257dd70aa3' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/events/unsignedGoing.tpl',
      1 => 1494516501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176070578359147dd1e31c22-97950502',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59147dd204f1d4_42036855',
  'variables' => 
  array (
    'idevent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59147dd204f1d4_42036855')) {function content_59147dd204f1d4_42036855($_smarty_tpl) {?><div class="go">
  <form method="post" action="../../actions/events/notGoToEvent.php">
    <input type="hidden" name="idevent" value=<?php echo $_smarty_tpl->tpl_vars['idevent']->value;?>
 />
    <button class="btn btn-danger" type="submit">Not Going</button>
  </form>
</div>
<?php }} ?>
