<?php
	include ('header.php');
?>

    <div class="container specific">
        <div class="row">
            <div class="col-md-12">
                <nav id="event-image" class="navbar navbar-default">
                    <img src="images/concert.jpg" alt="" class="img-responsive" style="width:100%">
                </nav>
                <div id="profile" class="col-md-3">
                    <nav class="navbar navbar-default">
                        <h4 class="profilePage text-center">Casa da Música</h4>
                        <h5 class="text-center">
                            <div>
                                <i class="glyphicon glyphicon-star" aria-hidden="true"></i>
                                <i class="glyphicon glyphicon-star" aria-hidden="true"></i>
                                <i class="glyphicon glyphicon-star" aria-hidden="true"></i>
                                <i class="glyphicon glyphicon-star-empty" aria-hidden="true"></i>
                                <i class="glyphicon glyphicon-star-empty" aria-hidden="true"></i>
                            </div>
                        </h5>
                        <div class="text-center">
                            
                             <!--<button id="Edit" class="btn btn-info "><i class="glyphicon glyphicon-pencil"></i>&nbsp;Edit</button>
                             <button id="Add" class="btn btn-info "><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Friends</button>-->
                             <div class="dropdown">
                             <button class="btn btn-info  dropdown-toggle" type="button" id="AttendanceButton" data-toggle="dropdown">Attendance</button>
                                <ul class="dropdown-menu " role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="1" href="#">Going </a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="1" href="#">Interested </a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="1" href="#">Not Going</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="InfoContent" >
                            <hr/>
                            <div class="row">
                                <div class=" col-offset-1 col-md-10">
                                    <p>&nbsp;<i class="glyphicon glyphicon-map-marker"></i> <b class="Local">Location:</b> Casa
                                        da Música, Porto</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-offset-1 col-md-10">
                                    <p>&nbsp;<i class="glyphicon glyphicon-calendar"></i><b class="Data">Date:</b>12-02-2017</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-offset-1 col-md-10">
                                    <p>&nbsp;<i class="glyphicon glyphicon-time"></i><b class="Hora">Time:</b>12:35&nbsp;-&nbsp;19:00
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-offset-1 col-md-10">
                                    <p>An event created to share different types of music and showing off some new musical groups!</p>
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
                        <iframe id="map" style="width:100%; height:100%;" class="img-responsive center-block" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Casa da Musica&key=AIzaSyCdqMmRf8c1f_yTgtjt7zT_5tdO5UOPka4"
                            allowfullscreen></iframe>
                    </div>

                        <div id="menu1" class="tab-pane fade">
                            <div class="row">
                                <!-- Contenedor Principal -->
                                <div class="comments-container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <section class="comment-list">
                                                <!-- First Comment -->
                                                <article class="row">
                                                    <div class="col-md-2 col-sm-2 hidden-xs">
                                                        <figure class="thumbnail">
                                                            <img class="img-responsive" src="images/tom1.jpg"/>
                                                            <figcaption class="text-center">@Tope</figcaption>
                                                        </figure>
                                                    </div>
                                                    <div class="col-md-10 col-sm-10">
                                                        <div class="panel panel-default arrow left">
                                                            <div class="panel-body">
                                                                <header class="text-left">
                                                                    <div class="comment-user"><i class="fa fa-user"></i> Pedro Torres</div>
                                                                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Mar 16, 2017</time>
                                                                </header>
                                                                <div class="comment-post">
                                                                    <p>
                                                                       This seems like an amazing event!
                                                                    </p>
                                                                </div>
                                                                <p class="text-right"><a href="#" class="btn btn-info btn-sm"><i class="fa fa-reply"></i> Reply</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!-- Second Comment Reply -->
                                                <article class="row">
                                                    <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
                                                        <figure class="thumbnail">
                                                            <img class="img-responsive" src="images/t.jpg"/>
                                                            <figcaption class="text-center">@Taj</figcaption>
                                                        </figure>
                                                    </div>
                                                    <div class="col-md-9 col-sm-9">
                                                        <div class="panel panel-default arrow left">
                                                            <div class="panel-heading right">Reply</div>
                                                            <div class="panel-body">
                                                                <header class="text-left">
                                                                    <div class="comment-user"><i class="fa fa-user"></i>Tajari Henson</div>
                                                                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Mar 16, 2016</time>
                                                                </header>
                                                                <div class="comment-post">
                                                                    <p>
                                                                     I can't wait!
                                                                    </p>
                                                                </div>
                                                                <p class="text-right"><a href="#" class="btn btn-info btn-sm"><i class="fa fa-reply"></i> Reply</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!-- Input Comment-->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
	include ('footer.php');
?>