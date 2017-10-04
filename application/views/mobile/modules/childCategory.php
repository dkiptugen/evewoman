<div class="container-fluid">
		<h2 class="category-title"><a href="#"><?=@$category->name; ?></a></h2>
		</div>
	 	
	 	<div class="container-fluid ">
	 		<div class="col-xs-10 col-xs-offset-1">
				<?=$breadcrumb; ?>
			</div>
		</div>
        <?php
          $ct=0;
		    foreach ($stories as $value) 
		    	{
		    	
		    	
		    		
		  		if($ct==3){
	    	
	    	      $this->view("ads/category-300x250-first"); 	
	    	
	    	      }
	    	      if($ct==7){
	    	
	    	      $this->view("ads/category-300x250-second"); 	
	    	
	    	      }
		            echo'
			        <div class="container-fluid top-wrapper">
						<img src="'.IMG_SRC.$value->thumbURL.'" class="img-responsive" alt="'.$value->title.'"/>
						<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.str_replace(" ","",$this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
						<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
						<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.'</a></h3>
				   	</div>';
				   	
				   	$ct++;
		         }
		echo '<div class="pull-right">'.$link.'</div>';

	    ?>
		<div class="clearfix"></div>
	<div class="container-fluid top-wrapper">
		    <?php
			 foreach($this->amodel->popular_articles(6,0) as $value)
			  		   {
							echo 
							'<div class="col-xs-6 zero-left article ">
								<a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">
									<img src="'.IMG_SRC.$value->thumbURL.'" class="img-responsive" alt="'.$value->title.'"/>
								</a>
					  		</div>
					  		 <div class="col-xs-6  article ">
										<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.str_replace(" ","",$this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
										<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
										<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.' </a></h3>
					  		</div>
							<div class="clearboth"></div>';
					 	}
		    ?>