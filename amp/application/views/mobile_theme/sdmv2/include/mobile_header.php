<?php
newrelic_disable_autorum();
?>
<!doctype html>
<html ⚡>
    <head>
         <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
		 
	   <meta name="robots" content="index,follow" />
        
    <title><?php if(isset($articleID)){ ?>Kenya : <?php echo $title; ?> - Standard Digital News <?php }else{ ?> Standard Digital News - Kenya :  <?php echo $title; } ?></title>
    <link rel="shortcut icon" href="https://www.standardmedia.co.ke/favicon.ico" />        
	<link href="https://plus.google.com/+standarddigital" rel="publisher" /> 
	<meta name="msvalidate.01" content="895B0BFD6A675ED63FA74B3DDCFB918B" />
   
<?php
 if(isset($articleID)){
 ?>
 <script type="application/ld+json">
{  "@context": "http://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage":{
    "@type":"WebPage",
    "@id":"https://www.standardmedia.co.ke/<?php 
if($parentID==2 || $categoryID==2){
echo "thecounties/";
}elseif($parentID==6 || $categoryID==6){
echo "sports/";
}elseif($parentID==4 || $categoryID==4){
echo "business/";
}elseif($parentID==9 || $categoryID==9){
echo "lifestyle/";
}elseif($parentID==41 || $categoryID==41){
echo "health/";
}
?>article/<?php echo $articleID; ?>/<?php echo $this->mobile_model->slugify($article_title); ?>"
  },
  "headline": "<?php echo str_replace('"',"",$article_title); ?>",
  "image": {
    "@type": "ImageObject",
    "url": "<?php if($imgURL) { echo "https://www.standardmedia.co.ke".$imgURL; }else{ echo "https://www.standardmedia.co.ke/mobile/amp/resources/sdmv2/images/logo.png";} ?>",
     "height": 460,
    "width": 696
  },
  "datePublished": "<?php echo date('Y-m-d',strtotime($publishdate)).'T'.date('H:i:s',strtotime($publishdate))."+03:00"; ?>",
  "dateModified": "<?php echo date('Y-m-d',strtotime($updateddate)).'T'.date('H:i:s',strtotime($updateddate))."+03:00"; ?>",
  "author": {
    "@type": "Person",
    "name": "<?php if(isset($author)){ echo $author; }else{ ?> Standard Digital News<?php } ?>"
  },
   "publisher": {
    "@type": "Organization",
    "name": "The Standard Digital News",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.standardmedia.co.ke/resources/theme_sdv1/images/standard-digital-logo.png",
      "width": 235,
      "height": 42
    }
  },
  "description": "<?php  echo str_replace('"', '', $description);  ?>"
}
</script>



 
  
<?php
$mml = "";
$catcc = "Home";
                
 if($parentID==9 || $categoryID==9){
            $mml = "lifestyle/";
			$catcc="Lifestyle";
        }
 if($parentID==4 || $categoryID==4){
            $mml = "business/";
			$catcc="Business";
            
        }
		 if($parentID==41 || $categoryID==41){
            $mml = "health/";
			$catcc="Health";
            
        }
		$kecat="";
		 if($parentID==1 || $categoryID==1){
           $catcc="Kenya";
            $kecat = "kenya/";
        }
		 if($parentID==5 || $categoryID==5){
           $catcc="World";
            $kecat = "world/";
        }
?>
<script type="application/ld+json">{"@context":"http://schema.org","@type":"BreadcrumbList","itemListElement":[[{"@type":"ListItem","position":1,"item":{"@id":"https://www.standardmedia.co.ke/<?php echo $mml; ?><?php echo $kecat; ?>","name":"<?php echo $catcc; ?>"}},
{"@type":"ListItem","position":2,"item":{"@id":"https://www.standardmedia.co.ke/<?php echo $mml; ?>category/<?php echo $categoryID; ?>/<?php echo $this->mobile_model->slugify($catname); ?>","name":"<?php echo $catname; ?>"}}]]}
</script>
 <?php
 }

 
 ?>
    <meta name="author" content="<?php
          if (isset($author)) {
              echo $author;
          } else {
              ?> The Standard Digital <?php } ?>"/>
    <?php if (isset($articleID)) { ?>
        <meta content="The Standard Digital"  name="section"/>
        <meta content="The Standard Digital"  name="source"/>
        <meta content="<?php
        echo date("Y-m-d H:i:s", strtotime($updateddate));
        ?>"  name="pubdate"/>
          <?php } ?>
    <meta name="description" content="<?php
    if (isset($description)) {
        echo str_replace('"', '', $description);  
    } else {
        echo "Standard Digital News, Kenya, Africa, Latest News, Breaking news, Nairobi";
    }
    ?>">
    <meta name="keywords" content="<?php
    if (isset($keywords)) {
        echo str_replace(";",", ",$keywords);
    } else {
        echo "Standard Digital News, Kenya, Africa, Latest News, Breaking news, Nairobi";
    }
    ?>">
    <link rel="image_src" href="<?php
    if (isset($thumbURL)) {
        echo "https://www.standardmedia.co.ke" . $thumbURL;
    } else {
        ?><?php echo base_url(); ?>i/standard-digital-world-inner-page.png<?php } ?>">
    <link rel="canonical" href="<?php if (isset($articleID)) { ?>https://www.standardmedia.co.ke/<?php if(isset($parentid)){ if($parentid==4){ echo "business/"; }elseif($parentid==6){ echo "sports/"; }elseif($parentid==9){ echo "lifestyle/"; } }?>article/<?php echo $articleID; ?>/<?php echo $this->mobile_model->slugify($article_title); ?><?php
    } else {
        echo base_url();
    }
    ?>">
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@StandardKenya"/>
    <meta name="twitter:creator" content="@StandardKenya"/>
    <meta property="twitter:title" content="<?php echo str_replace('"','',$title); ?>" />
    <meta property="twitter:description" content="<?php
    if (isset($description)) {
        echo str_replace('"', '', $description);  
    } else {
        echo "Standard Digital News, Kenya, Africa, Latest News, Breaking news, Nairobi";
    }
    ?>" />
    <meta property="twitter:url" content="<?php if (isset($articleID)) { ?>https://www.standardmedia.co.ke/<?php if(isset($parentid)){ if($parentid==4){ echo "business/"; }elseif($parentid==6){ echo "sports/"; }elseif($parentid==9){ echo "lifestyle/"; } }?>article/<?php echo $articleID; ?>/<?php echo $this->mobile_model->slugify($article_title); ?><?php
    } else {
        echo base_url();
    }
    ?>" />
    <meta property="twitter:image" content="<?php
          if (isset($thumbURL)) {
              echo "https://www.standardmedia.co.ke" . $thumbURL;
          } else {
              echo base_url() . "i/standard-digital-world-inner-page.png";
          }
    ?>" />
    <meta property="og:type" content="website" />
    <meta content="118898458656" property="fb:app_id"/>
    <meta property="og:description" 
          content="<?php
          if (isset($description)) {
              echo str_replace('"', '', $description);
          } else {
              echo "Standard Digital News, Kenya, Africa, Latest News, Breaking news, Nairobi";
          }
    ?>" />

    <meta property="og:site_name" content="Standard Digital News" />
    <meta property="og:title"
          content="<?php echo str_replace('"','',$title); ?>">
    <meta property="og:url"
          content="<?php if (isset($articleID)) { ?>https://www.standardmedia.co.ke/<?php if(isset($parentid)){ if($parentid==4){ echo "business/"; }elseif($parentid==6){ echo "sports/"; }elseif($parentid==9){ echo "lifestyle/"; } }?>article/<?php echo $articleID; ?>/<?php echo $this->mobile_model->slugify($article_title); ?><?php
    } else {
        echo base_url();
    }
    ?>">
    <meta property="og:image" content="<?php
    if (isset($thumbURL)) {
        echo "https://www.standardmedia.co.ke" . $thumbURL;
    } else {
        echo base_url() . "i/standard-digital-world-inner-page.png";
    }
    ?>"/>
    
      
    
    <meta property="og:image:secure_url" content="<?php
          if (isset($thumbURL)) {
              echo "https://www.standardmedia.co.ke" . $thumbURL;
          } else {
              echo base_url() . "i/standard-digital-world-inner-page.png";
          }
          ?>"/>
          <?php
          if (isset($articleID)) {
              $relt = $this->mobile_model->get_related_seealso($keywords, $articleID);
              if ($relt->num_rows != "") {
                  ?>
            <?php
            foreach ($relt->result() as $rl):
                ?>
                <meta property="og:see_also" content="https://www.standardmedia.co.ke/article/<?php echo $rl->id; ?>/<?php echo $this->mobile_model->slugify($rl->title); ?>">
            <?php
        endforeach;
    }
}
?>
 
     
 
 
	<?php 
		 $useragent = $_SERVER['HTTP_USER_AGENT'];
   				  $useragent = strtolower($useragent);
				//echo $mybr;
			
if(strrpos($useragent,"android")> 0 )
{ 
				if(isset($categoryID)){
					if($categoryID==0){
						if ((strtotime('2016-03-22 19:50:00') >= strtotime(date('Y-m-d H:i:s'))) && (strtotime('2016-03-22 00:00:00') <= strtotime(date('Y-m-d H:i:s')))) { 
				?>
      <!-- <link rel="stylesheet" type="text/css" href="/flash/safcomroadblock/css/styles.css?<?php// echo date('His'); ?>">!-->
	 
				<?php
						}
					}
				}
				}
				?>	
				
				
<style amp-custom>




    @font-face {
    font-family: roboto;
    src: url(https://www.standardmedia.co.ke/mobile/resources/sdmv2/css/roboto/Roboto-Regular.ttf);
}

@font-face {
    font-family: roboto-bold;
    src: url(https://www.standardmedia.co.ke/mobile/resources/sdmv2/css/roboto/Roboto-Bold.ttf);
}

@font-face {
    font-family: raleway;
    src: url(https://www.standardmedia.co.ke/mobile/resources/sdmv2/css/raleway/Raleway-Regular.ttf);
}

@font-face {
    font-family: raleway-bold;
    src: url(https://www.standardmedia.co.ke/mobile/resources/sdmv2/css/raleway/Raleway-Bold.ttf);
}

html {

}

body {
    font-family: 'raleway', Arial, sans-serif;
    color: #232629;
    font-weight: 200;
    font-size: 16px;
    line-height: 1.5;
    margin: 0px;
    padding: 0px;
}
.saf-menu{
    float: right;
    margin: 0px;
    padding: 0px;
}
.saf-menu li{
    float: left;
    border-left: 1px solid #ccc;
    list-style:none;
    margin-top: 10px;
}
.saf-menu li a{
    font-size: 14px;
    text-transform: uppercase;
    font-weight: bold;
    padding-left: 10px;
    padding-right: 10px;
    line-height: 45px;
}
.topmenu{
    background:#FFF;
    color: #fff;
    -webkit-box-shadow: -1px 2px 5px  #ccc;
    -moz-box-shadow: -1px 2px 5px  #ccc;
    box-shadow: -1px 2px 5px  #ccc;
    border-bottom: 1px solid #ccc;
    margin: 0px;
    width: 100%;
    z-index:999;
    padding: 5px;
    position: fixed;
    -webkit-transform: translate3d(0, 0, 0);
}
.topmenu a{
    color: #333;
    text-decoration: none;    
}
.topmenu .nav-bar{
    font-size: 30px;
    margin-top: 4px;
    padding: 0px 10px;
    float: right;
}
.correct-padding{
    padding-top: 30px;
}
.main-gray{
background: #ededed;
margin-bottom: 20px;
}
.pad-image{
padding: 0px 10px 10px;
}
.main-gray-list{
padding: 0px;
margin: 0px;
}
.main-gray-list li{
list-style:none;
padding: 0px 10px 20px;
}
.popularimg, .top-list{
width: 110px;
height: 75px;
overflow:hidden;
float: left;
margin-right: 10px;
}
.popularimg img, .top-list img{
width: 100%;
}
.main-gray-list li a{
    display: block;
    position: relative;
     font-size: 16px;
    line-height: 22px;
    font-family: 'roboto-bold',arial;
    color: #281e1e;
} 
.clr{
    clear: both;
}
.logo{
    width: 154px;
    height: 30px;
    float: left;
    margin-left: 0px;
}
#sb-site, .sb-site-container {
    padding: 0px;
}
 

html.sb-active #sb-site, .sb-toggle-left, .sb-toggle-right, .sb-open-left, .sb-open-right, .sb-close {
    cursor: pointer;
}

/* Fixed position examples */
#sb-site.top-padding {
    padding-top: 50px;
}

#fixed-top {
    position: fixed;
    top: 0;
    width: 100%;
    height: 50px;
    background-color: red;
    z-index: 4;
}

#fixed-top span.sb-toggle-left {
    float: left;
    color: white;
    padding: 10px;
}
.toggle_button{
    border: none;
    outline: none;
    color:#F62F61;
    float: left;
    background: transparent;
     
}
.toggle_button :hover{
    border: none;
    outline: none;
    color:#E51C20;
    float: left;
    background: transparent;
     
}
.setmargin{
  padding-top: 0px; 
  margin-top: 25px;
}
.toggle_button1{
    border: none;
    float: right;
    color: #FFF;
    margin: 10px 10px 0px 0px;
    background: transparent;
    
}.sb-toggle-right{
    float: right; 
}
#fixed-top span.sb-toggle-right {
    float: right;
    color: white;
    padding: 10px;
}
.desktop-menu ul{
    margin: 0px;
    padding: 0px;
     
}
.desktop-menu{
    margin: 0px;
    padding: 0px;
}

.tagscont{
   padding: 1px;
   background:transparent;
   color: #333;
   height: auto;
   margin-right: 2px;
   bottom: 0;
   /*position: absolute;*/
   text-align: left;
    
   padding: 5px;
  
}
.tagscont .tagsmix {
    float: left;
    color: #333 !important;
    font-weight: bold;
    margin-right: 10px;
    padding: 10px 0px;
}
.tags{
    position: relative;
    padding: 3px 7px;
    margin: 5px 5px 5px 0;
    text-decoration: none;
    font-size: 16px;
    border-radius: 50px;
    display: inline-block;
    color: #F62F61;
    border: 1px solid #F62F61;
}
.tags a{
	color: #858585;
}
 
.container{
margin-top:30px;
padding:0px; 

}
.slidebar{
padding:14px;
color:#FFF;
}
.desktop-menu li{
    list-style: none;
    margin-top: 0px;
    text-transform: uppercase;
    margin-bottom: 10px;
    border-bottom: 1px solid #333;
    margin-left: 10px;
}
.desktop-menu ul li{

    list-style: none;
    text-transform: none;
    border: 0px;
}
.desktop-menu ul li a{
    display: block;
    padding-bottom: 0px;
    color: #fff;
    line-height: 18px;
    font-size: 15px;
    text-decoration: none;
}
.desktop-menu li a{
    color: #fff;
    font-size: 20px;
    line-height: 40px;
    margin-bottom: 20px;

}
.drop-main-menus{
    margin-left: 20px;
}
.main-m{
    color: #fff;
    text-decoration: none;
}
.top-item{
    margin-top: 20px;
}
.home-top-img{
    width: 100%;
    /*margin-bottom: 10px*/
}
.home-top-img img{
    width: 100%;
}
.main-story h1{
    font-size: 25px;
    margin-top: 10px;
    font-family: 'roboto-bold', Arial, sans-serif;
}
.main-story .snipe {
    position: absolute;
    z-index: 1;
    line-height: 24px;
    background: #2665B0;
    color: #fff;
    font-size: 20px;
    padding: 5px;
    text-transform: uppercase;
    font-family: 'roboto-bold', Arial, sans-serif;

}
.other-top-stories{
    margin-bottom: 20px;
    border-bottom: 1px solid #ccc;
}
.grey-2 h6{
    font-size: 15px;
    line-height: 20px;
    font-family: 'roboto', Arial, sans-serif;
    margin-top: 0px;
    font-weight: 300;
}
.other-top-stories h1{
    font-size: 20px;
    line-height: 24px;
    font-family: 'roboto', Arial, sans-serif;
    margin-top: 10px;
    font-weight: 300;
}
.grey-2{
    margin-bottom: 20px;
}
.home-top-img-other{
    width:100%;
    height: 175px;
    overflow: hidden;
    margin-bottom: 5px;
}
.home-top-img-other img{
    width: 100%;
}
.time{
    color: #999;
    font-size: 12px;
}
.white{
    font-size: 18px;
    font-family: 'raleway', Arial, sans-serif;
}
.white h1{
    margin-top: 0px;
    /*margin-bottom: 20px;*/
}
.main-story{
    margin-bottom: 20px;
}
.clearboth{
    clear: both;
}
.cat-str{
    margin: 0px;
    padding: 0px;
}
.time-x{
    font-size: 12px;
    color: #999;
    font-weight: 100;
}
.brpop{
background: #333;
color: #fff;
position: fixed;
bottom: 0px;
width: 100%;
padding: 20px 10px 10px;
z-index: 999;
}
.brclose{
float: right;
    color: #ccc;
    cursor: pointer;
    width: 30px;
    font-weight: bold;
    height: 20px;
    margin-right: -15px;
    margin-top: -15px;
    font-size: 19px;
}
.brpop h3{
background: #ff0000;
color: #fff;
float: left;
padding: 5px 10px;
margin-left: -10px;
margin-top: -36px;
margin-bottom: 0px;
}
.sub-news{
	background: #ededed;
	color: #333;
	padding: 20px 10px;
	margin-bottom: 10px;
}
.sub-news h3{
	margin-top: 0px;
	margin-bottom: 10px;
	font-size: 15px;
}
.sub-news input[type=text]{
	padding: 7px;
	border: solid 1px #ccc;
	margin-bottom: 10px;
	color: #000;
	width: 100%;
}
.sub-news input[type=submit]{
	/*background: #000; */
	color: #fff;
	background:  #2665B0;
	border: 0px;
	padding: 7px;
	width: 30%;
}
.clr{
clear: both;
}
.msg{
padding-right: 20px;}
.cat-str li {
    border-bottom: 1px solid #d0d0d0;
    list-style: none;
    padding: 10px 0px;
    font-family: 'raleway', Arial, sans-serif;
}
.cat-str li{
    font-size: 15px;
}
.cat-str li h4{
    font-size: 17px;
    line-height: 20px;

}
.doc-title{
    float: left;
    padding-bottom: 10px;
    font-weight: 700;
    margin-top: 0px;
    border-bottom: 3px solid #E51C20;
    margin-bottom: 20px;
    text-transform: uppercase;
}
.dl-link-more{
background: #ddd;
text-align: center;
width: 100%;
clear: both;
}
.dl-link-more a{
display: block;
padding: 10px;
color: #333;
    font-family: 'roboto-bold', Arial, sans-serif;
text-decoration:none;
}
.default-theme{
    background: #2665B0;
}
.blue-theme{
    background: #03cdff;
}
.pink-theme{
    background: #f09;
}
.pulse-theme{
    background: #90C73E;
}
.default-theme-border{
    border-bottom: 3px solid #2665B0;
}
.blue-theme-border{
    border-bottom:3px solid #03cdff;
}
.pink-theme-border{
    border-bottom: 3px solid #f09;
}
.pulse-theme-border{
    border-bottom:  3px solid #90C73E
}
.white-2{
    margin-top: 20px;
}
.top-cat-img{
    width: 100%;
    height: 220px;
    overflow: hidden;
}
.top-cat-img img{
    width: 100%;
}
.gray-bg{
    background: #ededed;
    padding: 20px;
    text-align:center;
}
.gray-bg-inner{
    background: #ededed;
    text-align:center;  
    margin: 0px 0px 20px 0px; 
    padding: 10px 0px;
}
.adv{
    width: 300px;
    margin: auto;
}
.art-title{
    font-family: 'roboto-bold', Arial, sans-serif;
    font-size: 24px;
}
.content{
    margin-top: 10px;
    font-size: 17px;
    line-height: 24px;
    font-family: 'raleway', Arial, sans-serif;
}
.content a{
color: #2665B0;
}
.content img{
    max-width: 100%;
}
.author{
    color: #999;
    font-size: 12px;
}

figure{
    margin: 0px;
    padding: 0px;
}
figcaption{
    font-style: italic;
    font-size: 12px;
    margin-bottom: 10px;
    font-family: 'roboto-bold', Arial, sans-serif;
}
.article-adv{
    padding: 10px 0px;
    width: 300px;
    margin: auto;
}
.nonpadding{
      margin-top: 20px;
}
.sim-img{
    width: 100%;
    height: 86px;
    overflow: hidden;
}
.sim-img img{
    width: 100%;
}
.article_right ul{
    margin: 0px;
    padding: 0px;
}
.article_right ul li{
    list-style: none;
    padding-bottom: 20px;
    margin-bottom: 20px;
    border-bottom: 1px solid #ccc;
}
.article_right ul li .t-img{
    float: left;
    width: 35%;
    height: 75px;
    overflow: hidden;
    margin-right: 20px;
}
.article_right ul li h3{
    font-size: 17px;
    line-height: 21px;
    font-family: 'roboto', Arial, sans-serif;
    margin-top: 0px;
    font-weight: 300;
}
.t-img img{
    width: 100%;
}
.latest-h3{
    margin-top: 20px;
    padding-bottom: 10px;
    float: left;
    text-transform: uppercase;
}
.cat-page-main{
    height: 250px;
    width: 100%;
    overflow:hidden;
    margin-bottom: 10px;
}
.cat-page-main img{
    width: 100%;
}
.main-cat-header{
    font-size: 27px;
    line-height: 29px;
    font-family: 'roboto', Arial, sans-serif;
    width: 100%;
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
    margin-top: 0px;
}
.main-cat-list{
    margin: 0px;
    padding: 0px;
    font-family: 'raleway', Arial, sans-serif;
    font-size: 17px;
}
.main-cat-list li{
    border-bottom: 1px solid #ccc;
    padding: 10px 0px;
    list-style: none;
}
.main-cat-header-other{
    font-size: 18px;
    font-family: 'roboto', Arial, sans-serif;
    margin-bottom: 0px;
}
.cat-page-main-other{
    height: 120px;
    overflow: hidden;
}
.m-inner{
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #ccc;
}
.cat-page-more-str{
    height: 180px;
    overflow:hidden;
}
.main-cat-header-other-str{
    font-size: 18px;
    font-family: 'roboto', Arial, sans-serif;
    margin-bottom: 0px;
}
.more-cat-stories{
    margin-bottom: 20px;
}
nav{
    margin-bottom: 20px;
    margin-top: 20px;
}
nav a{
    border: solid 1px #03cdff;
    padding: 5px 10px;
}
nav strong{
    padding: 5px 10px;
    color: #999;
}
.footer {
    background: #252525;
    color: #fff;
}
.dark {
    padding: 0px 20px;
}
.footer-tab {
    padding: 20px;
}
.footer-tab h3 {
    border-bottom: #2665B0 3px solid;
    padding-bottom: 10px;
    margin-top: 0px;
    text-transform: uppercase;
}
.footer ul {
    margin: 0px;
    padding: 0px;
    font-family: "raleway", Helvetica, Arial, sans-serif;
}
.footer ul li {
    list-style: none;
}
.footer a {
    color: #fff;
    line-height: 25px;
}
.mx{
    margin-top: 20px;
}
.terms{
    margin-top: 20px;
}
.story-social-plugins{
    margin: 10px 0px;
}
.story-social-plugins img{
    margin-right: 10px;
}
.article_pagination{
    font-size: 21px;
    margin-top: 20px;
    margin-bottom: 20px;
}
.article_pagination strong{
    padding: 5px;

}
.article_pagination a{
    padding: 5px;
    font-family: 'roboto-bold';
    color: #2665B0;
}
.story-social-plugins span{
    font-family: "roboto-bold", Helvetica, Arial, sans-serif;
    display: block;
}
.video_iframe{
    width: 100%;
    height: 446px;
}
.img-gl img{
    width: 100%;
}
.img-gl{
    width: 100%;
    height: 120px;
    overflow: hidden;
}
.mid-recommend{
    font-size: 20px;
    font-family: "roboto-bold", Helvetica, Arial, sans-serif;
    padding: 10px 0px;
}
.columns ul{
    margin: 0px;
    padding: 0px;
}
.columns ul li{
    list-style: none;
    font-size: 15px;
    padding-bottom: 4px;
    margin-bottom: 20px;
    border-bottom: 1px solid #ccc;
    font-family: "raleway", Helvetica, Arial, sans-serif;
}
.atl-img{
    width: 25%;
    float: left;
    margin-right: 20px;
    margin-bottom: 20px;
}
.columns ul li .col-name{
    font-family: "roboto-bold", Helvetica, Arial, sans-serif;

}
.mid-recommend a{
    color: #FF0099;
    font-family: "roboto-bold", Helvetica, Arial, sans-serif;
}
.mid-recommend h5 span{
border-bottom: 3px solid #FF0099;
}
.mid-recommend h5{
    font-family: "roboto-bold", Helvetica, Arial, sans-serif;
font-size: 20px;
margin-top: 0px;
margin-bottom: 10px;
}
.mid-recommend li{
color: #FF0099;
font-size: 20px;
margin-bottom: 5px;
}
.mid-recommend li span{
color: #333;
font-size: 15px;
}
.mid-recommend ul{
margin: 0px;
padding-left: 20px;
}
.trending-stories{
    margin: 0px 0px 10px 0px;
    padding: 0px;
}
.trending-stories li{
    list-style: none;
    font-size: 17px;
    border-bottom: 1px solid #ccc;
    font-family: 'raleway', Arial, sans-serif;
    padding: 10px 0px;
}
trending-stories li a{

}
.nav-link{
border-radius:5px;border-color:#F62F61;
}
.search-val{
    margin-bottom: 20px;
    border: solid 1px #ededed;
}
.search-bx{
    background: #ededed;
    border: solid 1px #ccc;
    padding: 20px;
    margin-bottom: 20px;
}
.search-bx input[type="submit"]{
    background: #2665B0;
    color: #fff;
    border: 0px;
    margin-left: 20px;
    padding: 7px 10px;
}
.search-bx input[type="text"]{
    padding: 7px;
    min-width: 200px;
    margin-right: 20px;
    border: solid 1px #ededed;
}
.search-val .title-link{
    color: #1a0dab;
    font-weight: bold;
    font-size: 18px;
    display: block;
}
.search-val{
    color: #303030;
}
.time-search{
    color: #666;
    font-weight: bold;
}
.latest-home{
    font-size: 20px;
    margin-top: 10px;
    text-transform: uppercase;
    padding-bottom: 10px;
    float: left;
    margin-top: 0px;
}
.main-latest{
    font-size: 22px;
    font-family: "roboto-bold", Helvetica, Arial, sans-serif;
    border-bottom: 1px solid #ccc;
    padding-bottom: 20px;
}
.latest-story-img{
    width: 100%;
    height: 223px;
    overflow: hidden;
}
.latest-story-img img{
    width: 100%;
}
.time-3{
    color: #999;
    font-size: 12px;
}

@media only screen and (max-width : 1008px) {
.top-cat-img{
    width: 100%;
    height: 482px;
    overflow: hidden;
}
}
@media only screen and (max-width : 768px) {
    /* Styles */
    .nopadding {
        padding-left: 0  ;
        padding-right: 0  ;
    }
    .cat-page-main-other, .cat-page-more-str{
        width: 100%; height: 320px;
    }
    .img-gl{
        height:180px;
    }
    .top-cat-img, .home-top-img-other {
        height: 320px;
    }
    .sim-img{
        height: 123px   ;  
    }
    .more-cat-stories{
        padding: 10px;
    }
    .article_right ul li .t-img{
        float: left;
        width: 45%;
        height: 140px;
    }
    .video_iframe{
        width: 100%;
        height: 320px;
    }
    .latest-story-img{

        height: 320px;
    }
}
@media only screen and (max-width : 600px) {
    /* Styles */
    .nopadding {
        padding-left: 0  ;
        padding-right: 0  ;
    }
    .img-gl{
        height:200px;
    }
    .more-cat-stories{
        border-bottom: 1px solid #ccc;
        padding-bottom: 20px;
    }
    .cat-page-main-other, .cat-page-more-str{
        width: 100%; height: 200px;
    }
    .top-cat-img, .home-top-img-other {
        height: 200px;
    }
    .sim-img{
        height: 90px   ;  
        width:45%;
        float: left;
        margin-right: 20px;
        margin-bottom: 20px;
    }
    .small-divs{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        font-family: "roboto-bold", Helvetica, Arial, sans-serif;
        font-size: 17px;
        line-height: 21px;

    }
    
    .col-xs-4{
        width: 100%  ;
    }
    .article_right ul li .t-img{
        height: 130px;
    }
    .latest-story-img{

        height: 250px;
    }
    .video_iframe{
        width: 100%;
        height: 250px;
    }
}
@media only screen and (max-width : 480px) {
    .latest-story-img{

        height: 220px;
    }
    .nopadding {
        padding-left: 0  ;
        padding-right: 0  ;
    }
}
@media only screen and (max-width : 320px) {
    /* Styles */
    .nopadding {
        padding-left: 0  ;
        padding-right: 0  ;
    }
}
    


html,body,#sb-site,.sb-site-container,.sb-slidebar{margin:0;padding:0;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html,body{width:100%;overflow-x:hidden}html{height:100%}body{min-height:100%;height:auto;position:relative}html.sb-scroll-lock.sb-active:not(.sb-static){overflow:hidden}#sb-site,.sb-site-container{width:100%;min-height:100vh;position:relative;z-index:1;background-color:#ffffff}#sb-site:before,#sb-site:after,.sb-site-container:before,.sb-site-container:after{content:' ';display:table}#sb-site:before,#sb-site:after,.sb-site-container:before,.sb-site-container:after{clear:both}.sb-slidebar{height:100%;overflow-y:auto;position:fixed;top:0;z-index:0;display:none;background-color:#222222}.sb-slidebar,.sb-slidebar *{-webkit-transform:translateZ( 0px )}.sb-left{left:0}.sb-right{right:0}html.sb-static .sb-slidebar,.sb-slidebar.sb-static{position:absolute}.sb-slidebar.sb-active{display:block}.sb-style-overlay{z-index:9999}.sb-momentum-scrolling{-webkit-overflow-scrolling:touch}.sb-slidebar{width:30%}.sb-width-thin{width:15%}.sb-width-wide{width:45%}@media (max-width: 480px){.sb-slidebar{width:70%}.sb-width-thin{width:55%}.sb-width-wide{width:85%}}@media (min-width: 481px){.sb-slidebar{width:55%}.sb-width-thin{width:40%}.sb-width-wide{width:70%}}@media (min-width: 768px){.sb-slidebar{width:40%}.sb-width-thin{width:25%}.sb-width-wide{width:55%}}@media (min-width: 992px){.sb-slidebar{width:30%}.sb-width-thin{width:15%}.sb-width-wide{width:45%}}@media (min-width: 1200px){.sb-slidebar{width:20%}.sb-width-thin{width:5%}.sb-width-wide{width:35%}}.sb-slide,#sb-site,.sb-site-container,.sb-slidebar{-webkit-transform:translate( 0px );-moz-transform:translate( 0px );-o-transform:translate( 0px );transform:translate( 0px );-webkit-transition:-webkit-transform 400ms ease;-moz-transition:-moz-transform 400ms ease;-o-transition:-o-transform 400ms ease;transition:transform 400ms ease;-webkit-transition-property:-webkit-transform, left, right;-webkit-backface-visibility:hidden}
.sb-hide{display:none}

.clearfix:before,.clearfix:after,.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after,.form-horizontal .form-group:before,.form-horizontal .form-group:after,.btn-toolbar:before,.btn-toolbar:after,.btn-group-vertical>.btn-group:before,.btn-group-vertical>.btn-group:after,.nav:before,.nav:after,.navbar:before,.navbar:after,.navbar-header:before,.navbar-header:after,.navbar-collapse:before,.navbar-collapse:after,.pager:before,.pager:after,.panel-body:before,.panel-body:after,.modal-footer:before,.modal-footer:after{display:table;content:" "}.clearfix:after,.container:after,.container-fluid:after,.row:after,.form-horizontal .form-group:after,.btn-toolbar:after,.btn-group-vertical>.btn-group:after,.nav:after,.navbar:after,.navbar-header:after,.navbar-collapse:after,.pager:after,.panel-body:after,.modal-footer:after{clear:both}.center-block{display:block;margin-right:auto;margin-left:auto}html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{color:#000;background:#ff0}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{height:0;-moz-box-sizing:content-box;box-sizing:content-box}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid #c0c0c0}legend{padding:0;border:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-spacing:0;border-collapse:collapse}td,th{padding:0}@media print{*{color:#000;text-shadow:none;background:transparent;box-shadow:none}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}abbr[title]:after{content:" (" attr(title) ")"}a[href^="javascript:"]:after,a[href^="#"]:after{content:""}pre,blockquote{border:1px solid #999;page-break-inside:avoid}thead{display:table-header-group}tr,img{page-break-inside:avoid}img{max-width:100%}p,h2,h3{orphans:3;widows:3}h2,h3{page-break-after:avoid}select{background:#fff}.navbar{display:none}.table td,.table th{background-color:#fff}.btn>.caret,.dropup>.btn>.caret{border-top-color:#000}.label{border:1px solid #000}.table{border-collapse:collapse}.table-bordered th,.table-bordered td{border:1px solid #ddd}}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:62.5%;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}input,button,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#1b242f;text-decoration:none}a:hover,a:focus{color:#e74c3c;text-decoration:underline}a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}figure{margin:0}img{vertical-align:middle}.img-responsive,.thumbnail>img,.thumbnail a>img,.carousel-inner>.item>img,.carousel-inner>.item>a>img{display:block;max-width:100%;height:auto}.img-rounded{border-radius:6px}.img-thumbnail{display:inline-block;max-width:100%;height:auto;padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;transition:all .2s ease-in-out}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid none}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h1 small,h2 small,h3 small,h4 small,h5 small,h6 small,.h1 small,.h2 small,.h3 small,.h4 small,.h5 small,.h6 small,h1 .small,h2 .small,h3 .small,h4 .small,h5 .small,h6 .small,.h1 .small,.h2 .small,.h3 .small,.h4 .small,.h5 .small,.h6 .small{font-weight:normal;line-height:1;color:#999}h1,.h1,h2,.h2,h3,.h3{margin-top:20px;margin-bottom:10px}h1 small,.h1 small,h2 small,.h2 small,h3 small,.h3 small,h1 .small,.h1 .small,h2 .small,.h2 .small,h3 .small,.h3 .small{font-size:65%}h4,.h4,h5,.h5,h6,.h6{margin-top:10px;margin-bottom:10px}h4 small,.h4 small,h5 small,.h5 small,h6 small,.h6 small,h4 .small,.h4 .small,h5 .small,.h5 .small,h6 .small,.h6 .small{font-size:75%}h1,.h1{font-size:36px}h2,.h2{font-size:30px}h3,.h3{font-size:24px}h4,.h4{font-size:18px}h5,.h5{font-size:14px}h6,.h6{font-size:12px}p{margin:0 0 10px}.lead{margin-bottom:20px;font-size:16px;font-weight:200;line-height:1.4}@media(min-width:768px){.lead{font-size:21px}}.page-header{padding-bottom:9px;margin:40px 0 20px;border-bottom:1px solid none}ul,ol{margin-top:0;margin-bottom:10px}ul ul,ol ul,ul ol,ol ol{margin-bottom:0}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;margin-left:-5px;list-style:none}.list-inline>li{display:inline-block;padding-right:5px;padding-left:5px}dl{margin-top:0;margin-bottom:20px}dt,dd{line-height:1.42857143}dt{font-weight:bold}dd{margin-left:0}@media(min-width:768px){.dl-horizontal dt{float:left;width:160px;overflow:hidden;clear:left;text-align:right;text-overflow:ellipsis;white-space:nowrap}.dl-horizontal dd{margin-left:180px}}abbr[title],abbr[data-original-title]{cursor:help;border-bottom:1px dotted #999}.initialism{font-size:90%;text-transform:uppercase}blockquote{padding:10px 20px;margin:0 0 20px;font-size:17.5px;border-left:5px solid none}blockquote p:last-child,blockquote ul:last-child,blockquote ol:last-child{margin-bottom:0}blockquote footer,blockquote small,blockquote .small{display:block;font-size:80%;line-height:1.42857143;color:#999}blockquote footer:before,blockquote small:before,blockquote .small:before{content:'\2014 \00A0'}.blockquote-reverse,blockquote.pull-right{padding-right:15px;padding-left:0;text-align:right;border-right:5px solid none;border-left:0}.blockquote-reverse footer:before,blockquote.pull-right footer:before,.blockquote-reverse small:before,blockquote.pull-right small:before,.blockquote-reverse .small:before,blockquote.pull-right .small:before{content:''}.blockquote-reverse footer:after,blockquote.pull-right footer:after,.blockquote-reverse small:after,blockquote.pull-right small:after,.blockquote-reverse .small:after,blockquote.pull-right .small:after{content:'\00A0 \2014'}blockquote:before,blockquote:after{content:""}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media(min-width:768px){.container{width:750px}}@media(min-width:992px){.container{width:970px}}@media(min-width:1200px){.container{width:1170px}}.container-fluid{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{margin-right:-15px;margin-left:-15px}.col-xs-1,.col-sm-1,.col-md-1,.col-lg-1,.col-xs-2,.col-sm-2,.col-md-2,.col-lg-2,.col-xs-3,.col-sm-3,.col-md-3,.col-lg-3,.col-xs-4,.col-sm-4,.col-md-4,.col-lg-4,.col-xs-5,.col-sm-5,.col-md-5,.col-lg-5,.col-xs-6,.col-sm-6,.col-md-6,.col-lg-6,.col-xs-7,.col-sm-7,.col-md-7,.col-lg-7,.col-xs-8,.col-sm-8,.col-md-8,.col-lg-8,.col-xs-9,.col-sm-9,.col-md-9,.col-lg-9,.col-xs-10,.col-sm-10,.col-md-10,.col-lg-10,.col-xs-11,.col-sm-11,.col-md-11,.col-lg-11,.col-xs-12,.col-sm-12,.col-md-12,.col-lg-12{position:relative;min-height:1px;padding-right:15px;padding-left:0px}.col-xs-1,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9,.col-xs-10,.col-xs-11,.col-xs-12{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:0}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:0}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media(min-width:768px){.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:0}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:0}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media(min-width:992px){.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:0}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:0}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}@media(min-width:1200px){.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:100%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:0}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:0}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}@font-face{font-family:'Glyphicons Halflings';src:url('../fonts/glyphicons-halflings-regular.eot');src:url('../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'),url('../fonts/glyphicons-halflings-regular.woff') format('woff'),url('../fonts/glyphicons-halflings-regular.ttf') format('truetype'),url('../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg')}.glyphicon{position:relative;top:1px;display:inline-block;font-family:'Glyphicons Halflings';font-style:normal;font-weight:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.glyphicon-asterisk:before{content:"\2a"}.glyphicon-plus:before{content:"\2b"}.glyphicon-euro:before{content:"\20ac"}.glyphicon-minus:before{content:"\2212"}.glyphicon-cloud:before{content:"\2601"}.glyphicon-envelope:before{content:"\2709"}.glyphicon-pencil:before{content:"\270f"}.glyphicon-glass:before{content:"\e001"}.glyphicon-music:before{content:"\e002"}.glyphicon-search:before{content:"\e003"}.glyphicon-heart:before{content:"\e005"}.glyphicon-star:before{content:"\e006"}.glyphicon-star-empty:before{content:"\e007"}.glyphicon-user:before{content:"\e008"}.glyphicon-film:before{content:"\e009"}.glyphicon-th-large:before{content:"\e010"}.glyphicon-th:before{content:"\e011"}.glyphicon-th-list:before{content:"\e012"}.glyphicon-ok:before{content:"\e013"}.glyphicon-remove:before{content:"\e014"}.glyphicon-zoom-in:before{content:"\e015"}.glyphicon-zoom-out:before{content:"\e016"}.glyphicon-off:before{content:"\e017"}.glyphicon-signal:before{content:"\e018"}.glyphicon-cog:before{content:"\e019"}.glyphicon-trash:before{content:"\e020"}.glyphicon-home:before{content:"\e021"}.glyphicon-file:before{content:"\e022"}.glyphicon-time:before{content:"\e023"}.glyphicon-road:before{content:"\e024"}.glyphicon-download-alt:before{content:"\e025"}.glyphicon-download:before{content:"\e026"}.glyphicon-upload:before{content:"\e027"}.glyphicon-inbox:before{content:"\e028"}.glyphicon-play-circle:before{content:"\e029"}.glyphicon-repeat:before{content:"\e030"}.glyphicon-refresh:before{content:"\e031"}.glyphicon-list-alt:before{content:"\e032"}.glyphicon-lock:before{content:"\e033"}.glyphicon-flag:before{content:"\e034"}.glyphicon-headphones:before{content:"\e035"}.glyphicon-volume-off:before{content:"\e036"}.glyphicon-volume-down:before{content:"\e037"}.glyphicon-volume-up:before{content:"\e038"}.glyphicon-qrcode:before{content:"\e039"}.glyphicon-barcode:before{content:"\e040"}.glyphicon-tag:before{content:"\e041"}.glyphicon-tags:before{content:"\e042"}.glyphicon-book:before{content:"\e043"}.glyphicon-bookmark:before{content:"\e044"}.glyphicon-print:before{content:"\e045"}.glyphicon-camera:before{content:"\e046"}.glyphicon-font:before{content:"\e047"}.glyphicon-bold:before{content:"\e048"}.glyphicon-italic:before{content:"\e049"}.glyphicon-text-height:before{content:"\e050"}.glyphicon-text-width:before{content:"\e051"}.glyphicon-align-left:before{content:"\e052"}.glyphicon-align-center:before{content:"\e053"}.glyphicon-align-right:before{content:"\e054"}.glyphicon-align-justify:before{content:"\e055"}.glyphicon-list:before{content:"\e056"}.glyphicon-indent-left:before{content:"\e057"}.glyphicon-indent-right:before{content:"\e058"}.glyphicon-facetime-video:before{content:"\e059"}.glyphicon-picture:before{content:"\e060"}.glyphicon-map-marker:before{content:"\e062"}.glyphicon-adjust:before{content:"\e063"}.glyphicon-tint:before{content:"\e064"}.glyphicon-edit:before{content:"\e065"}.glyphicon-share:before{content:"\e066"}.glyphicon-check:before{content:"\e067"}.glyphicon-move:before{content:"\e068"}.glyphicon-step-backward:before{content:"\e069"}.glyphicon-fast-backward:before{content:"\e070"}.glyphicon-backward:before{content:"\e071"}.glyphicon-play:before{content:"\e072"}.glyphicon-pause:before{content:"\e073"}.glyphicon-stop:before{content:"\e074"}.glyphicon-forward:before{content:"\e075"}.glyphicon-fast-forward:before{content:"\e076"}.glyphicon-step-forward:before{content:"\e077"}.glyphicon-eject:before{content:"\e078"}.glyphicon-chevron-left:before{content:"\e079"}.glyphicon-chevron-right:before{content:"\e080"}.glyphicon-plus-sign:before{content:"\e081"}.glyphicon-minus-sign:before{content:"\e082"}.glyphicon-remove-sign:before{content:"\e083"}.glyphicon-ok-sign:before{content:"\e084"}.glyphicon-question-sign:before{content:"\e085"}.glyphicon-info-sign:before{content:"\e086"}.glyphicon-screenshot:before{content:"\e087"}.glyphicon-remove-circle:before{content:"\e088"}.glyphicon-ok-circle:before{content:"\e089"}.glyphicon-ban-circle:before{content:"\e090"}.glyphicon-arrow-left:before{content:"\e091"}.glyphicon-arrow-right:before{content:"\e092"}.glyphicon-arrow-up:before{content:"\e093"}.glyphicon-arrow-down:before{content:"\e094"}.glyphicon-share-alt:before{content:"\e095"}.glyphicon-resize-full:before{content:"\e096"}.glyphicon-resize-small:before{content:"\e097"}.glyphicon-exclamation-sign:before{content:"\e101"}.glyphicon-gift:before{content:"\e102"}.glyphicon-leaf:before{content:"\e103"}.glyphicon-fire:before{content:"\e104"}.glyphicon-eye-open:before{content:"\e105"}.glyphicon-eye-close:before{content:"\e106"}.glyphicon-warning-sign:before{content:"\e107"}.glyphicon-plane:before{content:"\e108"}.glyphicon-calendar:before{content:"\e109"}.glyphicon-random:before{content:"\e110"}.glyphicon-comment:before{content:"\e111"}.glyphicon-magnet:before{content:"\e112"}.glyphicon-chevron-up:before{content:"\e113"}.glyphicon-chevron-down:before{content:"\e114"}.glyphicon-retweet:before{content:"\e115"}.glyphicon-shopping-cart:before{content:"\e116"}.glyphicon-folder-close:before{content:"\e117"}.glyphicon-folder-open:before{content:"\e118"}.glyphicon-resize-vertical:before{content:"\e119"}.glyphicon-resize-horizontal:before{content:"\e120"}.glyphicon-hdd:before{content:"\e121"}.glyphicon-bullhorn:before{content:"\e122"}.glyphicon-bell:before{content:"\e123"}.glyphicon-certificate:before{content:"\e124"}.glyphicon-thumbs-up:before{content:"\e125"}.glyphicon-thumbs-down:before{content:"\e126"}.glyphicon-hand-right:before{content:"\e127"}.glyphicon-hand-left:before{content:"\e128"}.glyphicon-hand-up:before{content:"\e129"}.glyphicon-hand-down:before{content:"\e130"}.glyphicon-circle-arrow-right:before{content:"\e131"}.glyphicon-circle-arrow-left:before{content:"\e132"}.glyphicon-circle-arrow-up:before{content:"\e133"}.glyphicon-circle-arrow-down:before{content:"\e134"}.glyphicon-globe:before{content:"\e135"}.glyphicon-wrench:before{content:"\e136"}.glyphicon-tasks:before{content:"\e137"}.glyphicon-filter:before{content:"\e138"}.glyphicon-briefcase:before{content:"\e139"}.glyphicon-fullscreen:before{content:"\e140"}.glyphicon-dashboard:before{content:"\e141"}.glyphicon-paperclip:before{content:"\e142"}.glyphicon-heart-empty:before{content:"\e143"}.glyphicon-link:before{content:"\e144"}.glyphicon-phone:before{content:"\e145"}.glyphicon-pushpin:before{content:"\e146"}.glyphicon-usd:before{content:"\e148"}.glyphicon-gbp:before{content:"\e149"}.glyphicon-sort:before{content:"\e150"}.glyphicon-sort-by-alphabet:before{content:"\e151"}.glyphicon-sort-by-alphabet-alt:before{content:"\e152"}.glyphicon-sort-by-order:before{content:"\e153"}.glyphicon-sort-by-order-alt:before{content:"\e154"}.glyphicon-sort-by-attributes:before{content:"\e155"}.glyphicon-sort-by-attributes-alt:before{content:"\e156"}.glyphicon-unchecked:before{content:"\e157"}.glyphicon-expand:before{content:"\e158"}.glyphicon-collapse-down:before{content:"\e159"}.glyphicon-collapse-up:before{content:"\e160"}.glyphicon-log-in:before{content:"\e161"}.glyphicon-flash:before{content:"\e162"}.glyphicon-log-out:before{content:"\e163"}.glyphicon-new-window:before{content:"\e164"}.glyphicon-record:before{content:"\e165"}.glyphicon-save:before{content:"\e166"}.glyphicon-open:before{content:"\e167"}.glyphicon-saved:before{content:"\e168"}.glyphicon-import:before{content:"\e169"}.glyphicon-export:before{content:"\e170"}.glyphicon-send:before{content:"\e171"}.glyphicon-floppy-disk:before{content:"\e172"}.glyphicon-floppy-saved:before{content:"\e173"}.glyphicon-floppy-remove:before{content:"\e174"}.glyphicon-floppy-save:before{content:"\e175"}.glyphicon-floppy-open:before{content:"\e176"}.glyphicon-credit-card:before{content:"\e177"}.glyphicon-transfer:before{content:"\e178"}.glyphicon-cutlery:before{content:"\e179"}.glyphicon-header:before{content:"\e180"}.glyphicon-compressed:before{content:"\e181"}.glyphicon-earphone:before{content:"\e182"}.glyphicon-phone-alt:before{content:"\e183"}.glyphicon-tower:before{content:"\e184"}.glyphicon-stats:before{content:"\e185"}.glyphicon-sd-video:before{content:"\e186"}.glyphicon-hd-video:before{content:"\e187"}.glyphicon-subtitles:before{content:"\e188"}.glyphicon-sound-stereo:before{content:"\e189"}.glyphicon-sound-dolby:before{content:"\e190"}.glyphicon-sound-5-1:before{content:"\e191"}.glyphicon-sound-6-1:before{content:"\e192"}.glyphicon-sound-7-1:before{content:"\e193"}.glyphicon-copyright-mark:before{content:"\e194"}.glyphicon-registration-mark:before{content:"\e195"}.glyphicon-cloud-download:before{content:"\e197"}.glyphicon-cloud-upload:before{content:"\e198"}.glyphicon-tree-conifer:before{content:"\e199"}.glyphicon-tree-deciduous:before{content:"\e200"}.caret{display:inline-block;width:0;height:0;margin-left:2px;vertical-align:middle;border-top:4px solid;border-right:4px solid transparent;border-left:4px solid transparent}.panel{margin-bottom:20px;background-color:#fff;border:1px solid transparent;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);box-shadow:0 1px 1px rgba(0,0,0,.05)}.panel-body{padding:15px}.panel-heading{padding:10px 15px;border-bottom:1px solid transparent;border-top-left-radius:3px;border-top-right-radius:3px}amp-sidebar{width:250px;padding-right:10px;background:#F62F61;height:100%;overflow-x:auto; }li{margin-bottom:20px;list-style:none}.am_sub_menu{margin-left:20px}.am_sub_menu li a{font-size:10px}.pad{margin-top:20px}.breadcrumb{padding:8px 15px;margin-bottom:20px;list-style:none;background-color:#f5f5f5;border-radius:4px}.breadcrumb>li{display:inline-block}.breadcrumb>li+li:before{padding:0 5px;color:#ccc;content:"/\00a0"}.breadcrumb>.active{color:#999}
.browser_padding{padding-top:70px}

.nopadding{
 margin:0px;padding:0px
} 
.text-info {
  color: #F62F61;
}
.readmore{

color:#F62F61;
font-weight:bolder;
}

a.text-info:focus, a.text-info:hover {
  color: #2f6498;
}
.round{
-moz-border-radius:20px;
-webkit-border-radius:20px;
border-radius:20px;
}

</style>
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/> 
     
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
   <script async custom-element="amp-fit-text" src="https://cdn.ampproject.org/v0/amp-fit-text-0.1.js"></script>
   <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
   <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
  <!-- <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>!-->
   <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script> 
   <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
 
	<script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>

			
     
</head>

<body>  
  <amp-analytics type="googleanalytics">
<script type="application/json">
{
  "vars": {
    "account": "UA-9511843-1"
  },
  "triggers": {
    "trackPageview": {
      "on": "visible",
      "request": "pageview"
    }
  }
}
</script>
</amp-analytics>



<amp-auto-ads
    type="adsense"
    data-ad-client="ca-pub-4519818035499623">
</amp-auto-ads>

        <div class="topmenu">
            
            
            <button on='tap:sidebar.toggle' class="sb-toggle-right toggle_button"><i class="fa fa-bars nav-bar fa-4x "></i></button>  
            
            
          
           
           <a href="https://www.standardmedia.co.ke/evewoman/">  <div class="logo"><amp-img layout="responsive" height="35" width="170" src="<?php echo base_url(); ?>resources/sdmv2/images/logo.png"   alt="Standard Digital Mobile" /></div></a>
            <div class="clr"></div>
         
            
        </div>
        
        
        
        
<?php
 $base_u="https://www.standardmedia.co.ke/evewoman"; 
?>
 <amp-sidebar layout="nodisplay"   side="right" id="sidebar"   class="slidebar" >   
 <button on='tap:sidebar.close' class="sb-toggle-left toggle_button1"><i class="fa fa-bars nav-bar fa-2x"></i></button><br/>
    
    <div class="correct-padding"></div>
    <ul class="desktop-menu"> 
        <li><a href="<?php echo $base_u;?>">Home</a></li>
           <li><a href="<?php echo $base_u.'/category/273/living'; ?>">LIVING</a></li>
              <li><a href="<?php echo  $base_u.'/category/262/parenting'; ?>">PARENTING</a></li>
                 <li><a href="<?php echo  $base_u.'/category/265/fashion-and-beauty'; ?>">FASHION & BEAUTY</a></li>
                    <li><a href="<?php echo  $base_u.'/category/273/relationships'; ?>">RELATIONSHIPS</a></li>
                       <li><a href="<?php echo  $base_u.'/topic/reproductivehealth'; ?>">SEXUAL HEALTH</a></li>
                          <li><a href="<?php echo  $base_u.'/category/350/readers-lounge'; ?>">READERS LOUNGE</a></li>
     
 
     
         
    </ul>
 </amp-sidebar>  
 
   
 <div id="sb-site"> 
 
    
    
    
    
    
 
     
    
    
    
    
    
	