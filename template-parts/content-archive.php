<?php
/**
 * Template part for archive posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package civitas
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('archive-post'); ?>>
	<div class="row">
    <div class="col-md-4 col-lg-4">
      <!-- Post thumbnail -->
      <div class="zm-post-thumb">
        <?php if(has_post_thumbnail() ) :
          the_post_thumbnail();
        else: ?>
          <img src="http://placehold.it/300x200" alt="">
        <?php endif; ?>
      </div>
    </div>

    <div class="col-md-8 col-lg-8">
      <header class="entry-header">
    		<?php
    		if ( is_singular() ) :
    			the_title( '<h1 class="entry-title">', '</h1>' );
    		else :
    			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    		endif;

    		if ( 'post' === get_post_type() ) : ?>
    		<div class="entry-meta">
    			<?php civitas_posted_on(); ?>
    		</div><!-- .entry-meta -->
    		<?php
    		endif; ?>
    	</header><!-- .entry-header -->

      <div class="entry-content">
    		<?php
    			// the_content( sprintf(
    			// 	wp_kses(
    			// 		/* translators: %s: Name of current post. Only visible to screen readers */
    			// 		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'civitas' ),
    			// 		array(
    			// 			'span' => array(
    			// 				'class' => array(),
    			// 			),
    			// 		)
    			// 	),
    			// 	get_the_title()
    			// ) );
          //
    			// wp_link_pages( array(
    			// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'civitas' ),
    			// 	'after'  => '</div>',
    			// ) );
    		?>
    	</div><!-- .entry-content -->

      <footer class="entry-footer">
        <?php civitas_entry_footer(); ?>
      </footer><!-- .entry-footer -->
    </div>


	</div>

</article><!-- #post-<?php the_ID(); ?> -->
