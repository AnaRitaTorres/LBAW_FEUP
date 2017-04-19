<?php
	include ('../pages/header.php');
?>

	<div class="container specific">
		<div class="row">
			<div id="profile" class="col-md-3">
				<nav class="navbar navbar-default">
					<img src="../images/tom1.jpg" alt="Alternate Text" class="img-responsive center-block" />
					<h3 class="profilePage text-center">Pedro Torres</h3>
					<h5 class="text-center">@Tope</h5>
					<div id="Content" class="navbar navbar-default">
						<hr/>
						<div class="row">
							<div class="col-md-10">
								<p><i class="glyphicon glyphicon-user"></i> Pedro Miguel Torres</p>
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10">
								<p><i class="fa fa-birthday-cake">&nbsp;</i> 12-02-1996</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10">
								<p><i class="fa fa-globe">&nbsp;</i> Portugal</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10">
								<p><i class="fa fa-mars">&nbsp;</i>Male</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10">
								<p><i class="glyphicon glyphicon-envelope"></i> pedrocas35@sapo.pt</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10">
								<p><i class="glyphicon glyphicon-phone"></i> 969392919</p>
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

									<li>
										<time>
											<span class="day">3</span>
											<span class="month">Mar</span>
											<span class="year">2017</span>
										</time>
										<a href="#"><img alt="Logan" src="../images/logan1.jpg"/></a>
										<div class="info">
											<h2 class="title"><a href="#">Logan</a></h2>
											<p class="desc">Cinema</p>
											<p class="desc">
												Porto, Portugal
											</p>
											<p class="desc">
												9pm
											</p>

										</div>
									</li>

									<li>
										<time>
											<span class="day">14</span>
											<span class="month">Jul</span>
											<span class="year">2017</span>
										</time>
										<a href="#"><img alt="Bastille" src="../images/bastille1.jpg" /></a>
										<div class="info">
											<h2 class="title"><a href="#">Bastille</a></h2>
											<p class="desc">Meo Marés Vivas</p>
											<p class="desc">
												Gaia, Portugal
											</p>
											<p class="desc">
												10pm
											</p>
										</div>
									</li>

									<li>
										<time>
											<span class="day">19</span>
											<span class="month">Nov</span>
											<span class="year">2017</span>
										</time>
										<a href="#"><img alt="Ballet" src="../images/ballet.jpg"/></a>
										<div class="info">
											<h2 class="title"><a href="#">The Nutcraker</a></h2>
											<p class="desc"></p>
											<p class="desc">
												Lisboa, Portugal
											</p>
											<p class="desc">
												10pm30
											</p>
										</div>
									</li>
								</ul>
							</nav>
						</div>
					
					<div id="menu1" class="tab-pane fade">
						<div>
						<canvas id="myEvents"></canvas>
					</div>
					<script>
						var ctx = document.getElementById("myEvents").getContext('2d');
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
									data: [12, 19, 3, 17, 28]
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