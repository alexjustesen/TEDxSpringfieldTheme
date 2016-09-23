<section>
  <div class="row animated-tiles">

    <?php foreach ($slugs as $slug): ?>
      <?php
      $speaker     = $this->get_speaker_by_slug($slug);
      $name        = $speaker->post_title;
      $excerpt     = $speaker->post_excerpt;
      $description = get_post_meta($speaker->ID, '_speaker_video_description', true);
      $image       = wp_get_attachment_image_src(get_post_thumbnail_id($speaker->ID), 'speaker');
      if (is_array($image) && !empty($image[0])) {
        $image = $image[0];
      }
      ?>

      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 speaker-tile" data-remote="true" data-href="<?php the_permalink(); ?>">
        <a class="speaker-tile-container" href="<?= get_permalink($speaker->ID) ?>">
          <div class="speaker-description" style="background-image: url(<?= $image ?>);">
            <div class="speaker-border"></div>
            <div class="speaker-info">
              <div class="speaker-title">Speaker</div>
              <h2><?= $name; ?></h2>

              <div class="speaker-position"><?= $excerpt ?></div>
            </div>
          </div>
          <!-- .speaker-title -->
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</section>