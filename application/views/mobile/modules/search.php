 	


 	
 	
	<div class="container-fluid">
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
	 	<?php
	
	 	foreach($featured as $value)
	 	{	
	 		echo'
	  		<div class="container-fluid top-wrapper">
		  	  	<img src="'.IMG_SRC.$value->thumbURL.'" class="img-responsive" alt=""/>
				<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.$this->assist->slugify($this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
				<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
				<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.' </a></h3>
		   	</div>';
		   	
	   }
	?>
		
	<div class="container-fluid top-wrapper">
		
		<?php
					    foreach($latest as $value)
						 	{
								echo'<div class="col-xs-6 zero-left article ">
									<a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'"><img src="'.IMG_SRC.$value->thumbURL.'" class="img-responsive" alt="'.$value->title.'"/></a>
									</div>
									 <div class="col-xs-6  article ">
										<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.$this->assist->slugify($this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
									<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
									<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.' </a></h3>
									</div>
									<div class="clearboth"></div>									 
						       <div class="clearboth"></div>';
						    }

					?>
	</div>
	  		<?php
	
	 	foreach($trending as $value)
	 	{	
	 		echo'
	  		<div class="container-fluid top-wrapper">
		  	  	<img src="'.IMG_SRC.$value->thumbURL.'" class="img-responsive" alt=""/>
				<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.$this->assist->slugify($this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
				<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
				<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.' </a></h3>
		   	</div>';
		   	
	   }
	?>