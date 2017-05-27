<?php /* Smarty version Smarty-3.1.15, created on 2017-05-26 17:34:44
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/users/profile1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1332532451590ad6744e1e28-33390794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c75d9b178780c4aea742717d1ba7503218c59e89' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/users/profile1.tpl',
      1 => 1495816352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1332532451590ad6744e1e28-33390794',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590ad67466ece0_35689603',
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
<?php if ($_valid && !is_callable('content_590ad67466ece0_35689603')) {function content_590ad67466ece0_35689603($_smarty_tpl) {?><script type="text/javascript" src="../../js/charts.js"></script>

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
          <div class="row">
            <div class="col-md-10">
              <p><i class="glyphicon glyphicon-user"></i>
                <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

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
