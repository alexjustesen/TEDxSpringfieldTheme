<input type="text" name="_speaker_twitter_id" id="speaker_twitter_id" style="width: 100%;" value="<?= $speaker_twitter_id; ?>" />
<input type="hidden" name="_speaker_twitter_id_nonce" value="<?=  wp_create_nonce('tedx_speaker_twitter_id_nonce');?>" />
<p class="description">Only the Twitter ID of the speaker. (eg. https://twitter.com/<strong>tedx</strong>)</p>
