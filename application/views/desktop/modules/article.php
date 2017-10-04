	<div    id="contentsWrapper" class="container-fluid">

    <div class="content-article">
	<div class="container-fluid wrapper">
			<ul class="breadcrumb">
				  <li><a href="<?=site_url(); ?>">Home</a> <span class="divider"></span></li>
				  <li class="active"><a href="<?=site_url('category/'.$this->cmodel->getOtherCatId($article->categoryid).'/'.str_replace(" ","",$this->amodel->getCatName($article->categoryid))); ?>"><?=$this->amodel->getCatName($article->categoryid); ?></a></li>
			</ul>

		</div>
		
	<div class="container-fluid wrapper">
		<div class="io-hidden-publisher" style="display: none;"><?=@$article->createdby; ?></div>​
		<div class="io-hidden-author" style="display: none;"><?=@$article->author; ?></div>​
		<div class="col-lg-12 header">
			<h1>
				<a href="<?=site_url('category/'.$this->cmodel->getOtherCatId($article->categoryid).'/'.str_replace(" ","",$this->amodel->getCatName($article->categoryid))); ?>">
					<?=$this->amodel->getCatName($article->categoryid); ?>
				</a>
			</h1>
			<h2><?=$article->long_title; ?></h2>
			<div class="clearboth"></div>
			<div class="sharethis-inline-share-buttons"></div>
		
		</div>
		
	</div>
	
	<div class="container-fluid wrapper">
			
		<div class="col-lg-1 col-md-1  left-sidebar">
			<a href="<?=site_url('author/'.$article->author_id.'/'.$this->assist->slugify($article->author)); ?>">
	   		 <img src="<?=base_url('assets/img/avatar.jpg'); ?>" class="img-circle img-responsive"  width="120" height="120" alt="user-avatar"/>
	   		</a>
			<h5>By<br><a href="<?=site_url('author/'.$article->author_id.'/'.$this->assist->slugify($article->author)); ?>"><?=$article->author; ?></a></br></br><?=date('dS M Y',strtotime($article->publishdate)); ?></h5>
	    </div>
		<div class="col-lg-8 col-md-8" style="padding:0 !important;">
    	
   		
			<div class="content">
				<!-- <figure>	
   		  			<img src="<?=IMG_SRC.$article->thumbURL; ?>" class="img-responsive" width="870" height="460" alt="<?=$article->title; ?>" />
   		  			<figcaption><strong><?=$article->thumbcaption; ?></strong></figcaption>
   				</figure> -->
							<?php
					 $data = str_replace(".", ",", $article->keywords);
                    $data = str_replace(":", ",", $data);
                    $data = str_replace(";", ",", $data);
                    //$data=rtrim(",",$data);
                    $keywords = explode(',', str_replace("'", "", $data));
                    $test=array(" ");
                    $keywords=array_diff($keywords,$test);
                    $marray=@array("@id"=>site_url(),"@context"=>"http://schema.org","@type"=>"NewsArticle","headline"=>$article->title,"url"=>current_url(),"thumbnailUrl"=>IMG_SRC.$article->thumbURL,"dateCreated"=>date('Y-m-d H:i:s',strtotime($article->posteddate)),"articleSection"=>"Evewoman - ".$this->amodel->getCatName($article->categoryid),"creator"=> array($article->author),"keywords"=>$keywords,"author"=>array("@type"=>"Person",
    "name"=>$article->author), "publisher"=>array("@type"=>"Organization","name"=>"Evewoman","logo"=>array("@type"=>"ImageObject","url"=>base_url("assets/img/logo.png"),"width"=>271,"height"=>52)),"datePublished"=>date('Y-m-d H:i:s',strtotime($article->publishdate)),"dateModified"=>date('Y-m-d H:i:s',strtotime($article->updateddate)),"mainEntityOfPage"=>array("@type"=>"WebPage","@id"=>current_url()), "image"=>array("@type"=>"ImageObject","url"=>IMG_SRC.$article->thumbURL,"height"=>500,"width"=>860),"headline"=>$article->long_title);
                   
  
                    echo'<script type="application/ld+json">';
                      echo @json_encode($marray);
                    echo'</script>';		
                     $content_table = explode("</p>",$article->story);
                     if(count($content_table)<=1)
                        {
                          $content_table = explode("<br />",$article->story);
                        }
                       $x=count($content_table);
                       $x=(int)$x;                    
                       $y=0;
                       $z=0;
                       foreach ($content_table as  $value) {
                        
                           
                        
                            echo $value;
                          

                        if(($y%7==0)&&($z<=2))
                            {
                              if(is_array($related)&&(isset($related[$z]))){
                              echo'<p class="text text-default" style="color:rgb(246,47,94);">
                              <strong>ALSO READ: </strong>';
                               $value=$related[$z];
                              
                                  echo '<a class="alert-link text-pink" href="'.base_url().'article/'.$value->id.'/'.$this->amodel->slugify($value->title).'">'.$value->title.'</a>';
                                $z++;
                               }
                            }
                        if($y==2)
                          {
                            $this->view("ads/desktop_article_center_300x250");
                          }    
                       	
                          $y++;  
                       }
                        // Telegram follow
                       if ($this->agent->is_mobile()){
                              echo '<div class="m-x-2 m-y-2 ">
                                      <a href="https://t.me/evewoman" class="m-x-auto">
                                        <img src="https://www.standardmedia.co.ke/evemedia/follow.png" class="img-responsive img-rounded img" alt="telegram-follow">
                                      </a>
                                    </div>';
								}else{
									   echo '<div class="pull-left" style="margin:10px;">
                                      <a href="https://web.telegram.org/#/im?p=@evewoman" class="m-x-auto">
                                        <img src="https://www.standardmedia.co.ke/evemedia/follow.png" class="img-responsive img-rounded img" alt="telegram-follow">
                                      </a>
                                    </div>';
								}
                     ?>
                     
                     
                     
                     
                     
                     
                     <div class="clearfix"></div>
                       <div class="tagscont">
                      
                      <?php
                     
                       $tags=explode(";",$article->keywords);
                              
                              for($h=0;$h<=count($tags)-1;$h++){
                              
                                  ?>
                       
                      <div class="badge"><a href="<?php echo site_url('topic/'.$this->amodel->slugify($tags[$h])); ?>"> <?php  echo $tags[$h]; ?></a></div>
                   
                    <?php
                              }
                              ?>
                              </div>
            <div class="sharethis-inline-share-buttons"></div>
			
				
			</div> 
				<span class="clearfix"></span>	
				<div id="comments">
					<span id="fb-root"></span>
					<span class="fb-comments" data-href="<?=current_url(); ?>" data-width="100%" data-numposts="30"></span>​
				</div>	<script>FB.XFBML.parse();</script>	
						  <?php
                $ar = $this->amodel->get_latest_stories_infinite($article->id);
                foreach ($ar->result() as $arr):
                    ?>
                    <a href="<?php echo base_url(); ?>article/<?php echo $arr->id; ?>/<?php echo $this->assist->slugify($arr->title); ?>" id="storynext">next</a>
                    <?php
                endforeach;
                ?>	
		
							</p>
				<?php if(is_array($related)): ?>			
				<div class="related-stories">
					<h4>Related Stories</h4>
					<?php
						$j=1;
						 	foreach($related as $value)
						 	{	
						 		echo'
						  		<div class="col-lg-4 col-md-4 article zero-left ">
							  	  	<a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'"><img src="'.IMG_SRC.$value->thumbURL.'" class="img-responsive" alt="'.$value->title.'"/></a>
									<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.$this->assist->slugify($this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
									<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
									<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.' </a></h3>
							   	</div>';
							   	if($j%3==0) echo '<div class="clearfix"></div>';
					            $j++;
						   }
						?>
				</div>
			<?php endif; ?>
				
			
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
				<!--Adevert Area
		     	<div class="sidebar-advert">
			    <img src="img/300x250.jpg" width="300" height="250" alt=""/>
			    </div>-->
	  </div>
	</div>
		<div class="container-fluid adspace text-center" >
		<div style="display: inline-block;">
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

<!-- <div class="container-fluid featured-section zero-left zero-right">
	<div class="col-lg-12 col-md-12 zero-left zero-right ad-content-holder text-center">
		<?php $this->view('ads/bottom_1350x450'); ?>
	</div>	
		
</div> -->
</div>
</div>
	