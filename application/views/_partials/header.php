<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
      <!-- meta charec set -->
        <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Page Title -->
        <title>Naik Cruise</title>    
    <!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
    <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Google Font -->
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS
    ================================================== -->
    <!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="<?php echo base_url('css3/font-awesome.min.css')?>">
    <!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="<?php echo base_url('css3/bootstrap.min.css')?>">
    <!-- jquery.fancybox  -->
        <link rel="stylesheet" href="<?php echo base_url('css3/jquery.fancybox.css')?>">
    <!-- animate -->
        <link rel="stylesheet" href="<?php echo base_url('css3/animate.css')?>">
    <!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url('css3/main.css')?>">
    <!-- media-queries -->
        <link rel="stylesheet" href="<?php echo base_url('css3/media-queries.css')?>">

        <link rel="stylesheet" href="<?php echo base_url('css/styles.css')?>">

        <link rel="stylesheet" href="<?php echo base_url('css3/bankw3.css')?>">        

    <!-- css dropdown ship -->
        <style type="text/css">

          /*Main banner*/

          .mySlidesm {display: none}
          .imgm {vertical-align: middle;}

          /* Slideshow container */
          .slideshow-containerm {
            position: relative;
            margin: auto;
          }

          /* Next & previous buttons */
          .prevm, .nextm {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
          }

          /* Position the "next button" to the right */
          .nextm {
            right: 0;
            background-color: rgba(50, 115, 220, 0.7);
            border-radius: 3px 0 0 3px;
          }

          .prevm {
            background-color: rgba(50, 115, 220, 0.7);
            border-radius: 3px 0 0 3px;
          }

          /* On hover, add a black background color with a little bit see-through */
          .prevm:hover, .nextm:hover {
            background-color: rgba(0,0,0,0.8);
          }

          /* Caption text */
          .textm {
            color: #f2f2f2;
            font-size: 65px;
            font-weight: 800;
            padding: 8px 12px;
            position: absolute;
            bottom: 10%;
            width: 100%;
            text-align: center;
            text-shadow: 2px 2px 14px #000000;
          }

          /* Number text (1/3 etc) */
          .numbertextm {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
          }

          .activem, .dotm:hover {
            background-color: #717171;
          }

          /* Fading animation */
          .fadem {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
          }

          @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }

          @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }

          /* On smaller screens, decrease text size */
          @media only screen and (max-width: 300px) {
            .prevm, .nextm,.textm {font-size: 11px}
          }

        /*=====================================================================================*/


          .facility-Slides {display: none}
          .facility-img {vertical-align: middle;}


          .facility-slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
          }

          .facility-prev, .facility-next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
          }

          .facility-next {
            right: 0;
            border-radius: 3px 0 0 3px;
          }


          .facility-prev:hover, .facility-next:hover {
            background-color: rgba(0,0,0,0.8);
          }

          /* Caption text */
          .facility-text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
          }

          /* Number text (1/3 etc) */
          .facility-numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
          }

          /* The dots/bullets/indicators */
          .facility-dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
          }

          .facility-active, .facility-dot:hover {
            background-color: #717171;
          }

          /* Fading animation */
          .facility-fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
          }

          @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }

          @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }


          /*===================================================================================================*/
          /*Cabins1*/
          .cabins-Slides {display: none}
          .cabins-img {vertical-align: middle;}

          /* Slideshow container */
          .cabins-slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
          }

          /* Next & previous buttons */
          .cabins-prev, .cabins-next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
          }

          /* Position the "next button" to the right */
          .cabins-next {
            right: 0;
            border-radius: 3px 0 0 3px;
          }

          /* On hover, add a black background color with a little bit see-through */
          .cabins-prev:hover, .cabins-next:hover {
            background-color: rgba(0,0,0,0.8);
          }

          /* Caption text */
          .cabins-text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
          }

          /* Number text (1/3 etc) */
          .cabins-numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
          }

          /* The dots/bullets/indicators */
          .cabins-dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
          }

          .cabins-active, .cabins-dot:hover {
            background-color: #717171;
          }

          /* Fading animation */
          .cabins-fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
          }

          @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }

          @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }

          /*======================================================================================================================*/
          /*Slider for testimonial*/

          /* On smaller screens, decrease text size */
          @media only screen and (max-width: 300px) {
            .facility-prev, .facility-next,.facility-text {font-size: 11px}
          }

          /*Testimonial css*/
          /* Slideshow container */
          .tslideshow-container {
            position: relative;
            background: #e9e9e9;
          }

          /* Slides */
          .tmySlides {
            display: none;
            padding: 80px;
            text-align: center;
          }

          /* Next & previous buttons */
          .tprev, .tnext {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -30px;
            padding: 16px;
            color: #888;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
          }

          /* Position the "next button" to the right */
          .tnext {
            position: absolute;
            right: 0;
            border-radius: 3px 0 0 3px;
          }

          /* On hover, add a black background color with a little bit see-through */
          .tprev:hover, .tnext:hover {
            background-color: rgba(0,0,0,0.8);
            color: white;
          }

          /* The dot/bullet/indicator container */
          .tdot-container {
              text-align: center;
              padding: 20px;
              background: #e9e9e9;
          }

          /* The dots/bullets/indicators */
          .tdot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
          }

          .tactive, .tdot:hover {
            background-color: #717171;
          }

          .tauthor {
            color: cornflowerblue;
            font-size: 16px;
          }

          /*Start menu navbar responsive css*/
            .rtopnav {
              overflow: hidden;
              background-color: #333;
            }

            .rtopnav a {
              float: left;
              display: block;
              color: #f2f2f2;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
              font-size: 17px;
            }

            .ractive {
              background-color: #0D47A1;
              color: white;
            }

            .rtopnav .ricon {
              display: none;
            }

            .rdropdown {
              float: left;
              overflow: hidden;
            }

            .rdropdown .rdropbtn {
              font-size: 17px;    
              border: none;
              outline: none;
              color: white;
              padding: 14px 16px;
              background-color: inherit;
              font-family: inherit;
              margin: 0;
            }

            .rdropdown-content {
              display: none;
              position: absolute;
              background-color: #f9f9f9;
              min-width: 160px;
              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
              z-index: 1;
            }

            .rdropdown-content a {
              float: none;
              color: black;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
              text-align: left;
            }

            .rtopnav a:hover, .rdropdown:hover .rdropbtn {
              background-color: #555;
              color: white;
            }

            .rdropdown-content a:hover {
              background-color: #ddd;
              color: black;
            }

            .rdropdown:hover .rdropdown-content {
              display: block;
            }

            @media screen and (max-width: 600px) {
              .rtopnav a:not(:first-child), .rdropdown .rdropbtn {
                display: none;
              }
              .rtopnav a.ricon {
                float: right;
                display: block;
              }
            }

            @media screen and (max-width: 600px) {
              .rtopnav.responsive {position: relative;}
              .rtopnav.responsive .ricon {
                position: absolute;
                right: 0;
                top: 0;
              }
              .rtopnav.responsive a {
                float: none;
                display: block;
                text-align: left;
              }
              .rtopnav.responsive .rdropdown {float: none;}
              .rtopnav.responsive .rdropdown-content {position: relative;}
              .rtopnav.responsive .rdropdown .rdropbtn {
                display: block;
                width: 100%;
                text-align: left;
              }
            }
          /*End menu navbar responsive css*/

          .floattt{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            color:#FFF;
            border-radius:5px;
            text-align:center;
            font-size:30px;
            
            z-index:100;
          }

          .dropdown-menu>li>a:hover{
            background-color: #ff9b2d!important;
            color: black!important;
          }
          .navbar{
            opacity: 0.9!important;
          }
          </style>
        <!-- Bootstrap css -->

    <!-- Modernizer Script for old Browsers -->
        <script src="<?php echo base_url('js3/modernizr-2.6.2.min.js')?>"></script>

        <?php $this->load->view("_partials/function_ourships")?>

    </head>
  
    <body id="body">
    

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- <img class="navbar-brand" src="#"> -->
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
        <li class="<?php echo $this->uri->segment(1)== ''? 'active': ''?>"><a href="<?php echo site_url('')?>">Home</a></li>
        <li class="<?php echo $this->uri->segment(1)== 'OurShips'? 'active': ''?>"><a href="<?php echo site_url('OurShips')?>">Our Ship</a></li>
        <li class="<?php echo $this->uri->segment(1)== 'products'? 'active': ''?>"><a href="<?php echo site_url('products')?>">Products</a></li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">How to?
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('howto/getticket')?>">Get a ticket</a></li>
            <li><a href="<?php echo site_url('howto/boardingday')?>">Boarding Day</a></li>
            <li><a href="<?php echo site_url('howto/alreadyBooked')?>">Already Booked</a></li>
            <li><a href="<?php echo site_url('howto/packingChecklist')?>">Packing Checklist</a></li>
          </ul>
        </li>
        <li class="<?php echo $this->uri->segment(1)== 'branches'? 'active': ''?>"><a href="<?php echo site_url('branches')?>">Branches</a></li>
        <li class="<?php echo $this->uri->segment(1)== 'faq'? 'active': ''?>"><a href="<?php echo site_url('faq')?>">FAQ</a></li>
      </ul>
      </div>
    </div>
  </nav> 


    <!-- End Navbar -->
