</div>
<div id="InfoContent">
  <hr/>
  <div class="row">
    <div class=" col-offset-1 col-md-10">
      <p>&nbsp;<i class="glyphicon glyphicon-map-marker"></i> <b class="Local">Location:</b>
        {$info.address}
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-offset-1 col-md-10">
      <p>&nbsp;<i class="glyphicon glyphicon-calendar"></i><b class="Data">Date:</b>
        {$info.date}
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-offset-1 col-md-10">
      <p>&nbsp;<i class="glyphicon glyphicon-time"></i><b class="Hora">Time:</b>
        {$info.time}
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-offset-1 col-md-10">
      <p>
        {$info.overview}
      </p>
    </div>
  </div>
</div>
</nav>
</div>
<div class="col-sm-offset-1 col-sm-8">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Google Maps</a></li>
    <li><a data-toggle="tab" href="#menu1">Publications</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active" style="height: 25em">
      <iframe id="map" style="width:100%; height:100%;" class="img-responsive center-block" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q={$info.address}&key=AIzaSyCdqMmRf8c1f_yTgtjt7zT_5tdO5UOPka4" allowfullscreen></iframe>
    </div>

    <div id="menu1" class="tab-pane fade">
      <div class="row">
        <!-- Principal -->
        <div class="comments-container">
          <div class="row">
            <div class="col-md-12">
              <section class="comment-list">
