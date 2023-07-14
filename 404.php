<?php get_header(); ?>

<div id="main-container" class="main-container">
    <div class="container">
        <div class="row">
        <h1>
    <?php esc_html_e( '404', 'mightee' ); ?>
</h1>
<p>
    <?php esc_html_e( 'Sorry, the page that you are looking for was not found at the same time. Please use the search form below', 'mightee'); ?>
</p>

<?php get_search_form(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>