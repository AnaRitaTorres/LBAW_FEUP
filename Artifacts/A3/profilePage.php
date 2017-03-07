<?php
	include ('header.php');
?>

	<div class="container">
		<div class="row">
			<div id="profile" class="col-md-3">
				<nav class="navbar navbar-default">
					<img src="images/person.jpg" alt="Alternate Text" class="img-responsive center-block" />
					<h4 class="profilePage text-center">Miriam Torres</h4>
					<h5 class="text-center">mimiTo</h5>
					<div id="Content" class="navbar navbar-default">
						<hr/>
						<div class="row">
							<div class="col-md-10">
								<p><i class="glyphicon glyphicon-user"></i> Miriam Catrina Costa Torres</p>
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
								<p><i class="fa fa-venus">&nbsp;</i>Female</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10">
								<p><i class="glyphicon glyphicon-envelope"></i> miriamtorres69@sapo.pt</p>
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

						
							<nav class="navbar navbar-default ES">
								<ul class="event-list">

									<li>
										<time>
											<span class="day">3</span>
											<span class="month">Out</span>
											<span class="year">2016</span>
										</time>
										<a href="#"><img alt="FEUP Career Fair" src="http://www.empregoestagios.com/wp-content/uploads/2016/10/feup-carrerfair.jpg"
											/></a>
										<div class="info">
											<h2 class="title"><a href="#">FEUP Career Fair</a></h2>
											<p class="desc">FEUP Fair</p>
											<p class="desc">
												Porto, Portugal
											</p>
											<p class="desc">
												8am
											</p>

										</div>
									</li>

									<li>
										<time>
											<span class="day">4</span>
											<span class="month">Feb</span>
											<span class="year">2017</span>
										</time>
										<a href="#"><img alt="TalkABit" src="http://www.porto.pt/assets/users/1/o_HEQ7RVLHWQ.png" /></a>
										<div class="info">
											<h2 class="title"><a href="#">TalkABit</a></h2>
											<p class="desc">FEUP Conference</p>
											<p class="desc">
												Porto, Portugal
											</p>
											<p class="desc">
												2pm
											</p>
										</div>
									</li>

									<li>
										<time>
											<span class="day">19</span>
											<span class="month">Nov</span>
											<span class="year">2017</span>
										</time>
										<a href="#"><img alt="TedX" src="https://pbs.twimg.com/profile_images/560921211983523844/MXSDRnjW.png" /></a>
										<div class="info">
											<h2 class="title"><a href="#">TedX</a></h2>
											<p class="desc">Conference</p>
											<p class="desc">
												Lisboa, Portugal
											</p>
											<p class="desc">
												10am30
											</p>
										</div>
									</li>
								</ul>
							</nav>
						</div>
					
					<div id="menu1" class="tab-pane fade">
						<h3>Menu 1</h3>
						<p>Some content in menu 1.</p>
					</div>
				</div>
			</div>

<?php
	include ('footer.php');
?>