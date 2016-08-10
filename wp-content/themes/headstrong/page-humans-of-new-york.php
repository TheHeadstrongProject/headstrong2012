<?php get_header(); ?>
<?php while (have_posts()):the_post(); ?>
<div class="hony">
  <div class="hony__above-the-fold">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="hony__content">
            <h1 class="hony__title">We're on Humans of New York</h1>
            <p class="hony__subtitle">Our clients inspire us every day with stories worth sharing.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="hony__body">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhumansofnewyork%2Fposts%2F1328445937229503%3A0&width=500" width="100%" height="516" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>

        <div class="col-xs-12 col-md-4">
          <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhumansofnewyork%2Fposts%2F1328570737217023%3A0&width=500" width="100%" height="516" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>

        <div class="col-xs-12 col-md-4">
          <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhumansofnewyork%2Fposts%2F1328636300543800%3A0&width=500" width="100%" height="516" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>
        <div class="col-xs-12">
          <p class="hony__p">
            We’re honored that Humans of New York (HONY) is featuring our clients, the brave veterans of Iraq and Afghanistan, as well as the trauma clinicians who are moving mountains to help them.
          </p>
          <p class="hony__p">
            Brandon Stanton started
            <a
              class="ga-track hony__a"
              data-ga-action="clicked on link"
              data-ga-category="hony"
              data-ga-label="humans-of-new-york body"
              href="http://www.humansofnewyork.com/"
              title="Humans of New York"
            >
              HONY
            </a>
            as a simple photography project in 2010. Since then, his powerful storytelling has opened our hearts to strangers from every corner of the globe.
          </p>
          <p class="hony__p">
            Now, he’s working with us to tell our
            <a
              class="ga-track hony__a"
              data-ga-action="clicked on link"
              data-ga-category="about-us"
              data-ga-label="humans-of-new-york body"
              href="/about-us"
              title="About Us"
            >
              story
            </a>
            and change the lives of veterans in
            <a
              class="ga-track hony__a"
              data-ga-action="clicked on link"
              data-ga-category="donate"
              data-ga-label="humans-of-new-york body"
              href="/donate"
              title="Donate"
            >
              need.
            </a>
            The Headstrong Project provides free mental health care to veterans of Iraq and Afghanistan, delivered by world-class clinicians. And with your support, we can extend our proven program to reach more veterans in need.
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <div class="hony__p">
            <a
              class="ga-track hony__button"
              data-ga-action="clicked on link"
              data-ga-category="get-help"
              data-ga-label="humans-of-new-york body"
              href="/get-help"
              title="Get Help"
            >
                Get Help
            </a>
            <a
              class="ga-track hony__button"
              data-ga-action="clicked on cta"
              data-ga-category="donate"
              data-ga-label="humans-of-new-york body"
              href="/donate"
              title="Donate"
            >
                Donate Now
            </a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <div class=hony__body-video>
            <div class="nested-video"><div class="embed-responsive embed-responsive-16by9"><iframe src="https://www.youtube.com/embed/To4r0cQttcQ" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
