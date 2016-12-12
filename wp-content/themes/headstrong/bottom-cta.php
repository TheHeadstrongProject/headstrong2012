<?php if (!is_page('donate')) { ?>
  <a
    class="ga-track bottom-cta"
    data-ga-action="clicked on link"
    data-ga-category="donate"
    data-ga-label="fixed"
    href="/donate"
  >
    <div class="bottom-cta__text">Get us to 50k by 2017 help us and donate now</div>
    <div class="bottom-cta__button">Donate</div>

    <div class="progress bottom-cta__thermometer">
      <div class="active progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
      <span>$25,000</span>
      </div>
    </div>

    <div class="bottom-cta__thermometer-values">
      <div class="bottom-cta__thermometer-min">$0</div>
      <div class="bottom-cta__thermometer-max">$50,000</div>
    </div>
  </a>
<?php } ?>
