<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Flat Registration Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/mobiscroll.css">

		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.css" />


		<!-- Javascript -->
		<script src="assets/js/jquery-1.11.1.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.backstretch.min.js"></script>
		<script src="assets/js/retina-1.1.0.min.js"></script>
		<script src="assets/js/scripts.js"></script>


		<!--[if lt IE 10]>
		<script src="assets/js/placeholder.js"></script>
		<![endif]-->


		<script src="assets/js/mobiscroll.js"></script>
		<script src="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

		<script type="text/javascript">
			$(document).ready(function () {
				// Date with external button
				$('#date1').scroller({ theme: 'android-ics light', preset: 'datetime' });
			});
		</script>

    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h2 style="color: white">iSpoon</h2>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<span class="li-social">
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-twitter"></i></a> 
								<a href="#"><i class="fa fa-envelope"></i></a> 
								<a href="#"><i class="fa fa-skype"></i></a>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">

					<div class="row">
						<div class="col-md-12">
							<img src="assets/img/fish.png" class="img-responsive center-block" width="150" height="150">
						</div>
					</div>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                            		<h2 style="color: white">Enter Spoon Data</h2>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                        		<div class="form-top-divider"></div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="insert.php" method="post" id="spoon_form" class="registration-form">
			                    	<div class="form-group">
			                    	
			                    		<input id="spoon_item" name="spoon_item" type="hidden">
			                    		
										<div class="dropdown" id="menuitem">
											<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												MENU
												<span class="caret"></span>
											</button>
											<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										
												<li onclick="$('#spoon_item').val('fish');"><a>Fish & Chips</a></li>
										        <li onclick="$('#spoon_item').val('pie');"><a>Doom and Ale Pie</a></li>
										        <li onclick="$('#spoon_item').val('steak');"><a>14oz Aberdeen Angus</a></li>
										        <li onclick="$('#spoon_item').val('burger');"><a>Classic 6oz Burger</a></li>
												
											</ul>
										</div>
			                        </div>
			                        
			                        <div class="form-group">
			                        
			                        	<input id="spoon_qty" name="spoon_qty" type="hidden">
			                        
										<div class="dropdown" id="quantity">
											<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												QUANTITY
												<span class="caret"></span>
											</button>
											<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
												<li onclick="$('#spoon_qty').val('1');"><a>1</a></li>
										        <li onclick="$('#spoon_qty').val('2');"><a>2</a></li>
										        <li onclick="$('#spoon_qty').val('3');"><a>3</a></li>
										        <li onclick="$('#spoon_qty').val('4');"><a>4</a></li>
											</ul>
										</div>
			                        </div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-12">
												<div class="input-group">
													<span style="background: #66D6C5;color: white;" class="input-group-addon">DATE & TIME</span>
													<input type="text" style="width: 100%; border-top-left-radius: 0px;
																				border-bottom-left-radius: 0px;" name="date1" id="date1" class="mobiscroll" />
												</div>

											</div>
										</div>
									</div>
			                        

			                        <button onclick="$('#spoon_form').submit()" class="btn">SUBMIT DATA</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>




    </body>

</html>
