<?php
    include ('header.php');
?>


   <div class="row">
       <div class="col-md-12 hidden-xs hidden-sm">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/internet-troll.jpg" alt="Chania" class="center-block img-responsive" >
                    <div class="carousel-caption">
                        <h1 style="font-size:20em;">evO</h1>
                        <h2>
                            The best event manager!
                        </h2>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <div class="hidden-md hidden-lg hidden-xl gira">
      <br/>
      <br/>
      <ul class="event-list">
            <div class="navbar navbar-default slogan">
                <h2>&nbsp;&nbsp;The Best Event Manager</h2>
            </div>
            <div class="topic">
              <h4>Top 5</h4>
            </div>
              <li>
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
            </ul>
    </div>
  </div>
<?php
   include ('footer.php');
?>
