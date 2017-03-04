<!DOCTYPE html>
<html lang="en">
    <head>
         <title>evO</title>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="style.css">
         <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    </head>
    <body>
        <header>
          <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                 <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">evO</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <form class="navbar-form navbar-left">
                  <!--<div class="col-md-20">-->
                    <div id="custom-search-input">
                        <div class="input-group col-md-40">
                            <input type="text" class="form-control input-md" placeholder="Search" />
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-md" type="button">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>
                         </div>
                    </div>
                 <!--</div>-->
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Register</b> <span class="caret"></span></a>
			            <ul id="register-dp" class="dropdown-menu">
				    	<div class="row">
							<div class="col-md-26">
							    <form class="form" role="form" method="post" action="register" accept-charset="UTF-8" id="register-nav">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email Address</label>
											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email Address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                        </div>
                                    </form>
							    </div>
						     </div>
                            </ul>
                        </li>
                   <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
			            <ul id="login-dp" class="dropdown-menu">
				    	<div class="row">
							<div class="col-md-26">
							    <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email Address</label>
											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email Address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                        </div>
                                    </form>
							    </div>
						     </div>
                            </ul>
                        </li>
                </ul>
                </div>
            </div>
            </nav>
     </header>
     <div class="content">
