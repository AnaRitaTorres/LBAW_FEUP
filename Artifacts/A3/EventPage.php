<?php
    include ('header.php');
?>

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
													<i class="glyphicon glyphicon-map-marker">&nbsp;&nbsp;</i>
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
													<i class="glyphicon glyphicon-calendar">&nbsp;&nbsp;</i>
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
													<i class="glyphicon glyphicon-time">&nbsp;&nbsp;</i>
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
									<button type="submit" class="btn btn-success green"><i class="glyphicon glyphicon-comment"></i> Comment</button>
									<button type="button" class="btn btn-danger red"><i class="glyphicon glyphicon-remove"></i>&nbsp;Cancel</button>
								</div>
							</div><!-- /panel panel-default -->
						</div><!-- /col-sm-5 -->
					</div>

			   </nav>
			 </div>
				 <?php
				     include ('footer.php');
				 ?>
