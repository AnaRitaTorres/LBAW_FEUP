<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span <span class="glyphicon glyphicon-user"></span>&nbsp;{$username}</a>
  <ul class="dropdown-menu">
    <div class="navbar-content">
      <div class="row">
        <div class="col-md-5">
          <img src={$picture} alt="Alternate Text" class="img-responsive"/>
        </div>
        <div class="col-md-6">
          <span>{$name}</span>
          <p class="text-muted small">
            {$email}
          </p>
        </div>
      </div>
    </div>
    <li class="divider"></li>
    <div class="navbar-login navbar-login-session">
      <div class="row">
        <div class="col-lg-12">
          <p>
            <a href={$profilePath} class="btn btn-info btn-md btn-block">View Profile</a>
          </p>
        </div>
        <div class="col-lg-12">
          <p>
            <a href="../users/editProfile.php" class="btn btn-info btn-md btn-block">Edit Profile</a>
          </p>
        </div>
        <div class="col-lg-12">
          <p>
            <a href="../events/editEvent.php?create=1" class="btn btn-info btn-md btn-block">Create Event</a>
          </p>
        </div>
        <div class="col-lg-12">
          <p>
            <a href="../users/changePassword.php" class="btn btn-info btn-md btn-block">Change Password</a>
          </p>
        </div>
      </div>
    </div>
  </ul>
</li>
