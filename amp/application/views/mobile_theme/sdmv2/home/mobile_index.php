 <div class="container setmargin">


    <?php
    $data['cathomeid'] = $categoryID;
    $data['limit'] = 4;
    $this->load->view('mobile_theme/sdmv2/widgets/mobile_home_top_stories', $data);
    ?>
    <div class="clearboth"></div>
 
    <div class="clearboth"></div>
    <?php
    $count_newspanel = 0;
    $limit = 6;
    $newspanels = $this->mobile_model->get_category_newspanel($categoryID, $limit);
    foreach ($newspanels->result() as $panels):
        $count_newspanel++;
        $start = 0;
        $mmcnt = 0;
        ?>
        <div class="white-2">
            <?php
            $data['limit'] = 5;
            //Crazy Monday
            $data['catid'] = $panels->id;
            $data['cattheme'] = 'blue-theme-border';
            $this->load->view('mobile_theme/sdmv2/widgets/mobile_home_category_panel', $data);
            ?>

        </div>
        <?php if ($count_newspanel == 2) {
            ?>
            <div class="white-2">
                
				<?php
                        $this->load->view('mobile_theme/sdmv2/widgets/mobile_popular_str');
                        ?>
				
            </div>
            <div class="clearboth"></div>
            <?php
        } elseif ($count_newspanel == 3) {
            ?>
            <div class="white-2">
                <div class="col-lg-4 nopadding">
				 
                
<?php
                        $this->load->view('mobile_theme/sdmv2/widgets/mobile_trending_home');
                        ?></div>
            </div>
			<div class="white-2">
        <?php
        $data['limit'] = 5;
        //Crazy Monday
        $data['catid'] = $panels->id;
        $data['cattheme'] = 'blue-theme-border';
        $this->load->view('mobile_theme/sdmv2/widgets/mobile_sde_category_panel', $data);
        ?>

    </div>
            <div class="clearboth"></div>
            <?php
        }elseif($count_newspanel==3){
		?>
            <div class="clearboth"></div>
		<?php
		}elseif ($count_newspanel == 5) {
            ?>
           <!-- <div class="white-2">
                <div class="col-lg-4 nopadding gray-bg">
                    <div class="adv">
                        <?php
                       // $this->load->view('mobile_theme/sdmv2/adverts/home_mobile_advert6');
                        ?>
                    </div>
                </div>

            </div>-->
            <?php
        }elseif($count_newspanel == 8){
		?>
		
            <div class="clearboth" style="margin-bottom: 20px;"></div>
		<?php }
    endforeach;
    ?>
   
                <!-- <div class="white-2">
                <div class="col-lg-4  nopadding gray-bg">
                    <div class="adv">
                        <?php
                       // $this->load->view('mobile_theme/sdmv2/adverts/home_mobile_advert7');
                        ?>
                    </div>
                </div>

            </div>-->
			  <div class="clearboth"></div>
             <div class="white-2">
        <?php
        $data['limit'] = 5;
        //Crazy Monday
        $data['catid'] = $panels->id;
        $data['cattheme'] = 'blue-theme-border';
        $this->load->view('mobile_theme/sdmv2/widgets/mobile_columns_panel', $data);
        ?>

    </div>
    <div class="clearboth"></div>
</div>
</div>