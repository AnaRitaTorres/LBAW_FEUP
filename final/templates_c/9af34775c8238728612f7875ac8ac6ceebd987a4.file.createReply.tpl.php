<?php /* Smarty version Smarty-3.1.15, created on 2017-05-13 17:04:53
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/events/createReply.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20321844105911878c876ff5-83278753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9af34775c8238728612f7875ac8ac6ceebd987a4' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/events/createReply.tpl',
      1 => 1494691488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20321844105911878c876ff5-83278753',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5911878c88bad3_41950539',
  'variables' => 
  array (
    'session' => 0,
    'user' => 0,
    'idevent' => 0,
    'pub' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5911878c88bad3_41950539')) {function content_5911878c88bad3_41950539($_smarty_tpl) {?><article class="row">
  <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
    <figure class="thumbnail">
      <img class="img-responsive" src=<?php echo $_smarty_tpl->tpl_vars['session']->value['picture'];?>
 />
      <figcaption class="text-center">@<?php echo $_smarty_tpl->tpl_vars['session']->value['username'];?>
</figcaption>
    </figure>
  </div>
  <div class="col-lg-9 col-md-9 col-sm-9">
    <div id="pub" class="panel panel-default arrow left">
      <div class="panel-body">
        <header class="text-left">
          <!--<div class="comment-user">Reply to <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</div>-->
          <div class="comment-user"><i class="fa fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['session']->value['name'];?>
</div>
        </header>
        <form class="form-horizontal" method="post" action="../../actions/events/createReply.php">
          <input type="hidden" name="idevent" value=<?php echo $_smarty_tpl->tpl_vars['idevent']->value;?>
 />
          <input type="hidden" name="idpub" value=<?php echo $_smarty_tpl->tpl_vars['pub']->value['idpub'];?>
 />
          <div class="comment-post">
            <textarea class="form-control" rows="3" id="description" name="description" placeholder="Reply"></textarea>
            <br/>
          </div>
            <div class="col-md-offset-9">
              <button type="submit" class="btn btn-info pull-right">Reply</button>
           </div>
        </form>
      </div>
    </div>
  </div>
</article>
<?php }} ?>
