<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width = device-width, initial-scale = 1">

		<title> Event </title>

		<link rel="stylesheet" href="EventPage.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	</head>
	<body>
		<div class="container">
			<nav  id="event-image" class="navbar navbar-default">
				<img align="left" id="profile_picture" class="img-rounded" src="images/concerto.jpg" style="width: 100%; height: 350px" >
			</nav>
			
			<nav id="event-info" class="navbar navbar-default">
					<div class="container-fluid">
						<table class="navbar-header">
							<thead>
								<tr><h3>Event Info<h3></tr>
								<hr>
							</thead>
							<tbody>
									<div class="container-fluid">
										<tr>
											<td>
												<p>
													<i class="fa fa-map-marker">&nbsp;&nbsp;&nbsp;</i>
												</p>
											</td>
											<td align="right">
												<p>
													<b class="Local" >Local: &nbsp;</b>
												</p>
											</td>
											<td>
												<p> Casa da Música, Porto</p>
											</td>
										</tr>
										<tr>
											<td>
												<p>
													<i class="fa fa-calendar">&nbsp;&nbsp;&nbsp;</i>
												</p>
											</td>
											<td align="right">
												<p>
													<b class="Data" >Date: &nbsp;</b>
												</p>
											</td>
											<td>
												<p> 12-02-2017</p>
											</td>
										</tr>											
										<tr >
											<td>
												<p>
													<i class="fa fa-clock-o">&nbsp;&nbsp;&nbsp;</i>
												</p>
											</td>
											<td align="right">
												<p>
													<b class="Hora" >Time: &nbsp;</b>
												</p>
											</td>
											<td>
												<p> 12:35&nbsp;-&nbsp;19:00 </p> 
											</td>
										</tr>
									
									</div>
									
								
							</tbody>
						</table>
					</div>
				</nav>
	           
			  

			   <nav  id="event-comment" class="navbar navbar-default">
					<div class="container-fluid">
						<table class="navbar-header">
							<thead>
								<tr><h3>Comment<h3></tr>
								<hr>
							</thead>
						</table>
					</div>
					<div class="comment-section">
					
					<div class="row">
						<div class="col-sm-1 col-sm-offset-1">
							<div class="thumbnail">
								<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
							</div><!-- /thumbnail -->
						</div><!-- /col-sm-1 -->

						<div class="col-sm-5 ">
							<div class="panel panel-default">
								<div class="panel-heading">
									<strong>Miriam Gonçalves</strong> <span class="text-muted-time">commented 5 days ago </span>
									
									<div id="like-buttons" class="btn-group pull-right">
										<a href="#" class="btn btn-default stat-item">
											<i class="fa fa-thumbs-up icon"></i>10
										</a>
										<a href="#" class="btn btn-default stat-item ">
											<i class="fa fa-thumbs-down icon"></i>24
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
											<i class="fa fa-thumbs-up icon"></i>10
										</a>
										<a href="#" class="btn btn-default stat-item ">
											<i class="fa fa-thumbs-down icon"></i>24
										</a>
								</div>
								
							</div>
							
								<div class="panel-body">
									Cool stuff
								</div><!-- /panel-body -->
						
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
									<button type="submit" class="btn btn-success green"><i class="fa fa-comment "></i> Comment</button>
									<button type="button" class="btn btn-danger red"><i class="fa fa-times"></i>&nbsp;Cancel</button>
								</div>
							</div><!-- /panel panel-default -->
						</div><!-- /col-sm-5 -->
					</div>
					
			   </nav>
	</body>
</html>