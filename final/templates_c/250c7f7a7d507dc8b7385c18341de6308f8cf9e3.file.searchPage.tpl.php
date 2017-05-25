<?php /* Smarty version Smarty-3.1.15, created on 2017-05-25 09:42:33
         compiled from "/opt/lbaw/lbaw1661/public_html/final/templates/events/searchPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1688761033590e057b835e89-92426813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '250c7f7a7d507dc8b7385c18341de6308f8cf9e3' => 
    array (
      0 => '/opt/lbaw/lbaw1661/public_html/final/templates/events/searchPage.tpl',
      1 => 1495701746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1688761033590e057b835e89-92426813',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590e057b984084_47508134',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590e057b984084_47508134')) {function content_590e057b984084_47508134($_smarty_tpl) {?><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js">
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
<script type="text/javascript" src="../../js/calendar.js"></script>
<script type="text/javascript" src="../../js/eventSearch.js"></script>

<div class="container specific">
  <div class="row">


    <div class="col-sm-3">
      <nav class="navbar navbar-default ES">

        <form method="post">
          <h2 id="filters">Filters</h2>

          <div class="well">
            <div class="checkbox">
              <h4 class="filter">Location</h4>
              <label>
	            <input id="location-north" type="checkbox" value="" checked>
	             <span class="cr"></span>
	            Norte
	          </label>
            </div>
            <div class="checkbox">
              <label>
	            <input id="location-center" type="checkbox" value="" checked>
	              <span class="cr"></span>
	            Centro
	          </label>
            </div>
            <div class="checkbox">
              <label>
	            <input id="location-south" type="checkbox" value="" checked>
	             <span class="cr"></span>
	            Sul
	          </label>

            </div>
          </div>

          <div class="well">
            <div class="checkbox">
              <h4 class="filter">Type</h4>
              <label>
	            <input id="type-cinema" type="checkbox" value="" checked>
	             <span class="cr"></span>
               Cinema
	          </label>
            </div>
            <div class="checkbox">
              <label>
	            <input id="type-concert" type="checkbox" value="" checked>
	              <span class="cr"></span>
	            Concerts
	          </label>
            </div>
            <div class="checkbox">
              <label>
	            <input id="type-exhibition" type="checkbox" value="" checked>
	              <span class="cr"></span>
	            Exhibitions
	          </label>
            </div>
            <div class="checkbox">
              <label>
	            <input id="type-dance" type="checkbox" value="" checked>
	            <span class="cr"></span>
	            Dance
	          </label>
            </div>
            <div class="checkbox">
              <label>
	            <input id="type-theatre" type="checkbox" value="" checked>
	            <span class="cr"></span>
	            Theatre
	          </label>
            </div>
          </div>

          <div class="well">
            <h4 class="filter">Price</h4>
            <input id="price" type="range" min="0" max="200" value="0" step="1" onchange="showValue(this.value)">
            <span id="range">0</span>
          </div>
          <div class="well">
            <h4 class="filter">Date</h4>
            <div class="form-group">
              <!-- Date input -->
              <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" />
            </div>
          </div>


        </form>
      </nav>
    </div>

    <div class="col-sm-offset-1 col-sm-8">
       <nav class="navbar navbar-default ES">
                <ul class="event-list">
<?php }} ?>
