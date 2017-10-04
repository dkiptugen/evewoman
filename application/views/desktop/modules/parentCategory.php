<!--<div class="container-fluid adspace-2">
	<div class=" col-lg-offset-3">
	<img src="img/ad.gif" class="img-responsive" width="728" height="90"  alt=""/>
	</div>
	</div>-->

			<div class="container-fluid wrapper">

			<h2 class="category-title"><a href="#"><?=$category->name; ?></a></h2>

			<div class="col-lg-12" style="text-align: center;">
			<ul class="category-tabs">
				<li><a href="<?=current_url(); ?>">All</a></li>
				<?php
				foreach($children as $value)
				 	{
				      	echo '<li><a href="'.site_url('category/'.$value->id.'/'.$this->assist->slugify($value->name)).'">'.$value->name.'</a></li>';
					}
				?>
			</ul>
			</div>
			</div>

		<div class="container-fluid wrapper">
			<ul class="breadcrumb">
				  <li><a href="<?=site_url(); ?>">Home</a> <span class="divider"></span></li>
				  <li><a href="#"><?=$category->name; ?></a> <span class="divider"></span></li>
				  <li class="active">All</li>
			</ul>

		</div>
		<div class="container-fluid wrapper">
				<div class="col-lg-3 col-md-2 article sidebar">
			   <h1 class="sidetitles">Latest Stories</h1>
				  <ul>
						<?php
							foreach ($latest as $value)
								{
								    echo'
									<li>
									<h1><a href="'.site_url('category/'.$value->categoryid.'/'.str_replace(" ","",$this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
									<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
									<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.'</a></h3>
									</li>
									';
								}
						?>
								
				  </ul>
					<!--Adevert Area
					<div class="sidebar-advert">
					<img src="<?=base_url('assets/img'); ?>/300x250.jpg" width="300" height="250" alt=""/>
					</div>-->
		  </div>

			<div class="col-lg-9">
                        <?php 
                        $x=0;
                        foreach ($featured as $value) 
                        	{
	                        	if($x==0)
	                    			{
	                    				echo'
	    								<div class="col-lg-8" style="object-position:100% 100% !important;">
	    									<a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">
	    									<img src="'.IMG_SRC.$value->thumbURL.'" width="749" class="img-responsive" height="460" alt="'.$value->title.'" style="height:460px !important; object-fit:cover !important;" />
	    									</a> 
	    									<div class="content-wrapper">
	    										 	<div class="feature-item-rubric"><a href="'.site_url('category/'.$value->categoryid.'/'.str_replace(" ","",$this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></div>
	    											 <h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
	    											 <h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.'</a></h3>
	    									</div>
	    		
	    								</div>';
	                    			}
	                    		elseif($x==1)
	                    			{	
										echo'
											 <div class="col-lg-4 col-md-3  zero-left ">
											     	<a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">
														<img src="'.IMG_SRC.$value->thumbURL.'" class="img-responsive" alt="'.$value->title.'"/>
													</a>
													<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.str_replace(" ","",$this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
													<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
													<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.'</a></h3>
											   </div>

											</div>

										</div>

										<div class="container-fluid wrapper">';
	                          		}
	                          	else
	                          		{
									  	echo'<div class="col-lg-3 col-md-3 article " style="object-position:100% 100% !impotant;">
												<img src="'.IMG_SRC.$value->thumbURL.'" class="img-responsive" alt="'.$value->title.'" style="height:195px !important; object-fit:cover !important;"/>
												<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.str_replace(" ","",$this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
												<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
												<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.' </a></h3>
										   </div>';
			   						}
			   					$x++;
							}
		   ?>
	  

		</div>

	<div class="container-fluid adspace-2">
		<div class="text-center">
	  		<?php $this->view('ads/article_bottom_728x90'); ?>
	   </div>
	</div>

    <?php
    foreach ($cat as $val) {
   if(is_array($val->result))
    	{	
		    echo'
			<div class="container-fluid wrapper">  
		  		<h1 class="sidetitles2">'.$val->CatName.'</h1>';
		  		//var_dump($val->result[0]);
		  		$x=0;
		  		foreach($val->result as $value)
			  		{
			  			echo'
			  			<div class="col-lg-3 col-md-3 article ">
			  			        <a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">
			  						<img src="'.IMG_SRC.$value->thumbURL.'" class="img-responsive" alt="'.$value->title.'" style="height:195px !important; object-fit:cover;"/>
			  					</a>
			  					<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.str_replace(" ","",$this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
			  	 				<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
			  	 				<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.' </a></h3>
			  	 		</div>';
			  	 		$x++;
			  	 		if($x%4==0)
			  	 			{
			  	 				echo '<div class="clearfix"></div>';
			  	 			}
			  		}
  		}
	    echo'</div>';  
     	# code...
    }
	?>		
	
	<?php $this->view('ads/article_bottom_728x90'); ?>