<div class="container-fluid adspace-2">
	<div style="margin:0 auto;">
	   <?php $this->view("ads/topad_728x90"); ?>
	</div>
	</div>

			<div class="container-fluid wrapper">

			<h2 class="category-title"><a href="#"><?=@$category->name; ?></a></h2>

		</div>
		<div class="container-fluid wrapper">
			<?=$breadcrumb; ?>
		</div>
        <?php
        echo'
		<div class="container-fluid wrapper">';
		    $x=0;
		    if(isset($stories))
		    {
			    foreach ($stories as $value) 
			    	{
			    	
			            echo'
				        <div class="col-lg-3 col-md-3 article " style="object-position:100% 100% !important;">
				        	<a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">
								<img src="'.IMG_SRC.$value->thumbURL.'" class="img-responsive" alt="'.$value->title.'" style="height:195px !important; object-fit:cover !important;"/>
							</a>
							<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.str_replace(" ","",$this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
							<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
							<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.'</a></h3>
					   	</div>';
					   	$x++;
					   	if($x%4==0)echo '<div class="clearfix"></div>';
			        }
		     }
		echo '<div class="cleafix"></div><div class="pull-right">'.$link.'</div></div>';

	    ?>
    
	<!-- <div class="container-fluid featured-section zero-left zero-right">

		<div class="col-lg-6 col-md-6 zero-left zero-right"><img src="<?=base_url('assets/img'); ?>/advert-1.jpg" class="img-responsive" width="876" height="540" alt=""/></div>		
		<div class="col-lg-6 col-md-6 zero-left zero-right"><img src="<?=base_url('assets/img'); ?>/advert-2.jpg" class="img-responsive" width="876" height="540" alt=""/></div>	

	</div> -->