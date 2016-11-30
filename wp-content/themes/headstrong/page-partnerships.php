<?php get_header(); ?>
<?php while (have_posts()):the_post(); ?>
<div class="partnerships">
  <div class="partnerships__above-the-fold">
  </div>

  <div class="partnerships__body">
    <h1 class="center-align-panel partnerships__title">Partnerships</h1>
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
  </div>

  <div class="partnerships__list">
    <div class="partnerships__partner">
      <div class="partnerships__left-image">
        <?php $partnerships_tr_src = get_template_directory_uri() . '/img/TeamRubicon.png'; ?>
        <a href="http://teamrubiconusa.org/join-the-team/" target="_blank">
          <img
            class="partnerships__image"
            src="<?php echo $partnerships_tr_src; ?>">
          </img>
        </a>
      </div>
      <div class="partnerships__aboutus">
        <p>
        Team Rubicon seeks to provide our veterans with three things they lose after leaving the military: a purpose, gained through disaster response; community, built by serving with others; and identity, created by joining a new mission.
        </p>
        <p>
        By providing veterans a mission that helps them regain a sense of purpose, community and identity, Team Rubicon is building the strongest, most effective cadre of disaster response workers in the world.
        </p>
        <p>
        Between and during disaster response operations, Team Rubicon engages our members in training, service projects, and social events to ensure we build the strongest, most effective cadre of disaster response workers in the world.
        </p>
      </div>
    </div>

    <div class="partnerships__partner">
      <div class="partnerships__right-image">
        <?php $partnerships_sss_src = get_template_directory_uri() . '/img/SSStagline.jpg'; ?>
        <a href="https://www.missioncontinues.org/service-platoons/" target="_blank">
          <img
            class="partnerships__image"
            src="<?php echo $partnerships_sss_src; ?>">
          </img>
        </a>
      </div>
      <div class="partnerships__aboutus">
        <p>The Mission Continues is a national nonprofit organization that empowers veterans who are adjusting to life at home to find purpose through community impact. Their operations in cities across the country deploy veteran volunteers alongside non-profit partners and community leaders to solve some of the most challenging issues facing our communities: improving community education resources, eliminating food deserts, mentoring at-risk youth and more. Through this unique model, veterans build new skills and networks that help them successfully reintegrate to life after the military while making long-term, sustainable transformations in communities and inspiring future generations to serve.
        </p>
      </div>
    </div>

    <div class="partnerships__partner">
      <div class="partnerships__left-image">
        <?php $partnerships_next_src = get_template_directory_uri() . '/img/nextop.jpg'; ?>
        <a href="http://www.nextopvets.org/veterans/" target="_blank">
          <img
            class="partnerships__image"
            src="<?php echo $partnerships_next_src; ?>">
          </img>
        </a>
      </div>
      <div class="partnerships__aboutus">
        <p class="partnerships__p">NextOp recruits, trains, and places high-performing middle-enlisted military leaders into energy, construction and healthcare careers.
        </p>
      </div>
    </div>

    <div class="partnerships__partner">
      <div class="partnerships__right-image">
        <?php $partnerships_sss_src = get_template_directory_uri() . '/img/SSStagline.jpg'; ?>
        <a href="http://stopsoldiersuicide.org/" target="_blank">
          <img
            class="partnerships__image"
            src="<?php echo $partnerships_sss_src; ?>">
          </img>
        </a>
      </div>
      <div class="partnerships__aboutus">
        <p class="partnerships__p">Stop Soldier Suicide provides an active program of case management to enable Veterans of any service branch or service era achieve empowerment in their life beyond the military. We have an integrated network of resources to support the full hierarchy of needs, regardless of the complexity. We partner with our clients for a period of two years to help Veterans discover their unique path after they leave the service. By finding this path to empowerment, we can eliminate the despair that leads to suicide.
        </p>
      </div>
    </div>
  </div>
</div>


<?php endwhile; ?>
<?php get_footer(); ?>
