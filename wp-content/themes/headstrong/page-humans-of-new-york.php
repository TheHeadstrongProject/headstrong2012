<?php get_header(); ?>
<?php while (have_posts()):the_post(); ?>
<div class="hony">
  <div class="hony__above-the-fold">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="hony__content">
            <h1 class="hony__title">We're on Humans of New York</h1>
            <p class="hony__p">Out clients inspire us every day with stories worth sharing.</p>
            <a
              class="hony__button"
              href="/get-help">
                Get Help
            </a>
            <a
              class="hony__button"
              href="/donate">
                Donate
            </a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">

    <div class="hony__body">
      <div class="row">
        <div class="col-xs-12">
          <p class="hony__body-copy">
            We’re honored that Humans of New York (HONY) is featuring our clients, the brave veterans of Iraq and Afghanistan, as well as the trauma clinicians who are moving mountains to help them.
            <br />
            <br />
            Brandon Stanton started
            <a href="http://www.humansofnewyork.com/">
            HONY
            </a>
            as a simple photography project in 2010. Since then, his powerful storytelling has opened our hearts to strangers from every corner of the globe.
            <br />
            <br />
            Now, he’s working with us to tell our
            <a href="/about-us">
            story
            </a>
            and change the lives of veterans in
            <a href="/donate">
            need.
            </a>
            The Headstrong Project provides free mental health care to veterans of Iraq and Afghanistan, delivered by world-class clinicians. And with your support, we can extend our proven program to reach more veterans in need.
          </p>
        </div>
      </div>
    </div>

    <div class="hony__profile">
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <div class="hony__profile-picture-container">
            <div class="hony__profile-picture"></div>
          </div>
        </div>
        <div class="col-xs-12 col-md-8">
          <p class="hony__profile-p">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <p>
            <a class="hony__a" href='#'>Link to Profile</a>
          </p>
          <p>
            <a class="hony__a" href='#'>Link to MailTo</a>
          </p>
        </div>
      </div>
    </div>

    <div class="hony__profile">
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <div class="hony__profile-picture-container">
            <div class="hony__profile-picture"></div>
          </div>
        </div>
        <div class="col-xs-12 col-md-8">
          <p class="hony__profile-p">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <p>
            <a class="hony__a" href='#'>Link to Profile</a>
          </p>
          <p>
            <a class="hony__a" href='#'>Link to MailTo</a>
          </p>
        </div>
      </div>
    </div>

    <div class="hony__profile">
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <div class="hony__profile-picture-container">
            <div class="hony__profile-picture"></div>
          </div>
        </div>
        <div class="col-xs-12 col-md-8">
          <p class="hony__profile-p">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <p>
            <a class="hony__a" href='#'>Link to Profile</a>
          </p>
          <p>
            <a class="hony__a" href='#'>Link to MailTo</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-xs-offset-3">
        <button class="hony__button">Fundraising Link?</button>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
