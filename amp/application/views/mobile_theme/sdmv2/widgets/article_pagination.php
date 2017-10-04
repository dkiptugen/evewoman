<?php
$pages = $this->mobile_model->get_pages($story);
if ($pages > 1) {
    ?>
    <div class="clr"></div>
    <div class="article_pagination theme">
        <span>GO TO PAGE</span>
        <?php
		if($parentid==120){
		$sitepg='pulse/';
		}elseif($parentid==126){
		$sitepg='thenairobian/';
		}else{		
		$sitepg='';
		}
        $pcnt = 0;
        if ($pageNo <= $pages && $pageNo > 1) {
            ?>
            <a href="<?php echo base_url(); ?><?php echo $sitepg; ?>article/<?php echo $articleID; ?>/<?php echo $this->mobile_model->slugify($article_title); ?>?pageNo=<?php echo ($pageNo - 1); ?>">&laquo; Prev</a>

            <?php
        }
        while ($pcnt < $pages) {
            $pcnt++;

            if ($pcnt == $pageNo) {
                echo "<strong>$pcnt</strong>";
            } else {
                ?>
                <a href="<?php echo base_url(); ?><?php echo $sitepg; ?>article/<?php echo $articleID; ?>/<?php echo $this->mobile_model->slugify($article_title); ?>?pageNo=<?php echo $pcnt; ?>"><?php echo $pcnt; ?></a>
                <?php
            }
        }
        ?>
        <?php
        if ($pageNo < $pages) {
            ?>
            <a href="<?php echo base_url(); ?><?php echo $sitepg; ?>article/<?php echo $articleID; ?>/<?php echo $this->mobile_model->slugify($article_title); ?>?pageNo=<?php echo ($pageNo + 1); ?>">Next &raquo;</a>

            <?php
        }
        ?>
    </div>
    <?php
}
?>