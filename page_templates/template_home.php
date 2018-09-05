<?php // Template Name: Homepage w/ sidebar
    get_header();
?>

<div class="page-contents">
    
    <div class="container">
        
        <div class="row">
           
            <div id="main" class="col-md-9">
                
                <section>
                    
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
                        <?php the_content(); ?>

                    <?php endwhile; endif; ?>
                    
                </section>
                
            </div>
            
            <div id="sidebar" class="col-md-3">
                
                <?php get_sidebar(); ?>
                
            </div>
            
        </div><!-- /.row -->
        
    </div><!-- /.container -->
    
</div><!-- /.page-contents -->

<?php get_footer(); ?>
