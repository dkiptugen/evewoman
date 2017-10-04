<div class="container-fluid">

			<h2 class="category-title"><a href="<?=current_url(); ?>">Health</a></h2>

			<div class="col-xs-12">
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

	 	<?php
	 	$ct=0;
	 	foreach ($featured as $value) 
	 	{
	 		
	 			
		  		if($ct==3){
	    	
	    	      $this->view("ads/category-300x250-first"); 	
	    	
	    	      }
	    	      if($ct==7){
	    	
	    	      $this->view("ads/category-300x250-second"); 	
	    	
	    	      }
	 		
	 		
	 		
	 	    echo'
			<div class="container-fluid top-wrapper">
				<a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">
	    			<img src="'.IMG_SRC.$value->thumbURL.'" class="img-responsive" alt="'.$value->title.'"/>
	    		</a>
	    		<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.str_replace(" ","",$this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
				<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
				<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.' </a></h3>
	   		</div>';

$ct++;
   		 }

   	
 foreach ($cat as $val)
 	{
	    if(is_array($val->result))
	    	{  
	    	    echo' 
				<div class="container-fluid top-wrapper">
				<h1 class="sidetitles2">'.$val->CatName.'</h1>';
					foreach($val->result as $value)
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
				echo'  		
				</div>';
	        }
    }

		?>