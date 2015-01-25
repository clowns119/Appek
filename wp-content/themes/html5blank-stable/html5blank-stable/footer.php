<div class="wrapper">
  <div id="footer">
      <img src="http://appek.azurewebsites.net/wp-content/uploads/2015/01/AppekFooter.png" alt="Appek" />
    <div class="footbox first">
      <h2>Visit The App House</h2>
      <ul>
        <li><a href="#"><?php echo get_field('address', 1893); ?></a></li>
	<li><a href="#"><?php echo get_field('address_2', 1893); ?></a></li>
	<li><a href="#"><?php echo get_field('address_3', 1893); ?></a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Call us</h2>
      <ul>
	<li><a href="#"><?php echo get_field('phone_number', 1893); ?></a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Hire us</h2>
      <ul>
<li><a href="#"><?php echo get_field('hire_mail', 1893); ?></a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Just Say "Hey"</h2>
      <ul>
<li><a href="#"><?php echo get_field('hey_mail', 1893); ?></a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Join Forces</h2>
      <ul>
<li><a href="#"><?php echo get_field('join_mail', 1893); ?></a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper">
  <div id="copyright">
    <p class="fl_left">&copy; APPEK  2013 <a href="#"></a></p>
    <div class="fl_right">
        <ul>
            <li><a href="#"><img src="http://appek.azurewebsites.net/wp-content/uploads/2015/01/fb.png" alt="facebook"></a></li>
            <li><a href="#"><img src="http://appek.azurewebsites.net/wp-content/uploads/2015/01/twitter.png" alt="twitter"></a></li>
            <li><a href="#"><img src="http://appek.azurewebsites.net/wp-content/uploads/2015/01/linkedin.png" alt="linkedin"></a></li>
        </ul>
        </div>
    <br class="clear" />
  </div>
</div>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
