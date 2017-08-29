<p><strong>Website URL</strong></p>
<input type="text" name="_speaker_website_url" id="speaker_website_url" style="width: 100%;" value="<?= $speaker_website_url; ?>"/>
<input type="hidden" name="_speaker_website_url_nonce" value="<?=  wp_create_nonce('tedx_speaker_website_url_nonce'); ?>"/>
<p class="description">eg. www.tedx.com <em>or</em> http(s)://www.tedx.com</p>
