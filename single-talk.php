<?php get_header(); ?>
<div class="container spacing-top">
    <div class="row">
        <div class="col-md-9">
            <div class="post-content">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <?php
                        $talk     = get_post();
                        $video_id = get_post_meta($talk->ID, '_talk_video_id', true);
                    ?>
                    <div class="page-header">
                        <h3><?php the_title(); ?>
                            <small><?= the_excerpt(); ?></small>
                        </h3>
                    </div>
                    <?php if (!empty($video_id)): ?>
                    <div class="feature-image">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="//www.youtube.com/embed/<?= $video_id ?>" class="embed-responsive-item" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <?php endif; ?>

                    <div class="user-generated-content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
        <!-- .col-md-9 -->

        <div class="col-md-3">
            <?php get_sidebar('talk'); ?>
        </div>
        <!-- .col-md-3 -->
    </div>
</div>
<?php get_footer(); ?>