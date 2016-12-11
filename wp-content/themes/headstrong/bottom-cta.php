<?php if (!is_page('donate')) { ?>
  <a
    class="ga-track bottom-cta"
    data-ga-action="clicked on link"
    data-ga-category="donate"
    data-ga-label="fixed"
    href="/donate"
  >
    <div class="bottom-cta__text">Get us to 50K by 2017</div>
    <div class="bottom-cta__button">Donate</div>
    <div class="progress bottom-cta__thermometer">
      <div class="active progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
      <span class="sr-only">70% Complete</span>
      </div>
    </div>
    <div class="bottom-cta__thermometer">
    <div class="bottom-cta__thermometer-min">$0</div>
    <div class="bottom-cta__thermometer-max">$50,000</div>
    </div>
  </a>
<?php } ?>
