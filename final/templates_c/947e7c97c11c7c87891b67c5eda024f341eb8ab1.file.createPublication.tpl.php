<?php /* Smarty version Smarty-3.1.15, created on 2017-05-13 17:27:17
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/events/createPublication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8105929565911860f15e0e0-15900525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '947e7c97c11c7c87891b67c5eda024f341eb8ab1' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/events/createPublication.tpl',
      1 => 1494692823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8105929565911860f15e0e0-15900525',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5911860f2cc9c8_40555579',
  'variables' => 
  array (
    'session' => 0,
    'idevent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5911860f2cc9c8_40555579')) {function content_5911860f2cc9c8_40555579($_smarty_tpl) {?><article class="row">
  <div class="col-md-2 col-sm-2 hidden-xs">
    <figure class="thumbnail">
      <img class="img-responsive" src=<?php echo $_smarty_tpl->tpl_vars['session']->value['picture'];?>
 />
      <figcaption class="text-center">@<?php echo $_smarty_tpl->tpl_vars['session']->value['username'];?>
</figcaption>
    </figure>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10">
    <div id="pub" class="panel panel-default arrow left">
      <div class="panel-body">
        <header class="text-left">
          <div class="comment-user"><i class="fa fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['session']->value['name'];?>
</div>
        </header>
        <form class="form-horizontal" method="post" action="../../actions/events/createPublication.php">
          <input type="hidden" name="idevent" value=<?php echo $_smarty_tpl->tpl_vars['idevent']->value;?>
 />
          <div id="box" class="comment-post">
            <textarea class="form-control" rows="3" id="comment" name="comment" placeholder="Publication"></textarea>
            <br />
          </div>
            <div class="col-md-offset-9">
              <button type="submit" class="btn btn-info pull-right">Publish</button>
            </div>
         </form>
      </div>
    </div>
  </div>
</article>
<?php }} ?>
