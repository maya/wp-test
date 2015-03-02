<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Minnow
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
  	<div class="grid">
    	<div class="col-1-2 footer-info">
      	<ul>
        	<li>
        	  <a href="/">Traveling Spoon</a>
        	</li>
        	<li>
            <a href="#">About</a>
        	</li>
        	<li>
        	  <a href="#">Destinations</a>
        	</li>        	        	
      	</ul>
    	</div>

    	<div class="col-1-2 footer-social">    
      	<span> Traveling Spoon © 2014. All Rights Reserved </span>	
        <ul class="social">
          <li>
            <a target="_blank" href="https://www.facebook.com/travelingspoon">
              <i class="fa fa-facebook fa-2x"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://twitter.com/travelingspoon">
              <i class="fa fa-twitter fa-2x"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="http://instagram.com/travelingspoons">
              <i class="fa fa-instagram fa-2x"></i>
            </a>
          </li>
        </ul>
    	</div>
  	</div>
  	
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'minnow' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'minnow' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'minnow' ), 'Minnow', '<a href="https://wordpress.com/themes/" rel="designer">WordPress.com</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- jQuery if needed -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">

	function DropDown(el) {
		this.dd = el;
		this.initEvents();
	}
	DropDown.prototype = {
		initEvents : function() {
			var obj = this;

			obj.dd.on('click', function(event){
				$(this).toggleClass('active');
				event.stopPropagation();
			});	
		}
	}

	$(function() {

		var dd = new DropDown( $('#dd') );

		$(document).click(function() {
			// all dropdowns
			$('.wrapper-dropdown-5').removeClass('active');
		});

	});

  // Navbar search toggle function
  $('.search-toggle').click(function(){
    $('.search-toggle').toggleClass('search-active');
    $('.search-form').fadeToggle('250');
  });
  
</script>
</body>
</html>
