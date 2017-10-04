	<div class="container-fluid wrapper">
			<ul class="breadcrumb">
				  <li><a href="<?=site_url(); ?>">Home</a> <span class="divider"></span></li>
				  <li class="active">Video</li>
			</ul>

		</div>
		
	<div class="container-fluid wrapper">
		
		<div class="col-lg-12 header">
			<h1><?=$mainvideo->name; ?></h1>
			<h2><?=$mainvideo->title; ?></h2>
			<div class="clearboth"></div>
			<div class="sharethis-inline-share-buttons">
				
			</div>
		</div>
		
	</div>
	
	<div class="container-fluid wrapper">
			
		<div class="col-lg-1 col-md-1  left-sidebar">
	   		 <img src="<?=base_url('assets/img/avatar.jpg'); ?>" class="img-circle img-responsive"  width="120" height="120" alt=""/>
			<h5>By<br><?=@$this->amodel->getAuthorName($mainvideo->createdby); ?></br></br><?=date('D dS M Y',strtotime($mainvideo->publishdate)); ?></h5>
	    </div>
		<div class="col-lg-8 col-md-8">
    		<iframe style="width:100%; height:460px" src="https://www.youtube.com/embed/<?=$mainvideo->videoURL; ?>?version=3&vq=hd720" frameborder="0" allowfullscreen class="img-responsive" autoplay=1 ></iframe>
   		 
			<div class="content">
							
				
							<p>
								<?=$mainvideo->description; ?>
								<div class="sharethis-inline-share-buttons"></div>
							
							</p>
				<?php if(is_array($related)): ?>			
				<div class="related-stories">
					<h4>Related Stories</h4>
					<?php
					foreach($related as $value)
						{
						 	echo'<div class="col-lg-4 col-md-4 zero-left ">
						 			<a href="'.site_url('video/watch/'.$value->id.'/'.$this->assist->slugify($value->title)).'">
										<img src="https://img.youtube.com/vi/'.$value->videoURL.'/hqdefault.jpg" class="img-responsive" alt="'.$value->title.'"/>
									</a>
									<h1><a href="#">'.$value->name.'</a></h1>
									<h2><a href="'.site_url('video/watch/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
									<h3><a href="#">'.date('D dS M Y',strtotime($value->publishdate)).'</a></h3>
							   	</div>';
						}
					?>
					  
				</div>
				<?php endif; ?>
				
			</div>
	    
	    </div>
		<div class="col-lg-3 col-md-3 article sidebar">
			
			<div class="sidebar-advert">
				<?php $this->view("ads/home-side-300x250"); ?>
			</div>
			
			 <h1 class="sidetitles">Latest Stories</h1>
			  <ul>
			  	<?php
			  	foreach ($latest as $value)
			  		{
			  			echo'
							<li>
							<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.str_replace(" ","",$this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
							<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
							<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.' </a></h3>
							</li>';
					}
				?>
			  </ul>
				<!--Adevert Area
		     	<div class="sidebar-advert">
			    <img src="img/300x250.jpg" width="300" height="250" alt=""/>
			    </div>-->
	  </div>
			
	</div>
	
		<div class="container-fluid adspace">
		<div class=" col-lg-offset-3">
			<?php $this->view("ads/article_bottom_728x90"); ?>
		</div>
     </div>	
		
		<div class="container-fluid wrapper">
		<div class="col-lg-12">
		<h1 class="sidetitles">Recommended For You</h1>
			</div>
	<?php
	$j=0;
	foreach($popular as $value)
		{
		    echo'<div class="col-lg-3 col-md-3 article ">
			  	  	<img src="'.IMG_SRC.$value->thumbURL.'" class="img-responsive" alt="'.$value->title.'"/>
					<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.str_replace(" ","",$this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
					<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
					<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.' </a></h3>
			    </div>';
			$j++;
			if($j%4==0) 
				{
					echo '<div class="clearfix"></div>';
				}   
		}
	if($j%4!=0) 
		{
			echo '<div class="clearfix"></div>';
		} 
	$j=NULL; 
	?>
 
</div>

<!-- <div class="container-fluid featured-section zero-left zero-right">

	<div class="col-lg-6 col-md-6 zero-left zero-right"><img src="img/advert-3.jpg" class="img-responsive" width="876" height="540" alt=""/></div>		
	<div class="col-lg-6 col-md-6 zero-left zero-right ad-content-holder">
		<h1><a href="#">Advert | Ben kiruthi</a></h1>
		<h2><a href="#">June photography classes</a></h2>
		Whatsapp/Call 0790 707711 for booking & details Opportunity to intern with us & work for us at course completion<br>
		<button type="button" class="btn-lg btn-danger">Book now</button>
	</div>	
		
</div> -->