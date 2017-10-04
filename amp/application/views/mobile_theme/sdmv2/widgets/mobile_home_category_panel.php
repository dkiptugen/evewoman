<div class="col-md-4 nopadding">
            <h2 class="doc-title <?php echo $cattheme; ?>"> <?php
    $ct = $this->mobile_model->get_category_name($catid);
    $cname = "";
    foreach ($ct->result() as $cat) {
        $cid = $cat->id;
        $cname = $cat->name;
        ?>
                
        <a href="https://www.standardmedia.co.ke/category/<?php echo $cid; ?>/<?php echo $this->mobile_model->slugify($cname) ?>"><?php echo $cname; ?></a>
        <?php
    } 
    ?> </h2>
        <div class="clearboth"></div><?php
$ncnt = 0;
$categorystr = $this->mobile_model->getArticlesListingForCategoryLayout($catid, $limit, $start = 0);
foreach ($categorystr->result() as $top):
    $ncnt++;
    if ($ncnt == 1) {
        ?>

            <a href="https://www.standardmedia.co.ke/article/<?php echo $top->id; ?>/<?php echo $this->mobile_model->slugify($top->title); ?>">
                <div class="top-cat-img">
                      <amp-img layout="responsive" height="100" width="204" src="<?php echo $top->thumbURL; ?>" alt="<?php echo $top->title ?>" title="<?php echo $top->title ?>" class="img-responsive"/>
                </div>
            </a>
            <span class="time"><?php echo $this->mobile_model->time_ago($top->publishdate); ?></span>
            <h3><a href="https://www.standardmedia.co.ke/article/<?php echo $top->id; ?>/<?php echo $this->mobile_model->slugify($top->title); ?>"><?php echo $top->title ?></a></h3>
       
        <div class="clearboth"></div>
        <div class="down">
            <ul class="cat-str">
            <?php } else { ?>
                <li>
                    <h4><a href="https://www.standardmedia.co.ke/article/<?php echo $top->id; ?>/<?php echo $this->mobile_model->slugify($top->title); ?>"><?php echo $top->title ?></a>
              </h4> </li>



                <?php
            }
        endforeach;
        ?>
    </ul>
	<div class="dl-link-more">  <a href="https://www.standardmedia.co.ke/category/<?php echo $cid; ?>/<?php echo $this->mobile_model->slugify($cname) ?>">More From <?php echo $cname; ?> &raquo;</a></div>
</div>
         </div>