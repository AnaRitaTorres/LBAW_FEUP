<?php /* Smarty version Smarty-3.1.15, created on 2017-05-03 16:56:24
         compiled from "/opt/lbaw/lbaw1661/public_html/proto/templates/users/profile1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160697505358fb7ffe3b86d4-10675138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10175f1ad85517c2b30c284b848a1dc6c8d6a2ba' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/proto/templates/users/profile1.tpl',
      1 => 1493807062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160697505358fb7ffe3b86d4-10675138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58fb7ffe5541e1_46689477',
  'variables' => 
  array (
    'picture' => 0,
    'name' => 0,
    'username' => 0,
    'date' => 0,
    'gender' => 0,
    'email' => 0,
    'phone' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb7ffe5541e1_46689477')) {function content_58fb7ffe5541e1_46689477($_smarty_tpl) {?><script type="text/javascript" src="../../js/charts.js"></script>

<div class="container specific">
  <div class="row">
    <div id="profile" class="col-md-3">
      <nav class="navbar navbar-default">
        <img src=<?php echo $_smarty_tpl->tpl_vars['picture']->value;?>
 alt="Alternate Text" class="img-responsive center-block" />
        <h3 class="profilePage text-center"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h3>
        <h5 class="text-center">@<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h5>
        <div id="Content" class="navbar navbar-default">
          <hr/>
          <div class="row">
            <div class="col-md-10">
              <p><i class="glyphicon glyphicon-user"></i>
                <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

              </p>
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10">
              <p><i class="fa fa-birthday-cake">&nbsp;</i>
                <?php echo $_smarty_tpl->tpl_vars['date']->value;?>

              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10">
              <p><i class="fa fa-mars">&nbsp;</i>
                <?php echo $_smarty_tpl->tpl_vars['gender']->value;?>

              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10">
              <p><i class="glyphicon glyphicon-envelope"></i>
                <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10">
              <p><i class="glyphicon glyphicon-phone"></i>
                <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>

              </p>
            </div>
          </div>
      </nav>
      </div>
      <div class="col-sm-offset-1 col-sm-8">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">My Events</a></li>
          <li><a data-toggle="tab" href="#menu1">My Statistics</a></li>
        </ul>

        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            <nav class="ES">
              <ul class="event-list">
<?php }} ?>
