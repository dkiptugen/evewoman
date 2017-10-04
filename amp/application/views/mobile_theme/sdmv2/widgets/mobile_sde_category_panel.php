

<div class="col-lg-4 nopadding">
    <h2 class="doc-title <?php echo $cattheme; ?>"> Entertainment </h2>
    <div class="clearboth"></div><?php
    $ncnt = 0;
    $categorystr = $this->mobile_model->get_sde_top_stories($limit);
    foreach ($categorystr->result() as $top):
        $ncnt++;
        if ($ncnt == 1) {
            ?>

            <a href="http://www.sde.co.ke/m/article/<?php echo $top->id; ?>/<?php echo $this->mobile_model->slugify($top->title); ?>">
                <div class="top-cat-img">
                      <amp-img layout="responsive" height="200" width="204" src="http://www.standardmedia.co.ke<?php echo $top->thumbURL; ?>" alt="<?php echo $top->title ?>" title="<?php echo $top->title ?>" class="img-responsive"/>
                </div>
            </a>
            <span class="time"><?php echo $this->mobile_model->time_ago($top->publishdate); ?></span>
            <h3><a href="http://www.sde.co.ke/m/article/<?php echo $top->id; ?>/<?php echo $this->mobile_model->slugify($top->title); ?>"><?php echo $top->title ?></a></h3>

            <div class="clearboth"></div>
            <div class="down">
                <ul class="cat-str">
                <?php } else { ?>
                    <li>
                        <h4><a href="http://www.sde.co.ke/m/article/<?php echo $top->id; ?>/<?php echo $this->mobile_model->slugify($top->title); ?>"><?php echo $top->title ?></a>
                        </h4> </li>



                    <?php
                }
            endforeach;
            ?>
        </ul>
    </div>
	<div class="clearboth"></div>
		 
</div>