<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#F62F5E">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta http-equiv="Cache-control" content="public">
    <meta name="robots" content="index,follow" >
    <meta name="copyright" content="The Standard Group" >
    <meta name="online" content="online@standardmedia.co.ke" >
	<meta http-equiv="refresh" content="600">
    <meta http-equiv="Lang" content="en" >
   
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Tinos:400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url('assets/css/w3.css'); ?>">
	<link href="<?=base_url('assets/css/template-mobile.css'); ?>" rel="stylesheet">
	
	<link rel="amphtml"  href="<?php if(isset($article)) { echo "https://www.standardmedia.co.ke/evewoman/amp/article/".$article->id."/".$this->amodel->slugify($article->title);  } else{   } ?> ">  
    
 
	
	
	<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5948eb539ccc9600113b3a8a&product=inline-share-buttons' async='async'></script>
	<title><?php if(isset($meta)){echo $meta->title." : ";} ?>  Evewoman  - The Standard</title>
	 <?php 
    	$this->view("meta");
    	$this->view("analytics"); 
    ?>
</head>

<body>


<div class="container-fluid top-section">
		
  <div class="container-fluid mobile-wrapper">
					<div class="col-xs-5 zero-left">
						<a href="<?=site_url(); ?>">
							<img src="<?=base_url('assets/img'); ?>/logo.png" class="img-responsive" width="265" height="49" alt="Evewoman logo"/>
						</a>
					</div>
					<div class="col-xs-7">
						<div class="col-xs-2 social-icon zero-left zero-right"><a href="#"><img src="<?=base_url('assets/img'); ?>/facebook.png" class="img-responsive"width="300" height="300" alt=""/></a></div>
						<div class="col-xs-2 social-icon zero-left zero-right"><a href="#"><img src="<?=base_url('assets/img'); ?>/twitter.png" class="img-responsive"width="300" height="300" alt=""/></a></div>
						<div class="col-xs-2 social-icon zero-left zero-right"><a href="#"><img src="<?=base_url('assets/img'); ?>/whatsapp.png" class="img-responsive"width="300" height="300" alt=""/></a></div>
						<div class="col-xs-2 social-icon zero-left zero-right"><a href="#"><img src="<?=base_url('assets/img'); ?>/telegram.png" class="img-responsive"width="300" height="300" alt=""/></a></div>
							<div class="col-xs-2 social-icon zero-left zero-right"><a href="#"><img src="<?=base_url('assets/img'); ?>/instagram.png" class="img-responsive"width="300" height="300" alt=""/></a></div>
			  </div>
		</div>
	</div>
	
	 				<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-left" style="display:none" id="leftMenu">
				  <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large">CLOSE &times;</button>
				  <a href="<?=site_url(); ?>" class="w3-bar-item w3-button">Home</a>
				  <?php
				  foreach ($this->amodel->getNav() as $value) {
				  echo'
				  <a href="'.site_url('category/'.$value->id.'/'.$value->name).'" class="w3-bar-item w3-button">'.$value->name.'</a>';
				  	
				  }
				  ?>
				  </div>
				  <div class="w3-teal">
				  
			      </div>
	
		<div class="container-fluid menu-wrapper">
		<div class="col-xs-1 zero-left">
				 		<button class="w3-button w3-teal w3-xlarge w3-left" onclick="openLeftMenu()">&#9776;</button>
		</div>
		<div class="col-xs-10 menu" >
			<ul>
				<li><a href="<?=site_url('category/273/living'); ?>">LIVING</a></li>
				<li><a href="<?=site_url('category/262/parenting'); ?>">PARENTING</a></li>
				<li><a href="<?=site_url('category/265/fashion-and-beauty'); ?>">FASHION AND BEAUTY</a></li>
				<li><a href="<?=site_url('category/264/relationships'); ?>">RELATIONSHIPS</a></li>
				<li><a href="<?=site_url('category/416/wellness'); ?>">WELLNESS</a></li>
				<li><a href="<?=site_url('category/350/readers-lounge'); ?>">READERS LOUNGE</a></li>
			</ul>		
		</div>
		
	 	</div>
	 	<div class="container">
	 		<div class="col-xs-12 search">
	 				
	 				 <form class="form-inline pull-xs-right" method='get' action='<?php echo site_url("search"); ?>'>
	 				 	<div class="input-group">
	 		            	<input class="form-control nav-search" type="text" placeholder="Search&hellip;" name="q">
	 		            	<span class="input-group-btn">
	 		            		<button type="submit" class="btn btn-default"><img src="<?=base_url('assets/img'); ?>/search.png" alt="search"/></button>
	 		            	</span>
	 		            </div>
	 		        </form>
	 		</div>
	 	</div>