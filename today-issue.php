<!DOCTYPE html>
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

    <!-- aheun css -->
    <link href="css/aheun.css" rel="stylesheet">

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
                        <ul class="navbar-nav">
			    <li class="nav-item dropdown has-submenu">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Recent News</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                    <li><a class="dropdown-item" href="today-issue.php">Today Issue</a></li>
                                    <li><a class="dropdown-item" href="collect-press.php">Collect Press</a></li>
                                    <li><a class="dropdown-item" href="collect-editor.php">Collect Editor</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-aqua-hover" href="my-interested-news.php">my interested news</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-pink-hover" href="keya-info.php">keya INFO</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link color-pink-hover" font-size=20%>금일 뉴스 수집</a>
                            </li> -->
                        </ul>
                    </div>
               </nav>
            </div><!-- end container -->
        </header><!-- end header -->



        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
			<!-- main news list -->
			<h2 style="padding-top: 0px"> Today Issue </h2>
<?php
						//mysql 접속 계정 정보 설정
						$mysql_host = 'localhost';
						$mysql_user = 'root';
						$mysql_password = '111111';
						$mysql_db = 'keya';
						//connetc 설정(host,user,password)
						$con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);
						if(mysqli_connect_error($con)) {
							echo "mysql connect fail!!", "<br>";
							echo mysqli_connect_error();
							exit(); }
						echo "mysql connect success!!";

						//$result = mysqli_query($con, "select * from raw_news order by rand() limit 5");
                                                $result = mysqli_query($con, "select * from raw_news");
						/*
						//while($row = mysqli_fetch_assoc($result)) {
							//echo $row['title']."<br>";
							//echo mysqli_fetch_assoc($result)['title']."<br>";
							//echo mysqli_fetch_assoc($result)['title'];

						//}
						
						$i = 0;
						while($i<5) {
							echo mysqli_fetch_assoc($result)['title']."<br>";
							$i++;
						}

						//echo "<br><br><br>".$row['title'][0];
						*/
					?>


			<div class="a_main">
				<input type="radio" id="a_tab-1" name="show" checked/>
				<input type="radio" id="a_tab-2" name="show" />
				<input type="radio" id="a_tab-3" name="show" />
				<input type="radio" id="a_tab-4" name="show" />
				<input type="radio" id="a_tab-5" name="show" />
				<div class="a_tab">
					<label for="a_tab-1">main news</label>
					<label for="a_tab-2">politics</label>
					<label for="a_tab-3">economy</label>
					<label for="a_tab-4">society</label>
					<label for="a_tab-5">it</label>
				</div>

				<div class="a_content">
					<div class="a_content-dis">
						<?php echo mysqli_fetch_assoc($result)['title']; ?>
					</div>
					<div class="a_content-dis">
                                                <?php echo mysqli_fetch_assoc($result)['title']; ?>
					</div>
					<div class="a_content-dis">
                                                <?php echo mysqli_fetch_assoc($result)['title']; ?>
					</div>
					<div class="a_content-dis">
                                                <?php echo mysqli_fetch_assoc($result)['title']; ?>
					</div>
        	                        <div class="a_content-dis">
                                                <?php echo mysqli_fetch_assoc($result)['title']; ?>
                        	        </div>
				</div>
			</div> <!-- end main news list -->


			<!-- visualization section -->
			<div class="a_today_vi_section">
				<h2> Today Keywords </h2>
				<img src="images/today_visualization.jpg" class="a_today_key_img">
			</div> <!-- end visualization section -->

                    </div><!-- end col -->


		    <!-- sidebar col-->
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widget-title">Diary</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/blog_square_01.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">text11111</h5>
                                                <small>12 Jan, 2016</small>
                                            </div>
                                        </a>

                                        <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/blog_square_01.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">text22222</h5>
                                                <small>11 Jan, 2016</small>
                                            </div>
                                        </a>

                                        <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 last-item justify-content-between">
                                                <img src="upload/blog_square_01.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">text33333</h5>
                                                <small>07 Jan, 2016</small>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">weather</h2>
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar
                    </div><!-- end sidebar col -->

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
