<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 22:47:37
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/events/event4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:623017103590ad6c29d3663-00106751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99814fd47657474aa9029f71d1f9492bb0721fdc' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/events/event4.tpl',
      1 => 1496094440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '623017103590ad6c29d3663-00106751',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590ad6c29d5622_31884944',
  'variables' => 
  array (
    'session' => 0,
    'idevent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590ad6c29d5622_31884944')) {function content_590ad6c29d5622_31884944($_smarty_tpl) {?></section>
</div>
</div>
</div>
</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['session']->value['username']!=null) {?>
<div id="menu2" class="tab-pane fade">
  <div class="row">
    <!-- Principal -->
    <div class="evaluation-container">
      <div class="row">
        <div class="col-md-12">
          <form method="post">
            <input type="hidden" id="idevent" name="idevent" value=<?php echo $_smarty_tpl->tpl_vars['idevent']->value;?>
 />
            Rate Event (between 0 and 5):
            <input type="number" id="quantity" name="quantity" min="1" max="5">
            <button type="button" id="rate_event" class="btn btn-info pull-right">Evaluate</button>
          </form>
          <div id="rate_response">
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php }?>

<div id="menu3" class="tab-pane fade">
  <div class="row">
    <!-- Principal -->
    <div class="host-container">
      <div class="row">
        <div class="col-md-12">
         <ul class="listHost">
<?php }} ?>
