<?php /* Smarty version Smarty-3.1.15, created on 2017-05-03 14:34:50
         compiled from "/opt/lbaw/lbaw1661/public_html/proto/templates/events/publication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170717681658ff50420f0b79-82807183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ed3d51544ee14429a7633d44c7f582f1521546e' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/proto/templates/events/publication.tpl',
      1 => 1493807062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170717681658ff50420f0b79-82807183',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58ff5042247938_08642362',
  'variables' => 
  array (
    'user' => 0,
    'pub' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ff5042247938_08642362')) {function content_58ff5042247938_08642362($_smarty_tpl) {?><article class="row">
  <div class="col-md-2 col-sm-2 hidden-xs">
    <figure class="thumbnail">
      <img class="img-responsive" src=<?php echo $_smarty_tpl->tpl_vars['user']->value['picture'];?>
 />
      <figcaption class="text-center">@<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</figcaption>
    </figure>
  </div>
  <div class="col-md-10 col-sm-10">
    <div class="panel panel-default arrow left">
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
          <br />
          <?php }?>
        </div>
        <div class="row">
        <div class="col-md-10 col-sm-10">
          <p class="text-left"><a href="#" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-thumbs-up"></i></a></p>
        </div>
        <div class="col-md-10 col-sm-10">
          <p class="text-left"><a href="#" class="btn btn-info btn-sm"><i class="fa fa-reply"></i> Reply</a></p>
        </div>
        </div>
      </div>
    </div>
  </div>
</article>
<?php }} ?>
