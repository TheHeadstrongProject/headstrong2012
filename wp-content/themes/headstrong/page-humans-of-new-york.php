<?php get_header(); ?>
<?php while (have_posts()):the_post(); ?>
<div class="hony">
  <div class="hony__above-the-fold">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="hony__content">
              <h1 class="hony__title">Humans of New York</h1>
              <p class="hony__p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <button class="hony__button">Fundraising Link?</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
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
