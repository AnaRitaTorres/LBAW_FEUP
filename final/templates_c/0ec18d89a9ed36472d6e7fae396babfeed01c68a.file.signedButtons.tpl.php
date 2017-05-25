<?php /* Smarty version Smarty-3.1.15, created on 2017-05-03 16:56:38
         compiled from "/opt/lbaw/lbaw1661/public_html/proto/templates/events/signedButtons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135279696558fe2de89c6da1-36118396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ec18d89a9ed36472d6e7fae396babfeed01c68a' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/proto/templates/events/signedButtons.tpl',
      1 => 1493807062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135279696558fe2de89c6da1-36118396',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58fe2de8b0e3b3_48844765',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe2de8b0e3b3_48844765')) {function content_58fe2de8b0e3b3_48844765($_smarty_tpl) {?><div class="row">
  <div class="col-md-6">
    <form method="get" action="../../pages/events/editEvent.php">
      <input type="hidden" name="create" value=0 />
      <input type="hidden" name="id" value=<?php echo $_GET['id'];?>
 />
      <button id="Edit" class="btn btn-info" type="submit"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Edit</button>
    </form>
  </div>
  <div class="col-md-4">
    <form method="get" action="../../actions/events/deleteEvent.php">
      <input type="hidden" name="id" value=<?php echo $_GET['id'];?>
 />
      <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-remove-circle"></i> Delete</Button>
    </form>
  </div>
</div>

<?php }} ?>
