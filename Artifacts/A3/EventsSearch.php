<?php
	include ('header.php');
?>

<div class="container">
<div class="row">

  <div class=" col-sm-3">
    <h3>Filters:</h3>
    <div class="checkbox">
      <h4>Local:</h4>
          <label>
            <input type="checkbox" value="">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Porto
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Lisboa
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Algarve
          </label>
        </div>
        <h4>Price:</h4>
        <input type="range" min="0" max="50" value="0" step="5" onchange="showValue(this.value)" />
        <span id="range">0</span>
        <script type="text/javascript">
        function showValue(newValue)
        {
	         document.getElementById("range").innerHTML=newValue;
        }
        </script><br />
				<h4>Date:</h4>
				<input type="date" name="bday" max="1979-12-31">
    </div>

  <div class="col-sm-offset-1 col-sm-8">
    <ul class="event-list">

      <li>
        <time>
          <span class="day">3</span>
          <span class="month">Out</span>
          <span class="year">2016</span>
        </time>
        <a href="#"><img alt="FEUP Career Fair" src="http://www.empregoestagios.com/wp-content/uploads/2016/10/feup-carrerfair.jpg" /></a>
        <div class="info">
          <h2 class="title"><a href="#">FEUP Career Fair</a></h2>
          <p class="desc">FEUP Fair</p>
					<p class="desc">
						Porto, Portugal
					</p>
					<p class="desc">
						8am
					</p>
          <!-- <ul>
            <li style="width:50%;"><a href="#website"><span class="fa fa-globe"></span> Website</a></li>
            <li style="width:50%;"><span class="fa fa-money"></span> $39.99</li>
          </ul> -->
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
          <!-- <ul>
            <li style="width:33%;">1 <span class="glyphicon glyphicon-ok"></span></li>
            <li style="width:34%;">3 <span class="fa fa-question"></span></li>
            <li style="width:33%;">103 <span class="fa fa-envelope"></span></li>
          </ul> -->
        </div>
      </li>
    </ul>
  </div>
</div>
</div>

<?php
	include ('footer.php');
?>
