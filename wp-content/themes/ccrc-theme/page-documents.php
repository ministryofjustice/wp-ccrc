<?php
/*
Template Name: Documents
*/
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part( 'header'); ?>
	 <div class="page-header">
	 	<h1><?php the_title(); ?></h1>
	 </div>
	
  	<div class="row">
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

		

  		<?php the_content() ?>
			
			<div class="documents">

				<ul class="document-list">
				<?php $repeatable_fields = get_post_meta($post->ID, 'document-upload', true); ?>
				    <?php foreach ($repeatable_fields as $x) {
				        echo '<h3><a href="' . $x['upload-pdf'] . '">' . $x['title'] . '</a> <span class="sub">(pdf)</span></h3>'; 
				    } ?>
				</ul>

  		</div>
	</div>

	<div class="arrow-down"></div>

<?php endwhile; ?>