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
				<h2>Filter By</h2>
					<form action="/case-library/" method="get">
  					<div class="form-group">
  					  <label for="case_name">Name</label>
              <input type="text" class="form-control" id="case_name" name="case_name" placeholder="Name..." value="<?= htmlspecialchars(get_query_var('case_name')); ?>" />
  					</div>
            
            <div class="form-group">
              <label for="reference">Reference</label>
              <input type="text" class="form-control" id="reference" name="reference" placeholder="Reference..." value="<?= htmlspecialchars(get_query_var('reference')); ?>" />
            </div>
                        
            <div class="form-group" id="prefetch">
              <label for="offences">Offence</label>
              <input class="typeahead form-control" type="text" name="offences" id="offences" placeholder="Offence..." value="<?= htmlspecialchars(get_query_var('offences')); ?>">
            </div>
            
            <div class="form-group">  
              <label for="appeal_outcome">Appeal Outcome</label>
              <select class="form-control" id="appeal_outcome" name="appeal_outcome">
                <option></option>
                <option value="1"<?php if(htmlspecialchars(get_query_var('appeal_outcome')) == '1') { echo ' selected="selected"'; } ?>>Quashed</option>
                <option value="2"<?php if(htmlspecialchars(get_query_var('appeal_outcome')) == '2') { echo ' selected="selected"'; } ?>>Upheld</option>
                <option value="3"<?php if(htmlspecialchars(get_query_var('appeal_outcome')) == '3') { echo ' selected="selected"'; } ?>>Abandoned</option>
              </select>
            </div>
            
            <div class="form-group">  
              <label for="judgement">Judgement</label>
              <select class="form-control" id="judgement" name="judgement">
                <option></option>
                <option value="1"<?php if(htmlspecialchars(get_query_var('judgement')) == '1') { echo ' selected="selected"'; } ?>>Available</option>
                <option value="2"<?php if(htmlspecialchars(get_query_var('judgement')) == '2') { echo ' selected="selected"'; } ?>>Not available</option>
              </select>
            </div>
            
            <input type="hidden" name="sort_case" id="sort_case" value="<?= htmlspecialchars(get_query_var('sort_case')); ?>" />            
            <input type="submit" value="Search" class="btn btn-primary"/>
            <input type="reset" value="Clear" class="btn btn-default"/>

					</form>
			</div>
			
			<div class="filters">
				<h2>Sort by</h2>
					<ul class="filter-links"> 
						<li><a href="?<?= htmlspecialchars(http_build_query(array_merge($_GET, array("sort_case"=>"name")))) ?>"<?php if(get_query_var('sort_case') == "name") { echo ' class="active" '; } ?>>Name</a></li>
						<li><a href="?<?= htmlspecialchars(http_build_query(array_merge($_GET, array("sort_case"=>"referral-date")))) ?>"<?php if(get_query_var('sort_case') == "referral-date") { echo ' class="active" '; } ?>>Date referred to court</a></li>
						<li><a href="?<?= htmlspecialchars(http_build_query(array_merge($_GET, array("sort_case"=>"appeal-date")))) ?>"<?php if(get_query_var('sort_case') == "appeal-date") { echo ' class="active" '; } ?>>Date of appeal outcome</a></li>
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
            
          $search = array();
            
          // Create meta query for search
          $case_name_var = get_query_var('case_name');
          if(!empty($case_name_var)) { 
            $case_name = array(
          		'key'     => 'case-name',
          		'value'   => htmlspecialchars($case_name_var),
          		'compare' => 'LIKE'
          	);
          	$search = array_merge($search, array($case_name));
          } 
          
          $reference_var = get_query_var('reference');
          if(!empty($reference_var)) { 
            $reference = array(
          		'key'     => 'case-reference',
          		'value'   => htmlspecialchars($reference_var),
          		'compare' => 'LIKE'
          	);
          	$search = array_merge($search, array($reference));
          } 
          
          $offences_var = get_query_var('offences');
          if(!empty($offences_var)) { 
            $tax = array(array(
          		'taxonomy' => 'offence',
        			'field'    => 'slug',
        			'terms'    => htmlspecialchars($offences_var),
          	));
          } 
          
          $appeal_outcome_var = get_query_var('appeal_outcome');
          if(!empty($appeal_outcome_var)) { 
            if(htmlspecialchars($appeal_outcome_var) == 1) {
              $value = "Quashed";
            } elseif(htmlspecialchars($appeal_outcome_var) == 2) {
              $value = "Upheld";
            } elseif(htmlspecialchars($appeal_outcome_var) == 3) {
              $value = "Abandoned";
            }
            $appeal_outcome = array(
          		'key'     => 'case-appeal-outcome',
          		'value'   => $value,
          		'compare' => '='
          	);
          	$search = array_merge($search, array($appeal_outcome));
          } 
          
          $judgement_var = get_query_var('judgement');
          if(!empty($judgement_var)) { 
            if(htmlspecialchars($judgement_var) == 1) {
              $value = "Available";
            } elseif(htmlspecialchars($judgement_var) == 2) {
              $value = "Not Available";
            }
            $judgement = array(
          		'key'     => 'case-judgement',
          		'value'   => $value,
          		'compare' => '='
          	);
          	$search = array_merge($search, array($judgement));
          } 

          $sort_case_var = get_query_var('sort_case');
					if($sort_case_var == "name") {
						$sort = array(
              'order' => 'ASC',
              'orderby' => 'meta_value',
              'meta_key' => 'case-name',
            );					
					} elseif($sort_case_var == "referral-date") {
						$sort = array(
              'order' => 'DESC',
              'orderby' => 'meta_value_num',
              'meta_key' => 'case-court-date',
            );
					} elseif($sort_case_var == "appeal-date") {
						$sort = array(
              'order' => 'DESC',
              'orderby' => 'meta_value_num',
              'meta_key' => 'case-appeal-date',
            );
					}
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          
					$args = array( 
						'posts_per_page' => 20, 
						'paged' => $paged,
						'post_type' => 'case',
						'meta_query' => $search,
						'tax_query' => $tax,
          );          
          if($sort) { $args = array_merge($args, $sort); } // Merge sort by with query
            
					    $postslist = new WP_Query( $args );

					    if ( $postslist->have_posts() ) :
					        while ( $postslist->have_posts() ) : $postslist->the_post(); ?>
						<li>
						    <h3><?= get_post_meta( $post->ID, "case-name", true ); ?></h3>
							    <p><strong>Reference: </strong><?php echo get_post_meta( $post->ID, "case-reference", true ); ?></p>
                  <?php
                  $terms = get_the_terms($post->ID, 'offence');                  						
                  if ($terms && !is_wp_error($terms)):                   
                  	$offences = array();                  
                  	foreach ( $terms as $term ) {
                  		$offences[] = $term->name;
                  	}                  						
                  ?>                  
                  <p><strong>Offence:</strong> <?= join( "; ", $offences ) ?></p>                  
                  <?php endif; ?>
							    
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
					         
					         else: ?>
					        <h3>No results were found. Please try searching again.</h3>
					         
					         <?php
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
		'format' => '/page/%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $postslist->max_num_pages,
	) );

	?>
</div>