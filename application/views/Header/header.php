<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sandhoora Hardware</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="http://localhost:8002/assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:8002/assests/css/custom.css">
  </head>
  <body>
  <div id="container">
<div class="row">
  <div class="col-md-2">
    <div class="col-lg-2">
      <img class="logo" alt="LOGO"/>
    </div>
  </div>
  <div class="col-md-8">
    <form class="form-horizontal" />
      <div class="form-group">
        <span>
        <div class="col-sm-2 btn-group">
          <button type="button" class="btn btn-default" id="search_catogory" catId="All">All</button>
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li><a onclick='pickCatogorySearchBar(this)' id="all" name="All" >All</a></li>
            <?php
              foreach($categories as $category){
                echo "<li><a onclick='pickCatogorySearchBar(this)' id=".$category['id']." name=".$category['name']." >".$category['name']."</a></li>";
              }
          ?>
          </ul>
        </div>
        </span>
        <div class="col-sm-8">
          <input type="text" class="col-sm-8 form-control" id="search_text" placeholder="Search">
        </div>
        <button type="submit" class="col-sm-2 btn btn-default"> Search </button>
      </div>
    </form>
  </div>
  <div class="col-md-2">
     HOTLINE
  </div>
</div>
<div class="row">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input class="form-control" placeholder="Search" type="text">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Link</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>
    
    <div class="page-header" id="banner">
