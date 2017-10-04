<?php header ("Content-Type:text/xml"); ?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
 	<?php
        foreach ($data as $value)
 	 		{
 	 		  	echo'
 	 		  	    <url>

				      <loc>'.site_url('article/'.$value->id.'/'.$this->Article_model->slugify($value->title)).'</loc>
                      <image:image>
					      <image:loc>'.IMG_SRC.$value->thumbURL.'</image:loc>
					  </image:image>
				      <lastmod>'.$value->publishday.'</lastmod>
				      
				    </url>
				    ';
 	 	    }   
    ?>   	
</urlset> 