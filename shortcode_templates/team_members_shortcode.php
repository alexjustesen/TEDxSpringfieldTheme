<section>
    
    <div class="row animated-tiles">
        
        <?php if ($team_members->have_posts()): while ($team_members->have_posts()) : $team_members->the_post(); ?>
        <?php $post = get_post(); ?>

        <?php
            $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'team');
            if (is_array($thumb) && !empty($thumb[0])) {
                $thumbnail_src = $thumb[0];
            } else {
                $thumbnail_src = get_bloginfo('template_url') . "/images/defaults/team-placeholder.jpg";
            }
        ?>
        
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 team-tile" data-remote="true" data-href="<?php the_permalink(); ?>">

            <div class="team-photo-wrapper">
                
                <img alt='<?php the_title(); ?>' src='<?=  $thumbnail_src; ?>' class="team-photo img-responsive">
                                   
                <?php
                    $team_links = array();
                
                    if ( get_post_meta($post->ID, '_team_twitter_link', true) ) {
                        $team_links['twitter'] = get_post_meta($post->ID, '_team_twitter_link', true); }
                ?>
                    
                <?php if ( !empty( $team_links ) ): ?>

                <div class="team-links">
                    
                    <?php if (!empty($team_links['twitter'])): ?>
                        
                        <a href="<?=$team_links['twitter']?>" target="_blank" title="<?=$post->post_title?>'s Twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        
                    <?php endif; ?>

                </div>
                
                <?php endif; ?>
                <!-- .team-links -->
                
            </div>
            <!-- .team-photo-wrapper -->

            <div class="team-info">

                <div class="team-title">
                    
                    <h2><?=$post->post_title?></h2>

                    <div class="team-role" alt="<?=  get_post_meta($post->ID, '_team_job_description', true) ?>">
                        <?=  get_post_meta($post->ID, '_team_job_description', true) ?>
                    </div>
                    
                </div>
                <!-- .team-title -->

            </div>
            <!-- .team-info -->

        </div>
        
        <?php endwhile; endif; ?>
        
    </div>
    
</section>
