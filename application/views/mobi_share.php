<div class="sharebar">
<a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(current_url().'?utm_source=facebook&utm_medium=social&utm_campaign=share_buttons'); ?>" title="Share on Facebook" >
<div class="btnsh fb">
<i class="fa fa-facebook"></i>
</div>
</a>
<a href="http://www.twitter.com/intent/tweet?url=<?=urlencode(current_url()); ?>&via=EveWomanKenya&text=<?=$art->title; ?>" title="Share on Twitter"  >
<div class="btnsh tw">
<i class="fa fa-twitter"></i>
</div>
</a>
<a href="https://t.me/share/url?url=<?php echo urlencode(current_url()); ?>" title="Share on Telegram">
<div class="btnsh telegram">
<i class="fa fa-telegram"></i>
</div>
</a>
 <a href="whatsapp://send?text=<?php echo urlencode(current_url()); ?>" data-action="share/whatsapp/share">
<div class="btnsh whatsapp">
<i class="fa fa-whatsapp"></i>
</div>
</a>
</div>