<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' );?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="alternate" type="application/rss+xml" title="<?php esc_attr(bloginfo( 'name' )); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	    <link rel="alternate" type="application/atom+xml" title="<?php esc_attr(bloginfo( 'name' )); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

        <!-- CSS
        ================================================== -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo get_theme_file_uri( '/plugins/bootstrap/bootstrap.min.css' ); ?>">
        <!-- FontAwesome -->
        <link rel="stylesheet" href="<?php echo get_theme_file_uri( '/plugins/fontawesome/css/all.min.css' ); ?>">
        <!-- Animation -->
        <link rel="stylesheet" href="<?php echo get_theme_file_uri( '/plugins/animate-css/animate.css' ); ?>">
        <!-- slick Carousel -->
        <link rel="stylesheet" href="<?php echo get_theme_file_uri( '/plugins/slick/slick.css' ); ?>">
        <link rel="stylesheet" href="<?php echo get_theme_file_uri( '/plugins/slick/slick-theme.css' ); ?>">
        <!-- Colorbox -->
        <link rel="stylesheet" href="<?php echo get_theme_file_uri( '/plugins/colorbox/colorbox.css' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="body-inner">
            <div id="top-bar" class="top-bar">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <ul class="top-info text-center text-md-left">
                        <li><i class="fas fa-map-marker-alt"></i>
                            <p class="info-text"><a href="https://goo.gl/maps/CLhW5DtEKpABtSv1A" title="View on Google Maps">Jl. Margasatwa No. 111 Pondok Labu, Jakarta Selatan</a></p>
                        </li>
                        </ul>
                    </div>
                    <!--/ Top info end -->

                    <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                        <ul class="list-unstyled">
                        <li>
                            <a title="LinkedIn" href="https://www.linkedin.com/company/pt.-catur-elang-perkasa">
                            <span class="social-icon"><i class="fab fa-linkedin"></i></span>
                            </a>
                            <a title="Youtube" href="https://www.youtube.com/@CaturElangPerkasaChannel">
                            <span class="social-icon"><i class="fab fa-youtube"></i></span>
                            </a>
                        </li>
                        </ul>
                    </div>
                    <!--/ Top social end -->
                    </div>
                    <!--/ Content row end -->
                </div>
            <!--/ Container end -->
            </div>
            <!--/ Topbar end -->
            <!-- Header start -->
            <header id="header" class="header-one">
            <div class="bg-white">
                <div class="container">
                <div class="logo-area">
                    <div class="row align-items-center">
                    <div class="col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                        <a class="d-block" href="<?php echo site_url(); ?>">
                        <img src="<?php echo get_theme_file_uri( '/images/logo.png' ); ?>" width="100">
                        </a>
                    </div><!-- logo end -->

                    <div class="col-lg-9 header-right">
                        <ul class="top-info-box">
                        <li>
                            <div class="info-box">
                            <div class="info-box-content">
                                <p class="info-box-title">Call Us</p>
                                <p class="info-box-subtitle"><a href="tel:62217503355" title="Call Us">(021) 750 3355</a></p>
                            </div>
                            </div>
                        </li>
                        <li>
                            <div class="info-box">
                            <div class="info-box-content">
                                <p class="info-box-title">Email Us</p>
                                <p class="info-box-subtitle"><a href="mailto:konstruksi@caturelang.co.id" title="Email Us">konstruksi@caturelang.co.id</a></p>
                            </div>
                            </div>
                        </li>
                        <li class="last">
                            <div class="info-box last">
                            <div class="info-box-content">
                                <p class="info-box-title">Global Certificate</p>
                                <p class="info-box-subtitle">ISO 9001:2015</p>
                            </div>
                            </div>
                        </li>
                        <li class="header-get-a-quote">
                            <a class="btn btn-primary" href="cep-cp-202104.pdf">Get Our Company Profile</a>
                        </li>
                        </ul><!-- Ul end -->
                    </div><!-- header right end -->
                    </div><!-- logo area end -->

                </div><!-- Row end -->
                </div><!-- Container end -->
            </div>

            <div class="site-navigation">
                <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-dark p-0">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                        aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="navbar-collapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link active" href="<?php echo site_url(); ?>">Home</a></li>
                            <li class="nav-item dropdown">
                            <a href="<?php echo site_url( 'about-us' ); ?>" class="nav-link dropdown-toggle" data-toggle="dropdown">About Us <i
                                class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo site_url( 'about-us/company-overview' ); ?>">Company Overview</a></li>
                                <li><a href="<?php echo site_url( 'about-us/team-structure' ); ?>">Team Structure</a></li>
                                <li><a href="<?php echo site_url( 'about-us/partnership' ); ?>">Partnership</a></li>
                                <li><a href="<?php echo site_url( 'about-us/csr' ); ?>">CSR</a></li>
                            </ul>
                            </li>

                            <li class="nav-item dropdown">
                            <a href="<?php echo site_url( 'services' ); ?>" class="nav-link dropdown-toggle" data-toggle="dropdown">Services <i
                                class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo site_url( 'services/operation-maintenance' ); ?>">Operation & Maintenance</a></li>
                                <li><a href="<?php echo site_url( 'services/construction' ); ?>">Construction</a></li>
                                <li><a href="<?php echo site_url( 'services/epc' ); ?>">EPC</a></li>
                                <li><a href="<?php echo site_url( 'services/investment' ); ?>">Investment</a></li>
                            </ul>
                            </li>

                            <li class="nav-item dropdown">
                            <a href="<?php echo site_url( 'projects' ); ?>" class="nav-link dropdown-toggle" data-toggle="dropdown">Projects <i
                                class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo site_url( 'projects/experiences' ); ?>">Experiences</a></li>
                                <li><a href="<?php echo site_url( 'projects/ongoing-projects' ); ?>">Ongoing Projects</a></li>
                            </ul>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="<?php echo site_url( 'qhse' ); ?>">Q-HSE</a></li>

                            <li class="nav-item"><a class="nav-link" href="<?php echo site_url( 'contact-us' ); ?>">Contact Us</a></li>
                        </ul>
                        </div>
                    </nav>
                    </div>
                    <!--/ Col end -->
                </div>
                <!--/ Row end -->

                <div class="nav-search">
                    <span id="search"><i class="fa fa-search"></i></span>
                </div><!-- Search end -->

                <div class="search-block" style="display: none;">
                    <label for="search-field" class="w-100 mb-0">
                    <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
                    </label>
                    <span class="search-close">&times;</span>
                </div><!-- Site search end -->
                </div>
                <!--/ Container end -->

            </div>
            <!--/ Navigation end -->
            </header>
    <!--/ Header end -->
