<?php get_header(); ?>

<div id="banner-area" class="banner-area" style="background-image:url(<?php echo get_theme_file_uri( '/images/banner/banner1.jpg' ); ?>)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title"><?php the_title(); ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                        <?php $parent_title = get_the_title( $post->post_parent ); echo $parent_title; ?>
                      </li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 


    <?php
    while(have_posts()) {
        the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    <?php }

    get_footer();
    
?>

