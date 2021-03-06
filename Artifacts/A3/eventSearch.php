<?php
	include ('header.php');
?>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"
	/>

	<div class="container specific">
		<div class="row">


			<div class=" col-sm-3">
				<nav class="navbar navbar-default ES">

					<form method="post">
						<h2 id="filters">Filters</h2>

						<div class="well">
							<div class="checkbox">
								<h4 class="filter">Location</h4>
								<label>
	            <input type="checkbox" value="">
	            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
	            Norte
	          </label>
							</div>
							<div class="checkbox">
								<label>
	            <input type="checkbox" value="">
	            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
	            Centro
	          </label>
							</div>
							<div class="checkbox">
								<label>
	            <input type="checkbox" value="">
	            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
	            Sul
	          </label>
							</div>
						</div>

					<div class="well">
							<div class="checkbox">
								<h4 class="filter">Type</h4>
								<label>
	            <input type="checkbox" value="">
	            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
	            Cinema
	          </label>
							</div>
							<div class="checkbox">
								<label>
	            <input type="checkbox" value="">
	            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
	            Concerts
	          </label>
							</div>
							<div class="checkbox">
								<label>
	            <input type="checkbox" value="">
	            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
	            Exhibitions
	          </label>
							</div>
							<div class="checkbox">
								<label>
	            <input type="checkbox" value="">
	            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
	            Dance
	          </label>
							</div>
							<div class="checkbox">
								<label>
	            <input type="checkbox" value="">
	            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
	            Theatre
	          </label>
							</div>
						</div>

						<div class="well">
							<h4 class="filter">Price</h4>
							<input type="range" min="0" max="50" value="0" step="5" onchange="showValue(this.value)">
							<span id="range">0</span>
							<script type="text/javascript">
								function showValue(newValue) {
									document.getElementById("range").innerHTML = newValue;
								}
							</script>
						</div>
						<div class="well">
							<h4 class="filter">Date</h4>
							<div class="form-group">
								<!-- Date input -->
								<input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text" />
							</div>
							<script>
								$(document).ready(function () {
									var date_input = $('input[name="date"]'); //our date input has the name "date"
									var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
									var options = {
										format: 'mm/dd/yyyy',
										container: container,
										todayHighlight: true,
										autoclose: true,
									};
									date_input.datepicker(options);
								})
							</script>
						</div>

						<div class="form-group">
							<!-- Submit button -->
							<button class="btn btn-primary center-block" name="submit" type="submit"><i class="glyphicon glyphicon-ok"></i>&nbsp;Submit</button>
						</div>
					</form>
				</nav>
			</div>

			<div class="col-sm-offset-1 col-sm-8">
				<nav class="navbar navbar-default ES">
					<ul class="event-list">

									<li>
										<time>
											<span class="day">3</span>
											<span class="month">Mar</span>
											<span class="year">2017</span>
										</time>
										<a href="#"><img alt="Logan" src="images/logan1.jpg"/></a>
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
										<a href="#"><img alt="Bastille" src="images/bastille1.jpg" /></a>
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
											<span class="month">Set</span>
											<span class="year">2017</span>
										</time>
										<a href="#"><img alt="Ballet" src="images/ballet.jpg"/></a>
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

									<li>

											<time>
												<span class="day">20</span>
												<span class="month">Nov</span>
												<span class="year">2017</span>
											</time>
			                <a href="#"><img alt="Logan" src="images/mi.jpg"/></a>
			                <div class="info">
			                  <h2 class="title"><a href="#">Les Miserables</a></h2>
			                  <p class="desc">Musical Theatre</p>
			                  <p class="desc">
			                   London,England
			                  </p>
			                  <p class="desc">
			                    9pm
			                  </p>

			                </div>
			              </li>

			              <li>
												<time>
													<span class="day">12</span>
													<span class="month">Dez</span>
													<span class="year">2017</span>
												</time>
			                <a href="#"><img alt="Art" src="images/art.jpg"/></a>
			                <div class="info">
			                  <h2 class="title"><a href="#">Faces</a></h2>
			                  <p class="desc">Art Exhibitions</p>
			                  <p class="desc">
			                    Paris, France
			                  </p>
			                  <p class="desc">
			                    9pm
			                  </p>

			                </div>
			              </li>
								</ul>
				</nav>
			</div>
		</div>
	</div>

	<?php
	include ('footer.php');
?>
