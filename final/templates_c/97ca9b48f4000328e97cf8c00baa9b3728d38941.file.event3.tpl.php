<?php /* Smarty version Smarty-3.1.15, created on 2017-05-12 16:35:22
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/events/event3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2130338166590ad6c29a7735-10059845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97ca9b48f4000328e97cf8c00baa9b3728d38941' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/events/event3.tpl',
      1 => 1494603294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2130338166590ad6c29a7735-10059845',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590ad6c29c7c97_62886314',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590ad6c29c7c97_62886314')) {function content_590ad6c29c7c97_62886314($_smarty_tpl) {?></div>
<div id="InfoContent">
  <hr/>
  <div class="row">
    <div class=" col-offset-1 col-md-10">
      <p>&nbsp;<i class="glyphicon glyphicon-map-marker"></i> <b class="Local">Location:</b>
        <?php echo $_smarty_tpl->tpl_vars['info']->value['address'];?>

      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-offset-1 col-md-10">
      <p>&nbsp;<i class="glyphicon glyphicon-calendar"></i><b class="Data">Date:</b>
        <?php echo $_smarty_tpl->tpl_vars['info']->value['date'];?>

      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-offset-1 col-md-10">
      <p>&nbsp;<i class="glyphicon glyphicon-time"></i><b class="Hora">Time:</b>
        <?php echo $_smarty_tpl->tpl_vars['info']->value['time'];?>

      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-offset-1 col-md-10">
      <p>
        <?php echo $_smarty_tpl->tpl_vars['info']->value['overview'];?>

      </p>
    </div>
  </div>
</div>
</nav>
</div>
<div class="col-sm-offset-1 col-sm-8">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Google Maps</a></li>
    <li><a data-toggle="tab" href="#menu1">Publications</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active" style="height: 25em">
      <iframe id="map" style="width:100%; height:100%;" class="img-responsive center-block" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo $_smarty_tpl->tpl_vars['info']->value['address'];?>
&key=AIzaSyCdqMmRf8c1f_yTgtjt7zT_5tdO5UOPka4" allowfullscreen></iframe>
    </div>

    <div id="menu1" class="tab-pane fade">
      <div class="row">
        <!-- Principal -->
        <div class="comments-container">
          <div class="row">
            <div class="col-md-12">
              <section class="comment-list">
<?php }} ?>
