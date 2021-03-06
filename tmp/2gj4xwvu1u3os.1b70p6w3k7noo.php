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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $BASE; ?>/ui/css/creative.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $BASE; ?>/ui/css/user.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $BASE; ?>/ui/css/bootstrap-social.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
  <?php if ($PDOERRORMSG!= NULL): ?>
    
      <div class="errormsg">
         <p><?php echo $PDOERRORMSG; ?></p>
      </div>
    
  <?php endif; ?>
    <?php if ($ERRORMSG != NULL): ?>
      
        <div class="errormsg">
           <p><?php echo $ERRORMSG; ?></p>
        </div>
      
    <?php endif; ?>
    <?php if ($CONFIRMOTPMSG != NULL): ?>
      
        <div class="popup-info">
          <p><?php echo $CONFIRMOTPMSG; ?></p>
        </div>
      
    <?php endif; ?>
    <?php if ($TCTEXT != NULL): ?>
      
        <div id="tc-popup">
          <p id="termsandconditions"><?php echo $TCTEXT; ?></p>
        </div>
      
    <?php endif; ?>


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
                <a class="navbar-brand page-scroll logo-class" href="<?php echo $BASE; ?>">Ju.St</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav-bar">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="<?php echo $BASE; ?>">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo $BASE; ?>/app/views/dashboard1.html">Borrow</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo $BASE; ?>/app/views/dashboard2.html">Lend</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo $BASE; ?>/user/profile">Profile</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo $BASE; ?>/about">How it works</a>
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
            <div class="col-xs-6 outer-blurb">
              <div id="blurb" >
                <p>
                  Jump start your Life/ Small Business to new heights with a credit line upto 10 Lakhs!
               </p>
                  <a href="" class="btn btn-default btn-xl wow tada">Learn more!</a>
              </div>
            </div>
              <div class="col-xs-5 col-sm-5 col-md-5 col-xs-offset-2 panel panel-default" id="signupbox">
                  <div class="panel-body">
                    <ul class="home-list">
                        <li class="home-list-function active"><a href="#signup">Sign Up</a></li>
                        <li class="home-list-function"><a href="#login">Log In</a></li>
                    </ul>
                  <div class="panel-body-contents">
                    <div id="signup">
        			 			   <form id="signupform" name="SignUp" action="<?php echo $BASE.'/user/signup'; ?>" method="POST" enctype="multipart/form-data" role="form">
                			    <div class="row">
                			    				<div class="col-xs-6 col-sm-6 col-md-6">
                			    					<div class="form-group">
                			                <input type="text" autocomplete="off" name="User_First_Name" id="first_name" class="form-control input-sm signup-input" placeholder="First Name">
                                      <span class="required"></span>
                                    </div>
                			    				</div>
                			    				<div class="col-xs-6 col-sm-6 col-md-6">
                			    					<div class="form-group">
                			    						<input type="text" autocomplete="off" name="User_Last_Name" id="last_name" class="form-control input-sm signup-input" placeholder="Last Name">
                                      <span class="required"></span>
                			    					</div>
                			    				</div>
                			    			</div>
                              <div class="row">
                               <div class="col-xs-6 col-sm-6 col-md-6">
                			    			<div class="form-group">
                			    				<input type="email" name="Email" autocomplete="off" id="email" class="form-control signup-input input-sm" placeholder="Email Address">
                                  <span class="required"></span>
                			    			</div>
                              </div>
                              <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                  <input type="password" name="Password" autocomplete="off" id="password" class="form-control signup-input input-sm" placeholder="Password">
                                  <span class="required"></span>
                                </div>
                              </div>
                            </div>
                			    			<div class="row">
                			    				<div class="col-xs-6 col-sm-6 col-md-6">
                			    					<div class="form-group">
                			    							<input type="text" name="DOB" id="dob" autocomplete="off" class="form-control signup-input input-sm" placeholder="Date of Birth">
                                        <span class="required"></span>
                			    					</div>
                			    				</div>
                			    				<div class="col-xs-6 col-sm-6 col-md-6">
                			    					<div class="form-group">
                                      <input  type="radio" name="Gender" class="genderradio" value="M"/><label class="smallsignuplabel" for="male_" >Male</label>
                                      <input  type="radio" name="Gender" class="genderradio" value="F" /><label class="smallsignuplabel" for="female_">Female</label>
                                      <input  type="radio" name="Gender" class="genderradio" value="O" /><label class="smallsignuplabel-final" for="other_">Other</label>
                                      <span class="required"></span>
                			    					</div>
                			    				</div>
                			    			</div>
                              <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  	<div class="form-group">
                                      <label class="mediumsignuplabel">How did you hear about us?</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                      <select id="srcselect" class="form-control signup-input input-sm" name="Source">
                                          <option value="internet">Internet</option>
                                          <option value="friend">Friend</option>
                                          <option value="newspaper">Newspaper</option>
                                          <option value="radio">Radio</option>
                                      </select>
                                      <span class="required"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12" id="tcbox">
                                  	<div class="tc-form-group">
                                      <input type="checkbox" name="TC" value=""/><span id="tcspan">I have read and agree to the <a href="<?php echo $BASE; ?>/tcdetails" id="tclink">Terms and Conditions</a></span>
                                    </div>
                                 </div>
                               </div>
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="btn-form-group">
                                      <input type="hidden" name="create" value="create"/>
                                      <input type="hidden" name="User_IP" value=""/>
                                      <input type="hidden" name="User_Device" value=""/>
                                      <input type="hidden" name="User_Agent" value=""/>
                                      <input type="hidden" name="User_Agent_Version" value=""/>
                                      <input type="hidden" name="Encrypted_OTP" value=""/>
                                      <input type="hidden" name="OTP_Confirmed" value="N"/>
                                      <input type="submit" value="Create Ju.Mp profile!" class="btn btn-info btn-block">
                                    </div>
                                  </div>
                              </div>
                            </form>
                         </div>

                         <div id="login">
                             <form id="loginform" name="LogIn" action="<?php echo $BASE.'/user/login'; ?>" method="POST" enctype="multipart/form-data" role="form">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                   <div class="login-group">
                                     <input type="text" required autocomplete="off" name="User_Login" id="user_login" class="form-control input-sm login-input" placeholder="Email">
                                     <span class="required"></span>
                                   </div>
                                 </div>
                               </div>
                               <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                   <div class="login-group">
                                     <input type="text" required autocomplete="off" name="Password" id="password" class="form-control input-sm login-input" placeholder="Password">
                                     <span class="required"></span><br/>
                                     <span class="resetpwd"><a href="" class="forgot">Forgot Password</a></span>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                  <div class="login-group">
                                    <input type="submit" value="Login to Ju.Mp!" class="btn btn-info btn-block">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                  <div class="login-group">
                                     <label for="OR_" class="form-control borderless">OR</span>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="social-group">
                                    <a class="btn btn-block btn-social btn-facebook btn-sm" onclick="">
                                      <span class="fa fa-facebook"></span> Sign in with Facebook
                                    </a>
                                  </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="social-group">
                                    <a class="btn btn-block btn-social btn-google btn-sm" onclick="">
                                      <span class="fa fa-google"></span> Sign in with Google
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
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
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

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
    <script src="<?php echo $BASE; ?>/ui/js/home.js"></script>
    <script src="<?php echo $BASE; ?>/ui/js/jquery.layout-latest.js"></script>

</body>

</html>
