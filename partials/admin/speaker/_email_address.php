<p><strong>Email Address</strong></p>
<input type="text" name="_speaker_email_address" id="speaker_email_address" style="width: 100%;" value="<?= $speaker_email_address; ?>"/>
<input type="hidden" name="_speaker_email_address_nonce" value="<?= wp_create_nonce('tedx_speaker_email_address_nonce'); ?>"/>
<p class="description">eg. name@domainname.com</p>
