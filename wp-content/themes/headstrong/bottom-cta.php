<?php
  $copy = get_field('donate_thermometer_copy', 16);
  $progress = get_field('donate_thermometer_progress', 16);
  $progress_formatted = money_format($progress);
  $progress_percentage = $progress / 50000 * 100;
?>

<?php if (!is_page('donate')) { ?>
  <a
    class="ga-track bottom-cta bottom-cta--link"
    data-ga-action="clicked on link"
    data-ga-category="donate"
    data-ga-label="fixed"
    href="/donate"
  >
    <div class="bottom-cta__text">
      <?php echo $copy; ?>
    </div>
    <div class="bottom-cta__button">Donate</div>

    <div class="progress bottom-cta__thermometer">
      <div
        class="active progress-bar progress-bar-danger progress-bar-striped"
        role="progressbar"
        aria-valuenow="<?php echo $progress; ?>"
        aria-valuemin="0"
        aria-valuemax="50000"
        style="width:<?php echo $progress_percentage; ?>%"
      >
      <span>$progress_formatted</span>
      </div>
    </div>

    <div class="bottom-cta__thermometer-values">
      <div class="bottom-cta__thermometer-min">$0</div>
      <div class="bottom-cta__thermometer-max">$50,000</div>
    </div>
  </a>
<?php } ?>

<?php if (is_page('donate')) { ?>
  <div class="bottom-cta">
    <div class="bottom-cta__text bottom-cta__text--donation">
      <?php echo $copy; ?>
    </div>

    <div class="progress bottom-cta__thermometer">
      <div
        class="active progress-bar progress-bar-danger progress-bar-striped"
        role="progressbar"
        aria-valuenow="<?php echo $progress; ?>"
        aria-valuemin="0"
        aria-valuemax="50000"
        style="width:<?php echo $progress_percentage; ?>%"
      >
      <span>$progress_formatted</span>
      </div>
    </div>

    <div class="bottom-cta__thermometer-values">
      <div class="bottom-cta__thermometer-min">$0</div>
      <div class="bottom-cta__thermometer-max">$50,000</div>
    </div>
  </div>
<?php } ?>
