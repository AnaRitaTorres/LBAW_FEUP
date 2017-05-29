<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 19:54:59
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/users/functions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:329970774590ad636cb4360-45649324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba13acedee834484f49781efae62bc42ddecd2e1' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/users/functions.tpl',
      1 => 1496084099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '329970774590ad636cb4360-45649324',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590ad636cc7398_99626757',
  'variables' => 
  array (
    'username' => 0,
    'picture' => 0,
    'name' => 0,
    'email' => 0,
    'profilePath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590ad636cc7398_99626757')) {function content_590ad636cc7398_99626757($_smarty_tpl) {?><li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span <span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a>
  <ul class="dropdown-menu">
    <div class="navbar-content">
      <div class="row">
        <div class="col-md-5">
          <img src=<?php echo $_smarty_tpl->tpl_vars['picture']->value;?>
 alt="Profile picture" class="img-responsive"/>
        </div>
        <div class="col-md-6">
          <span><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>
          <p class="text-muted small">
            <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

          </p>
        </div>
      </div>
    </div>
    <li class="divider"></li>
    <div class="navbar-login navbar-login-session">
      <div class="row">
        <div class="col-lg-12">
          <p>
            <a href=<?php echo $_smarty_tpl->tpl_vars['profilePath']->value;?>
 class="btn btn-info btn-md btn-block">View Profile</a>
          </p>
        </div>
        <div class="col-lg-12">
          <p>
            <a href="../users/editProfile.php" class="btn btn-info btn-md btn-block">Edit Profile</a>
          </p>
        </div>
        <div class="col-lg-12">
          <p>
            <a href="../events/editEvent.php?create=1" class="btn btn-info btn-md btn-block">Create Event</a>
          </p>
        </div>
        <div class="col-lg-12">
          <p>
            <a href="../users/changePassword.php" class="btn btn-info btn-md btn-block">Change Password</a>
          </p>
        </div>
      </div>
    </div>
  </ul>
</li>
<?php }} ?>
