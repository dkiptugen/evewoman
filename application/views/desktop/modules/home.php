<div class="container-fluid wrapper">
			<div class="col-lg-6 main-story ">
            <?php
            $j=0;
            foreach ($featured as  $value) {
            	if($j==0)
                    {
						echo'<a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">
								<img src="'.IMG_SRC.$value->thumbURL.'" width="749" class="img-responsive" height="460" alt="'.$value->title.'"/> 
							</a>
							<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.$this->assist->slugify($this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
							<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
		     				'.$value->summary.'
						     </div>
							<div class="col-lg-3 middle">
								<ul>';
					}
				else
					{
						echo'<li>
								<a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">
									<img src="'.IMG_SRC.$value->thumbURL.'" width="749" class="img-responsive" height="460" alt="'.$value->title.'"/> 
								</a>
					  			<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.$this->assist->slugify($this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
			  					 <h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
			  					 <h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.ucwords($value->author).'</a></h3>
							</li>';
				    }
				    $j++;
				}
					?>
					
					

				</ul>

	    	</div>
		    <div class="col-lg-3 col-md-2 article sidebar">
		    
		    
		   <!--<div class="sidebar-advert">
			    <?php//$this->view('ads/home-side-300x250'); ?>
			</div>   -->
			
			
		    <h1 class="sidetitles">Latest Stories</h1>
		   
			  <ul>
			      <?php
			      	foreach($this->amodel->latest_articles(5) as $value)
							{
								echo'
								<li>
								<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.$this->assist->slugify($this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
								<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
								<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.'</a></h3>
								</li>';
							}
					?>		
			  </ul>
				<!--Adevert Area
		     	<div class="sidebar-advert">
			    <img src="<?=base_url('assets/img'); ?>/300x250.jpg" width="300" height="250" alt=""/>
			    </div>-->
	  </div>
				
</div>
		
		
	<div class="container-fluid adspace-2">
	<div class="text-center">
		<?php $this->view('ads/topad_728x90'); ?>
	</div>
	</div>
		
		<div class="container-fluid wrapper">


	<div class="col-lg-9">
	<h1 class="sidetitles2">Lady Talk</h1>
	<?php
	$j=1;
	 	foreach($woman as $value)
	 	{	
	 		echo'
	  		<div class="col-lg-4 col-md-4 article ">
	  			<a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">
		  	  		<img src="'.IMG_SRC.$value->thumbURL.'" class="img-responsive" alt="'.$value->title.'"/>
		  	  	</a>
				<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.$this->assist->slugify($this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
				<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
				<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.' </a></h3>
		   	</div>';
		   	if($j%3==0) echo '<div class="clearfix"></div>';
            $j++;
	   }
	?>
    
 
			</div>
			<div class="col-lg-3 sidebar">
				<h1 class="sidetitles">Popular Stories</h1>
  		<ul>
  		<?php
  			foreach($popular as $value)
  			{
  				echo'
					<li>
					<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.$this->assist->slugify($this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
					<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
					<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.'</a></h3>
					</li>';
  			}
			
		?>	
	  </ul>
				
			</div>
	
	
</div>
		
		
		
	
	<div class="container-fluid adspace-2">
	<div class="text-center">
	<?php $this->view('ads/article_bottom_728x90'); ?>
	</div>
	</div>
		
		
		
		<div class="container-fluid wrapper">

<div class="col-lg-9">
 <h1 class="sidetitles2">Food</h1>
  		<?php
			$j=1;
		 	foreach($food as $value)
			 	{	
			 		echo'
			  		<div class="col-lg-4 col-md-4 article ">
			  			<a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">
				  	  		<img src="'.IMG_SRC.$value->thumbURL.'" class="img-responsive" alt="'.$value->title.'"/>
				  	  	</a>
						<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.$this->assist->slugify($this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
						<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
						<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.' </a></h3>
				   	</div>';
				   	if($j%3==0) echo '<div class="clearfix"></div>';
		            $j++;
			   }
		?>
  

 </div>
  <div class="col-lg-3 col-md-3 article sidebar">
 		  <h1 class="sidetitles">Trending Stories</h1>
  		<ul>
  			<?php
  			foreach($trending as $value)
  			{
  				echo'
					<li>
					<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.$this->assist->slugify($this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
					<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
					<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.'</a></h3>
					</li>';
  			}
			
		?>	
	  </ul>
	  </div>
	</div>
		

	
<div class="container-fluid featured-section zero-left zero-right">

	<?php $this->view('ads/article_bottom_728x90'); ?>
		
</div>
	
	<div class="container-fluid wrapper">
		
	<h1 class="sidetitles2">Beauty</h1>
	
  		<?php
			$j=1;
			 //echo json_encode($beauty);
		 	foreach($beauty as $value)
			 	{	
			 		echo'
			  		<div class="col-lg-3 col-md-3 article ">
			  			<a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">
				  	  		<img src="'.IMG_SRC.$value->thumbURL.'" class="img-responsive" alt="'.$value->title.'"/>
				  	  	</a>
						<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.$this->assist->slugify($this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
						<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
						<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.' </a></h3>
				   	</div>';
				   	if($j%4==0) echo '<div class="clearfix"></div>';
		            $j++;
			   }
		?>
  
 
		
	</div>

<div class="container-fluid wrapper">

 <h1 class="sidetitles2">The Clinic</h1>
<div class="col-lg-9">
  <?php

			$j=1;
		 	foreach($clinic as $value)
			 	{	
			 		echo'
			  		<div class="col-lg-4 col-md-4 article zero-left">
			  			<a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">
				  	  		<img src="'.IMG_SRC.$value->thumbURL.'" class="img-responsive" alt="'.$value->title.'"/>
				  	  	</a>
						<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.$this->assist->slugify($this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
						<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
						<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.' </a></h3>
				   	</div>';
				   	if($j%3==0) echo '<div class="clearfix"></div>';
		            $j++;
			   }
		?>
  
 </div>
  <div class="col-lg-3 col-md-3 article sidebar">
  		<ul>
        <?php
  		foreach($this->amodel->latest_articles(4,5 ) as $value)
							{
								echo'
								<li>
								<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.$this->assist->slugify($this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
								<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
								<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.'</a></h3>
								</li>';
							}
					?>		
	  </ul>
	  </div>
	</div>