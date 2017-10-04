<div class="col-sm-4 nopadding">
    <h3 class="latest-home default-theme-border">LATEST</h3>
    <div class="clearboth"></div>
    <?php
    $recent = $this->mobile_model->get_latest_stories(12);
    $rccnt = 0;
    foreach ($recent->result() as $rc):
        $rccnt++;
        if ($rccnt == 1) {
            ?>
            <div class=" nopadding  main-latest">
                <a href="<?php if($rc->source=='entertainment'){ echo "http://www.sde.co.ke/m/"; } else{ echo "https://www.standardmedia.co.ke/"; } ?>article/<?php echo $rc->id; ?>/<?php echo $this->mobile_model->slugify($rc->title); ?>">
                    <div class="latest-story-img">  <amp-img layout="responsive" src="<?php echo $rc->thumbURL; ?>" width="235" height="133"  title="<?php echo $rc->title; ?>" alt="<?php echo $this->mobile_model->chrstring($rc->title); ?>" class="img-responsive"/></div></a>
                <span class="time"> <?php echo $this->mobile_model->time_ago($rc->publishdate); ?></span><br>  <div class="clearboth"></div>

                <a href="<?php if($rc->source=='entertainment'){ echo "http://www.sde.co.ke/m/"; } else{ echo "https://www.standardmedia.co.ke/"; } ?>article/<?php echo $rc->id; ?>/<?php echo $this->mobile_model->slugify($rc->title); ?>">   <?php echo $rc->title; ?></a>
            </div>
            <div class=" ">

                <ul class="trending-stories">
                    <?php
                } else {
                    ?>
                    <li>
                        <a href="<?php if($rc->source=='entertainment'){ echo "http://www.sde.co.ke/m/"; } else{ echo "https://www.standardmedia.co.ke/"; } ?>article/<?php echo $rc->id; ?>/<?php echo $this->mobile_model->slugify($rc->title); ?>">   <?php echo $rc->title; ?></a>


                        <span class="time"> - <?php echo $this->mobile_model->time_ago($rc->publishdate); ?></span><br>  <div class="clearboth"></div>
                    </li>
					<?php
					if($rccnt==4){
					?>
					<li>
					   <div class="clearboth"></div> 
			<?php
				  $useragent = $_SERVER['HTTP_USER_AGENT'];
   				  $useragent = strtolower($useragent);
				  
				 

					include('popup/app_link.php');
										?>
					   <div class="clearboth"></div> 
					   </li>
					<?php /*
					?>
					<div style="padding:10px 0px 0px; clear: both;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:50px"
     data-ad-client="ca-pub-4519818035499623"
     data-ad-slot="2407407675"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
                    <?php
					*/
					}
                }
            endforeach;
            ?>
        </ul>
    </div>
</div>