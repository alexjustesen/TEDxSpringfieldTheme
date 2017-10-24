<section>
   
    <div class="row">
    
    <?php if ( $talks->have_posts() ) : while ( $talks->have_posts() ) : $talks->the_post(); ?>
    
        <?php
            $post         = get_post();
            $video_id     = get_post_meta($post->ID, '_talk_video_id', true);
            $speaker_name = get_post_meta($post->ID, '_talk_speaker_name', true);
            $speaker_role = get_post_meta($post->ID, '_talk_speaker_role', true);
            $width        = ($for_homepage) ? "4" : "3";
        ?>
    
        <div class="col-xs-12 col-md-6 col-lg-<?= $width; ?>">

            <div class="thumbnail talk-shortcode">
                
                <div class="img-wrapper">
                   
                    <img src="//img.youtube.com/vi/<?= $video_id; ?>/0.jpg" alt="<?= the_title(); ?>" class="img-responsive">
                    
                    <div class="img-overlay">
                        <a href="<?= get_permalink($post->ID) ?>" class="btn btn-md btn-danger" role="button"><i class="fa fa-play fa-fw"></i></a>
                    </div>
                    
                </div>
                                
                <div class="caption">
                    <h5 class="video-title shave" title="<?= the_title(); ?>"><?= the_title(); ?></h5>
                    <p class="video-description"><span class="shave" title="<?= $speaker_name; ?>"><?= $speaker_name; ?></span><br/>
                        Talk Year: <?php single_term($post, 'talk_years'); ?>
                    </p>
                    <p>
                        
                    </p>
                </div>
                
            </div>
    
        </div>
    
    <?php endwhile; endif; ?>
    
    </div>
    
</section>
