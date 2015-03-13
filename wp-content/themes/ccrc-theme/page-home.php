<?php
/*
Template Name: Homepage
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part( 'header'); ?>
	
	
	  	<div id="news-banner" class="container-fluid">
		  		<div class="news-banner-text">
		  			<h2><?php echo get_post_meta( $post->ID, "banner_heading", true ); ?></h2>
		  			<p><?php echo get_post_meta( $post->ID, "banner-sub-heading", true ); ?></p>
		  			<a href="<?php echo get_post_meta( $post->ID, "banner-link", true ); ?>" class= "float-right">Read more ></a>
		  		</div>
	  	</div>

  	<div class="row">
  		<div class="col-sm-4 min-col">
  			<div class="quick-links side-item">
  				<ul>
  					<li class="ql1"><a href="<?php echo get_permalink( get_post_meta( $post->ID, "quick-link-1-page", true )); ?>"><?php echo get_post_meta( $post->ID, "quick-link-1", true ); ?> ></a></li>
  					<li class="ql2"><a href="<?php echo get_permalink( get_post_meta( $post->ID, "quick-link-2-page", true )); ?>"><?php echo get_post_meta( $post->ID, "quick-link-2", true ); ?> ></a></li>
  					<li class="ql3"><a href="<?php echo get_permalink( get_post_meta( $post->ID, "quick-link-3-page", true )); ?>"><?php echo get_post_meta( $post->ID, "quick-link-3", true ); ?> ></a></li>
  					<li class="ql4"><a href="<?php echo get_permalink( get_post_meta( $post->ID, "quick-link-4-page", true )); ?>"><?php echo get_post_meta( $post->ID, "quick-link-4", true ); ?> ></a></li>
  				</ul>
  			</div>

  			<!-- <div class="about side-item">
  				<h3><?php echo get_post_meta( $post->ID, "sidebar-text-title", true ); ?></h3>
  				<p><?php echo get_post_meta( $post->ID, "sidebar-text-p1", true ); ?></p>
  				<p><?php echo get_post_meta( $post->ID, "sidebar-text-p2", true ); ?></p>
  				<a href="<?php echo get_permalink( get_post_meta( $post->ID, "sidebar-link", true )); ?>" class="about-home">Read more about us</a>
  			</div> -->

   			<div class="links side-item">
  				<h3>Related links</h3>
  				<ul>
  					<li><a href="<?php echo get_post_meta( $post->ID, "related-link-1", true ); ?>"><?php echo get_post_meta( $post->ID, "related-1", true ); ?></a></li>
  					<li><a href="<?php echo get_post_meta( $post->ID, "related-link-2", true ); ?>"><?php echo get_post_meta( $post->ID, "related-2", true ); ?></a></li>
  					<li><a href="<?php echo get_post_meta( $post->ID, "related-link-3", true ); ?>"><?php echo get_post_meta( $post->ID, "related-3", true ); ?></a></li>
  					<li><a href="<?php echo get_post_meta( $post->ID, "related-link-4", true ); ?>"><?php echo get_post_meta( $post->ID, "related-4", true ); ?></a></li>
  				</ul>
  			</div>
  			  			<div class="twitter side-item">
  			<script src="https://platform.twitter.com/widgets.js"></script>

<a href="https://twitter.com/intent/follow?screen_name=MOJDigital"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="50" height="41" viewBox="0 0 50 41">
  <image xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAApCAMAAABA8IrbAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABy1BMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8AAABJV5kDAAAAl3RSTlMAI3u74vLqyZI8HAEGlLktKr5zrSgk21YUXA47FvHK9EmQzgfPEsfWG2LlYzWvg93uQuj+zI38F99+OO0PfOEZoaAsnsEQUKpGpeYD2oxIX/XEm3lXlrPXVZXFDIjU0feGUjDVHi7Zo/sVP6wv3P1x0uwfSltnMqSC+m8mbiu605i03ot49rUzUbfL+XIgirDr7+engEwYAZX1DAAAAAFiS0dEAIgFHUgAAAAJcEhZcwAALiMAAC4jAXilP3YAAAHISURBVEjHjdTlWwJBEAbwFUHEbjGwuxUDu8VCRbE7wO7u7s79dz3Qg4vZu30/8HAz+4O5hVuEJOOmcFeqPNSeGmfFy1sS+PhiNn7+jkpAYJCDBIfAIjQMcxKOtBHBGEfaO1FY6QOJaB3mJSaWeYlztOIxTkgESBIWR4FQMtNKYd6mpolEuhhkZKKs7Byml2u/yssXkgKR0BcWheHiEqZn+CuU8kUZBlNewZ1ZreGSSlBUVTuaNc5CbZ2L1EOiofGv2cSpGZtZ0gKIVrbZpuKW200dWtJgBucMnYJOl7m7x9IL3Ylr7j5Ml/7/9doBhAb1VGTonwxj5YhllIoY2bHGmItxKjLBknjKO8F4kiVT1KTEuWFmSjHt2uMZSmLi/AUH6IiV+7e10PwuNv7ToZ2dkyWZPDGP0MKiDFK18ciSfjnGtiJNVgUP+prsWOvCs2FDlmyKjqAtGZENHHTbkiIPOhuRRi1BdhCcyd3p1GJQRCBy9vYhcUAGh7PgdxwRQUAvCLCFsP54+wQGp1bR2oX6GtPZ+QVpqy6Bj2+8uibv7c0tYai7exgY8xE5/qUPguWPDU9uSCbP4S+vhYY33fuHzfz59f1DXvkLJfDJB+Z8qrsAAAAASUVORK5CYII=" width="50" height="41"/>
</svg> Follow @MOJDigital</a>

  			</div>
  			
  		</div>
  		<div class="col-sm-8 max-col">
			<div class="intro main-item">
				<h2><?php echo get_post_meta( $post->ID, "welcome-title", true ); ?></h2>
				<p><?php echo get_post_meta( $post->ID, "welcome-text", true ); ?></p>

				<a href="#" class="float-right em-link">Learn more ></a>
			</div>

			<div class="news main-item">
				<h2>Press releases</h2>
<ul>
						<?php
					// Get meta value containing array of entries
					$latest_news_args = array(
						'post_type' => 'post',
						'category' => 'press-release',
						'posts_per_page' => 3
					);
					$latest_news_query = new WP_Query( $latest_news_args );
					// Iterate over entries and display
					while ( $latest_news_query->have_posts() ) : $latest_news_query->the_post();
						?>
							<li>
								<div class="news-details">

									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

										<div class="news-meta">
											<?php the_author_posts_link(); ?> <time class="published" datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time>
										</div>

										<?php if ( has_post_thumbnail() ) : ?>
											<div class="home-news-img-wrapper">
												<?php the_post_thumbnail('large'); ?>
											</div>
										<?php endif; ?>
								
										<!--<?php the_excerpt(); ?>-->

							
							</div>
							</li>

						<?php
					endwhile;
					?>

				</ul>
				
			<a href="<?php bloginfo('site_url'); ?>/press-releases/" class= "float-right em-link">All press releases ></a>

			</div>

			<div class="media main-item video-container">
				<h2>Latest media</h2>
					<div class="videoWrapper">
					 	<iframe width="640" height="360" src="//www.youtube.com/embed/eUJHfEb9v88" frameborder="0" allowfullscreen></iframe> 
					 </div>
			</div>

  		</div>
	</div>
</div>
<?php endwhile; ?>
