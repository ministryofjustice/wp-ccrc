<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="page-header">
      
      </div>
  </header>

  <div class="row">

    <div class="col-sm-4">

<!-- <h3><?= get_post_meta( $post->ID, "case-name", true ); ?></h3> -->
<h1 class="entry-title"><?php the_title(); ?></h1>
    </div>

    <div class="col-sm-8">

      <div class="entry-content">

          <?php the_content(); ?>

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

          <p><strong>Reference: </strong><?php echo get_post_meta( $post->ID, "case-reference", true ); ?></p>
          <p><strong>Appeal outcome:</strong> <?php echo get_post_meta( $post->ID, "case-appeal-outcome", true ); ?></p>
          <p><strong>Referred to court:</strong> <?php echo date("d/m/Y", strtotime(get_post_meta( $post->ID, "case-court-date", true ))); ?></p>
          <p><strong>Appeal outcome date:</strong> <?php echo date("d/m/Y", strtotime(get_post_meta( $post->ID, "case-appeal-date", true ))); ?></p>

      </div>

    </div>

  </div>

    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>
<?php endwhile; ?>
