<?php /* Smarty version Smarty-3.1.15, created on 2017-04-26 12:21:38
         compiled from "/opt/lbaw/lbaw1661/public_html/proto/templates/events/reply.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151692016258ff51845b3aa5-44368872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7aa23d5d860584dd5ba28b632d1408317b150f3' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/proto/templates/events/reply.tpl',
      1 => 1493205442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151692016258ff51845b3aa5-44368872',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58ff5184709778_43589124',
  'variables' => 
  array (
    'userR' => 0,
    'user' => 0,
    'rep' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ff5184709778_43589124')) {function content_58ff5184709778_43589124($_smarty_tpl) {?><article class="row">
  <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
    <figure class="thumbnail">
      <img class="img-responsive" src=<?php echo $_smarty_tpl->tpl_vars['userR']->value['picture'];?>
 />
      <figcaption class="text-center">@<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</figcaption>
    </figure>
  </div>
  <div class="col-md-9 col-sm-9">
    <div class="panel panel-default arrow left">
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
      </div>
    </div>
  </div>
</article>
<?php }} ?>
