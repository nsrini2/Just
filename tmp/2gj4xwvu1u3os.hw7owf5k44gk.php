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
            <div class="collapse navbar-collapse" id="main-nav-bar">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="<?php echo $BASE; ?>">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/X/app/views/dashboard1.html">Borrow</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/X/app/views/dashboard2.html">Lend</a>
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
                <?php if (SESSION.isuserloggedin): ?>
                  
                    <ul class="nav navbar-nav navbar-right">
                      <li>
                          <a class="page-scroll" href="<?php echo $BASE; ?>/user/logout">Logout</a>
                      </li>
                    </ul>
                  
                <?php endif; ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
          <div class="row">
          <div class="col-md-9 col-md-offset-2">
             <div id="profile-splitter">
              <div id="menu-pane" class="ui-layout-west"></div>

               <div id="content-pane" class="ui-layout-center">
                    <div class="graph-tab">
                       <div class="chartgrp">
                            <label for="%Completed_" class="graphlabel" id="percentcompleted">Personal details</label>
	                          <div class="pichart">
	                          </div>
	                      </div>


	                    <div class="chartgrp">
	                         <label for="%Completed_" class="graphlabel" id="percentcompleted">Profile</label>
	                          <div class="pichart">
	                          </div>
                     </div>
                   </div>
                   <div class="form-content">
                   </div>
                   </div>
                 </div>
             </div>
          </div>
          <?php if (isset($ERRORMSG)): ?>
            
               <div class="error">
                     <span><?php echo $ERRORMSG; ?></span>
               </div>
           
         <?php endif; ?>
        </div>
  </header>

  <!-- jQuery -->
  <script src="<?php echo $BASE; ?>/ui/js/jquery.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo $BASE; ?>/ui/js/jquery.easing.min.js"></script>
  <script src="<?php echo $BASE; ?>/ui/js/jquery.fittext.js"></script>
  <script src="<?php echo $BASE; ?>/ui/js/wow.min.js"></script>
  <script src="<?php echo $BASE; ?>/ui/js/jquery.layout-latest.js"></script>
  <script src="<?php echo $BASE; ?>/ui/js/jquery-ui.min.js"></script>
  <script src="<?php echo $BASE; ?>/ui/kendoUI/js/kendo.all.min.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="<?php echo $BASE; ?>/ui/js/creative.js"></script>

  <!-- User JavaScript -->
  <script src="<?php echo $BASE; ?>/ui/js/profile.js"></script>
  <script src="<?php echo $BASE; ?>/ui/js/personal.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo $BASE; ?>/ui/js/bootstrap.min.js"></script>
</body>

</html>
