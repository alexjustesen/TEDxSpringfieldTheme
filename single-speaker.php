<?php get_header(); ?>

    <div class="container">
        
        <div class="row">
            
            <div class="col-xs-12 col-md-9 single-speaker-container">
                
                <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
                               
                <?php
                    $speaker            = get_post();
                    $speaker_name       = $speaker->post_title;
                    $speaker_email_address = get_post_meta( $speaker->ID, '_speaker_email_address', true );
                    $speaker_facebook_url = get_post_meta( $speaker->ID, '_speaker_facebook_url', true );
                    $speaker_instagram_id = get_post_meta( $speaker->ID, '_speaker_instagram_id', true );
                    $speaker_linkedin_url = get_post_meta( $speaker->ID, '_speaker_linkedin_url', true );
                    $speaker_twitter_id = get_post_meta( $speaker->ID, '_speaker_twitter_id', true );
                    $speaker_video_id   = get_post_meta( $speaker->ID, '_speaker_video_id', true );
                    $speaker_video_desc = get_post_meta( $speaker->ID, '_speaker_video_description', true );
                    $speaker_website_url = get_post_meta( $speaker->ID, '_speaker_website_url', true );
                    $excerpt            = $speaker->post_excerpt;
                    $featured_img_url   = get_the_post_thumbnail_url( $post->ID, 'speaker' );
                ?>
                                
                <div class="row">
                    
                    <div class="col-xs-12 col-md-3">
                        
                        <div class="thumbnail">
                            
                            <img src="<?= $featured_img_url; ?>"/>
                            
                            <div class="caption">
                                <p class="text-center">
                                    <?= the_title(); ?>
                                </p>
                                
                                <hr/>

                                <p class="text-center">

                                    <?php if( !empty( $speaker_website_url )) : ?>
                                        <a href="<?= esc_url( $speaker_website_url ); ?>" class="btn btn-link" target="_blank" rel="noopener"><i class="fa fa-globe"></i></a>
                                    <?php endif; ?>

                                    <?php if( !empty( $speaker_email_address )) : ?>
                                        <a href="mailto:<?= sanitize_email( $speaker_email_address ); ?>" class="btn btn-link" target="_blank" rel="noopener"><i class="fa fa-envelope-o"></i></a>
                                    <?php endif; ?>

                                    <?php if( !empty( $speaker_linkedin_url )) : ?>
                                        <a href="<?= esc_url( $speaker_linkedin_url ); ?>" class="btn btn-link" target="_blank" rel="noopener"><i class="fa fa-linkedin"></i></a>
                                    <?php endif; ?>
                                    
                                    <?php if( !empty( $speaker_facebook_url )) : ?>
                                        <a href="<?= esc_url( $speaker_facebook_url ); ?>" class="btn btn-link" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a>
                                    <?php endif; ?>

                                    <?php if( !empty( $speaker_instagram_id )) : ?>
                                        <a href="https://www.instagram.com/<?= $speaker_instagram_id; ?>" class="btn btn-link" target="_blank" rel="noopener"><i class="fa fa-instagram"></i></a>
                                    <?php endif; ?>

                                    <?php if( !empty( $speaker_twitter_id )) : ?>
                                        <a href="https://www.twitter.com/<?= $speaker_twitter_id; ?>" class="btn btn-link" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a>
                                    <?php endif; ?>

                                </p>
                                
                                <?php if ( !empty( $video_id ) ) : ?>
                                    <hr/>
                        
                                    <p class="text-center text-muted">Speaker Video</p>

                                    <button class="btn btn-block btn-danger"><i class="fa fa-play fa-fw"></i> Play</button>

                                <?php endif; ?>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="col-xs-12 col-md-9">
                        
                        <h3 class="text-muted">Biography</h3>
                        
                        <p><?= the_content(); ?></p>
                        
                    </div>
                    
                </div>
                
                <?php endwhile; endif; ?>
                
            </div><!-- end .speaker-container -->
            
            <div class="col-xs-12 col-md-3 sidebar">
                
                <?php get_sidebar('speaker'); ?>
                
            </div>
            
        </div>
        
    </div>

<?php get_footer(); ?>
