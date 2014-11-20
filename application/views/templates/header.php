<html>
<head>
    <meta charset="utf-8">
	<title><?php echo $title ?> - My Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() .'css/bootstrap.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() .'css/bootstrap-theme.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() .'css/style.css'?>"> 
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Jack Chen Lin</a>
			</div>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="nav navbar-nav navbar-right">
				  <li> <a href="<?php echo base_url()?>">Home</a> </li>
				  <li> <a href="<?php echo base_url() . "profile"?>">Profile</a> </li>
				  <li> <a href="<?php echo base_url() . "favorite-links"?>">Favorite Links</a> </li>
				  <li> <a href="<?php echo base_url() . "blog"?>">Blog</a> </li>
				  <li> <a href="<?php echo base_url() . "projects"?>">Projects</a> </li>
				</ul>
			</div>
		</div>
	</nav>
