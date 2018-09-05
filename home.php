<?php // home.php
    get_header();

    $query = new TEDxQuery();
    $unsticky_posts = $query->unsticky_posts();
?>

<div class="page-contents">
    
    <div class="container">
        
        <div class="row">
            
            <div id="main" class="col-md-9">
                
                <div class="page-header">
                    <h3>Recent Posts</h3>
                </div>
                
                <?php
                    if ( count( $unsticky_posts ) > 0) {
                        global $post;
                        
                        foreach ( $unsticky_posts as $index => $post ) {
                            setup_postdata($post);
                            WP_Render::partial('partials/blog/_post_excerpt.php');
                        }
                    }
                    else {
                        WP_Render::partial('partials/_not_found.php', ['message' => 'There does not appear to be any posts here...']);
                    }
                ?>

                <?php WP_Render::partial('partials/_pagination.php', ['offset' => count( $unsticky_posts ) ]); ?>
                
            </div>
            <div id="sidebar" class="col-md-3">
                
                <?php get_sidebar(); ?>
                
            </div>
            
        </div>
        
    </div>
    
</div>

<?php get_footer(); ?>
