<!DOCTYPE html>
<?php
        session_start();
        echo $_SESSION['id'];
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
    html {
        background: #f5f7f8;
        font-family: 'Roboto', sans-serif;
        -webkit-font-smoothing: antialiased;
        padding: 20px 0;
        }

        .band {
        width: 90%;
        max-width: 1240px;
        margin: 0 auto;
        
        display: grid;
        
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        grid-gap: 20px;
        
        }

        @media only screen and (min-width: 500px) {
        .band {
            grid-template-columns: 1fr 1fr;
        }  
        .item-1 {
        grid-column: 1/ span 2;
        }
        .item-1 h1 {
            font-size: 30px;
        }
        }

        @media only screen and (min-width: 850px) {
        .band {
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }
        }

        /* card */

        .card {
        min-height: 100%;
        background: white;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        display: flex;
        flex-direction: column;
        text-decoration: none;
        color: #444;
        position: relative;
        top: 0;
        transition: all .1s ease-in;
        }

        .card:hover {
        top: -2px;
        box-shadow: 0 4px 5px rgba(0,0,0,0.2);
        }

        .card article {
        padding: 20px;
        display: flex;
        
        flex: 1;
        justify-content: space-between;
        flex-direction: column;
        
        }
        .card .thumb {
        padding-bottom: 60%;
        background-size: cover;
        background-position: center center;
        }

        .card p { 
        flex: 1; /* make p grow to fill available space*/
        line-height: 1.4;
        }

        /* typography */
        h1 {
        font-size: 20px;
        margin: 0;
        color: #333;
        }

        .card span {
        font-size: 12px;
        font-weight: bold;
        color: #999;
        text-transform: uppercase;
        letter-spacing: .05em;
        margin: 2em 0 0 0;
        }
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

	<!-- Section : Today Issue -->
        <section class="section first-section">
            <div class="container-fluid">
                <!-- <div class="masonry-blog clearfix"> -->
				<h2 style="padding-top: 0px"> Keyword News </h2>
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

                                                //$result = mysqli_query($con, "select * from raw_news order by rand() limit 5");
                                                $result1 = mysqli_query($con, "select * from raw_news");
						$row = mysqli_fetch_row($result1);
						$result2 = mysqli_query($con, "select news_id from raw_news");
/*
                                                $i = 0;
                                                while($i<5) {
                                                        echo mysqli_fetch_assoc($result)['title']."<br>";
                                                        $i++;
                                                } */
                                                
                                        ?>

                           <!-- 디자인 애니메이션 소스 시작-->             
                        <div class="support-grid"></div>

                                <div class="band">
                                <div class="item-1">
                                        <a href=# class="card">
                                        <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/flex-1.jpg);"></div>
                                        <article>
                                            <h1>International Artist Feature: Malaysia</h1>
                                            <span>Mary Winkler</span>
                                        </article>
                                        </a>
                                </div>
                                <div class="item-2">
                                        <a href=# class="card">
                                        <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/users-2.png);"></div>
                                        <article>
                                            <h1>How to Conduct Remote Usability Testing</h1>
                                            <span>Harry Brignull</span>
                                        </article>
                                        </a>
                                </div>
                                <div class="item-3">
                                    <a href=# class="card">
                                    <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/flex-5.jpg);"></div>
                                    <article>
                                        <h1>Created by You, July Edition</h1>
                                        <p>Welcome to our monthly feature of fantastic tutorial results created by you, the Envato Tuts+ community! </p>
                                        <span>Melody Nieves</span>
                                    </article>
                                    </a>
                                </div>
                                <div class="item-4">
                                        <a href=# class="card">
                                        <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/landing.png);"></div>
                                        <article>
                                            <h1>How to Code a Scrolling “Alien Lander” Website</h1>
                                            <p>We’ll be putting things together so that as you scroll down from the top of the page you’ll see an “Alien Lander” making its way to touch down.</p>
                                            <span>Kezz Bracey</span>
                                        </article>
                                        </a>
                                </div>
                                <div class="item-5">
                                        <a href=# class="card">
                                        <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/strange.jpg);"></div>
                                        <article>
                                            <h1>How to Create a “Stranger Things” Text Effect in Adobe Photoshop</h1>
                                            <span>Rose</span>
                                        </article>
                                        </a>
                                </div>
                                <div class="item-6">
                                    <a href=# class="card">
                                    <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/flor.jpg);"></div>
                                    <article>
                                        <h1>5 Inspirational Business Portraits and How to Make Your Own</h1>
                                        
                                        <span>Marie Gardiner</span>
                                    </article>
                                    </a>
                                </div>
                                <div class="item-7">
                                    <a href=# class="card">
                                    <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/china.png);"></div>
                                    <article>
                                        <h1>Notes From Behind the Firewall: The State of Web Design in China</h1>
                                        <span>Kendra Schaefer</span>
                                    </article>
                                    </a>
                                </div>
                                </div><!-- 디자인 애니메이션 소스 끝  -->
                    
                            </div><!-- end title -->
                        </div><!-- end blog-list -->
                    </div><!-- end col -->


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
