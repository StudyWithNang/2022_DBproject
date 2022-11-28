<!DOCTYPE html>
<?php 
	session_start();
	$date = date("Y-m-d");
	$visual_date = date("Ymd");
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
    <link rel="shortcut icon" href="images/keya_favicon.ico" type="image/x-icon" />
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
                        <ul class="navbar-nav" style="margin: 0 auto;">
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
                                <a class="nav-link color-aqua-hover" href="diary.php">diary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-pink-hover" href="keya-info.php">keya Info</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link color-pink-hover" font-size=20%>���� ���� ����</a>
                            </li> -->
                            <!--<span class="jb-default-1 ex6">���� ���� ����</span>
                            <span class="jb-default-1 ex8">��ü ���� ����</span>
				-->
                        </ul>
                    </div>
               </nav>
            </div><!-- end container -->
        </header><!-- end header -->


        <section class="section wb">
            <div class="container">
                <div class="row" style="margin-left:170px;">
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
					//echo "mysql connect success!!";

					$query = "select * from raw_news where date='".$date."'";
				?>


			<div class="a_main">
				<input type="radio" id="a_tab-1" name="show" checked/>
				<input type="radio" id="a_tab-2" name="show" />
				<input type="radio" id="a_tab-3" name="show" />
				<input type="radio" id="a_tab-4" name="show" />
				<input type="radio" id="a_tab-5" name="show" />
				<div class="a_tab">
					<label for="a_tab-1">POLITICS</label>
					<label for="a_tab-2">ECONOMY</label>
					<label for="a_tab-3">SOCIETY</label>
					<label for="a_tab-4">WORLD</label>
					<label for="a_tab-5">IT</label>
				</div>

				<div class="a_content">
					<div class="a_content-dis">
						<?php
                                                        $result = mysqli_query($con, $query." and category='section_politics'");
                                                        $i = 0;
                                                        while($i<5) {
                                                                $info = mysqli_fetch_assoc($result);
                                                                $news_url = $info['news_url'];
                                                                $title = $info['title'];
                                                                echo "- <a href='".$news_url."' style='color: black;'>".$title."</a><br>";
                                                                $i++;
                                                        }
                                                ?>

					</div>
					<div class="a_content-dis">
						<?php
                                                        $result = mysqli_query($con, $query." and category='section_economy'");
                                                        $i = 0;
                                                        while($i<5) {
                                                                $info = mysqli_fetch_assoc($result);
                                                                $news_url = $info['news_url'];
                                                                $title = $info['title'];
                                                                echo "- <a href='".$news_url."' style='color: black;'>".$title."</a><br>";
                                                                $i++;
                                                        }
                                                ?>

					</div>
					<div class="a_content-dis">
                                                <?php
                                                        $result = mysqli_query($con, $query." and category='section_society'");
                                                        $i = 0;
                                                        while($i<5) {
                                                                $info = mysqli_fetch_assoc($result);
                                                                $news_url = $info['news_url'];
                                                                $title = $info['title'];
                                                                echo "- <a href='".$news_url."' style='color: black;'>".$title."</a><br>";
                                                                $i++;
                                                        }
                                                ?>
					</div>
        	                        <div class="a_content-dis">
                                                <?php
                                                        $result = mysqli_query($con, $query." and category='section_world'");
                                                        $i = 0;
                                                        while($i<5) {
                                                                $info = mysqli_fetch_assoc($result);
                                                                $news_url = $info['news_url'];
                                                                $title = $info['title'];
                                                                echo "- <a href='".$news_url."' style='color: black;'>".$title."</a><br>";
                                                                $i++;
                                                        }
                                                ?>
                        	        </div>
                                        <div class="a_content-dis">
                                                <?php
                                                        $result = mysqli_query($con, $query." and category='section_it'");
                                                        $i = 0;
                                                        while($i<5) {
                                                                $info = mysqli_fetch_assoc($result);
                                                                $news_url = $info['news_url'];
                                                                $title = $info['title'];
                                                                echo "- <a href='".$news_url."' style='color: black;'>".$title."</a><br>";
                                                                $i++;
                                                        }
                                                ?>
                                        </div>
				</div>
			</div> <!-- end main news list -->


			<!-- visualization section -->
			<div class="a_today_vi_section">
				<h2> Today Keywords </h2>
				<img src="visual_img/<?php echo $visual_date; ?>.png" class="a_today_key_img">
			</div> <!-- end visualization section -->

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
