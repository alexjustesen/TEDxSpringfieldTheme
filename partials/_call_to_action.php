<div class="cta-container">
   
    <div class="container">
       
        <div class="row">
           
            <div class="col-xs-12">
                
                <?php if( !empty( get_theme_mod( 'tedx_cta_text' ) ) ) : ?>
                    <span class="cta-text"><?= get_theme_mod( 'tedx_cta_text' ); ?></span>
                <?php endif; ?>

                <?php if( !empty( get_theme_mod( 'tedx_cta_button_text' ) ) ) : ?>
                    <span class="cta-button pull-right">
                        <a href="<?= get_theme_mod('tedx_cta_button_url', '/'); ?>" target="<?= get_theme_mod('tedx_cta_button_target', '_self'); ?>" rel="noopener" class="btn btn-default"><?= get_theme_mod( 'tedx_cta_button_text' ); ?></a>
                    </span>
                <?php endif; ?>

            </div><!-- /.col -->
            
        </div><!-- /.row -->
        
    </div><!-- /.container -->
    
</div><!-- /.cta-container -->
