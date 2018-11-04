<h1>Redland main options</h1>
<?php settings_errors(); ?>
<div class="redland-admin-hero-settings">
  <form method="post" action="options.php">
    <?php settings_fields('redland-settings-group'); ?>
    <?php do_settings_sections('redland-theme'); ?>
    <?php submit_button(); ?>
  </form>

  <?php
    $herotext = esc_attr(get_option('hero_text'));
    $herodesc = esc_attr(get_option('hero_desc'));
    $secherotext = esc_attr(get_option('sec_hero_text'));
    $secherodesc = esc_attr(get_option('sec_hero_desc'));

  ?>
  <div class="redland-herosection-preview">
    <div class="redland-herosection">
      <h1 class="redland-hero-text"><?php print $herotext?></h1>
      <h2 class="redland-sec-hero-text"><?php print $herodesc?></h2>
    </div>
    <div class="redland-secherosection">
      <h1 class="redland-hero-text"><?php print $secherotext?></h1>
      <h2 class="redland-sec-hero-text"><?php print $secherodesc?></h2>
    </div>
  </div>
</div>