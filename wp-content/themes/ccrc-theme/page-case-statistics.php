<?php
/*
Template Name: Case statistics
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
  		</div>

  		<div class="col-sm-8 max-col">

		<h1><?php the_title(); ?></h1>

  		<?php the_content() ?>
			
			<!--<div class="statistics">

					 <ul>
						<li><span>Completed:</span> <?php echo get_post_meta( $post->ID, "completed-referrals", true ); ?> referrals (<?php echo get_post_meta( $post->ID, "completed-referrals-ineligible", true ); ?> incl. ineligible)</li>
						<li><span>Total applications*:</span> <?php echo get_post_meta( $post->ID, "total-applications", true ); ?></li>
						<li><span>Cases waiting:</span>	<?php echo get_post_meta( $post->ID, "cases-waiting", true ); ?></li>
						<li><span>Cases under review:</span> <?php echo get_post_meta( $post->ID, "completed-referrals", true ); ?></li>
						
						<li><span>Heard by Court of Appeal:</span> <?php echo get_post_meta( $post->ID, "heard-by-court-of-appeal", true ); ?></li>
					</ul> -->

					<!-- <p class="sub">* Total applications includes 279 cases transferred from the Home Office when the Commission was set up in 1997.</p> 
			</div>-->

  		</div>
	</div>

	<div class="arrow-down"></div>

<?php endwhile; ?>
