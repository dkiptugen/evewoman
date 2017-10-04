<meta name="msvalidate.01" content="6F88AA722B9E0A87B5953079C88DF0D2" />
<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<script type="application/ld+json">{
    "@id": "<?=site_url(); ?>",
    "@context": "https://schema.org",
    "@type": "WebSite",
    "url": "<?=current_url(); ?>",
    "name": "<?=(isset($meta))?$meta->title:"Evewoman : The Standard"; ?>",
    "description": "<?=@$meta->summary; ?>",
    "potentialAction": [
        {
            "@context": "https://schema.org",
            "@type": "SearchAction",
            "target": "<?=site_url("search"); ?>?s={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    ]
}</script>
<script type="application/ld+json">{
    "@id": "<?=site_url(); ?>",
    "@context": "https://schema.org",
    "@type": "Organization",
    "url": "<?=current_url(); ?>",
    "name": "<?=(isset($meta))?$meta->title:"Evewoman : The Standard"; ?>",
    "description": "<?=@$meta->summary; ?>",
    "logo": {
        "@context": "https://schema.org",
        "@type": "ImageObject",
        "url": "<?=(isset($meta))?IMG_SRC.$meta->thumbURL:base_url()."/assets/img/logo.png";?>"
    },
    "sameAs": [
        "https://www.facebook.com/EveWoman/",
        "https://twitter.com/evewomankenya",
        "https://www.instagram.com/evewomankenya/",
        "https://plus.google.com/+EvewomanCoKenya"
    ]   
}
</script>
<!-- instant articles meta!-->
<meta property="fb:pages" content="40941045532" >
<!-- instant articles meta!-->

<meta name="author" content="<?=(isset($meta))?$meta->author:"standard media group"; ?>">
<link href="https://plus.google.com/+EvewomanCoKenya" rel="publisher" >                           
<link rel="canonical" href="<?=current_url();?>">
<meta name="description" content="<?=(isset($meta))?$meta->summary:"Eve Woman- For the mature woman who desires the best in Lifestyle, Health, Beauty, Finance, Success and so much more";?>">
<meta name="keywords" content="<?=(isset($meta))?str_replace(";",",",$meta->keywords):"evewoman Magazine,standardmedia.co.ke, Standard evewoman, money, beauty, marriage, relationship, clinic, parenting, african women, lady talk, lady's talk, dating, makeup, relationship advice,beauty tips,matrimony,wedding,beauty products,cash,black women, christian marriage,love, love advice, african girls, relationship questions, relationship tips, earn money, dating, dating advice, single parenting, marriage vows, parenting articles, relationship issues, family relationships, love marriage, co parenting, love and relationships, save your marriage, marriage help, marriage life, marital advice, men and relationship, beauty face, finance  money, finance, business opportunities, success, foster parent, unclaimed money, womanmagazine, woman, lifestyle, health, success,Standard Digital News, Kenya, Africa, Latest News, Breaking news, Nairobi, why are men, why are women";?>">
<link rel="image_src" type="<?=get_mime_by_extension((isset($meta))?IMG_SRC.$meta->thumbURL:base_url()."/assets/img/logo.png"); ?>" href="<?=(isset($meta))?IMG_SRC.$meta->thumbURL:base_url()."/assets/img/logo.png";?>">

<!-- Schema.org markup for Google+ -->

<meta itemprop="name" content="<?=(isset($meta))?$meta->title:"Home";?>">
<meta itemprop="description" content="<?=(isset($meta))?$meta->summary:"Eve Woman- For the mature woman who desires the best in Lifestyle, Health, Beauty, Finance, Success and so much more";?>">
<meta itemprop="image" content="<?=(isset($meta))?$meta->thumbURL:base_url()."/assets/img/logo.png";?>">
    
<!-- TWITTER CARDS    -->

<meta name="twitter:card" content="summary_large_image" >
<meta name="twitter:site" content="@StandardKenya">
<meta name="twitter:creator" content="@EveWomanKenya">
<meta property="twitter:title" content=" <?=(isset($meta))?$meta->title:"Home";?>" >
<meta property="twitter:description" content="<?=(isset($meta))?$meta->summary:"Eve Woman- For the mature woman who desires the best in Lifestyle, Health, Beauty, Finance, Success and so much more";?>" >
<meta property="twitter:url" content="<?=current_url();?>" >
<meta property="twitter:image" content="<?=(isset($meta))?IMG_SRC.$meta->thumbURL:base_url()."/assets/img/logo.png";?>" >

<!-- FACEBOOK SHARING -->

<meta property="og:locale" content="en_US" >
<meta property="og:type"   content="article" >    
<meta property="fb:app_id" content="118898458656">
<meta property="og:title" content="<?=(isset($meta))?$meta->title:"Home";?>" >
<meta property="og:description" content="<?=(isset($meta))?$meta->summary:"Eve Woman- For the mature woman who desires the best in Lifestyle, Health, Beauty, Finance, Success and so much more";?>" >  
<meta property="og:site_name" content="Evewoman - Woman's World" >
<meta property="og:url" content="<?=current_url();?>" >
<meta property="og:image" content="<?=(isset($meta))?IMG_SRC.$meta->thumbURL:base_url()."/assets/img/logo.png";?>">
<meta property="og:image:secure_url" content="<?=(isset($meta))?IMG_SRC.$meta->thumbURL:base_url()."/assets/img/logo.png";?>" >
<meta property="article:author" content="<?=(isset($meta))?$meta->author:"standard media group"; ?>" >
<meta property="article:tag" content="<?=(isset($meta))?str_replace(";",",",$meta->keywords):" money, beauty, marriage, relationship, clinic, parenting, african women, lady talk, lady's talk, dating, makeup, relationship advice,beauty tips,matrimony,wedding,beauty products,cash,black women, christian marriage,love, love advice, african girls, relationship questions, relationship tips, earn money, dating, dating advice, single parenting, marriage vows, parenting articles, relationship issues, family relationships, love marriage, co parenting, love and relationships, save your marriage, marriage help, marriage life, marital advice, men and relationship, beauty face, finance  money, finance, business opportunities, success, foster parent, unclaimed money, womanmagazine, woman, lifestyle, health, success,Standard Digital News, Kenya, Africa, Latest News, Breaking news, Nairobi, why are men, why are women";?>" >
<!--meta property="article:tag" content="organic traffic" /-->
<meta property="article:section" content="Story" >
<meta property="article:published_time" content="<?=(isset($meta))?$meta->publishdate:date("Y-m-d H:i:s"); ?>" >
<meta property="article:modified_time" content="<?=(isset($meta))?$meta->updateddate:date("Y-m-d H:i:s"); ?>" >
<meta property="og:updated_time" content="<?=(isset($meta))?$meta->updateddate:date("Y-m-d H:i:s"); ?>" >
<script>
 window.fbAsyncInit = function() {
        FB.init({
          appId      : '118898458656',
          xfbml      : true,
          version    : 'v2.8'
        });
        FB.AppEvents.logPageView();
      };
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=118898458656";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script async src='https://cdn.onthe.io/io.js/cQygVOSM0DIS'></script>​