<?php get_header(); ?>

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="post">
                        <div class="post-media post-image">
                            <?php if ( has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="post-body">
                            <div class="entry-header">
                                <div class="post-meta">
                                    <span class="post-author">
                                        <i class="far fa-user"></i> <?php the_author_posts_link(); ?>
                                    </span>
                                    <span class="post-cat">
                                        <i class="far fa-folder-open"></i> <?php echo get_the_category_list(', '); ?>
                                    </span>
                                    <span class="post-meta-date">
                                        <i class="far fa-calendar"></i> <?php the_time( 'F jS, Y'); ?>
                                    </span>
                                    <span class="post-comment">
                                        <i class="far fa-comment"></i> <?php comments_number(); ?>
                                    </span>
                                </div>
                                <h2 class="entry-title">
                                    <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>"><?php the_title(); ?></a>  
                                </h2>
                            </div>
                            <div class="entry-content">
                                <?php the_excerpt(); ?>
                                <p>
                                    <a class="btn btn-primary" href="<?php the_permalink(); ?>">Continue Reading</a>
                                </p>
                            </div>
                        </div>
                    </div>

                <?php endwhile; else : ?>
                    <p>
                        <?php _e( 'No posts to display.' ) ?>
                    </p>
                <?php endif; ?>

                <?php echo paginate_links(); ?>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>