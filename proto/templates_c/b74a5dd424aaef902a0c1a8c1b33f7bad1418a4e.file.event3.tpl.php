<?php /* Smarty version Smarty-3.1.15, created on 2017-04-25 14:32:25
         compiled from "/opt/lbaw/lbaw1661/public_html/proto/templates/events/event3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98142649158fe0fc0f34de0-21170926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b74a5dd424aaef902a0c1a8c1b33f7bad1418a4e' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/proto/templates/events/event3.tpl',
      1 => 1493127093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98142649158fe0fc0f34de0-21170926',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58fe0fc101c189_70806126',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe0fc101c189_70806126')) {function content_58fe0fc101c189_70806126($_smarty_tpl) {?></div>
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
        <!-- Contenedor Principal -->
        <div class="comments-container">
          <div class="row">
            <div class="col-md-12">
              <section class="comment-list">
<?php }} ?>
