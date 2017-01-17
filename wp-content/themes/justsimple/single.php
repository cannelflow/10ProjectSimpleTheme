<?php get_header() ; ?>

<section class="container">
    <div class="row">
        <div class="col-sm-8">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="blog">
                <div class="blog-meta">
                 <h2 class="blog-meta-title"><?php the_title() ; ?></h2>
                 <p class="blog-meta-detail">Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?></p>
                </div> <!-- blog-meta -->
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="blog-img">
                    <?php the_post_thumbnail('full',array(
                        'class' => 'img-responsive',
                    )); ?>
                </div> <!-- blog-post-img -->
            <?php endif ; ?> <!-- if ends here of thumbnail -->
            <div class="blog-content">
                <?php the_content() ; ?>
            </div> <!-- blog-excerpt -->
            </article> <!-- article-->
            <?php endwhile; else : ?> <!-- while ends here of post loop and else starts -->
	        <article class="blog">
	            <p><?php _e( 'Sorry, no posts found yo can always start writing' ); ?></p>
	        </article>
            <?php endif; ?> <!-- if ends here post loop -->
            <div class="post-comment">
                <?php comments_template() ; ?>
            </div>
        </div> <!-- col-sm-8-->
        <div class="col-sm-4">
            <?php get_sidebar() ; ?>
        </div><!-- col-sm-4 -->
    </div> <!-- row -->
</section> <!-- section -->

<?php get_footer() ; ?>