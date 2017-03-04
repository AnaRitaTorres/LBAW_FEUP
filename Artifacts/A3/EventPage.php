<?php
    include ('header.php');
?>

<nav  id="event-image" class="navbar navbar-default">
	<img align="left" id="profile_picture" class="img-rounded" src="internet-troll.jpg" style="width: 100%; height: 350px" >
</nav>

<nav id="event-info" class="navbar navbar-default">
	<div class="container">	
		<div>
			<h3>
				<span>Event Info</span>
				<button  id="EditButton" type="submit" class="btn btn-info pull-right"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
			</h3>
			<hr/>
		</div>
		<div class="container">
			<div class="row">
				<p><i class="glyphicon glyphicon-map-marker">&nbsp;&nbsp;</i> <b class="Local" >Local: &nbsp;</b> Casa da Música, Porto</p>
			</div>
			<div class="row">
				<p><i class="glyphicon glyphicon-calendar">&nbsp;&nbsp;</i><b class="Data" >Date: &nbsp;</b>12-02-2017</p>
			</div>
			<div class="row">
				<p><i class="glyphicon glyphicon-time">&nbsp;&nbsp;</i><b class="Hora" >Time: &nbsp;</b>12:35&nbsp;-&nbsp;19:00 </p>
			</div>
		</div>
		<hr/>
		<div class="container">
			<p>An event created to share different types of music and showing off some new musical groups!</p>
		</div>
	</div>
</nav>

<nav  id="event-comment" class="navbar navbar-default">
	<div class="container">
		<table class="navbar-header">
			<thead>
				<tr><h3>Comment<h3></tr>
				<hr>
			</thead>
		</table>
	</div>

	<div class="comment-section">
		<div class="row">
			<div class="col-sm-1 col-sm-offset-1" >
				<div class="thumbnail">
					<img class="img user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
				</div>
			</div>

			<div class="col-sm-5 ">
				<div class="panel panel-default">
					<div class="panel-heading">						
						<strong>Miriam Gonçalves</strong> <span class="text-muted-time">commented 5 days ago </span>
						<div id="like-buttons" class="btn-group pull-right">
							<a href="#" class="btn btn-default stat-item">
								<i class="fa fa-thumbs-up icon"></i>&nbsp;10
							</a>
							<a href="#" class="btn btn-default stat-item ">
								<i class="fa fa-thumbs-down icon"></i>&nbsp;24
							</a>
						</div>
					</div>
				<div class="panel-body">OMG can't wait!</div><!-- /panel-body -->
				</div><!-- /panel panel-default -->
			</div><!-- /col-sm-5 -->
		</div>
		<div class="row">
			<div class="col-sm-1 col-sm-offset-1">
				<div class="thumbnail">
					<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
				</div><!-- /thumbnail -->
			</div><!-- /col-sm-1 -->

			<div class="col-sm-5 ">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>Rita Torres</strong> <span class="text-muted-time">commented 5 days ago </span>
						<div id="like-buttons" class="btn-group pull-right">
							<a href="#" class="btn btn-default stat-item">
								<i class="fa fa-thumbs-up icon"></i>&nbsp;10
							</a>
							<a href="#" class="btn btn-default stat-item ">
								<i class="fa fa-thumbs-down icon"></i>&nbsp;24
							</a>
						</div><!-- like-buttons -->
					</div><!-- panel-heading -->
					<div class="panel-body">Cool stuff</div><!-- /panel-body -->
				</div><!-- /panel panel-default -->
			</div><!-- /col-sm-5 -->
		</div>
		<div class="row">
			<div class="col-sm-1 col-sm-offset-1">
				<div class="thumbnail">
					<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
				</div><!-- /thumbnail -->
			</div><!-- /col-sm-1 -->
			<div class="col-sm-5 ">	
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>Miriam Gonçalves</strong>
					</div>
					<input type="text" class="form-control input-lg" id="search-church" placeholder="Comment something here...">
					<div class="panel-heading">
						<button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-comment"></i> Comment</button>
						<button type="button" class="btn btn-info"><i class="glyphicon glyphicon-remove"></i>&nbsp;Cancel</button>
					</div>
				</div><!-- /panel panel-default -->
			</div><!-- /col-sm-5 -->
		</div>
	</div>
</nav>
			 </div>
				 <?php
				     include ('footer.php');
				 ?>
