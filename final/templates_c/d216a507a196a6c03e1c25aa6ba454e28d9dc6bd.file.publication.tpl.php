<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 22:25:45
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/events/publication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123680285590ad6d0372b07-27795434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd216a507a196a6c03e1c25aa6ba454e28d9dc6bd' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/events/publication.tpl',
      1 => 1496092809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123680285590ad6d0372b07-27795434',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590ad6d03b67f8_35533898',
  'variables' => 
  array (
    'pub' => 0,
    'userLink' => 0,
    'user' => 0,
    'session' => 0,
    'clear' => 0,
    'likes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590ad6d03b67f8_35533898')) {function content_590ad6d03b67f8_35533898($_smarty_tpl) {?><article class="row pub<?php echo $_smarty_tpl->tpl_vars['pub']->value['idpub'];?>
">
  <div class="col-md-2 col-sm-2 hidden-xs">
    <figure class="thumbnail">
      <a href=<?php echo $_smarty_tpl->tpl_vars['userLink']->value;?>
><img class="img-responsive" alt="user profile picture" src=<?php echo $_smarty_tpl->tpl_vars['user']->value['picture'];?>
 /></a>
      <a href=<?php echo $_smarty_tpl->tpl_vars['userLink']->value;?>
>
        <figcaption class="text-center">@<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</figcaption>
      </a>
    </figure>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10">
    <div id="pub" class="panel panel-default arrow left">
      <div class="panel-body">
        <header class="text-left">
          <div class="comment-user"><i class="fa fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</div>
        </header>
        <div class="comment-post">
          <?php if ($_smarty_tpl->tpl_vars['pub']->value['comment']!=null) {?>
          <p>
            <?php echo $_smarty_tpl->tpl_vars['pub']->value['comment'];?>

          </p>
          <?php } else { ?>
          <img class="img-responsive" alt="publication picture" src=<?php echo $_smarty_tpl->tpl_vars['pub']->value['file'];?>
 />
          <br /> <?php }?>

        </div>
        <?php if ($_smarty_tpl->tpl_vars['session']->value['username']!=null) {?>
        <form class="form-horizontal" method="post">
		<div class="col-md-offset-0">
        <?php if ($_smarty_tpl->tpl_vars['clear']->value==1) {?>
            <button type="submit deletePub" class="deletePub btn btn-info pull-right" value=<?php echo $_smarty_tpl->tpl_vars['pub']->value['idpub'];?>
><i class="glyphicon glyphicon-trash"></i></button>
        <?php }?>
        </div>
          <div class="col-md-offset-1" >
            <button id="thumbsUp<?php echo $_smarty_tpl->tpl_vars['pub']->value['idpub'];?>
" type="button" class="btn btn-info pull-right like" value=<?php echo $_smarty_tpl->tpl_vars['pub']->value['idpub'];?>
><i class="glyphicon glyphicon-thumbs-up"></i> <?php echo $_smarty_tpl->tpl_vars['likes']->value;?>
</button>
          </div>
        </form>
        <div class="col-md-offset-0">
            <button type="submit replyPub" class="btn btn-info pull-right replyPub" value=<?php echo $_smarty_tpl->tpl_vars['pub']->value['idpub'];?>
>Reply</button>
        </div>
		<?php }?>
      </div>
    </div>
  </div>
</article>
<?php }} ?>
