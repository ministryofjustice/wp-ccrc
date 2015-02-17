<?php
/*
Template Name: Application child pages
*/
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part( 'header'); ?>
	
  	<div class="row making-application">
  		<div class="col-sm-4 min-col">

  		<?php
				$get_description = get_post(get_post_thumbnail_id())->post_excerpt;
				echo '<div class="page-img-wrapper">';
				the_post_thumbnail('large');
				echo '</div>';
				  if(!empty($get_description)){//If description is not empty show the div
				  echo '<div class="img-caption">' . get_post(get_post_thumbnail_id())->post_excerpt . '</div>';
				  }
			?>

			<?php endwhile; ?>
		<div class="related">
			<h3>Related information</h3>
				<ul>
					<li><a href="<?php echo get_permalink( get_post_meta( $post->ID, "related-info-link-1", true )); ?>"><?php echo get_post_meta( $post->ID, "related-info-text-1", true ); ?></a></li>
					<li><a href="<?php echo get_permalink( get_post_meta( $post->ID, "related-info-link-2", true )); ?>"><?php echo get_post_meta( $post->ID, "related-info-text-2", true ); ?></a></li>

				</ul>
			<h3>Related publications</h3>
				<ul>
					<li><a href="<?php echo get_post_meta( $post->ID, "related-pub-doc-1", true ); ?>"><?php echo get_post_meta( $post->ID, "related-pub-text-1", true ); ?></a></li>
					<li><a href="<?php echo get_post_meta( $post->ID, "related-pub-doc-2", true ); ?>"><?php echo get_post_meta( $post->ID, "related-pub-text-2", true ); ?></a></li>

				</ul>
			<h3>Related links</h3>
				<ul>
					<li><a href="<?php echo get_post_meta( $post->ID, "related-web-link-1", true ); ?>"><?php echo get_post_meta( $post->ID, "related-web-text-1", true ); ?></a></li>
					<li><a href="<?php echo get_post_meta( $post->ID, "related-web-link-2", true ); ?>"><?php echo get_post_meta( $post->ID, "related-web-text-2", true ); ?></a></li>
				</ul>
		</div>

  		</div>

  		<div class="col-sm-8 max-col">

		<h1><?php the_title(); ?></h1>

		<?php

			if ( is_page( 'how-to-apply' )) { 

			echo '<div class="application-form"><a class="" href="';
  			echo get_post_meta( $post->ID, "application-form", true );
  	        echo '">Download application form</a> <span class="file-size">PDF, 502kb</span></div>'; 

				}
			else {

			}
		
		?>

		<?php

		// if (is_page('how-to-apply')){

		// echo '<div class="application-form"><a class="" href="'
  //       echo get_post_meta( $post->ID, "application-form", true );
  //       echo '">Download application form</a> <span class="file-size">PDF, 502kb</span></div>'

  //      } else {
  //      	echo 'la'
  //      }

       ?>

  		<?php the_content() ?>
			

  		</div>
	</div>

	<div class="arrow-down"></div>


