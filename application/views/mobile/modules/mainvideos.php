<div class="container-fluid adspace-2">
	<div class=" col-lg-offset-3">
	<img src="img/ad5.gif" class="img-responsive" width="728" height="90"  alt=""/>
	</div>
	</div>

			<div class="container-fluid wrapper">

			<h2 class="category-title"><a href="<?=current_url(); ?>">Videos</a></h2>

		</div>
		<div class="container-fluid wrapper">
			<ul class="breadcrumb">
				  <li><a href="<?=site_url(); ?>">Home</a> <span class="divider"></span></li>
				  <li class="active">Videos</li>
			</ul>

		</div>

		<div class="container-fluid wrapper">
         <?php
        	foreach($videos as $value)
        		{
        		  	echo'<div class="col-lg-3 col-md-3 article ">
        		  			<img src="https://img.youtube.com/vi/'.$value->videoURL.'/hqdefault.jpg" class="img-responsive" width="610" height="355" alt="'.$value->title.'"/>
        					<h1><a href="#">'.$value->name.'</a></h1>
        					<h2><a href="'.site_url('video/watch/'.$value->id.'/'.$this->assist->slugify($value->title)).'">'.$value->title.'</a></h2>
        					<h3><a href="#">By '.@$this->Article_model->getAuthorName($value->createdby).'</a></h3>
        			    </div>';
        		}
	  	  ?>

		</div>

	