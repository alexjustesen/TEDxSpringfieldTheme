<p><strong>Video ID</strong></p>
<input type="text" name="_speaker_video_id" id="speaker_video_id" style="width: 100%;" value="<?= $speaker_video_id; ?>"/>
<input type="hidden" name="_speaker_video_id_nonce" value="<?=  wp_create_nonce('tedx_speaker_video_id_nonce'); ?>"/>
<p class="description">The ID code that is referenced in the URL of every YouTube video (eg. http://www.youtube.com/watch?v=<strong>QRDJnLGBUTI</strong>)</p>
