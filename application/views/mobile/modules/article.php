<div  id="contentsWrapper">

 	<div class="container-fluid" >
	 	

		<div class="col-xs-12 zero-left header">
		
		 
		
		
		    <div class="sharethis-inline-share-buttons"></div>	
			<h1><a href="<?=site_url('category/'.$this->cmodel->getOtherCatId($article->categoryid).'/'.str_replace(" ","",$this->amodel->getCatName($article->categoryid))); ?>">
					<?=$this->amodel->getCatName($article->categoryid); ?>
				</a> | By <a href="<?=site_url('author/'.$article->author_id.'/'.$this->assist->slugify($article->author)); ?>"><?=$article->author; ?></a></h1>
			<h2><?=$article->title; ?></h2>
			<div class="clearboth"></div>
			<div class="io-hidden-publisher" style="display: none;"><?=@$article->createdby; ?></div>​
		<div class="io-hidden-author" style="display: none;"><?=@$article->author; ?></div>​
		</div>
		<br>
		<figure>
	 		<img src="<?=IMG_SRC.$article->thumbURL; ?>" class="img-responsive" width="870" height="460" alt="<?=$article->title; ?>" />
	 		<figcaption><?=$article->thumbcaption; ?></figcaption>
	 		
	 	</figure>
	</div>
 	
 	
	<div class="container-fluid">
		
		<div class="content">
					
				
							<?php
                    $data = str_replace(".", ",", $article->keywords);
                    $data = str_replace(":", ",", $data);
                    $data = str_replace(";", ",", $data);
                    //$data=rtrim(",",$data);
                    $keywords = explode(',', str_replace("'", "", $data));
                    $test=array(" ");
                    $keywords=array_diff($keywords,$test);
                    $marray=@array("@id"=>site_url(),"@context"=>"http://schema.org","@type"=>"NewsArticle","headline"=>$article->title,"url"=>current_url(),"thumbnailUrl"=>IMG_SRC.$article->thumbURL,"dateCreated"=>date('Y-m-d H:i:s',strtotime($article->posteddate)),"articleSection"=>"Evewoman - ".$this->amodel->getCatName($article->categoryid),"creator"=> array($article->author),"keywords"=>$keywords,"author"=>array("@type"=>"Person",
    "name"=>$article->author), "publisher"=>array("@type"=>"Organization","name"=>"Evewoman","logo"=>array("@type"=>"ImageObject","url"=>base_url("assets/img/logo.png"),"width"=>271,"height"=>52)),"datePublished"=>date('Y-m-d H:i:s',strtotime($article->publishdate)),"dateModified"=>date('Y-m-d H:i:s',strtotime($article->updateddate)),"mainEntityOfPage"=>array("@type"=>"WebPage","@id"=>current_url()), "image"=>array("@type"=>"ImageObject","url"=>IMG_SRC.$article->thumbURL,"height"=>500,"width"=>860),"headline"=>$article->title);
                   
  
                    echo'<script type="application/ld+json">';
                      echo @json_encode($marray);
                    echo'</script>';		
                      
                      function removeimg($content)
                            {
                                $content = preg_replace("/<img[^>]+\>/i", "", $content);
           
                                return $content;
                            }
                      
                      
                      

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
                        if($y==0)
                          {
                           echo removeimg($value);
                          }
                        else
                          {
                            echo $value;
                          }

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
                            $this->view("ads/article_center_300x250");
                          }  
                          
                          if($y==5)
                          {
                            $this->view("ads/article_bottom_300x250");
                          }   
                       
                            $y++;

                            
                       }
					   echo '</br><strong class="text-pink" ><a href="'.site_url('author/'.$article->author_id.'/'.$this->assist->slugify($article->author)).'">Read More By: '.$article->author.'</a></strong></br>';
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
                       
                      <div class="badge"><a href="<?=site_url('topic/'.$this->amodel->slugify($tags[$h])); ?>"> <?=$tags[$h]; ?></a></div>
                   
                    <?php
                              }
                              ?>
                              </div>
                              <div class="sharethis-inline-share-buttons"></div>
                            <p>
								
							<div id="fb-root"></div>

<div class="fb-comments" data-href="<?=current_url(); ?>" data-width="100%" data-numposts="30"></div>​

							</p>
					</div>
					<div>
						<?php $this->view("ads/300x250_test_1"); ?>
					</div>
				<?php if(is_array($related)): ?>			
				<div class="related-stories">
					<h4>Related Stories</h4>
					<?php
					    foreach($related as $value)
						 	{
								echo'<div class="col-xs-6 zero-left article ">
									<a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'"><img src="'.IMG_SRC.$value->thumbURL.'" class="img-responsive" alt="'.$value->title.'"/></a>
									</div>
									 <div class="col-xs-6  article ">
										<h1><a href="'.site_url('category/'.$this->cmodel->getOtherCatId($value->categoryid).'/'.$this->assist->slugify($this->amodel->getCatName($value->categoryid))).'">'.$this->amodel->getCatName($value->categoryid).'</a></h1>
									<h2><a href="'.site_url('article/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
									<h3><a href="'.site_url('author/'.$value->author_id.'/'.$this->assist->slugify($value->author)).'">By '.$value->author.' </a></h3>
									</div>
																		 
						       <div class="clearboth"></div>';
						    }

					?>
				</div>
				<?php endif; ?>
				
				
			</div>
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
</div>




<div class="sharebar"> 
 <?php $this->view("ads/vicinity320x50"); ?>
	  		 
</div>