<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width = device-width, initial-scale = 1">

		<title> Bootstrap Tuturial </title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="profile.css">


	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-default">
				<img align="left" id="back_picture" class="img-rounded" src="images/image2.jpg" style="width: 100%; height: 350px">
				<img align="left" id="front_picture" class="img-circle" src="images/image1.jpg" style="width: 200px; height: 200px">

				<h2 align="left" id="name" class="name"> <u>Miriam Torres</u> (Nabas) </h2>
			</nav>

			<nav class="navbar navbar-default">
					 <h4><a href="#InfoContent" data-toggle="collapse"><b>Info</b></a><h4>
				<div id="InfoContent" class="row collapse">
					<div class="row">
						<div class="col-xs-1" align="right">
							&nbsp;<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<div class="col-xs-3" align="left">
							Miriam Rita Gonçalves Torres
						</div>
					</div>

					<div class="row">
						<div class="col-xs-1" align="right">
							&nbsp;<i class="fa fa-birthday-cake" aria-hidden="true"></i>
						</div>
						<div class="col-xs-3" align="left">
							12-02-2017
						</div>
					</div>

					<div class="row">
						<div class="col-xs-1" align="right">
							&nbsp;<i class="fa fa-globe" aria-hidden="true"></i>
						</div>
						<div class="col-xs-3" align="left">
							Portugal
						</div>
					</div>

					<div class="row">
						<div class="col-xs-1" align="right">
							&nbsp;<i class="fa fa-venus" aria-hidden="true"></i>
						</div>
						<div class="col-xs-3" align="left">
							Female
						</div>
					</div>

					<div class="row">
						<div class="col-xs-1" align="right">
							&nbsp;<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="col-xs-3" align="left">
							miriamtorres69@sapo.pt
						</div>
					</div>

					<div class="row">
						<div class="col-xs-1" align="right">
							&nbsp;<i class="fa fa-mobile" aria-hidden="true"></i>
						</div>
						<div class="col-xs-3" align="left">
							969392919
						</div>
					</div>
				</div>
			</nav>

			<nav class="navbar navbar-default">
				<table class="table">
					<thead>
						<tr><h4><b>Description</b><h4></tr>
						<hr>
					</thead>
					<tbody>
						<h5 class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus aliquet magna, ut tristique tellus sollicitudin at.
						 Sed non blandit neque. Nullam ac justo et augue faucibus aliquet id sit amet mauris.
						 Aliquam tempor, felis quis molestie venenatis, nulla lacus aliquam magna, non vulputate sapien ex tempus mi.
						 Vestibulum volutpat turpis nisl. Proin pretium mauris ut lacus ullamcorper, eget hendrerit urna tincidunt. Ut sit amet imperdiet dui.
						 Sed malesuada vel nulla sed cursus. Curabitur ac massa metus. Integer ullamcorper ligula at neque tempus, id malesuada orci porta.
						 Vestibulum ante neque, laoreet id ante in, accumsan pretium lectus. Cras pulvinar neque ac dui imperdiet, in fringilla justo porttitor.<br><br>

						 Cras placerat ullamcorper ligula, sit amet egestas tortor pellentesque ac. Aenean commodo scelerisque dolor, non pulvinar mauris finibus vel.
						 Nullam at mauris sed tellus scelerisque venenatis et ac nisl. Sed suscipit erat quis nisi cursus faucibus. In dignissim odio eros, nec sodales urna mattis et.
						 Fusce sit amet purus a velit iaculis ornare vel eget nisi. Nulla faucibus dignissim malesuada.</h5>
					</tbody>
				</table>
			</nav>

			<!-- <nav class="navbar navbar-default">
				<div class="row">
					<h2 align="center">
						<legend align="center">
							Events
						</legend>
					</h2>
				</div>

				<div class="col-md-6">
					<legend align="center">
						TO ORGANIZE
					</legend>
				</div>

				<div class="col-md-6">
					<legend align="center">
						TO GO
					</legend>
				</div>
			</nav> -->

			<div class="row">
				<div class="col-md-4 col-md-offset-1">
					<div id="col1" class="panel panel-info">
							<div class="panel-heading">
									<h3 class="panel-title">
											<span class="glyphicon glyphicon-calendar"></span> 
											Organized Events
									</h3>
							</div>
							<div class="panel-body">
									<ul class="media-list">
											<li class="media">
													<div class="media-left">
															<div class="panel panel-info text-center date">
																	<div class="panel-heading month">
																			<span class="panel-title strong">
																					Jun
																			</span>
																	</div>
																	<div class="panel-body day text-danger">
																			2
																	</div>
															</div>
													</div>
													<div class="media-body">
															<a href="#" class="media-heading">
																	Eu Pulvinar Mauris
															</a>
															<p>
																	Vivamus pulvinar mauris eu placerat blandit. In euismod tellus vel ex vestibulum congue.
															</p>
													</div>
											</li>
											<li class="media">
													<div class="media-left">
															<div class="panel panel-info text-center date">
																	<div class="panel-heading month">
																			<span class="panel-title strong">
																					Feb
																			</span>
																	</div>
																	<div class="panel-body text-danger day">
																			25
																	</div>
															</div>
													</div>
													<div class="media-body">
															<a href="#" class="media-heading">
																	Aenean Ultricies Consectetur
															</a>
															<p>
																	Curabitur vel malesuada tortor, sit amet ultricies mauris. Aenean consectetur ultricies luctus.
															</p>
													</div>
											</li>
											<li class="media">
													<div class="media-left">
															<div class="panel panel-info text-center date">
																	<div class="panel-heading month">
																			<span class="panel-title strong all-caps">
																					Oct
																			</span>
																	</div>
																	<div class="panel-body text-danger day">
																			9
																	</div>
															</div>
													</div>
													<div class="media-body">
															<a href="#" class="media-heading">
																	Consectetur Praesent Tincidunt
															</a>
															<p>
																	Sed convallis dignissim magna et dignissim. Praesent tincidunt sapien eu gravida dignissim.
															</p>
													</div>
											</li>
									</ul>
									<a href="#" class="btn btn-default btn-block">More Events »</a>
							</div>
					</div>
				</div>

				<div id="col2" class="col-md-4 col-md-offset-2">
					<div class="panel panel-info">
							<div class="panel-heading">
									<h3 class="panel-title">
											<span class="glyphicon glyphicon-calendar"></span> 
											Events to Go
									</h3>
							</div>
							<div class="panel-body">
									<ul class="media-list">
											<li class="media">
													<div class="media-left">
															<div class="panel panel-info text-center date">
																	<div class="panel-heading month">
																			<span class="panel-title strong">
																					Mar
																			</span>
																	</div>
																	<div class="panel-body day text-danger">
																			23
																	</div>
															</div>
													</div>
													<div class="media-body">
															<a href="#" class="media-heading">
																	Pulvinar Mauris Eu
															</a>
															<p>
																	Vivamus pulvinar mauris eu placerat blandit. In euismod tellus vel ex vestibulum congue.
															</p>
													</div>
											</li>
											<li class="media">
													<div class="media-left">
															<div class="panel panel-info text-center date">
																	<div class="panel-heading month">
																			<span class="panel-title strong">
																					Jan
																			</span>
																	</div>
																	<div class="panel-body text-danger day">
																			16
																	</div>
															</div>
													</div>
													<div class="media-body">
															<a href="#" class="media-heading">
																	Aenean Consectetur Ultricies
															</a>
															<p>
																	Curabitur vel malesuada tortor, sit amet ultricies mauris. Aenean consectetur ultricies luctus.
															</p>
													</div>
											</li>
											<li class="media">
													<div class="media-left">
															<div class="panel panel-info text-center date">
																	<div class="panel-heading month">
																			<span class="panel-title strong all-caps">
																					Dec
																			</span>
																	</div>
																	<div class="panel-body text-danger day">
																			8
																	</div>
															</div>
													</div>
													<div class="media-body">
															<a href="#" class="media-heading">
																	Praesent Tincidunt
															</a>
															<p>
																	Sed convallis dignissim magna et dignissim. Praesent tincidunt sapien eu gravida dignissim.
															</p>
													</div>
											</li>
									</ul>
									<a href="#" class="btn btn-default btn-block">More Events »</a>
							</div>
					</div>
				</div>
			</div>


		</div>
	</body>
</html>
