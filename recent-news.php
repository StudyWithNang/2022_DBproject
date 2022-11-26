<!DOCTYPE html>
<?php
        session_start();
        echo $_SESSION['id'];
	$date = date("Y-m-d");
	echo $date;
?>
<html lang="ko">

    <!-- Basic -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Metas -->
    <title>keyword article</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,500,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="css/colors.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <link rel="stylesheet" href="css/style2.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<!--  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
  <title>Sign in</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

  <style>
    .jb-default-1 { font-size: 13px; padding-left: 20px; vertical-align: text-top; }
    .ex6 {vertical-align: super;}
    .ex8 {vertical-align: text-bottom;}
  </style>


</head>
<body>

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <div class="collapse top-search" id="collapseExample">
            <div class="card card-block">
                <div class="newsletter-widget text-center">
                    <form class="form-inline">
                        <input type="text" class="form-control" placeholder="What you are looking for?">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </form>
                </div><!-- end newsletter -->
            </div>
       </div><!-- end top-search -->


        <div class="header-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="recent-news.php"><img src="images/logo.png" width=150px alt=""></a>
                        </div><!-- end logo -->
                    </div>
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end header -->

        <header class="header">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-toggleable-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                        <ul class="navbar-nav dropdown has-submenu">
                            <li class="nav-item">
                                <a class="nav-link color-aqua-hover" href="today-issue.php">Today Issue</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-aqua-hover" href="collect-press.php">Collect Press</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-aqua-hover" href="my-interested-news.php">my interested news</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-pink-hover" href="keya-info.php">keya INFO</a>
                            </li>
                        </ul>
                    </div>
               </nav>
            </div><!-- end container -->
        </header><!-- end header -->

	<?php
		$mysql_host = 'localhost';
		$mysql_user = 'root';
		$mysql_password = '111111';
		$mysql_db = 'keya';

		$con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);
		if(mysqli_connect_error($con)) {
			echo "mysql connect fail!!", "<br>";
			echo mysqli_connect_error();
			exit(); }

		$result1 = mysqli_query($con, "select * from raw_news where date='".$date."'");
		$row = mysqli_fetch_row($result1);
		$result2 = mysqli_query($con, "select news_id from raw_news");
	?>

	<!-- Section : Today Issue -->
        <section class="section first-section">
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
		    <h1 style="margin-left: 20px; color: #000000">Today Issue</h1>
                    <div class="left-side">
                        <div class="masonry-box post-media">
                             <img src="<?php echo $row[6];?>" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-aqua" style="color: #ffffff"><?php echo $row[0];?></a></span>
                                        <h4><a href="single.html" title=""><?php echo $row[1];?></a></h4>
                                        <small style="color: #ffffff"><?php echo $row[3];?></a></small>
                                        <small style="color: #ffffff"><?php echo $row[5];?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end left-side -->


                    <?php $row = mysqli_fetch_row($result1); ?>
                    <div class="center-side">
                        <div class="masonry-box post-media">
                             <img src="<?php echo $row[6];?>" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-aqua" style="color: #ffffff"><?php echo $row[0];?></a></span>
                                        <h4><a href="single.html" title=""><?php echo $row[1];?></a></h4>
                                        <small style="color: #ffffff"><?php echo $row[3];?></a></small>
                                        <small style="color: #ffffff"><?php echo $row[5];?></a></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end center-side -->

                    <?php $row = mysqli_fetch_row($result1); ?>
                    <div class="right-side hidden-md-down">
                        <div class="masonry-box post-media">
                            <div class="masonry-box post-media">
                             <img src="<?php echo $row[6];?>" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-aqua" style="color: #ffffff"><?php echo $row[0];?></a></span>
                                        <h4><a href="single.html" title=""><?php echo $row[1];?></a></h4>
                                        <small style="color: #ffffff"><?php echo $row[3];?></a></small>
                                        <small style="color: #ffffff"><?php echo $row[5];?></a></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end right-side -->
                </div><!-- end masonry -->
            </div>
        </section> <!-- end Section : Today Issue -->


        <section class="section">
            <div class="container">
                <hr class="invis1">
                <div class="row">
   		    <!-- section : press -->
                    <div class="col-lg-9">
                        <div class="blog-list clearfix">
                            <?php $row = mysqli_fetch_row($result1); ?>
                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="single.html" title="">
                                            <img src="<?php echo $row[6];?>" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a href="single.html" title=""><?php echo $row[1];?></a></h4>
                                    <p><?php echo $row[2];?></p>
                                    <small><a href="blog-category-01.html" title=""><?php echo $row[0];?></a></small>
                                    <small><a href="single.html" title=""><?php echo $row[3];?></a></small>
                                    <small><a href="blog-author.html" title=""><?php echo $row[5];?></a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <?php $row = mysqli_fetch_row($result1); ?>
                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="single.html" title="">
                                            <img src="<?php echo $row[6];?>" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a href="single.html" title=""><?php echo $row[1];?></a></h4>
                                    <p><?php echo $row[2];?></p>
                                    <small><a href="blog-category-01.html" title=""><?php echo $row[0];?></a></small>
                                    <small><a href="single.html" title=""><?php echo $row[3];?></a></small>
                                    <small><a href="blog-author.html" title=""><?php echo $row[5];?></a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <?php $row = mysqli_fetch_row($result1); ?>
                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="single.html" title="">
                                            <img src="<?php echo $row[6];?>" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a href="single.html" title=""><?php echo $row[1];?>?</a></h4>
                                    <p><?php echo $row[2];?></p>
                                    <small><a href="blog-category-01.html" title=""><?php echo $row[0];?></a></small>
                                    <small><a href="single.html" title=""><?php echo $row[3];?></a></small>
                                    <small><a href="blog-author.html" title=""><?php echo $row[5];?></a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end blog-list -->

                        <hr class="invis">

                        <div class="blog-list clearfix">
                            <div class="section-title">
                            </div><!-- end title -->
                        </div><!-- end blog-list -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- <script src="../js/scripts.js"></script> -->

        <div class="dmtop">Scroll to Top</div>

    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>
