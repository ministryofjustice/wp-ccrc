<?php
/*
Template Name: Making an application
*/
?>
<?php while (have_posts()) : the_post(); ?>

  	<div class="row making-application">
  		<div class="col-sm-4 min-col">

  		<?php
				$get_description = get_post(get_post_thumbnail_id())->post_excerpt;
				echo '<div class="page-img-wrapper">';
				the_post_thumbnail('large');
				echo '</div>';
				  if(!empty($get_description)){ // If description is not empty show the div
				  echo '<div class="img-caption">' . get_post(get_post_thumbnail_id())->post_excerpt . '</div>';
				  }
			?>
  		</div>

  		<div class="col-sm-8 max-col">

		<h1><?php the_title(); ?></h1>

  		<?php the_content() ?>

			<div class="process">
				<a href="<?php echo get_permalink( get_post_meta( $post->ID, "first-option-link", true )); ?>"><div class="process-1">
					<span>1</span> <h2><?php echo get_post_meta( $post->ID, "first-option-title", true ); ?></h2><br><p><?php echo get_post_meta( $post->ID, "first-option-text", true ); ?> </p>
				</div></a>
				<a href="<?php echo get_permalink( get_post_meta( $post->ID, "second-option-link", true )); ?>"><div class="process-2">
					<span>2</span> <h2><?php echo get_post_meta( $post->ID, "second-option-title", true ); ?></h2><br><p><?php echo get_post_meta( $post->ID, "second-option-text", true ); ?> </p>
				</div></a>
				<a href="<?php echo get_permalink( get_post_meta( $post->ID, "third-option-link", true )); ?>"><div class="process-3">
					<span>3</span> <h2><?php echo get_post_meta( $post->ID, "third-option-title", true ); ?></h2><br><p><?php echo get_post_meta( $post->ID, "third-option-text", true ); ?></p>
				</div></a>
				<a href="<?php echo get_permalink( get_post_meta( $post->ID, "fourth-option-link", true )); ?>"><div class="process-4">
					<span>4</span> <h2><?php echo get_post_meta( $post->ID, "fourth-option-title", true ); ?></h2><br><p><?php echo get_post_meta( $post->ID, "fourth-option-text", true ); ?></p>
				</div></a>
			</div>

  		</div>
	</div>

	<div class="arrow-down"></div>

<?php endwhile; ?>
