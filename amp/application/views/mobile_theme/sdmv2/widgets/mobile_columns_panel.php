<div class="col-lg-4 nopadding"> <div class="columns">

        <div class="main-story">
            <h4 class="doc-title blue-theme-border"><a href="<?php echo base_url(); ?>?categoryID=74">Columns</a>
                         </h4>
            <div class="clearboth"></div>
            <ul>
                <?php
                $ccc = $this->mobile_model->all_columnist(74);
                foreach ($ccc->result() as $cc) {
                    $colm = $this->mobile_model->temp_home_columns($cc->id);
                    foreach ($colm->result() as $ppl):
                        ?>

                        <li>
                            <?php if ($ppl->sIMG != "") { ?>
                                <a href="https://www.standardmedia.co.ke/?categoryID=<?php echo $ppl->categoryid ?>">         <amp-img layout="responsive"   height="200" width="204" src="<?php echo $ppl->sIMG; ?>" class="atl-img"   alt="<?php echo $cc->name; ?>"/></a>
                            <?php } ?>
                            <a href="https://www.standardmedia.co.ke/article/<?php echo $ppl->id; ?>/<?php echo $this->mobile_model->slugify($ppl->title); ?>"><?php echo $this->mobile_model->chrstring($ppl->title); ?></a>
                            <div class="col-name"> <a href="<?php echo base_url(); ?>?categoryID=<?php echo $ppl->categoryid ?>"> <?php echo $cc->name; ?></a></div> <div class="clr"></div>
                        </li>


                        <?php
                    endforeach;
                }
                ?>
            </ul>

        </div>
    </div>
</div>
