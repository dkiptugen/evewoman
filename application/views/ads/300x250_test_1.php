<script src="https://cdnjs.cloudflare.com/ajax/libs/postscribe/2.0.6/postscribe.min.js"></script>
<div id="banner_%%CACHEBUSTER%%"></div>
<script type='text/javascript'>
    var vicinityTag = vicinityTag || { banners: [] };
    vicinityTag.banners = vicinityTag.banners || [];
    
    (function(){
        var zoneId = 1214;
        var bannerId = 'banner_%%CACHEBUSTER%%';
        
        vicinityTag.banners[bannerId] = {};
        vicinityTag.banners[bannerId].zone_id = zoneId;
        vicinityTag.banners[bannerId].click_macro = '%%CLICK_URL_ESC_ESC%%';
        vicinityTag.banners[bannerId].width = '%%WIDTH%%';
        vicinityTag.banners[bannerId].height = '%%HEIGHT%%';
        vicinityTag.banners[bannerId].dfp_adunitpath = '%%ADUNIT%%';
        vicinityTag.banners[bannerId].dfp_targeting = %%PATTERN:TARGETINGMAP%%;
        
        var OA_vscript_e = document.getElementsByTagName('script')[0];
        var OA_vscript_t = document.createElement('script');
        OA_vscript_t.async = true;
        OA_vscript_t.type = 'text/javascript';
        OA_vscript_t.src = 'https://ad2.vic-m.co/adserver/delivery/combine.php?type=javascript&files=vicinity.js,spcjs.php&zoneIds=' + zoneId + '&cb=%%CACHEBUSTER%%';
        OA_vscript_e.parentNode.insertBefore(OA_vscript_t,OA_vscript_e);
    })();
</script>