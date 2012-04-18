<?php get_header(); ?>

      <div id="content">
          <div class="clearfix newcenter">
        <?php if ( have_posts() ) : ?>

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', get_post_format() ); ?>

                <?php endwhile; ?>
                
                <div class="next_posts"><?php previous_posts_link('Newer Entries', 0) ?></div>
                <div class="previous_posts"><?php next_posts_link('Older Entries', 0); ?></div>
                


            <?php else : ?>

                <article id="post-0" class="post no-results not-found">
                    <header class="entry-header">
                        <h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
                        <?php get_search_form(); ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-0 -->

            

            <?php endif; ?>

        </div>
        
      </div><!-- #content END -->
      <?php get_sidebar(); ?>
    </div><!-- #wrapper END -->
<?php get_footer(); ?>