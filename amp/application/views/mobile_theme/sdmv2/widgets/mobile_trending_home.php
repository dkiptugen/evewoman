<div class="col-lg-12 nopadding nonpadding" >
				<h3 class="latest-home default-theme-border">Trending Stories</h3>
    <div class="clearboth"></div>
				<ul class="trending-stories">
					 <?php
            $cnt = 0;
            $limit = 5;
            $topstories = $this->mobile_model->get_standard_trending_articles($limit);
            foreach ($topstories->result() as $rc):
                $cnt++;
                ?>
                  <li>
                        <a href="https://www.standardmedia.co.ke/article/<?php echo $rc->id; ?>/<?php echo $this->mobile_model->slugify($rc->title); ?>"> 
<div class="popularimg">  <amp-img layout="responsive" height="313" width="204" src="http://www.standardmedia.co.ke<?php echo $rc->thumbURL; ?>" alt="<?php echo $rc->title; ?>"/></div>						<?php echo $rc->title; ?></a>


                        <?php /* <span class="time"> - <?php echo $this->mobile_model->time_ago($rc->publishdate); ?></span> */ ?><br>  <div class="clearboth"></div>
                    </li>

                    <?php
                endforeach;
                    ?>
                </ul>
             
				</div>