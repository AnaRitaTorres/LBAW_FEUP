<?php
	include ('header.php');
?>

<div class="container">
<div class="row">

  <div class=" col-sm-3">
    <h3>Filters:</h3>
    <div class="checkbox">
      <h4>Filter1:</h4>
          <label>
            <input type="checkbox" value="">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Option 1
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Option 2
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Option 3
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
        </script>  
    </div>

  <div class="col-sm-offset-1 col-sm-8">
    <ul class="event-list">

      <li>
        <time>
          <span class="day">3</span>
          <span class="month">Out</span>
          <span class="year">2016</span>
        </time>
        <a href="#"><img alt="Independence Day" src="http://www.empregoestagios.com/wp-content/uploads/2016/10/feup-carrerfair.jpg" /></a>
        <div class="info">
          <h2 class="title"><a href="#">FEUP Career Fair</a></h2>
          <p class="desc">FEUP Fair</p>
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
        <a href="#"><img alt="Independence Day" src="http://www.porto.pt/assets/users/1/o_HEQ7RVLHWQ.png" /></a>
        <div class="info">
          <h2 class="title"><a href="#">TalkABit</a></h2>
          <p class="desc">FEUP Conference</p>
        </div>
      </li>

      <li>
        <time>
          <span class="day">20</span>
          <span class="month">Jan</span>
          <span class="year">2014</span>
        </time>
        <a href="#"><img alt="My 24th Birthday!" src="https://farm5.staticflickr.com/4150/5045502202_1d867c8a41_q.jpg" /></a>
        <div class="info">
          <h2 class="title"><a href="#">Mouse0270's 24th Birthday!</a></h2>
          <p class="desc">Bar Hopping in Erie, Pa.</p>
          <!-- <ul>
            <li style="width:33%;">1 <span class="glyphicon glyphicon-ok"></span></li>
            <li style="width:34%;">3 <span class="fa fa-question"></span></li>
            <li style="width:33%;">103 <span class="fa fa-envelope"></span></li>
          </ul> -->
        </div>
      </li>

      <li>
        <time>
          <span class="day">31</span>
          <span class="month">Jan</span>
          <span class="year">2014</span>
        </time>
        <a href="#"><img alt="Disney Junior Live On Tour!" src="http://www.thechaifetzarena.com/images/main/DL13_PiratePrincess_thumb.jpg" /></a>
        <div class="info">
          <h2 class="title"><a href="#">Disney Junior Live On Tour!</a></h2>
          <p class="desc"> Pirate and Princess Adventure</p>
          <!-- <ul>
            <li style="width:33%;">$49.99 <span class="fa fa-male"></span></li>
            <li style="width:34%;">$29.99 <span class="fa fa-child"></span></li>
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
