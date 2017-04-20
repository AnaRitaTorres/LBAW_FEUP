<?php
	include_once ('../pages/header.php');
	include_once ('../database/users.php');
?>

	<div class="container specific">
		<div class="row">
			<div id="profile" class="col-md-3">
				<nav class="navbar navbar-default">
					<img src=<?php echo $_SESSION['picture']?> alt="Alternate Text" class="img-responsive center-block" />
					<h3 class="profilePage text-center"><?php echo $_SESSION['name']?></h3>
					<h5 class="text-center">@<?php echo $_SESSION['username'] ?></h5>
					<div id="Content" class="navbar navbar-default">
						<hr/>
						<div class="row">
							<div class="col-md-10">
								<p><i class="glyphicon glyphicon-user"></i><?php echo $_SESSION['name']?></p>
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10">
								<p><i class="fa fa-birthday-cake">&nbsp;</i> <?php echo $_SESSION['date']?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10">
								<p><i class="fa fa-mars">&nbsp;</i><?php echo $_SESSION['gender']?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10">
								<p><i class="glyphicon glyphicon-envelope"></i> <?php echo $_SESSION['email']?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10">
								<p><i class="glyphicon glyphicon-phone"></i> <?php echo $_SESSION['phone']?></p>
							</div>
						</div>
				</nav>
				</div>
				<div class="col-sm-offset-1 col-sm-8">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">My Events</a></li>
					<li><a data-toggle="tab" href="#menu1">My Statistics</a></li>
				</ul>

				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<nav class="ES">
								<ul class="event-list">
								<?php
									include_once('bestEvents.php');
								?>
								</ul>
							</nav>
						</div>

					<div id="menu1" class="tab-pane fade">
						<div class="row">
							<div class="col-xs-offset-0 col-xs-5">
								Hosted<canvas id="myHostedEvents"></canvas>
							</div>
							<div class="col-xs-offset-1 col-xs-5">
								Invited<canvas id="myInvitedEvents"></canvas>
							</div>
							<div class="col-xs-offset-2 col-xs-8">
								<canvas id="myTitle"></canvas>
							</div>
						</div>
					<?php
						$hosted = getUserStatistics($_SESSION['id'], 'hosted');
						$invited = getUserStatistics($_SESSION['id'], 'invited');
					?>
					<script>
						var ctx = document.getElementById("myHostedEvents").getContext('2d');
						var myChart = new Chart(ctx, {
							type: 'pie',
							options: {
								legend: {
									display: false
								}
							},
							data: {
								labels: ["Cinema", "Concerts", "Theatre", "Exhibitions", "Dance"],
								datasets: [{
									backgroundColor: [
										"#008B8B",
										"#3498db",
										"#95a5a6",
										"#000080",
										"#B0E0E6"
									],
									data: [<?php echo(json_encode($hosted['cinemacount'])) ?>, <?php echo(json_encode($hosted['concertcount'])) ?>, <?php echo(json_encode($hosted['dancecount'])) ?>, <?php echo(json_encode($hosted['exhbitioncount'])) ?>, <?php echo(json_encode($hosted['theatrecount'])) ?>]
								}]
							}
						});
						var ctx = document.getElementById("myInvitedEvents").getContext('2d');
						var myChart = new Chart(ctx, {
							type: 'pie',
							options: {
    							legend: {
        							display: false
    							}
							},
							data: {
								labels: ["Cinema", "Concerts", "Theatre", "Exhibitions", "Dance"],
								datasets: [{
									backgroundColor: [
										"#008B8B",
										"#3498db",
										"#95a5a6",
										"#000080",
										"#B0E0E6"
									],
									data: [<?php echo(json_encode($invited['cinemacount'])) ?>, <?php echo(json_encode($invited['concertcount'])) ?>, <?php echo(json_encode($invited['dancecount'])) ?>, <?php echo(json_encode($invited['exhbitioncount'])) ?>, <?php echo(json_encode($invited['theatrecount'])) ?>]
								}]
							}
						});
						var ctx = document.getElementById("myTitle").getContext('2d');
						var myChart = new Chart(ctx, {
							type: 'pie',
							data: {
								labels: ["Cinema", "Concerts", "Theatre", "Exhibitions", "Dance"],
								datasets: [{
									backgroundColor: [
										"#008B8B",
										"#3498db",
										"#95a5a6",
										"#000080",
										"#B0E0E6"
									],
									data: [0,0,0,0,0]
								}]
							}
						});

					</script>
					</div>
				</div>
			</div>

<?php
	include ('../pages/footer.php');
?>
