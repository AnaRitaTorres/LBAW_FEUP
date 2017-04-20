        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span <span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $_SESSION['username']; ?></a>
             <ul class="dropdown-menu">
                <div class="navbar-content">
                  <div class="row">
                    <div class="col-md-5">
                      <img src=<?php echo $_SESSION['picture']; ?> alt="Alternate Text" class="img-responsive"/>
                    </div>
                     <div class="col-md-6">
                      <span><?php echo $_SESSION['name']; ?></span>
                      <p class="text-muted small">
                       <?php echo $_SESSION['email']; ?></p>
                    </div>
                  </div>
                </div>
                 <li class="divider"></li>
                  <div class="navbar-login navbar-login-session">
                        <div class="row">
                          <div class="col-lg-12">
                            <p>
                              <a href="profilePage.php" class="btn btn-info btn-md btn-block">View Profile</a>
                            </p>
                          </div>
                          <div class="col-lg-12">
                            <p>
                              <a href="editProfile.php" class="btn btn-info btn-md btn-block">Edit Profile</a>
                            </p>
                          </div>
                           <div class="col-lg-12">
                            <p>
                              <a href="editEvent.php?create=1" class="btn btn-info btn-md btn-block">Create Event</a>
                            </p>
                          </div>
			  <div class="col-lg-12">
                            <p>
                              <a href="changePassword.php" class="btn btn-info btn-md btn-block">Change Password</a>
                            </p>
                          </div>
                        </div>
                      </div>
                    </ul>
                  </li>
                <li class="logout">
                  <a href="../actions/logout.php">
                    <span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout
                  </a>
              </li>
