<div class="top-item">
    
    <?php
    $cnt = 0;
    $topstories = $this->mobile_model->get_category_articles($cathomeid, $limit);
    foreach ($topstories->result() as $top):
        $cnt++;
        if ($cnt == 1) {
            ?>
            <div class="col-sm-8 nopadding">
		<?php /*	<script type='text/javascript'>
					  googletag.cmd.push(function() {
						googletag.defineSlot('/24409412/sde_sponsored', [300, 100], 'div-gpt-ad-1447084405178-0').addService(googletag.pubads());
						googletag.pubads().enableSingleRequest();
						googletag.enableServices();
					  });
					</script>
					<!-- /24409412/sde_sponsored -->
					<div id='div-gpt-ad-1447084405178-0' style='height:100px; width:300px; margin: 10px auto;'>
					<script type='text/javascript'>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1447084405178-0'); });
					</script>
					</div> */ ?>
<div class="clearboth"></div>
                <div class="col-lg-6 main-story  nopadding">
                   <div class="main-gray">
                    <div class="snipe">Top Story</div>
                    <a href="https://www.standardmedia.co.ke/article/<?php echo $top->id; ?>/<?php echo $this->mobile_model->slugify($top->title); ?>">
                        <div class="home-top-img">
                              <amp-img layout="responsive"   src="http://www.standardmedia.co.ke<?php echo $top->thumbURL; ?>"  width="313" height="204" class="img-responsive" alt="<?php echo $top->title; ?>" title="<?php echo $top->title; ?>"/>
                        </div>
                    </a> 
                    <div class="white pad-image">
                        <span class="time"><?php if(strtotime($top->publishdate)<strtotime(date('Y-m-d H:i:s'))){ echo $this->mobile_model->time_ago($top->publishdate);  } ?></span>
                        <h1><a href="https://www.standardmedia.co.ke/article/<?php echo $top->id; ?>/<?php echo $this->mobile_model->slugify($top->title); ?>"><?php echo $top->title; ?></a></h1>

                    </div>
					<ul class="main-gray-list">
					<?php //$hrel=$this->home_model->get_related_articles_home($stories->keywords, $stories->id); 
                $hrel=$this->mobile_model->get_related_articles_home($top->keywords, $top->id); 
				foreach($hrel->result() as $hl){
				?><li><a href="https://www.standardmedia.co.ke/article/<?php echo $hl->id; ?>/<?php echo $this->mobile_model->slugify($hl->title); ?>">
				<div class="top-list">
				  <amp-img layout="responsive" height="313" width="204"src="http://www.standardmedia.co.ke<?php echo $hl->thumbURL; ?>" alt="<?php echo $hl->title; ?>"/>
				</div>
				<?php echo $hl->title ?></a>
				<div class="clearboth"></div></li>
				<?php
				}
				?>
					</ul>
					</div>
 
                </div>
                <div class="col-lg-6 nopadding">
                    <?php
                } else {
                    ?>
                    <div class="other-top-stories col-lg-12  nopadding">
                        <a href="https://www.standardmedia.co.ke/article/<?php echo $top->id; ?>/<?php echo $this->mobile_model->slugify($top->title); ?>">
                            <div class="home-top-img-other">
                                  <amp-img layout="responsive"  src="http://www.standardmedia.co.ke<?php echo $top->thumbURL; ?>"  width="313" height="204" class="img-responsive" alt="<?php echo $top->title; ?>" title="<?php echo $top->title; ?>"/>
                            </div>
                        </a> 
                        <div class="white">
                            <span class="time"><?php if(strtotime($top->publishdate)<strtotime(date('Y-m-d H:i:s'))){ echo $this->mobile_model->time_ago($top->publishdate); } ?></span>
                            <h1><a href="<?php echo base_url(); ?>article/<?php echo $top->id; ?>/<?php echo $this->mobile_model->slugify($top->title); ?>"><?php echo $top->title; ?></a></h1>

                        </div>
                    </div>

                    <?php
					   if ($cnt == 3) {
					   ?>
<div class="clearboth"></div>
  
					   <?php
					   }
                }
            endforeach;
            ?>  </div>
        <div class="clearboth"></div>
    </div>
    <?php
    $this->load->view('mobile_theme/sdmv2/widgets/mobile_home_latest_stories');
    ?>