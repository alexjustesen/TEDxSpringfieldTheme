<div id="sidebar">
  <?php
  $year = get_theme_mod('promoted_speaker_year', date('Y'));
  global $SpeakerPostType;
  $related_videos = $SpeakerPostType->get_speakers_for($year, array('limit' => 3, 'exclude' => true));
  ?>

  <h2>Related Speakers</h2>

  <div class="row">
    <?php foreach ($related_videos->posts as $post): setup_postdata($post); ?>
      <div class="col-xs-12 related-speaker-tile">
        <div class="related-speaker-name"><p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p></div>
        <div class="related-speaker-position"><?= str_replace(array("<p>", "</p>"), "", get_the_excerpt()); ?></div>
        <hr>
      </div>
    <?php endforeach; ?>
  </div>
</div>
