<div class="container">
    <div class="row">
        <div class="col-lg-3 inner zero">

            <h2><?php echo $categorytitle; ?></h2>

        </div>
        <div class="col-lg-9">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="active"><a href="#"><?php echo $categorytitle; ?></a></li>
            </ol>
        </div>
        <div class="clearboth"></div>
        <div class="col-lg-5">
            <?php
            $cnt = 0;
            foreach ($cstories->result() as $st):
                $cnt++;
                if ($cnt == 1) {
                    ?>
                    <a href="<?php echo base_url(); ?>article/<?php echo $st->id; ?>/<?php echo $this->mobile_model->slugify($st->title); ?>">
                      <?php if($st->thumbURL!=""){ ?>  <div class="cat-page-main">
                            <amp-img src="<?php echo $st->thumbURL; ?>" width="454" height="230" alt="<?php echo $st->title ?>" title="<?php echo $st->title ?>" class="img-responsive"/>
                        </div>
                      <?php } ?>

                        <span class="time"><?php echo $this->mobile_model->time_ago($st->publishdate); ?></span>
                        <div class="clearboth"></div>
                        <h3 class="main-cat-header"><?php echo $st->title; ?></h3>
                    </a>
                    <ul class="main-cat-list">
                    <?php } elseif ($cnt <= 5) {
                        ?>
                        
                         
                        
                        
                        
                        <li> 
                            <a href="<?php echo base_url(); ?>article/<?php echo $st->id; ?>/<?php echo $this->mobile_model->slugify($st->title); ?>">
                                <?php echo $st->title; ?>
                            </a>
                        </li>
                        <?php
                        if ($cnt == 5) {
                            ?>
                            
                            <li>
                             <amp-ad width=300 height=250 type="doubleclick" data-aax_size="300x250"
                         data-slot="/24409412/mobile_category_advert1">
                             </amp-ad>
                            </li>
                        </ul>
						<div class="clearboth"></div>
						<div style="margin: 10px;">
						 <?php
                        if ($parentID == 9 || $categoryID == 9) {
							?>
						<?php //$this->load->view('mobile_theme/sdmv2/adverts/mobile_category_advert2'); ?>
						<?php }else{ ?>
						<?php //$this->load->view('mobile_theme/sdmv2/adverts/mobile_lifestyle_rightpanel_advert2'); ?>
						<?php } ?>
</div>
                    </div>
                    <div class="col-lg-3 nopadding">
                        <?php
                    }
                    ?>
                <?php } elseif ($cnt <= 8) {
                    ?>
                    <div class="col-lg-12 m-inner">
                        <a href="<?php echo base_url(); ?>article/<?php echo $st->id; ?>/<?php echo $this->mobile_model->slugify($st->title); ?>">
                            <div class="cat-page-main-other">
                                <amp-img src="<?php echo $st->thumbURL; ?>" width="454" height="230" alt="<?php echo $st->title ?>" title="<?php echo $st->title ?>" class="img-responsive"/>
                            </div>
                            <h3 class="main-cat-header-other"><?php echo $st->title; ?></h3>
                        </a>
                    </div>
                    <?php
                    if ($cnt == 8) {
                        ?>
 
                             <amp-ad width=300 height=250 type="doubleclick" data-aax_size="300x250"
                         data-slot="/24409412/mobile_category_advert2">
                             </amp-ad>
                            
                    </div>
                    <div class="col-lg-4">
                         
                        <div class="col-lg-12 gray-bg">
                            <?php $this->load->view('mobile_theme/sdmv2/widgets/mobile_trending_now'); ?>
                        </div>
                    </div>
                    <div class="clearboth"></div>
                    <div class="col-lg-12 nopadding">
                        <?php
                    }
                    ?>


                <?php } else { ?>
                    <div class="col-lg-3 more-cat-stories">
                        <a href="<?php echo base_url(); ?>article/<?php echo $st->id; ?>/<?php echo $this->mobile_model->slugify($st->title); ?>">
                            <div class="cat-page-more-str">
                                <amp-img src="<?php echo $st->thumbURL; ?>" width="454" height="230" alt="<?php echo $st->title ?>" title="<?php echo $st->title ?>" class="img-responsive"/>
                            </div>
                            
                    <span class="time"><?php echo $this->mobile_model->time_ago($st->publishdate); ?></span>
                            <h3 class="main-cat-header-other-str"><?php echo $st->title; ?></h3>
                        </a>
                    </div>
                    <?php if ($cnt % 4 == 0) {
                        ?>                
                        <div class="clearboth"></div>
						<?php if($cnt==12){ ?>
						 <div class="col-lg-12 gray-bg">
                            <div class="adv">    
                              <li>
                             <amp-ad width=300 height=250 type="doubleclick" data-aax_size="300x250"
                         data-slot="/24409412/mobile_category_advert3">
                             </amp-ad>
                            </li>
                            </div>
                        </div>
                        <div class="clearboth"></div>
						<?php } ?>
                        <?php
                    }
                }
                ?>
            <?php endforeach; ?>
        </div>
    </div> <nav>
                <ul class="pager">
                    <li class="next"><a href="<?php echo base_url(); ?><?php if($this->uri->segment('1')=='thenairobian'){ echo "thenairobian/";} ?><?php if($this->uri->segment('1')=='pulse'){ echo "pulse/";} ?>category/older/<?php echo $categoryID; ?>/<?php echo $this->mobile_model->slugify($categorytitle); ?>">load more stories <span aria-hidden="true">&rarr;</span></a></li>
                </ul>
            </nav>
            <div class="clearboth"></div>
</div>