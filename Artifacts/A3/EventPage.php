<?php
	include ('header.php');
?>

	<div class="container">
		<div class="row">
			<div id="profile" class="col-md-3">
				<nav class="navbar navbar-default">
					<img src="images/concert.jpg" alt="Alternate Text" class="img-responsive center-block" />
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
					  <div id="InfoContent" class="navbar navbar-default collapse in">
                <hr/>
                <div class="row">
                    <div class="col-md-10">
                    <p><i class="glyphicon glyphicon-map-marker">&nbsp;</i> <b class="Local">Location:</b> Casa da Música, Porto</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                    <p><i class="glyphicon glyphicon-calendar">&nbsp;</i><b class="Data">Date:</b>12-02-2017</p>
                </div>
                </div>
                <div class="row">
                     <div class="col-md-10">
                    <p><i class="glyphicon glyphicon-time">&nbsp;</i><b class="Hora">Time:</b>12:35&nbsp;-&nbsp;19:00 </p>
                </div>
                </div>
                                 

                
                <div class="row">
                    <div class="col-md-10 text-center">
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
					<div id="home" class="tab-pane fade in active">
                        <nav id="event-image" class="navbar navbar-default">
                    <div  class="text-center">
                        <iframe  id="map" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Casa da Musica&key=AIzaSyCdqMmRf8c1f_yTgtjt7zT_5tdO5UOPka4" allowfullscreen></iframe>
                    </div>
                </nav>
			</div>
					
			<div id="menu1" class="tab-pane fade">
				<div id="CommentContent">
                   <div class="row">
                        <div class="col-sm-1 col-sm-offset-1">
                            <div class="thumbnail">
                                <img class="img user-photo" src="images/person.jpg">
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <strong>Miriam Gonçalves</strong> <span class="text-muted-time">commented 5 days ago </span>
                                    <div id="like-buttons" class="btn-group pull-right">
                                        <a href="#" class="btn btn-default stat-item">
                                            <i class="fa fa-thumbs-up icon"></i>&nbsp;10
                                        </a>
                                        <a href="#" class="btn btn-default stat-item ">
                                            <i class="fa fa-thumbs-down icon"></i>&nbsp;24
                                        </a>
                                    </div>
                                </div>
                                <div class="panel-body">OMG can't wait!

                                    <button id="DeleteComment" type="submit" class="btn pull-right"><i class="fa fa-trash" aria-hidden="true"></i></button> &nbsp;
                                    <button id="EditComment" type="submit" class="btn pull-right"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1 col-sm-offset-1">
                            <div class="thumbnail">
                                <img class="img-responsive user-photo" src="images/person.jpg">
                            </div>
                        </div>
                        <div class="col-sm-8 ">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <strong>Rita Torres</strong> <span class="text-muted-time">commented 5 days ago </span>
                                    <div id="like-buttons" class="btn-group pull-right">
                                        <a href="#" class="btn btn-default stat-item">
                                            <i class="fa fa-thumbs-up icon"></i>&nbsp;10
                                        </a>
                                        <a href="#" class="btn btn-default stat-item ">
                                            <i class="fa fa-thumbs-down icon"></i>&nbsp;24
                                        </a>
                                    </div>
                                </div>

                                <div class="panel-body">Cool stuff
                                    <button id="DeleteComment" type="submit" class="btn  pull-right"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    <button id="EditComment" type="submit" class="btn  pull-right"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1 col-sm-offset-1">
                        <div class="thumbnail">
                            <img class="img-responsive user-photo" src="images/person.jpg">
                        </div>
                    </div>
                    <div class="col-sm-8 ">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>Miriam Gonçalves</strong>
                            </div>
                            <input type="text" class="form-control input-lg" id="search-church" placeholder="Comment something here...">
                            <div class="panel-heading">
                                <button id="CommentButton" type="submit" class="btn btn-info"><i class="glyphicon glyphicon-comment"></i> Comment</button>
                                <button id="CancelButton" type="button" class="btn btn-info"><i class="glyphicon glyphicon-remove"></i>&nbsp;Cancel</button>
                                <!-- este input vai ser do tipo file!! -->
                                <button id="ImageButton" type="button" class="upvote btn pull-right" style="background-color: #f5f5f5"><i class="glyphicon glyphicon-camera"></i></button>
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