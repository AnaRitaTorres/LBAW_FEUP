<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 22:30:11
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/events/reply.tpl" */ ?>
<?php /*%%SmartyHeaderCode:672698552590ad6d03c6b02-08739738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2873f82b2da772fa0b04f6f2c37072b50167d6a' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/events/reply.tpl',
      1 => 1496093381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '672698552590ad6d03c6b02-08739738',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590ad6d03dff10_84023960',
  'variables' => 
  array (
    'pub' => 0,
    'rep' => 0,
    'userRLink' => 0,
    'userR' => 0,
    'clear' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590ad6d03dff10_84023960')) {function content_590ad6d03dff10_84023960($_smarty_tpl) {?><article class="row pub<?php echo $_smarty_tpl->tpl_vars['pub']->value['idpub'];?>
 reply<?php echo $_smarty_tpl->tpl_vars['rep']->value['idreply'];?>
">
  <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
    <figure class="thumbnail">
      <a href=<?php echo $_smarty_tpl->tpl_vars['userRLink']->value;?>
><img class="img-responsive" alt="user profile picture" src=<?php echo $_smarty_tpl->tpl_vars['userR']->value['picture'];?>
 /></a>
      <a href=<?php echo $_smarty_tpl->tpl_vars['userRLink']->value;?>
><figcaption class="text-center">@<?php echo $_smarty_tpl->tpl_vars['userR']->value['username'];?>
</figcaption></a>
    </figure>
  </div>
  <div class="col-md-9 col-sm-9">
    <div id="pub" class="panel panel-default arrow left">
      <div class="panel-body">
        <header class="text-left">
          <div class="comment-user"><i class="fa fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['userR']->value['name'];?>
</div>
        </header>
        <div class="comment-post">
          <p>
            <?php echo $_smarty_tpl->tpl_vars['rep']->value['description'];?>

          </p>
        </div>
		<div class="col-md-offset-0">
            <?php if ($_smarty_tpl->tpl_vars['clear']->value==1) {?>
            <button type="submit deleteRep" class="deleteRep btn btn-info pull-right" value=<?php echo $_smarty_tpl->tpl_vars['rep']->value['idreply'];?>
><i class="glyphicon glyphicon-trash"></i></button>
            <?php }?>
        </div>
      </div>
    </div>
  </div>
</article>
<?php }} ?>
