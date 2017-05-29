

<div class="container specific">
  <div class="row">
    <div id="profile" class="col-md-3">
      <nav class="navbar navbar-default">
        <img src={$picture} alt="Profile picture" class="img-responsive center-block" />
        <h3 class="profilePage text-center">{$name}</h3>
        <h5 class="text-center">@{$username}</h5>
        <div id="Content" class="navbar navbar-default">
          <div class="row">
            <div class="col-md-10">
              <p><i class="glyphicon glyphicon-user"></i>
                {$name}
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10">
              <p><i class="fa fa-birthday-cake">&nbsp;</i>
                {$date}
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10">
              <p><i class="fa fa-mars">&nbsp;</i>
                {$gender}
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10">
              <p><i class="glyphicon glyphicon-envelope"></i>
                {$email}
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10">
              <p><i class="glyphicon glyphicon-phone"></i>
                {$phone}
              </p>
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

<script type="text/javascript" src="../../js/charts.js"></script>