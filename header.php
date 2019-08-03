<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Article List</title>
	<?= link_tag('assets/css/bootstrap.min.css'); ?>
	<?= link_tag('assets/css/style.css'); ?>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Blogging System</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        
        <li><a href="#">Articles</a></li>        
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default" >Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Login</a></li>
      </ul>
    </div>
  </div>
</nav>