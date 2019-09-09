  
<div class="timeline-container" id="timeline-1">
  <div class="timeline-header">
    <h2 class="timeline-header__title">Meet Our Team</h2>
    <h3 class="timeline-header__subtitle">Take a closer look into our amazing team. We won’t bite !</h3>
  </div>
  <div class="timeline">
    <?php foreach ($team->result_array() as $t): ?>
      <div class="timeline-item" data-text="<?=$t['team_designation']?>">
        <div class="timeline__content">
          <img class="timeline__img" src="<?=base_url('lib/images/team/').$t['team_image']?>"/>
          <h2 class="timeline__content-title"><?=$t['team_name']?></h2>
          <p class="timeline__content-desc"><?=$t['team_description']?></p>
          <div class="site-social-links">
            <a class="link-fb" href="<?=$t['team_fb']?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
            <a class="link-li" href="<?=$t['team_insta']?>"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
            <a class="link-tw" href="<?=$t['team_twitter']?>"><i class="fab fa-twitter" aria-hidden="true"></i></a>
            <a class="link-yt" href="<?=$t['team_linkedin']?>"><i class="fab fa-youtube" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    <?php endforeach ?>

   <!--  <div class="timeline-item" data-text="Chief Technology Officer(CTO)">
      <div class="timeline__content"><img class="timeline__img" src="<?=base_url('lib/images/team/milan.jpg')?>"/>
        <h2 class="timeline__content-title">Milan Thapa</h2>
        <p class="timeline__content-desc">Tech Enthusiast, Gadget Lover. Graduating fellow from CITE fulfilling his dream aid of Software Engineering. Mostly enjoy with his own Lappie want to swim in the depth of the Technological world and want to share the fishes what he would catch.
        </p>
        <div class="site-social-links">
          <a class="link-fb" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
          <a class="link-li" href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
          <a class="link-tw" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
          <a class="link-yt" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="timeline-item" data-text="Senior Developer">
      <div class="timeline__content"><img class="timeline__img" src="nischal.jpg"/>
        <h2 class="timeline__content-title">Nischal Ghimire</h2>
        <p class="timeline__content-desc">In 1905, Mustafa Kemal graduated from the War Academy in Istanbul with the rank of Staff Captain. Posted in Damascus, he started with several colleagues, a clandestinesociety called "Homeland and Freedom" to fight against the Sultan'sdespotism.</p>
        <div class="site-social-links">
          <a class="link-fb" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
          <a class="link-li" href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
          <a class="link-tw" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
          <a class="link-yt" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="timeline-item" data-text="Chief Executive Officer(CEO)">
      <div class="timeline__content"><img class="timeline__img" src="eeda.jpg"/>
        <h2 class="timeline__content-title">Eeda Rijal</h2>
        <p class="timeline__content-desc">Coder, Tech lover, Quick learner, Pursuing BE Elex. $ Comm from NEC with the aim to bring big impact on technology field. Miss. Eeda is also MSP 2017 and Personal Relation Officer of ASMAN of Nepal.</p>
        <div class="site-social-links">
          <a class="link-fb" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
          <a class="link-li" href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
          <a class="link-tw" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
          <a class="link-yt" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="timeline-item" data-text="Media Manager">
      <div class="timeline__content"><img class="timeline__img" src="saurav.jpg"/>
        <h2 class="timeline__content-title">Saurav Shrestha</h2>
        <p class="timeline__content-desc">In 1915, when Dardanelles campaign was launched, Colonel Mustafa Kemal became anational hero by winning successive victories and finally repelling the invaders.</p>
        <div class="site-social-links">
          <a class="link-fb" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
          <a class="link-li" href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
          <a class="link-tw" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
          <a class="link-yt" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="timeline-item" data-text="Chief Operation Officer(COO)">
      <div class="timeline__content"><img class="timeline__img" src="shishir.jpg"/>
        <h2 class="timeline__content-title">Shishir Shrestha</h2>
        <p class="timeline__content-desc">Tech lover, Quick learner, Pursuing B.Sc.CSIT from MBM college with the aim to bring big impact on technology field. Mr. Shishir is also MSP 2017 and Executive Member of CSIT Association of Nepal.</p>
        <div class="site-social-links">
          <a class="link-fb" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
          <a class="link-li" href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
          <a class="link-tw" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
          <a class="link-yt" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="timeline-item" data-text="Technical Lead">
      <div class="timeline__content"><img class="timeline__img" src="naresh.jpg"/>
        <h2 class="timeline__content-title">Naresh Shah</h2>
        <p class="timeline__content-desc">Coder, Tech Enthusiast, Pursuing B.Electronics & Communication from Himalaya College of Engineering (T.U) with aim to explore about new technology. Mr. Naresh Sah is also the member of Robotics Club.</p>
        <div class="site-social-links">
          <a class="link-fb" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
          <a class="link-li" href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
          <a class="link-tw" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
          <a class="link-yt" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="timeline-item" data-text="Junior Developer">
      <div class="timeline__content"><img class="timeline__img" src="prajwol.jpg"/>
        <h2 class="timeline__content-title">Prajwol Thapa</h2>
        <p class="timeline__content-desc">
          On April 23, 1920, the GrandNational Assembly was inaugurated. Mustafa Kemal Pasha was elected to its Presidency.
          Fighting on many fronts, he led his forces to victory against rebels and invadingarmies. Following the Turkish triumph at the two major battles at Inonu in Western Turkey,the Grand National Assembly conferred on Mustafa Kemal Pasha the title ofCommander-in-Chief with the rank of Marshal.
        </p>
        <div class="site-social-links">
          <a class="link-fb" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
          <a class="link-li" href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
          <a class="link-tw" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
          <a class="link-yt" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="timeline-item" data-text="Junior Developer">
      <div class="timeline__content"><img class="timeline__img" src="sandesh.jpg"/>
        <h2 class="timeline__content-title">Sandesh Adhikari</h2>
        <p class="timeline__content-desc">At the end of August 1922, the Turkish armieswon their ultimate victory. Within a few weeks, the Turkish mainland was completelyliberated, the armistice signed, and the rule of the Ottoman dynasty abolished</p>
        <div class="site-social-links">
          <a class="link-fb" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
          <a class="link-li" href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
          <a class="link-tw" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
          <a class="link-yt" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
        </div>
      </div>
    </div> -->
  </div>
</div>
