<?php /* Smarty version Smarty-3.1.15, created on 2017-05-15 12:29:22
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/events/publication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123680285590ad6d0372b07-27795434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd216a507a196a6c03e1c25aa6ba454e28d9dc6bd' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/events/publication.tpl',
      1 => 1494694727,
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
    'userLink' => 0,
    'user' => 0,
    'pub' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590ad6d03b67f8_35533898')) {function content_590ad6d03b67f8_35533898($_smarty_tpl) {?><article class="row">
  <div class="col-md-2 col-sm-2 hidden-xs">
    <figure class="thumbnail">
      <a href=<?php echo $_smarty_tpl->tpl_vars['userLink']->value;?>
><img class="img-responsive" src=<?php echo $_smarty_tpl->tpl_vars['user']->value['picture'];?>
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
          <img class="img-responsive" src=<?php echo $_smarty_tpl->tpl_vars['pub']->value['file'];?>
 />
          <br /> <?php }?>
        </div>
        
          <div class="col-md-offset-0">
            <button id="thumbsUp" class="btn btn-info pull-right"><i class="glyphicon glyphicon-thumbs-up"></i></button>
          </div>
          <div class="col-md-offset-9">
            <button id="thumbsDown" class="btn btn-info pull-right" ><i class="glyphicon glyphicon-thumbs-down"></i></button>
          </div>
          <div class="col-md-offset-0">
              <button type="submit" id="replyPub" class="btn btn-info pull-right">Reply</button>
           </div>
        </div>
    </div>
  </div>
</article>
<?php }} ?>
