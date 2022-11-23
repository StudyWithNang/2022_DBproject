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



        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
						<!-- main news list -->
						<div class="news_list">
							<h2 style="padding-top: 0px"> Press List </h2>

							<table>
								<tbody>
									<tr>
										<th rowspan="2" scope="rowgroup">종합</th>
										<td><a href="info-press.php?press=경향신문"</a>경향신문</td>
										<td><a href="info-press.php?press=국민일보"</a>국민일보</td>
										<td><a href="info-press.php?press=동아일보"</a>동아일보</td>
										<td><a href="info-press.php?press=문화일보"</a>문화일보</td>
										<td><a href="info-press.php?press=서울신문"</a>서울신문</td>
									</tr>
									<tr>
										<td><a href="info-press.php?press=세계일보"</a>세계일보</td>
										<td><a href="info-press.php?press=조선일보"</a>조선일보</td>
										<td><a href="info-press.php?press=중앙일보"</a>중앙일보</td>
										<td><a href="info-press.php?press=한겨례"</a>한겨레</td>
										<td><a href="info-press.php?press=한국일보"</a>한국일보</td>
									</tr>

									<tr>
										<th rowspan="3" scope="rowgroup">방송/통신</th>
										<td><a href="info-press.php?press=뉴스1"</a>뉴스1</td>
										<td><a href="info-press.php?press=뉴시스"</a>뉴시스</td>
										<td><a href="info-press.php?press=연합뉴스"</a>연합뉴스</td>
										<td><a href="info-press.php?press=연합뉴스TV"</a>연합뉴스TV</td>
										<td><a href="info-press.php?press=채널A"</a>채널A</td>
									</tr>
									<tr>
										<td><a href="info-press.php?press=한국경제TV"</a>한국경제TV</td>
										<td><a href="info-press.php?press=JTBC"</a>JTBC</td>
										<td><a href="info-press.php?press=KBS"</a>KBS</td>
										<td><a href="info-press.php?press=KBS"</a>MBC</td>
										<td><a href="info-press.php?press=SBS"</a>SBS</td>
									</tr>
									<tr>
										<td><a href="info-press.php?press=TV조선"</a>TV조선</td>
										<td><a href="info-press.php?press=YTN"</a>YTN</td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<th rowspan="3" scope="rowgroup">경제</th>
										<td><a href="info-press.php?press=매일경제"</a>매일경제</td>
										<td><a href="info-press.php?press=머니투데이"</a>머니투데이</td>
										<td><a href="info-press.php?press=비즈니스워치"</a>비즈니스워치</td>
										<td><a href="info-press.php?press=서울경제"</a>서울경제</td>
										<td><a href="info-press.php?press=아시아경제"</a>아시아경제</td>
									</tr>
									<tr>
										<td><a href="info-press.php?press=이데일리"</a>이데일리</td>
										<td><a href="info-press.php?press=조선비즈"</a>조선비즈</td>
										<td><a href="info-press.php?press=조세일보"</a>조세일보</td>
										<td><a href="info-press.php?press=파이낸셜뉴스"</a>파이낸셜뉴스</td>
										<td><a href="info-press.php?press=한국경제"</a>한국경제</td>
									</tr>
									<tr>
										<td><a href="info-press.php?press=헤럴드경제"</a>헤럴드경제</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<th rowspan="2" scope="rowgroup">인터넷</th>
										<td><a href="info-press.php?press=노컷뉴스"</a>노컷뉴스</td>
										<td><a href="info-press.php?press=더팩트"</a>더팩트</td>
										<td><a href="info-press.php?press=데일리안"</a>데일리안</td>
										<td><a href="info-press.php?press=머니S"</a>머니S</td>
										<td><a href="info-press.php?press=미디어오늘"</a>미디어오늘</td>
									</tr>
									<tr>
										<td><a href="info-press.php?press=아이뉴스24"</a>아이뉴스24</td>
										<td><a href="info-press.php?press=오마이뉴스"</a>오마이뉴스</td>
										<td><a href="info-press.php?press=프레시안"</a>프레시안</td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<th rowspan="1" scope="rowgroup">IT</th>
										<td><a href="info-press.php?press=디지털데일리"</a>디지털데일리</td>
										<td><a href="info-press.php?press=디지털타임스"</a>디지털타임스</td>
										<td><a href="info-press.php?press=블로터"</a>블로터</td>
										<td><a href="info-press.php?press=전자신문"</a>전자신문</td>
										<td><a href="info-press.php?press=SDNet Korea"</a>SDNet Korea</td>
									</tr>

									<tr>
										<th rowspan="3" scope="rowgroup">매거진</th>
										<td><a href="info-press.php?press=레이디경향"</a>레이디경향</td>
										<td><a href="info-press.php?press=매경이코노미"</a>매경이코노미</td>
										<td><a href="info-press.php?press=시사N"</a>시사N</td>
										<td><a href="info-press.php?press=시사저널"</a>시사저널</td>
										<td><a href="info-press.php?press=신동아"</a>신동아</td>
									</tr>
									<tr>
										<td><a href="info-press.php?press=월간 산"</a>월간 산</td>
										<td><a href="info-press.php?press=이코노미스트"</a>이코노미스트</td>
										<td><a href="info-press.php?press=주간경향"</a>주간경향</td>
										<td><a href="info-press.php?press=주간동아"</a>주간동아</td>
										<td><a href="info-press.php?press=주간조선"</a>주간조선</td>
									</tr>
									<tr>
										<td><a href="info-press.php?press=중앙SUNDAY"</a>중앙SUNDAY</td>
										<td><a href="info-press.php?press=한겨레21"</a>한겨레21</td>
										<td><a href="info-press.php?press=한경비즈니스"</a>한경비즈니스</td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<th rowspan="2" scope="rowgroup">전문지</th>
										<td><a href="info-press.php?press=기자협회보"</a>기자협회보</td>
										<td><a href="info-press.php?press=기자협회보"</a>농민신문</td>
										<td><a href="info-press.php?press=뉴스타파"</a>뉴스타파</td>
										<td><a href="info-press.php?press=동아사이언스"</a>동아사이언스</td>
										<td><a href="info-press.php?press=여성신문"</a>여성신문</td>
									</tr>
									<tr>
										<td><a href="info-press.php?press=일다"</a>일다</td>
										<td><a href="info-press.php?press=코리아중앙데일리"</a>코리아중앙데일리</td>
										<td><a href="info-press.php?press=코리아헤럴드"</a>코리아헤럴드</td>
										<td><a href="info-press.php?press=코메디닷컴"</a>코메디닷컴</td>
										<td><a href="info-press.php?press=코메디닷컴"</a>헬스조선</td>
									</tr>

									<tr>
										<th rowspan="3" scope="rowgroup">지역</th>
										<td><a href="info-press.php?press=강릉도민일보"</a>강릉도민일보</td>
										<td><a href="info-press.php?press=강원일보"</a>강원일보</td>
										<td><a href="info-press.php?press=국제신문"</a>국제신문</td>
										<td><a href="info-press.php?press=대구MBC"</a>대구MBC</td>
										<td><a href="info-press.php?press=대전일보"</a>대전일보</td>
									</tr>
									<tr>
										<td><a href="info-press.php?press=대전일보"</a>매일신문</td>
										<td><a href="info-press.php?press=부산일보"</a>부산일보</td>
										<td><a href="info-press.php?press=전주MBC"</a>전주MBC</td>
										<td><a href="info-press.php?press=C8청주방송"</a>C8청주방송</td>
										<td>JBS</td>
									</tr>
									<tr>
										<td><a href="info-press.php?press=kbc광주방송"</a>kbc광주방송</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<th rowspan="1" scope="rowgroup">포토</th>
										<td><a href="info-press.php?press=신화사 연합뉴스"</a>신화사 연합뉴스</td>
										<td><a href="info-press.php?press=화사 연합뉴스"</a>AP연합뉴스</td>
										<td><a href="info-press.php?press=EA연합뉴스"</a>EA연합뉴스</td>
										<td> </td>
										<td> </td>
									</tr>
								</tbody>
							</table>
						</div><!-- end main news list -->

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
