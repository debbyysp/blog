<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">
	<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href= "<?php echo base_url("dist/css/bootstrap.css");?>">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
	<script type="text/javascript" src= "<?php echo base_url("dist/js/bootstrap.js"); ?>"></script>
  </head>

  <body>
  	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h4 class="my-0 mr-md-auto font-weight-normal">Blog Milenial</h4>
      <a class="btn btn-outline-primary" href="#">Sign up</a>
    </div>

  	<main role="main">
  		<div class="jumbotron">
	        <div class="container">
	          <h1 class="display-3">Hello, Guest!</h1>
	          <p>Liat banyak blog lainnya</p>
	          <p><a class="btn btn-primary btn-lg" href="#" role="button">View All &raquo;</a></p>
	        </div>
	    </div>

	    <div class="container">
	        <h3 class="display-3">My Blogs</h5>
	        <div class="row">
	          	<div class="col-md-4">
	            	<h2>Heading</h2>
	            	<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>	
	            	<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
	          	</div>
	          	<div class="col-md-4">
	            	<h2>Heading</h2>
	            	<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	            	<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
	          	</div>
	          	<div class="col-md-4">
		            <h2>Heading</h2>
		            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
	          	</div>
	        </div>
	        <hr>
      </div> 
  	</main>

  </body>
</html>
