<div class="container-fluid top-wrapper">
		
			<div class="scroller-parent">
				<?php
				
				 
			 
				    foreach ($featured as  $value)
				    {
			 
			 
			 
			 
				    
				    
				    
				    	echo'<div class="scroller-child">
					        <a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">
						  		<img src="'.IMG_SRC.$value->thumbURL.'" class="img-responsive" alt="'.$value->title.'" style="width:100% !important; object-fit:cover !important;" />
						  	</a>
							<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.str_replace(" ","",$this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
							<h2 style="height:50px;overflow-y:auto;"><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
							<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.' </a></h3>
						</div>';
						
						 
						
						 
					}
					/*
					 echo'<div class="scroller-child">';
			 $this->view("ads/home-side-300x250"); 
			 echo '</div>';*/
				?>	  
			</div>
		
	</div>
	<?php
	
	$c=0;
	
	
	    foreach ($latest as  $value)
	    	{
	    	
	    	if($c==3){
	    	
	    	  $this->view("ads/300x250_test_2"); 	
	    	
	    	}
	    	
	    	
	    	
	    		echo'
					<div class="container-fluid top-wrapper">
						<a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">
			    			<img src="'.IMG_SRC.$value->thumbURL.'"  class="img-responsive" width="749" height="460" alt="'.$value->title.'"/>
			    		</a>
			    		<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.str_replace(" ","",$this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
						<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
						<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.' </a></h3>
			   		</div>';
			   		
			   		$c++;
   		}
    ?>
    	
	<?php $this->view("ads/home-side-300x250");?>
	
	
	<div class="container-fluid top-wrapper">
		<h1 class="sidetitles">Lady talk</h1>
			 

	  		<?php
	  		
	  		$w=0;
	  		 
	  		foreach($woman as $value)
		  		{
		  		
		  		
		  		if($w==3){
	    	
	    	        $this->view("ads/home-side-300x250"); 		
	    	
	    	      }
		  		 
		  		
		  		
		  			echo'
		  			<div class="col-xs-6 zero-left article ">
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
					
				
				$w++;
					 
				}
			
	  		?>
	</div>
	<h1 class="sidetitles">Popular Stories</h1>
	<?php
	$p=0;
		foreach ($popular as  $value)
		    	{
		    	
		    	
		    	
		    		
		  		if($p==3){
	    	
	    	      $this->view("ads/home-side-300x250"); 	
	    	
	    	      }
		    		echo'
					<div class="container-fluid top-wrapper">
						<a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">
			    			<img src="'.IMG_SRC.$value->thumbURL.'"  class="img-responsive" width="749" height="460" alt="'.$value->title.'"/>
			    		</a>
			    		<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.str_replace(" ","",$this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
						<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
						<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.' </a></h3>
			   		</div>';
			   		
			   		$p++;
	   			}
	?>
			<div class="clearboth"></div>
	<h1 class="sidetitles">FOOD</h1>
	<?php
	$i=0;
		foreach ($food as  $value)
		    	{
		    	
		    	
		    	
		    		
		  		if($i==3){
	    	
	    	      $this->view("ads/home-side-300x250"); 	
	    	
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
			   		
			   		$i++;
	   			}
	?>
	<div class="clearboth"></div>
	<h1 class="sidetitles">Beauty</h1>
	<?php
	
	$b=0;
		foreach ($beauty as  $value)
		    	{
		    	
		    	
		    		
		  		if($b==3){
	    	
	    	      $this->view("ads/home-side-300x250"); 	
	    	
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
			   		$b++;
	   			}
	?>
	  		<!-- <button class="btn btn-large" type="button">LOAD MORE...</button> -->
	  		
	  		<div class="sharebar"> 
	  		 <?php $this->view("ads/vicinity320x50"); ?>
	  		</div>
	  		