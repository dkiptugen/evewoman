<div class="container"  >
    <div class="col-lg-8 nopadding" >
    
    <div class="clearboth"></div>
    
   
       <div class="clearboth"></div>
        <h3 class="art-title"><?php echo $this->mobile_model->chrstring($article_title); ?></h3>
        <div class="col-lg-12 author"> By <?php echo $author; ?> | <?php
            if (strtotime($posteddate) > strtotime($updateddate)) {
                echo date("l, M jS Y ", strtotime($posteddate)) . "at" . date(" H:i", strtotime($posteddate));
            } else {
                echo date("l, M jS Y ", strtotime($updateddate)) . "at" . date(" H:i", strtotime($updateddate));
            }
            ?></div>
         
        <div class="clearboth"></div>
        <?php
		$mmtitle = str_replace("'","",str_replace('"',"",$article_title));
        $data['article_title'] = $mmtitle;
        $mml = "";
        
        $data['article_link'] = "https://www.standardmedia.co.ke/evewoman/article/" . $articleID . '/' . $this->mobile_model->slugify($short_title);
        $this->load->view('mobile_theme/sdmv2/widgets/mobile_share_this', $data);
        ?>
        <div class="clearboth"></div>
        
 
        <div class="content"> 
        <div class="col-lg-3 small-divs">
        <amp-img src="https://www.standardmedia.co.ke<?php echo $imgURL; ?>" layout="responsive" width="313" height="204"   alt="<?php echo str_replace('"', '',$this->mobile_model->chrstring($title)); ?>" title="<?php echo str_replace('"', '',$this->mobile_model->chrstring($title)); ?>"/>
        
       </div>
       
        
        <?php
		    $story  = str_replace("xss=removed","",$story);
            $getpage = $this->mobile_model->count_para($story, $pageNo);
            $tlcnt = 0;
            foreach ($getpage as $article_page) {
                $tlcnt++;
                
                
              
                     
                     
                     
                  $st=$this->mobile_model->chrstring(preg_replace("/<\/?div[^>]*\>/i", "", $article_page));
                  
                
                   $st2= str_replace("<img","<amp-img layout='responsive' width='313' height='113'", $st);
                $st3=preg_replace('#<script(.*?)>(.*?)</script>#is', '', $st2);
               
                 $st4=str_replace('font', 'p', $st3);
                  $st5=preg_replace('</font>', '</p>', $st4);
                  $st6=str_replace('face="Arial" size="2"', '',$st5);
                  
                   $st7=preg_replace('#<p(.*?)>(.*?)>#is', '<p>', $st5);
                 
                   echo preg_replace('/(<[^>]+) style=".*?"/i', '$1',  str_replace("iframe", "amp-iframe", $st7));
             
               
               
               
               
                
if($tlcnt==1){


}

                if ($tlcnt == 4) {
				 $useragent = $_SERVER['HTTP_USER_AGENT'];
   				  $useragent = strtolower($useragent);
			 

					$mystring = $keywords;
    $findme   = 'plane';
$pos = strpos($mystring, $findme);
?>
 
 
 <?php
if ($tlcnt==2) {
							?>
							<p>
<amp-ad width=300 height=250
      type="adsense"
      data-ad-client="ca-pub-4519818035499623"
      data-ad-slot="9418092015">
 </amp-ad>
</p>
<?php
						}
						if ($tlcnt==4){
							?>
							<p>
<amp-ad width=300 height=250
      type="adsense"
      data-ad-client="ca-pub-4519818035499623"
      data-ad-slot="9418092015">
 </amp-ad>
 </p>
<?php

						}
					} //end advert2 
					?>
                    <?php
               
                if ($tlcnt == 6) {
                    $this->load->view('mobile_theme/sdmv2/include/mid_recommend');
                }
                if ($tlcnt ==11) {
                    ?>
					<p>
<amp-ad width=300 height=250
      type="adsense"
      data-ad-client="ca-pub-4519818035499623"
      data-ad-slot="9418092015">
 </amp-ad></p>
                    <?php
                }
				if($tlcnt ==18){
					?> 
		 <p>
     <amp-ad width=300 height=250
      type="adsense"
      data-ad-client="ca-pub-4519818035499623"
      data-ad-slot="9418092015">
 </amp-ad></p>
					<?php
				}
            }
            ?> 

            <?php $this->load->view('mobile_theme/sdmv2/widgets/article_pagination'); ?>
            <div class="clearboth"></div> 
			<?php
				  $useragent = $_SERVER['HTTP_USER_AGENT'];
   				  $useragent = strtolower($useragent);
 
										?>
			
			</div>
        <?php
        $this->load->view('mobile_theme/sdmv2/widgets/mobile_share_this', $data);
        ?>
       
		 
<div class="clr"></div>
<div class="story-social-plugins"><span>Other related topics:</span>  
  
 <div class="tagscont">
  <?php
  
   
                     
                       $tags=explode(";",$keywords);
                              
                              for($h=0;$h<=count($tags)-1;$h++){
                              
                                  ?>
                              
            
                    <a class="tags" href="https://www.standardmedia.co.ke/evewoman/topic/<?php echo $this->mobile_model->slugify($tags[$h]) ?>"><?php  echo $tags[$h]; ?></a>
       
                    <?php
                              }
                              ?>
 
        
      </div>
       <div class="clearboth"></div>
<p>
<amp-ad width=300 height=250
      type="adsense"
      data-ad-client="ca-pub-4519818035499623"
      data-ad-slot="9418092015">
 </amp-ad>
 </p>
        
         
	<div class="clearboth"></div>
      
        <h3 class="latest-h3 pink-theme-border">Latest Stories</h3>
        <div class="clearboth"></div>
       
            <?php
            
 
 $base_u="https://www.standardmedia.co.ke/evewoman"; 
 
	
            $limit = 20;
            $plcnt = 0;
            $lnews = $this->mobile_model->get_latest_stories(10);
            foreach ($lnews->result() as $rl):
                $plcnt++
                ?>
                 <div class="col-lg-3 small-divs">
				<?php if($rl->thumbURL!=""){  ?>
                    <a href="<?php echo $base_u; ?>/article/<?php echo $rl->id."/".$this->mobile_model->slugify($rl->title); ?>">
                        <div class="sim-img"><amp-img src="https://www.standardmedia.co.ke<?php echo $rl->thumbURL; ?>" layout="responsive" width="313" height="204" class="lazy img-responsive" alt="<?php echo str_replace('"', '',$this->mobile_model->chrstring($rl->title)); ?>" title="<?php echo str_replace('"', '',$this->mobile_model->chrstring($rl->title)); ?>"/> </div></a>
                   <?php } ?> <div class="grey-2">
                        <span class="time-3"><?php echo $this->mobile_model->time_ago($rl->publishdate); ?></span>
                        <h6><a href="<?php echo $base_u; ?>/article/<?php echo $rl->id; ?>/<?php echo $this->mobile_model->slugify($rl->title); ?>"><?php echo $this->mobile_model->chrstring($rl->title); ?></a></h6>
                    </div><div class="clearboth"></div>
                </div>
                     <?php
				if($plcnt%4==0){
				?>
				<?php if($plcnt==4){  ?><div class="clearboth"></div>
				 
		<div class="clearboth"></div>
				         <?php  } ?>
				<div class="clearboth"></div>
				<?php
				}

if($plcnt==8){
?>  

<?php
}				endforeach; ?>
 
 
<div class="clearboth"></div>
	
         

    </div>
     
</div>

