<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Bootstrap Site</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">My Site</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Username</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Share</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Body -->
<div class="container">
  <div class="jumbotron">
    <h1>Welcome to My Site!</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut purus nec enim sagittis pharetra. Sed tristique nisi sit amet augue mattis, quis pellentesque tellus vestibulum. Curabitur et eros euismod, lacinia eros eu, bibendum velit.</p>
  </div>
  <div class="row">
    <div class="col-md-4">
      <h2>Heading 1</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut purus nec enim sagittis pharetra.</p>
      <p><a class="btn btn-default" href="#" role="button">Learn More</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading 2</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut purus nec enim sagittis pharetra.</p>
      <p><a class="btn btn-default" href="#" role="button">Learn More</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading 3</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut purus nec enim sagittis pharetra.</p>
      <p><a class="btn btn-default" href="#" role="button">Learn More</a></p>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="footer">
  <div class="container">
    <p>&copy; 2023 My Site</p>
  </div>
