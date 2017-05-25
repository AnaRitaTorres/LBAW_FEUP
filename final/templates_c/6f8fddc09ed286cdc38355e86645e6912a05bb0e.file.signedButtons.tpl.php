<?php /* Smarty version Smarty-3.1.15, created on 2017-05-13 16:56:38
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/events/signedButtons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:239479264590ad6c298d4b1-87711796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f8fddc09ed286cdc38355e86645e6912a05bb0e' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/events/signedButtons.tpl',
      1 => 1494690995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239479264590ad6c298d4b1-87711796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590ad6c29a3dd3_15182026',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590ad6c29a3dd3_15182026')) {function content_590ad6c29a3dd3_15182026($_smarty_tpl) {?><div class="row">
  <div class="col-md-offset-0">
    <form method="get" action="../../pages/events/editEvent.php">
      <input type="hidden" name="create" value=0 />
      <input type="hidden" name="id" value=<?php echo $_GET['id'];?>
 />
      <p>
        <button id="Edit" class="btn btn-info" type="submit"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Edit</button>
      </p>
    </form>
      <form method="get" action="../../actions/events/deleteEvent.php">
      <input type="hidden" name="id" value=<?php echo $_GET['id'];?>
 />
      <p>
        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-remove"></i>&nbsp;Delete</Button>
      </p>
    </form>
  </div>
</div>
<?php }} ?>
