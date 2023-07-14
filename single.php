<?php get_header(); ?>

<div id="banner-area" class="banner-area" style="background-image:url(<?php echo get_theme_file_uri( '/images/banner/banner1.jpg' ); ?>)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title"><?php the_title(); ?></h1>
                <?php 
                  $theParent = wp_get_post_parent_id(get_the_ID());
                  if ($theParent) { ?>
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>" title="Back to Homepage">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                        <a href="<?php echo get_the_permalink($theParent); ?>" title="Back to <?php echo get_the_title( $theParent ) ?>">
                          <?php echo get_the_title($theParent); ?>
                        </a>
                      </li>
                    </ol>
                </nav>
                  <?php }
                ?>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
        <div class="col-lg-4">
          <div class="sidebar sidebar-left">
            <?php 
              $checkPage = get_pages(array(
                'child_of' => get_the_ID()
              ));
              
              if ($theParent or $checkPage) { ?>
                <div class="widget">
                  <h3 class="widget-title">
                    <a href="<?php echo get_permalink($theParent); ?>">
                      <?php echo get_the_title($theParent); ?>
                    </a>
                  </h3>
                  <ul class="nav service-menu">
                    <?php 
                      if ($theParent) {
                        $findChildrenOf = $theParent;
                      } else {
                        $findChildrenOf = get_the_ID();
                      }

                      wp_list_pages(array(
                        'title_li' => NULL,
                        'child_of' => $findChildrenOf
                      ));
                    ?>
                  </ul>
                </div>
              <?php }
            ?>

          </div>
        </div>

        <div class="col-lg-8">
            <h3 class="column-title"><?php the_title(); ?></h3>
            <?php 
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); 
                        the_content();
                    } // end while
                } // end if
            ?>
        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->


<?php get_footer(); ?>


