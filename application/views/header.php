<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Blank.It</title>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" crossorigin="anonymous" ></script>
    <script src="/source/js/common.js" ></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="/source/css/common.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="  display: none;">

    <nav class="navbar navbar-default">
      <div class="container-fluid">

        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="/">
            <img id="logo" alt="blankit" src="/source/image/logo.png">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" id="aboutus_menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">about us</span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">서비스 소개</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">고객센터</a></li>
                </ul>
            </li>
            <li><a class="navbar-left" href="/artist">artist</a></li>
            <li class="dropdown">
              <a href="#" id="store_menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">store</span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="/store/cloth">의류</a></li>
                  <li><a href="/store/ecobag">에코백</a></li>
                  <li><a href="/store/pouch">파우치</a></li>
                </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="navbar-right" href="#">login</a></li>
            <li><a class="navbar-right" href="#">join</a></li>
            <li><a class="navbar-right" href="#">mypage</a></li>
            <li><a style="margin-right:40px;" class="navbar-right" href="#">submit</a></li>
          </ul>
    </div>

      </div>
    </nav>
    <div id="root_container" class="container" style="overflow-x:hidden;">
