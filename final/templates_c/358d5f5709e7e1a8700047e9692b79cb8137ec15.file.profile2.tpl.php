<?php /* Smarty version Smarty-3.1.15, created on 2017-05-04 09:46:26
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/users/profile2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1769517803590ad67469c559-62200048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '358d5f5709e7e1a8700047e9692b79cb8137ec15' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/users/profile2.tpl',
      1 => 1493887572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1769517803590ad67469c559-62200048',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590ad67469f050_04155833',
  'variables' => 
  array (
    'hosted' => 0,
    'invited' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590ad67469f050_04155833')) {function content_590ad67469f050_04155833($_smarty_tpl) {?></ul>
</nav>
</div>

<div id="menu1" class="tab-pane fade">
  <input type="hidden" id="hosted" value=<?php echo $_smarty_tpl->tpl_vars['hosted']->value;?>
 />
  <input type="hidden" id="invited" value=<?php echo $_smarty_tpl->tpl_vars['invited']->value;?>
 />
  <div class="row">
    <div class="col-xs-offset-0 col-xs-5">
      Hosted<canvas id="myHostedEvents"></canvas>
    </div>
    <div class="col-xs-offset-1 col-xs-5">
      Invited<canvas id="myInvitedEvents"></canvas>
    </div>
    <div class="col-xs-offset-2 col-xs-8">
      <canvas id="myTitle"></canvas>
    </div>
  </div>
</div>
</div>
</div>
<?php }} ?>
