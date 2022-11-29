<!DOCTYPE html>
<?php
        session_start();
        //echo $_SESSION['id'];
?>
<html lang="en">

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

    <link rel="stylesheet" href="css/slick.css">

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
     /* 슬릭 배너 */
    .ban {position: relative; padding: 24px 0 20px;}
    .ban .slick-prev {position: absolute; left: -80px; top: 80px; width: 43px; height: 43px; background: #ccc; background: url(../img/icon.png) no-repeat -150px 0; text-indent: -9999px;}
    .ban .slick-next {position: absolute; right: -80px; top: 80px; width: 43px; height: 43px; background: #ccc; background: url(../img/icon.png) no-repeat -150px -43px; text-indent: -9999px;}
    .ban .slick-prev:hover {background-position: -193px 0;}
    .ban .slick-next:hover{background-position: -193px -43px;}
    .ban img {border: 4px solid #dcdcdc;}
    .ban img:hover {border-color: #98bcdc;}
    .ban .slick-slide {margin: 10px;}
    .ban .slick-dots {position: absolute; bottom: 15px; display: block; width: 100%; text-align: center;}
    .ban .slick-dots li {display: inline-block; width: 15px; height: 15px; margin: 5px;}
    .ban .slick-dots li button {font-size: 0; line-height: 0; display: block; width: 15px; height: 15px; cursor: pointer; background: #5dbfeb; border-radius: 50%;}
    .ban .slick-dots li.slick-active button {background: #2b91c8;}

     /* cardType */
     .card__inner {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .card__inner .card {
            width: 24%;
            text-align: left;
        }
        .card__inner .card:nth-child(1){
            margin-bottom: 50px;
        }
        .card__body {
            position: relative;
        }
        .card__body h3 {
            font-size: 28px;
            font-weight: 500;
            margin: 20px 0 10px;
        }
        .card__body p {
            font-size: 18px;
            font-weight: 300;
            line-height: 1.4;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3; 
            -webkit-box-orient: vertical;
        }
        .card__body a {
            position: absolute;
            right: 0; 
            top: 0;
            width: 28px; 
            height: 28px;
            background: url(https://webstoryboy.github.io/web2022/webs_img/card02_arrow.svg);
            background-size: cover;
        }


        /* buttonType */
        * {
        box-sizing: border-box;
        margin: 0; padding: 0;
        }
        body {
        font-family: 'Roboto', sans-serif;
        color: rgb(85,75,85);
        background-color: rgb(255,255,255);
        }
        h1 {
        padding: 50px 0;
        font-size: 45px;
        text-align: center;
        color: rgb(54, 56, 55);
        }
        :active, :hover, :focus {
        outline: 0!important;
        outline-offset: 0;
        }
        ::before,
        ::after {
        position: absolute;
        content: "";
        }

        .btn-holder {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        max-width: 1000px;
        margin: 10px auto 35px;
        }
        .btn {
        position: relative;
        display: inline-block;
        width: auto; height: auto;
        background-color: transparent;
        border: none;
        cursor: pointer;
        margin: 0px 25px 15px;
        min-width: 150px;
        }
        .btn span {         
            position: relative;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
            top: 0; left: 0;
            width: 100%;
            padding: 15px 20px;
            transition: 0.3s;
        }

        /*--- btn-1 ---*/
        .btn-1::before {
        background-color: white;
        transition: 0.3s ease-out;
        }
        .btn-1 span {
        color: black;
        border: 1px solid rgb(28, 31, 30);
        transition: 0.2s 0.1s;
        }
        .btn-1 span:hover {
        color: rgb(28, 31, 30);
        transition: 0.2s 0.1s;
        }

        /* 1.hover-filled-slide-down */
        .btn.hover-filled-slide-down::before {
        bottom: 0; left: 0; right: 0; 
        height: 100%; width: 100%;
        }
        .btn.hover-filled-slide-down:hover::before {
        height: 0%;
        }

        /* 2.hover-filled-slide-up */
        .btn.hover-filled-slide-up::before {
        top: 0; left: 0; right: 0;
        height: 100%; width: 100%;
        }
        .btn.hover-filled-slide-up:hover::before {
        height: 0%;
        }

        /* 3.hover-filled-slide-left */
        .btn.hover-filled-slide-left::before {
        top: 0; bottom: 0; left: 0;
        height: 100%; width: 100%;
        }
        .btn.hover-filled-slide-left:hover::before {
        width: 0%;
        }

        /* 4. hover-filled-slide-right */
        .btn.hover-filled-slide-right::before {
        top:0; bottom: 0; right: 0;
        height: 100%; width: 100%;
        }
        .btn.hover-filled-slide-right:hover::before {
        width: 0%;
        }

        /* 5. hover-filled-opacity */
        .btn.hover-filled-opacity::before {
        top:0; bottom: 0; right: 0;
        height: 100%; width: 100%;
        opacity: 1;
        }
        .btn.hover-filled-opacity:hover::before {
        opacity: 0;
        }

        /*--- btn-2 ---*/
        .btn-2::before {
        background-color: rgb(28, 31, 30);
        transition: 0.3s ease-out;
        }
        .btn-2 span {
        color: rgb(28, 31, 30);
        border: 1px solid rgb(28, 31, 30);
        transition: 0.2s;
        }  
        .btn-2 span:hover {
        color: rgb(255,255,255);
        transition: 0.2s 0.1s;
        }

        /* 6. hover-slide-down */
        .btn.hover-slide-down::before {
        top: 0; left: 0; right: 0; 
        height: 0%; width: 100%;
        }
        .btn.hover-slide-down:hover::before {
        height: 100%;
        }

        /* 7. hover-slide-up */
        .btn.hover-slide-up::before {
        bottom: 0; left: 0; right: 0; 
        height: 0%; width: 100%;
        }
        .btn.hover-slide-up:hover::before {
        height: 100%;
        }

        /* 8. hover-slide-left */
        .btn.hover-slide-left::before {
        top: 0; bottom: 0; right: 0; 
        height: 100%; width: 0%;
        }
        .btn.hover-slide-left:hover::before {
        width: 100%;
        }

        /* 9. hover-slide-right */
        .btn.hover-slide-right::before {
        top: 0; bottom: 0; left: 0; 
        height: 100%; width: 0%;
        }
        .btn.hover-slide-right:hover::before {
        width: 100%;
        }

        /* 10. hover-opacity */
        .btn.hover-opacity::before {
        top:0; bottom: 0; right: 0;
        height: 100%; width: 100%;
        opacity: 0;
        }
        .btn.hover-opacity:hover::before {
        opacity: 1;
        }

        /*--- btn-3 ---*/
        .btn-3 {
        padding: 5px;
        }
        .btn-3 span {
        color: rgb(255, 255, 255);
        background-color: rgb(54, 56, 55);
        }
        .btn-3::before,
        .btn-3::after {
        background: transparent;
        z-index: 2;
        }

        /* 11. hover-border-1 */
        .btn.hover-border-1::before,
        .btn.hover-border-1::after {
        width: 10%; height: 25%;
        transition: 0.35s;
        }
        .btn.hover-border-1::before {
        top: 0; left: 0;
        border-left: 1px solid rgb(28, 31, 30);
        border-top: 1px solid rgb(28, 31, 30);
        }
        .btn.hover-border-1::after {
        bottom: 0; right: 0;
        border-right: 1px solid rgb(28, 31, 30);
        border-bottom: 1px solid rgb(28, 31, 30);
        }
        .btn.hover-border-1:hover::before,
        .btn.hover-border-1:hover::after {
        width: 99%;
        height: 98%;
        }

        /* 12. hover-border-2 */
        .btn.hover-border-2::before,
        .btn.hover-border-2::after {
        width: 10%; height: 25%;
        transition: 0.35s;
        }
        .btn.hover-border-2::before {
        bottom: 0; left: 0;
        border-left: 1px solid rgb(28, 31, 30);
        border-bottom: 1px solid rgb(28, 31, 30);
        }
        .btn.hover-border-2::after {
        top: 0; right: 0;
        border-right: 1px solid rgb(28, 31, 30);
        border-top: 1px solid rgb(28, 31, 30);
        }
        .btn.hover-border-2:hover::before,
        .btn.hover-border-2:hover::after {
        width: 99%;
        height: 99%;
        }

        /* 13. hover-border-3 */
        .btn.hover-border-3::before,
        .btn.hover-border-3::after {
        width: 0%; height: 0%;
        opacity: 0;
        transition: width 0.2s 0.15s linear, height 0.15s linear, opacity 0s 0.35s;
        }
        .btn.hover-border-3::before {
        top: 0; right: 0;
        border-top: 1px solid rgb(28, 31, 30);
        border-left: 1px solid rgb(28, 31, 30);
        }
        .btn.hover-border-3::after {
        bottom: 0; left: 0;
        border-bottom: 1px solid rgb(28, 31, 30);
        border-right: 1px solid rgb(28, 31, 30);
        }
        .btn.hover-border-3:hover::before,
        .btn.hover-border-3:hover::after {
        width: 100%; height: 99%;
        opacity: 1;
        transition: width 0.2s linear, height 0.15s 0.2s linear, opacity 0s;   
        }

        /* 14. hover-border-4 */
        .btn.hover-border-4::before,
        .btn.hover-border-4::after {
        width: 0%; height: 0%;
        opacity: 0;
        transition: width 0.2s linear, height 0.15s 0.2s ease-out, opacity 0s 0.35s;
        }
        .btn.hover-border-4::before {
        bottom: 0; left: -1px;
        border-top: 1px solid rgb(28, 31, 30);
        border-left: 1px solid rgb(28, 31, 30);
        }
        .btn.hover-border-4::after {
        top: 0; right: 0;
        border-bottom: 1px solid rgb(28, 31, 30);
        border-right: 1px solid rgb(28, 31, 30);
        }
        .btn.hover-border-4:hover::before,
        .btn.hover-border-4:hover::after {
        width: 100%; height: 99%;
        opacity: 1;
        transition: width 0.2s 0.15s ease-out, height 0.15s ease-in, opacity 0s;   
        }

        /* 15. hover-border-5 */
        .btn.hover-border-5::before,
        .btn.hover-border-5::after {
        width: 0%; height: 0%;
        opacity: 0;
        }
        .btn.hover-border-5::before {
        top: 0; right: 0;
        border-top: 1px solid rgb(28, 31, 30);
        border-left: 1px solid rgb(28, 31, 30);
        transition: width 0.2s 0.5s ease-out, height 0.15s 0.35s linear, opacity 0s 0.7s;
        }
        .btn.hover-border-5::after {
        bottom: 0; left: 0px;
        border-bottom: 1px solid rgb(28, 31, 30);
        border-right: 1px solid rgb(28, 31, 30);
        transition: width 0.2s 0.15s linear, height 0.15s ease-in, opacity 0s 0.35s;
        }
        .btn.hover-border-5:hover::before,
        .btn.hover-border-5:hover::after {
        width: 100%; height: 96%;
        opacity: 1;
        }
        .btn.hover-border-5:hover::before {
        transition: width 0.2s ease-in, height 0.15s 0.2s linear, opacity 0s;   /* 1,2 */
        }
        .btn.hover-border-5:hover::after {
        transition: width 0.2s 0.35s linear, height 0.15s 0.5s ease-out, opacity 0s 0.3s; 
        } 

        /*--- btn-4 ---*/
        .btn-4 span {
        color: rgb(28, 31, 30);
        background-color: rgb(245,245,245);
        }
        .btn-4 span:hover {
        color: rgb(54, 56, 55);
        }
        .btn-4::before,
        .btn-4::after {
        width: 15%; height: 2px;
        background-color: rgb(54, 56, 55);
        z-index: 2;
        }

        /* 16. hover-border-6 */
        .btn.hover-border-6::before,
        .btn.hover-border-6::after {
        top: 0;
        transition: width 0.2s 0.35s ease-out;
        }
        .btn.hover-border-6::before {
        right: 50%;
        }
        .btn.hover-border-6::after {
        left: 50%;
        }
        .btn.hover-border-6:hover::before,
        .btn.hover-border-6:hover::after {
        width: 50%;
        transition: width 0.2s ease-in;   
        }

        .btn.hover-border-6 span::before,
        .btn.hover-border-6 span::after {
        width: 0%; height: 0%;
        background: transparent;
        opacity: 0;
        z-index: 2;
        transition: width 0.2s ease-in, height 0.15s 0.2s linear, opacity 0s 0.35s;
        }
        .btn.hover-border-6 span::before {
        top: 0; left: 0;
        border-left: 2px solid rgb(54, 56, 55);
        border-bottom: 2px solid rgb(54, 56, 55);
        }
        .btn.hover-border-6 span::after {
        top: 0; right: 0;
        border-right: 2px solid rgb(54, 56, 55);
        border-bottom: 2px solid rgb(54, 56, 55);
        }
        .btn.hover-border-6 span:hover::before,
        .btn.hover-border-6 span:hover::after {
        width: 50%; height: 96%;
        opacity: 1;
        transition: height 0.2s 0.2s ease-in, width 0.2s 0.4s linear, opacity 0s 0.2s;   
        }

        /* 17. hover-border-7 */
        .btn.hover-border-7::before,
        .btn.hover-border-7::after {
        bottom: 0;
        transition: width 0.2s 0.35s ease-out;
        }
        .btn.hover-border-7::before {
        right: 50%;
        }
        .btn.hover-border-7::after {
        left: 50%;
        }
        .btn.hover-border-7:hover::before,
        .btn.hover-border-7:hover::after {
        width: 50%;
        transition: width 0.2s ease-in;   
        }

        .btn.hover-border-7 span::before,
        .btn.hover-border-7 span::after {
        width: 0%; height: 0%;
        background: transparent;
        opacity: 0;
        z-index: 2;
        transition: width 0.2s ease-in, height 0.15s 0.2s linear, opacity 0s 0.35s;
        }
        .btn.hover-border-7 span::before {
        bottom: 0; left: 0;
        border-left: 2px solid rgb(54, 56, 55);
        border-top: 2px solid rgb(54, 56, 55);
        }
        .btn.hover-border-7 span::after {
        bottom: 0; right: 0;
        border-right: 2px solid rgb(54, 56, 55);
        border-top: 2px solid rgb(54, 56, 55);
        }
        .btn.hover-border-7 span:hover::before,
        .btn.hover-border-7 span:hover::after {
        width: 50%; height: 96%;
        opacity: 1;
        transition: height 0.2s 0.2s ease-in, width 0.2s 0.4s linear, opacity 0s 0.2s;   
        }

        /* 18. hover-border-8 */
        .btn.hover-border-8::before,
        .btn.hover-border-8::after {
        bottom: 0;
        width: 15%;
        transition: width 0.2s 0.35s ease-out;
        }
        .btn.hover-border-8::before {
        right: 50%;
        }
        .btn.hover-border-8::after {
        left: 50%;
        }
        .btn.hover-border-8:hover::before {
        width: 50%;
        transition: width 0.2s ease-in;   
        }
        .btn.hover-border-8:hover::after {
        width: 50%;
        transition: width 0.1s ease-in;   
        }

        .btn.hover-border-8 span::before,
        .btn.hover-border-8 span::after {
        width: 0%; height: 0%;
        bottom: 0;
        background: transparent;
        opacity: 0;
        z-index: 2;
        }
        .btn.hover-border-8 span::before {
        left: 0%;
        border-left: 2px solid rgb(54, 56, 55);
        transition: height 0.25s ease-in, opacity 0s 0.35s;   
        }
        .btn.hover-border-8 span:hover::before {
        height: 96%;
        opacity: 1;
        transition: height 0.25s 0.2s ease-out, opacity 0s 0.2s;   
        }
        .btn.hover-border-8 span::after {
        right: 0%;
        border-right: 2px solid rgb(54, 56, 55);
        border-top: 2px solid rgb(54, 56, 55);
        transition: width 0.2s ease-in, height 0.15s 0.2s linear, opacity 0s 0.35s;   
        }
        .btn.hover-border-8 span:hover::after {
        width: 99%; height: 96%;
        opacity: 1;
        transition: height 0.15s 0.1s linear, width 0.2s 0.25s linear, opacity 0s 0.1s;   
        }

        /* 19. hover-border-9 */
        .btn.hover-border-9::before,
        .btn.hover-border-9::after {
        bottom: 0;
        width: 15%;
        transition: width 0.2s 0.35s ease-out;
        }
        .btn.hover-border-9::before {
        right: 50%;
        }
        .btn.hover-border-9::after {
        left: 50%;
        }
        .btn.hover-border-9:hover::before {
        width: 50%;
        transition: width 0.1s ease-in;   
        }
        .btn.hover-border-9:hover::after {
        width: 50%;
        transition: width 0.2s ease-in;   
        }

        .btn.hover-border-9 span::before,
        .btn.hover-border-9 span::after {
        width: 0%; height: 0%;
        bottom: 0;
        background: transparent;
        opacity: 0;
        z-index: 2;
        }
        .btn.hover-border-9 span::after {
        right: 0%;
        border-right: 2px solid rgb(54, 56, 55);
        transition: height 0.25s ease-in, opacity 0s 0.35s;   
        }
        .btn.hover-border-9 span:hover::after {
        height: 96%;
        opacity: 1;
        transition: height 0.25s 0.2s ease-out, opacity 0s 0.2s;   
        }
        .btn.hover-border-9 span::before {
        left: 0%;
        border-left: 2px solid rgb(54, 56, 55);
        border-top: 2px solid rgb(54, 56, 55);
        transition: width 0.2s ease-in, height 0.15s 0.2s linear, opacity 0s 0.35s;   
        }
        .btn.hover-border-9 span:hover::before {
        width: 98.5%; height: 96%;
        opacity: 1;
        transition: height 0.15s 0.1s linear, width 0.2s 0.25s linear, opacity 0s 0.1s;   
        }

        /* 20. hover-border-10 */
        .btn.hover-border-10::before,
        .btn.hover-border-10::after {
        left: 0%;
        height: 30%;
        width: 2px;
        transition: height 0.2s 0.35s ease-out;
        }
        .btn.hover-border-10::before {
        top: 50%;
        }
        .btn.hover-border-10::after {
        bottom: 50%;
        }
        .btn.hover-border-10:hover::before {
        height: 50%;
        transition: height 0.2s ease-in;   
        }
        .btn.hover-border-10:hover::after {
        height: 50%;
        transition: height 0.1s ease-in;   
        }

        .btn.hover-border-10 span::before,
        .btn.hover-border-10 span::after {
        width: 0%; height: 0%;
        background: transparent;
        opacity: 0;
        z-index: 2;
        }
        .btn.hover-border-10 span::after {
        bottom: 0; left: 0%;
        border-bottom: 2px solid rgb(54, 56, 55);
        transition: width 0.25s ease-in, opacity 0s 0.35s;   
        }
        .btn.hover-border-10 span:hover::after {
        width: 100%;
        opacity: 1;
        transition: width 0.25s 0.2s ease-out, opacity 0s 0.2s;   
        }
        .btn.hover-border-10 span::before {
        top: 0%; left: 0%;
        border-top: 2px solid rgb(54, 56, 55);
        border-right: 2px solid rgb(54, 56, 55);
        transition: height 0.15s ease-in, width 0.2s 0.15s linear, opacity 0s 0.35s;   
        }
        .btn.hover-border-10 span:hover::before {
        width: 98.5%; height: 96%;
        opacity: 1;
        transition: width 0.2s 0.1s linear, height 0.15s 0.3s ease-out, opacity 0s 0.1s;   
        }

        /*--- btn-5 ---*/
        .btn-5 span {
        color: rgb(28, 31, 30);
        border: 2px solid rgb(249, 211, 27);
        transition: 0.2s;
        }
        .btn-5 span:hover {
        background-color: rgb(245,245,245);
        }

        /* 21. hover-border-11 */
        .btn.hover-border-11::before,
        .btn.hover-border-11::after {
        width: 100%; height: 2px;
        background-color: rgb(54, 56, 55);
        z-index: 2;
        transition: 0.35s; 
        }
        .btn.hover-border-11::before {
        top: 0; right: 0;
        }
        .btn.hover-border-11::after {
        bottom: 0; left: 0;
        }
        .btn.hover-border-11:hover::before,
        .btn.hover-border-11:hover::after {
        width: 0%;
        transition: 0.2s 0.2s ease-out; 
        }

        .btn.hover-border-11 span::before,
        .btn.hover-border-11 span::after {
        width: 2px; height: 100%;
        background-color: rgb(54, 56, 55);
        z-index: 2;
        transition: 0.25s; 
        }
        .btn.hover-border-11 span::before {
        bottom: 0; right: -2px;
        }
        .btn.hover-border-11 span::after {
        top: 0; left: -2px;
        }
        .btn.hover-border-11 span:hover::before,
        .btn.hover-border-11 span:hover::after {
        height: 0%;
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
            <div class ="container">
                <div class="row" style="margin-left:170px">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <h2 style="padding-top: 0px"> Keyword News </h2>
                    <?php
                        $mysql_host = 'localhost';
						$mysql_user = 'root';
						$mysql_password = '111111';
						$mysql_db = 'keya';
                        // echo $_SESSION['id'];
						//connetc 설정(host,user,password)
						$con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

                        
						if(mysqli_connect_error($con)) {
							echo "mysql connect fail!!", "<br>";
							echo mysqli_connect_error();
							exit(); }
                            
                            $result = mysqli_query($con, "select * from raw_news");
                            $mini = $_SESSION['id'];
                            $result2 = mysqli_query($con, "select * from user where id='$mini'");
                            $row = mysqli_fetch_row($result2);

                            // $key1 = $row[2];

                            // system("python3 key_news.py".' '.$row[2].' '.$row[3].' '.$row[4].' '.$row[5].' '.$row[6].' '.$row[7]);
                            //system("cd DB/&& python3 key_news.py".' '."hi");
                            
                        ?>
                        <!-- <div class  ="a_content">
                            <a style="display:block; width:300px; height:50px;" href="keyinfo.php?press=<?php echo $row[2]?>"><?php echo $row[2]?></a>
                            <a style="display:block; width:300px; height:50px;" href="keyinfo.php?press=<?php echo $row[3]?>"><?php echo $row[3]?></a>
                            <a style="display:block; width:300px; height:50px;" href="keyinfo.php?press=<?php echo $row[4]?>"><?php echo $row[4]?></a>
                            <a style="display:block; width:300px; height:50px;" href="keyinfo.php?press=<?php echo $row[5]?>"><?php echo $row[5]?></a>
                            <a style="display:block; width:300px; height:50px;" href="keyinfo.php?press=<?php echo $row[6]?>"><?php echo $row[6]?></a>
                            <a style="display:block; width:300px; height:50px;" href="keyinfo.php?press=<?php echo $row[7]?>"><?php echo $row[7]?></a>
                        </div> -->

			<!-- <button type="button" class="navyBtn" onClick="location.href='keyinfo.php?press=<?php echo $row[2]?>'"> -->
                    <div class  ="a_content">        
                        <div class="btn-holder"style="margin-left: 60px; width: 100%;">
                            <button type="button" class="btn btn-1 hover-filled-slide-left" onClick="location.href='keyinfo.php?press=<?php echo $row[2]?>'">
                                <span><?php echo $row[2]?></span>
                            </button>
                            <button type="button" class="btn btn-1 hover-filled-slide-left" onClick="location.href='keyinfo.php?press=<?php echo $row[3]?>'">
                                <span><?php echo $row[3]?></span>
                            </button>
                            <button type="button" class="btn btn-1 hover-filled-slide-left" onClick="location.href='keyinfo.php?press=<?php echo $row[4]?>'">
                                <span><?php echo $row[4]?></span>
                            </button>
                        
                        </dv></div>

                        <div class  ="a_content">        
                        <div class="btn-holder" style="margin-left: 60px; width: 100%;">
                            
                            <button type="button" class="btn btn-1 hover-filled-slide-left" onClick="location.href='keyinfo.php?press=<?php echo $row[5]?>'">
                                <span><?php echo $row[5]?></span>
                            </button>
                            <button type="button" class="btn btn-1 hover-filled-slide-left" onClick="location.href='keyinfo.php?press=<?php echo $row[6]?>'">
                                <span><?php echo $row[6]?></span>
                            </button>
                            <button type="button" class="btn btn-1 hover-filled-slide-left" onClick="location.href='keyinfo.php?press=<?php echo $row[7]?>'">                            
                                <span><?php echo $row[7]?></span>
                            </button>
                        </dv></div>

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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="option.js"></script>
    <script>
        // 배너
        $(".ban").slick({
            dots: true,
            infinite: true,
            slidesToShow:3,
            slidesToScroll:3,
            arrows:false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows:false,
                        autoplay: false,
                        }
                }
            ]
        });
        

        // var selectText ='ai';
        // function changeLangSelect(){
        //     var langSelect = document.getElementById("selectbox");
        //     var langvalue= document.getElementById("getvalue");
        //     // select element에서 선택된 option의 value가 저장된다.
        //     var selectValue = langSelect.options[langSelect.selectedIndex].value;
            
        //     // select element에서 선택된 option의 text가 저장된다.
        //     selectText = langSelect.options[langSelect.selectedIndex].text;
        //     langvalue.innerText = selectText;
        //     //document.write(langvalue.innerText);
        //     console.log(selectText);
        //     return selectText;
        // }
        // //changeLangSelect();
        // selectText = changeLangSelect();
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>




        
</body>
</html>
