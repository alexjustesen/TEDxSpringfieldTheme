<section>
    
    <div class="row">
        
        <?php if ( $team_members->have_posts() ) : while ( $team_members->have_posts() ) : $team_members->the_post(); ?>

            <?php $post = get_post(); ?>

            <?php
                // Set team member thumbnail
                $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'team');
        
                if (is_array($thumb) && !empty($thumb[0])) {
                    $thumbnail_src = $thumb[0];
                } else {
                    $thumbnail_src = get_bloginfo('template_url') . "/dist/img/defaults/team-placeholder.jpg";
                }
        
                // Set team member twitter
                $team_links = array();
        
                if ( get_post_meta( $post->ID, '_team_twitter_link', true ) ) {
                    $team_links['twitter'] = get_post_meta($post->ID, '_team_twitter_link', true);
                }
            ?>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 team-tile" data-remote="true" data-href="<?php the_permalink(); ?>">
            
                <div class="row">
                   
                    <div class="col-xs-12">
                       
                        <img src="<?= $thumbnail_src; ?>" alt="<?php the_title(); ?>" class="team-photo img-responsive img-circle">
                        
                    </div>
                    
                    <div class="col-xs-12">
                       
                        <h4 class="text-center" title="<?= $post->post_title; ?>">
                            <?= $post->post_title; ?><br/>
                            <small><?= get_post_meta($post->ID, '_team_job_description', true); ?></small>
                        </h4>
                        
                        <?php if ( !empty( $team_links ) ) : ?>
                        <p class="text-center">
                            <?php if ( !empty( $team_links['twitter'] ) ) : ?>
                                <a href="<?= $team_links['twitter']; ?>" title="<?= $post->post_title; ?>'s Twitter" target="_blank">
                                    <i class="fa fa-twitter fa-fw"></i>
                                </a>
                            <?php endif; ?>
                        </p>
                        <?php endif; ?>
                        
                    </div>
                    
                </div>

            </div>

        <?php endwhile; endif; ?>

    </div>

</section>
