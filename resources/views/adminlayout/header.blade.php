<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Page </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('')}}assetss/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('')}}assetss/vendor/font-awesome/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset('')}}assetss/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="{{asset('')}}assetss/https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('')}}assetss/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('')}}assetss/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('')}}assetss/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

  </head>
  <body>
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
            <div class="search-inner d-flex align-items-center justify-content-center">

              <div class="close-btn">Close <i class="fa fa-close"></i></div>
              <form id="searchForm" action="#">
                <div class="form-group">
                  <input type="search" name="search" placeholder="What are you searching for...">
                  <button type="submit" class="submit">Search</button>
                </div>
              </form>
            </div>
          </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="#" class="navbar-brand ">
              <div class="brand-text brand-big visible text-uppercase"><h3>dharmendra</h3></div>
              <div class="brand-text brand-sm visible"><strong class="text-primary">D</strong><strong>.J</strong></div></a>
            <!-- Sidebar Toggle Btn-->

            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left" ></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">

            <!-- Tasks-->
            <!-- Tasks end-->
            <!-- Languages dropdown    -->
            <!-- Log out               -->
            <div class="list-inline-item logout">  <a id="logout" href="" class="nav-link">Logout <i class="icon-logout"></i></a></div>
          </div>
        </div>
      </nav>
    </header>
