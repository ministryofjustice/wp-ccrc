<?php
/*
Template Name: Case statistics
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
				  if(!empty($get_description)){//If description is not empty show the div
				  echo '<div class="img-caption">' . get_post(get_post_thumbnail_id())->post_excerpt . '</div>';
				  }
			?>
  		</div>

  		<div class="col-sm-8 max-col">
		    <h1><?php the_title(); ?></h1>
  		  <?php the_content() ?>
  		</div>
	</div>

	<div class="arrow-down"></div>

<?php endwhile; ?>
