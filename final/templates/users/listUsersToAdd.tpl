<li class="users">
	<div class="row">
	<div class="col-md-3 col-xs-3">
		<div class="info">
			<h6 class="name"><a href={$link}>{$name} {$surname}</a></h6>
		</div> 
		</div>	
		<div class="col-md-4 col-xs-4 col-md-offset-1">
		<a href={$link}><img alt="user picture" src={$user.picture}  style="width:35%"/></a>
		
		</div>
		<div class="col-md-1 col-xs-1">
		<form method="post" onsubmit="return addUser({$idevent}, {$user.idcustomer});">
		  <div class="input-group">
			<button type="submit" class="btn btn-small btn-info pull-right addUser"><i class="glyphicon glyphicon-plus"></i></button>
		  </div>
		</form>
		</div>
		</div>
 </li>
