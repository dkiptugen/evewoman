<?php
 
$baseurl="https://www.standardmedia.co.ke/evewoman/";
 
$mid = $this->mobile_model->mid_recommend_articles($keywords, $articleID,$categoryID);
if($mid->num_rows!=""){
?>
<div class="mid-recommend">
<h5><span><bold>READ MORE</bold></h5> 
<ul>
<?php 
foreach($mid->result() as $mi):
?>
<li>
<a class="text-info readmore"   href="<?php echo $baseurl; ?>article/<?php echo $mi->id; ?>/<?php echo $this->mobile_model->slugify($mi->title); ?>">
<span><?php echo $this->mobile_model->chrstring($mi->title); ?></span></a>
</li>
<?php
 endforeach;
?>
</ul>
</div>
<?php

}
?>