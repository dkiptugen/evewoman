	<div class="container-fluid footer  footer-2">
					<h4>Evewoman</h4>
					© 2016 Standard Media Group.
			</div>
		
	</div>
	 	
		
<script>
	function openLeftMenu() {document.getElementById("leftMenu").style.display = "block";}
	function closeLeftMenu() {document.getElementById("leftMenu").style.display = "none";}
</script>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type='text/javascript' src='https://www.standardmedia.co.ke/js/lazyload.min.js'></script>
<script src='<?=base_url("assets/js/custom.min.js"); ?>'></script>
	<script>
  
  jQuery(document).ready(function($) {
  
  
  $('#userForm').submit(function() {
  
  $('#response').html("<b>Loading response...</b>");
  
  $.ajax({
  type: 'POST',
  url: 'https://www.standardmedia.co.ke/mobile/newsletterrg',
  data: $(this).serialize()
  })
  .done(function(data) {
  $('#response').html(data);
  
  })
  .fail(function() {
  
  $('#response').html("Registration Failed");
  
  });
  return false;
  
  });

   $('.content img,figure img').addClass('cam').attr('onclick','lightbox(0)');   
   $( ".content p,figure" ).has( "img" ).addClass('img-container').append('<div class="camera" onclick="lightbox(0)"> </div>');
  });


  </script>
  
    <!-- Alexa -->
    <script type="text/javascript">
        _atrk_opts = {atrk_acct: "VEpaj1a8Dy00OP", domain: "standardmedia.co.ke", dynamic: true};
        (function () {
            var as = document.createElement('script');
            as.type = 'text/javascript';
            as.async = true;
            as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js";
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(as, s);
        })();
    </script> 
    <noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=VEpaj1a8Dy00OP" style="display:none" height="1" width="1" alt=""/></noscript>​
    <!-- Alexa -->
</body>
</body>
</html>
