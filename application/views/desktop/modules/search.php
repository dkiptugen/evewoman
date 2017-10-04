<div class="container-fluid wrapper">
			<ul class="breadcrumb">
				  <li><a href="<?=site_url(); ?>">Home</a> <span class="divider"></span></li>
				  <li class="active"><a href="">Search</a></li>
			</ul>

		</div>
		
	
	
	<div class="container-fluid wrapper">
			
		<div class="col-lg-1 col-md-1  left-sidebar">
			
	    </div>
		<div class="col-lg-8 col-md-8">
    	
			<div class="content">
				
                <script>
                  (function() {
                    var cx = '011651613339620659804:ftpgyr4hmxi';
                    var gcse = document.createElement('script');
                    gcse.type = 'text/javascript';
                    gcse.async = true;
                    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(gcse, s);
                  })();
                </script>
                <!--gcse:searchbox-only></gcse:searchbox-only-->
                <gcse:search></gcse:search>	
            
            
			</div> 	
	    </div>
		<div class="col-lg-3 col-md-3 article sidebar">
			
			<div class="sidebar-advert">
			<!-- <img src="img/300x250.jpg" width="300" height="250" alt=""/> -->
			<?php
				$this->view("ads/article-sidetop-300x250");
			?>
			</div>
			
			 <h1 class="sidetitles">Latest Stories</h1>
			  <ul>
				<?php
		  			foreach($latest as $value)
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
			  <div class="sidebar-advert">
				<!-- <img src="img/300x250.jpg" width="300" height="250" alt=""/> -->
				<?php
					$this->view("ads/article-sidebottom-300x250");
				?>
				</div>
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
				<!--Adevert Area
		     	<div class="sidebar-advert">
			    <img src="img/300x250.jpg" width="300" height="250" alt=""/>
			    </div>-->
	  </div>
			
	</div>
	
		<div class="container-fluid adspace">
		<div class=" col-lg-offset-3">
		<?php $this->view('ads/article_bottom_728x90'); ?>
		</div>
     </div>	
		
		<div class="container-fluid wrapper">
		<div class="col-lg-12">
		<h1 class="sidetitles">Recommended For You</h1>
			</div>
	
 <?php
	$j=1;
	 	foreach($featured as $value)
	 	{	
	 		echo'
	  		<div class="col-lg-3 col-md-3 article ">
		  	  	<img src="'.IMG_SRC.$value->thumbURL.'" class="img-responsive" alt=""/>
				<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.$this->assist->slugify($this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
				<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
				<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.' </a></h3>
		   	</div>';
		   	if($j%4==0) echo '<div class="clearfix"></div>';
            $j++;
	   }
	?>
</div>

<div class="container-fluid featured-section zero-left zero-right">
	<div class="col-lg-12 col-md-12 zero-left zero-right ad-content-holder text-center">
		<?php $this->view('ads/bottom_1350x450'); ?>
	</div>	
		
</div>
	