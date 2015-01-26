<?php
/* 
Template Name: Referred cases archive
*/
?>


<div class="page-header">
	<?php the_title( '<h1>', '</h1>' ); ?>
</div>

	<div class="row">

		<div class="col-sm-4 min-col">

			<div class="filters">
				<h2>Sort by</h2>
					<ul class="filters">
						<li><a href="?sort_case=name">Name</a></li>
						<li><a href="?sort_case=referral-date">Date referred to court</a></li>
						<li><a href="?sort_case=appeal-date">Date of appeal outcome</a></li>
						<li><a href="?sort_case=outcome">Appeal outcome</a></li>
					</ul>
			</div>

			<div class="stats">
				<h2>Case Statistics</h2>
				<p>Figures to 31 October 2014</p>
					<ul>
						<li>Total applications*:	18513</li>
						<li>Cases waiting:	688</li>
						<li>Cases under review:	835</li>
						<li>Completed:	16990 (incl. ineligible), 565 referrals</li>
						<li>Heard by Court of Appeal:	 543 (374 quashed, 153 upheld)</li>
					</ul>
			</div>
		</div>

		<div class="col-sm-8 max-col">
			<div class="case-details">
			<ul>

					<?php
					if(get_query_var('sort_case') == "name") {
						$sort = array(
              'order' => 'ASC',
              'orderby' => 'title',
            );					
					} elseif(get_query_var('sort_case') == "referral-date") {
						$sort = array(
              'order' => 'DESC',
              'orderby' => 'meta_value_num',
              'meta_key' => 'case-court-date',
            );
					} elseif(get_query_var('sort_case') == "appeal-date") {
						$sort = array(
              'order' => 'DESC',
              'orderby' => 'meta_value_num',
              'meta_key' => 'case-appeal-date',
            );
					} elseif(get_query_var('sort_case') == "outcome") {
						$sort = array(
              'order' => 'ASC',
              'orderby' => 'meta_value',
              'meta_key' => 'case-appeal-outcome',
            );
					}
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

					$args = array( 
						'posts_per_page' => 20, 
						'paged' => $paged,
						'post_type' => 'case'
          );
          if($sort) { $args = array_merge($args, $sort); }

					    $postslist = new WP_Query( $args );

					    if ( $postslist->have_posts() ) :
					        while ( $postslist->have_posts() ) : $postslist->the_post(); ?>
						<li>
						    <h3><?php the_title(); ?></h3>
							    <p><strong>Reference: </strong><?php echo get_post_meta( $post->ID, "case-reference", true ); ?></p>

							    <p><strong>Offence:</strong> <?php echo get_post_meta( $post->ID, "case-offence", true ); ?></p>
							    <table>
								    <tr>
								    	<td><strong>Referred to court:</strong> <?php echo date("d/m/Y", strtotime(get_post_meta( $post->ID, "case-court-date", true ))); ?></td>
								    	<td><strong>Appeal outcome:</strong> <?php echo get_post_meta( $post->ID, "case-appeal-outcome", true ); ?></td>
								    	
								    	
								    </tr>
								    <tr>
								    	<td><strong>Appeal outcome date:</strong> <?php echo date("d/m/Y", strtotime(get_post_meta( $post->ID, "case-appeal-date", true ))); ?></td>
								    	<td><strong>Judgement:</strong> <?php echo get_post_meta( $post->ID, "case-judgement", true ); ?></td>
								    	
								    </tr>

							    </table>
						    </li>

					<?php
					         endwhile;  
					         	endif;
					?>
					</ul>
			</div>
		</div>
	</div>

<div class="pagination">
	<?php
	$big = 999999999; // need an unlikely integer

	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $postslist->max_num_pages
	) );

	?>
</div>