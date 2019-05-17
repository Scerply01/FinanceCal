<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="default.php">Simple Fi.Cal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <?php
          if ($index==1){
            //Home page is Active
            echo '<a class="nav-item nav-link active" href="default.php">Home<span class="sr-only">(current)"></span></a>';
          }else echo '<a class="nav-item nav-link" href="default.php">Home</a>';
          if ($index==2){
            //About US is Active
            echo '<a class="nav-item nav-link active" href="about_us.php">About Us<span class="sr-only">(current)"></span></a>';
          }else echo '<a class="nav-item nav-link" href="about_us.php">About Us</a>';
         ?>
         <a class="nav-item nav-link active" href="default.php">Home<span class="sr-only">(current)"></span></a>
      </div>
    </div>
  </nav>
</head>
