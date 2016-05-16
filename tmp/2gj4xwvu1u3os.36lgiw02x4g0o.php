<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>J.U.S.T</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo $BASE; ?>/ui/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo $BASE; ?>/assets/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?php echo $BASE; ?>/ui/css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $BASE; ?>/ui/kendoUI/styles/kendo.common.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $BASE; ?>/ui/kendoUI/styles/kendo.default.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $BASE; ?>/ui/css/creative.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $BASE; ?>/ui/css/user.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll logo-class" href="">Ju.St</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="http://localhost:8080/X">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo $BASE; ?>/app/views/dashboard1.html">Borrow</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo $BASE; ?>/app/views/dashboard2.html">Lend</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/X/app/views/profile.php">Profile</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo $BASE; ?>/app/views/about.html">How it works</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="">Contact us</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header>

        <div class="header-content">
          <div class="row" >
            <div class="col-xs-6" id="blurb1" >
                <p>
                  Jump start your Life/ Small Business to new heights with a credit line upto 10 Lakhs!
               </p>
                  <a href="" class="btn btn-default btn-xl wow tada">Learn more!</a>
              </div>

                <div class="col-xs-4 col-xs-offset-2" id="register">
                        	<div class="panel panel-default">
                			 			<div class="panel-body" id="signupbox">
                			    		<form role="form">
                			    			<div class="row">
                			    				<div class="col-xs-6 col-sm-6 col-md-6">
                			    					<div class="form-group">
                			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
                			    					</div>
                			    				</div>
                			    				<div class="col-xs-6 col-sm-6 col-md-6">
                			    					<div class="form-group">
                			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                			    					</div>
                			    				</div>
                			    			</div>
                              <div class="row">
                               <div class="col-xs-6 col-sm-6 col-md-6">
                			    			<div class="form-group">
                			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                			    			</div>
                              </div>
                              <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                  <input type="text" name="phone_number" id="phone_number" class="form-control input-sm" placeholder="Phone Number">
                                </div>
                              </div>
                            </div>
                			    			<div class="row">
                			    				<div class="col-xs-6 col-sm-6 col-md-6">
                			    					<div class="form-group">
                			    							<input type="text" name="company" id="company" class="form-control input-sm" placeholder="Company/ Organization">
                			    					</div>
                			    				</div>
                			    				<div class="col-xs-6 col-sm-6 col-md-6">
                			    					<div class="form-group">
                			    							<input type="text" name="industry" id="industry" class="form-control input-sm" placeholder="Industry">
                			    					</div>
                			    				</div>
                			    			</div>
                                <div class="row">
                			    				<div class="col-xs-6 col-sm-6 col-md-6">
                			    					<div class="form-group">
                			    							<input type="text" name="loanamt" id="loanamt" class="form-control input-sm" placeholder="Loan Amount desired">
                			    					</div>
                			    				</div>
                			    				<div class="col-xs-6 col-sm-6 col-md-6">
                			    					<div class="form-group">
                			    							<input type="text" name="revenue" id="revenue" class="form-control input-sm" placeholder="Annual Revenue">
                			    					</div>
                			    				</div>
                			    			</div>
                			    			<input type="submit" value="Check Eligibility" class="btn btn-info btn-block">
                			    		</form>
                            </div>
                          </div>
                        </div>
                   </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-lg-offset-1 text-center">
                    <h2 class="section-heading">We've got all your loan needs covered!</h2>
                    <hr class="light">
                    <p class="text-faded question-mktng">Do you want loans at low interest rates with minimum fuss?</p> <br/>
                    <p class="text-faded answer-mktng">Then this is the place for you. Here we connect peer lenders and borrowers based on unbiased credit scores </p>
                    <a href="" class="btn btn-default btn-xl">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa fa-lock wow bounceIn text-primary"></i>
                        <h3>Safe</h3>
                        <p class="text-muted">Your loan transactions are safe with us</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-check wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Convenient</h3>
                        <p class="text-muted">You can use J.U.S.T anytime, anywhere</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-thumbs-up wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Easy</h3>
                        <p class="text-muted">J.U.S.T makes it very simple to borrow and lend money</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa fa-compass wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Unbiased</h3>
                        <p class="text-muted">Our credit scoring process is free from human bias</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="" class="portfolio-box">
                        <img src="<?php echo $BASE; ?>/assets/img/portfolio/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Borrow
                                </div>
                                <div class="project-name">

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="" class="portfolio-box">
                        <img src="<?php echo $BASE; ?>/assets/img/portfolio/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Lend
                                </div>
                                <div class="project-name">

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="" class="portfolio-box">
                        <img src="<?php echo $BASE; ?>/assets/img/portfolio/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Get current rates
                                </div>
                                <div class="project-name">

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="" class="portfolio-box">
                        <img src="<?php echo $BASE; ?>/assets/img/portfolio/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    How does J.U.S.T work?
                                </div>
                                <div class="project-name">

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="" class="portfolio-box">
                        <img src="<?php echo $BASE; ?>/assets/img/portfolio/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Market place
                                </div>
                                <div class="project-name">

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="" class="portfolio-box">
                        <img src="<?php echo $BASE; ?>/assets/img/portfolio/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Merchant
                                </div>
                                <div class="project-name">

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Sign Up to J.U.S.T</h2>
                <a href="" class="btn btn-default btn-xl wow tada">Sign Up Now!</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Want to know more? Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>91-39-12596387</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@just.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="<?php echo $BASE; ?>/ui/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $BASE; ?>/ui/js/bootstrap.min.js"></script>
    <script src="<?php echo $BASE; ?>/ui/kendoUI/js/kendo.all.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo $BASE; ?>/ui/js/jquery.easing.min.js"></script>
    <script src="<?php echo $BASE; ?>/ui/js/jquery.fittext.js"></script>
    <script src="<?php echo $BASE; ?>/ui/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $BASE; ?>/ui/js/creative.js"></script>
    <script src="<?php echo $BASE; ?>/ui/js/user.js"></script>
    <script src="/X/ui/js/jquery.layout-latest.js"></script>



</body>

</html>

