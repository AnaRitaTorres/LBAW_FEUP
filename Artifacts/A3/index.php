<?php
    include ('header.php');
?>
<link rel="stylesheet" href="index.css">

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
              <img src="internet-troll.jpg" alt="Chania" class="center-block" style="width: 1400px; height: 550px;">
              <div class="carousel-caption">
                  <h1>evO</h1>
                  <h2>
                    The best event manager!
                  </h2>
              </div>
          </div>

          <div class="item">
              <img src="troll-8.jpg" alt="Chania" class="center-block" style="width: 1400px; height: 550px;">
              <div class="carousel-caption">
                <h2>Festas Universitárias</h2>
                <p>
                  Organizamos as melhores festas universitárias!
                </p>
              </div>
          </div>

          <div class="item">
              <img src="palestras.jpg" alt="Chania" class="center-block" style="width: 1400px; height: 550px;">
              <div class="carousel-caption">
                <h2>Palestras</h2>
                <p>
                  Patrocinamos palestras!
                </p>
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

<?php
    include ('footer.php');
?>
