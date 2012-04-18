<?php get_header(); ?>

        <div id="primary">
            <div id="content" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                    <nav id="nav-single">
                        <span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous Post' ) ); ?></span>
                        <span class="nav-next"><?php next_post_link( '%link', __( 'Next Post <span class="meta-nav">&rarr;</span>' ) ); ?></span>
                    </nav><!-- #nav-single -->

                    <?php get_template_part( 'content', 'single' ); ?>

                       <?php comments_template(); ?>

                <?php endwhile; // end of the loop. ?>

            </div><!-- #content -->
        </div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>