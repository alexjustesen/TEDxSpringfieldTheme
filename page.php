<?php // Template Name: One column (Default)
    get_header();
?>
<div class="page-contents">
   
    <div class="container">
    
        <div class="row">
            
            <div id="main" class="col-md-12">
                <section>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        
                        <?php the_content(); ?>
                        
                    <?php endwhile; endif; ?>
                </section>
            </div>
            
        </div>
        
    </div>
    
</div>

<?php get_footer(); ?>
