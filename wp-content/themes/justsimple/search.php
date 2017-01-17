<?php get_header() ; ?>

<section class="container">
    <div class="row">
        <div class="col-sm-8">
             <div class="sidebar-module">
			        <div class="sidebar-content">
			                <h3><?php _e('serach','justsimple') ; ?></h3>
			            <?php get_search_form(); ?>
			            <hr>
			            <h4>
			                <?php _e('Search Reasult For ','justsimple')?>
			                <span class="text-info"><?php echo the_search_query(); ?></span>
			            </h4>
			        </div> <!-- sidebar-content -->
			   </div> <!-- sidebar-module -->
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="blog">
                <div class="blog-meta">
                 <h2 class="blog-meta-title"><a href="<?php the_permalink() ; ?>"><?php the_title() ; ?></a></h2>
                 <p class="blog-meta-detail">Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?></p>
                </div> <!-- blog-meta -->
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="blog-img">
                    <?php the_post_thumbnail('full',array(
                        'class' => 'img-responsive',
                    )); ?>
                </div> <!-- blog-post-img -->
            <?php endif ; ?> <!-- if ends here of thumbnail -->
            <div class="blog-excerpt">
                <?php the_excerpt() ; ?>
            </div> <!-- blog-excerpt -->
            <div class="blog-more">
                <button class="btn btn-primary" href="<?php the_permalink();?>">Read More</button>
            </div>
            </article> <!-- article-->
            <?php endwhile; else : ?> <!-- while ends here of post loop and else starts -->
	        <article class="blog">
	            <p><?php _e( 'Sorry, no posts found yo can always start writing' ); ?></p>
	        </article>
            <?php endif; ?> <!-- if ends here post loop -->
            
        </div> <!-- col-sm-8-->
        <div class="col-sm-4">
            <?php get_sidebar() ; ?>
        </div><!-- col-sm-4 -->
    </div> <!-- row -->
</section> <!-- section -->

<?php get_footer() ; ?>