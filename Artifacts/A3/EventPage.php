<?php
    include ('header.php');
?>

	<div class="container">
		<nav id="event-image" class="navbar navbar-default">
			<img align="left" id="profile_picture" class="img-rounded" src="images/concert.jpg" style="width:100%; height: 350px">
		</nav>
		<nav id="event-info" class="navbar navbar-default">
			<div class="info">
				<h3>
					<span>Event Information</span>
					<!--edit button -->
					<!--<button id="EditButton" type="submit" class="btn btn-info pull-right"><i class="glyphicon glyphicon-pencil"></i> Edit</button>-->
					<!--attendace button-->
				</h3>
				<hr/>
			</div>
			<div class="row">
				<p><i class="glyphicon glyphicon-map-marker">&nbsp;&nbsp;</i> <b class="Local">Location: &nbsp;</b> Casa da Música, Porto</p>
			</div>
			<div class="row">
				<p><i class="glyphicon glyphicon-calendar">&nbsp;&nbsp;</i><b class="Data">Date: &nbsp;</b>12-02-2017</p>
			</div>
			<div class="row">
				<p><i class="glyphicon glyphicon-time">&nbsp;&nbsp;</i><b class="Hora">Time: &nbsp;</b>12:35&nbsp;-&nbsp;19:00 </p>
			</div>
			<hr/>
			<p>An event created to share different types of music and showing off some new musical groups!</p>
		</nav>

		<nav id="event-comment" class="navbar navbar-default">
			<table class="navbar-header">
				<thead>
					<tr>
						<h3>Comments<h3>
					</tr>
					<hr>
				</thead>
			</table>
			<div class="comment-section">
				<div class="row">
					<div class="col-sm-1 col-sm-offset-1">
						<div class="thumbnail">
							<img class="img user-photo" src="images/person.jpg">
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
							<div class="panel-body">OMG can't wait!</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-1 col-sm-offset-1">
						<div class="thumbnail">
							<img class="img-responsive user-photo" src="images/person.jpg">
						</div>
					</div>
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
								</div>
							</div>
							<div class="panel-body">Cool stuff</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-1 col-sm-offset-1">
						<div class="thumbnail">
							<img class="img-responsive user-photo" src="images/person.jpg">
						</div>
					</div>
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
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
<?php
	include ('footer.php');
?>