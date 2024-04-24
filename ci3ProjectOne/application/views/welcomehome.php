<?php $this->load->view("includes/header"); ?>
<title>Home</title>
<!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
  <video autoplay muted loop id="bg-video">
    <source src="<?php echo base_url(); ?>assetshome/images/course-video.mp4" type="video/mp4" />
  </video>

  <div class="video-overlay header-text">
    <div class="caption">
      <h6>Graduate School of Management</h6>
      <h2><em>Your</em> Classroom</h2>
      <div class="signin-button">
        <a href="<?php echo base_url(); ?>Auth/signin"><button type="submit" class="btn btn-warning">Sign-in <i
              class="fa fa-sign-in" aria-hidden="true"></i></button></a>
      </div>
    </div>
  </div>
</section>
<!-- ***** Main Banner Area End ***** -->


<section class="features">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-12">
        <div class="features-post">
          <div class="features-content">
            <div class="content-show">
              <h4><i class="fa fa-pencil"></i>All Courses</h4>
            </div>
            <div class="content-hide">
              <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.
                Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
              <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a
                posuere imperdiet.</p>
              <div><a href="<?php echo base_url(); ?>AllCourses/index" type="click" target="_blank">More Info.</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <div class="features-post second-features">
          <div class="features-content">
            <div class="content-show">
              <h4><i class="fa fa-university" aria-hidden="true"></i></i>Fresh Admission</h4>
            </div>
            <div class="content-hide">
              <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.
                Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
              <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a
                posuere imperdiet.</p>
              <div><a href="<?php echo base_url(); ?>FreshAddmission/index" type="click" target="_blank">click
                  here</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <div class="features-post second-features">
          <div class="features-content">
            <div class="content-show">
              <h4><i class="fa fa-graduation-cap"></i>Virtual Class</h4>
            </div>
            <div class="content-hide">
              <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.
                Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
              <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a
                posuere imperdiet.</p>
              <div><a href="<?php echo base_url(); ?>VirtualClass/index" type="click" target="_blank">Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="section why-us" data-section="section2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Why choose Grad ?</h2>
        </div>
      </div>
      <div class="col-md-12">
        <div id='tabs'>
          <ul>
            <li><a href='#tabs-1'>Best Education</a></li>
            <li><a href='#tabs-2'>Top Management</a></li>
            <li><a href='#tabs-3'>Quality Meeting</a></li>
          </ul>
          <section class='tabs-content'>
            <article id='tabs-1'>
              <div class="row">
                <div class="col-md-6">
                  <img src="<?php echo base_url(); ?>assetshome/images/choose-us-image-01.png" alt="">
                </div>
                <div class="col-md-6">
                  <h4>Best Education</h4>
                  <p>Grad School is free educational HTML template with Bootstrap 4.5.2 CSS layout. Feel free to use
                    it for educational or commercial purposes. You may want to make <a href="#" target="_parent"
                      rel="sponsored">a little donation</a> to
                    TemplateMo. Please tell your friends about us. Thank you.</p>
                </div>
              </div>
            </article>
            <article id='tabs-2'>
              <div class="row">
                <div class="col-md-6">
                  <img src="<?php echo base_url(); ?>assetshome/images/choose-us-image-02.png" alt="">
                </div>
                <div class="col-md-6">
                  <h4>Top Level</h4>
                  <p>You can modify this HTML layout by editing contents and adding more pages as you needed. Since
                    this template has options to add dropdown menus, you can put many HTML pages.</p>
                  <p>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec interdum quam
                    felis non ante.</p>
                </div>
              </div>
            </article>
            <article id='tabs-3'>
              <div class="row">
                <div class="col-md-6">
                  <img src="<?php echo base_url(); ?>assetshome/images/choose-us-image-03.png" alt="">
                </div>
                <div class="col-md-6">
                  <h4>Quality Meeting</h4>
                  <p>You are NOT allowed to redistribute this template ZIP file on any template collection website.
                    However, you can use this template to convert into a specific theme for any kind of CMS platform
                    such as WordPress. For more information, you shall <a rel="nofollow" href="#"
                      target="_parent">contact TemplateMo</a> now.</p>
                </div>
              </div>
            </article>
          </section>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section video" data-section="section5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <div class="left-content">
          <span>our presentation is for you</span>
          <h4>Watch the video to learn more <em>about DPS School</em></h4>
          <p>You are NOT allowed to redistribute this template ZIP file on any template collection website. However,
            you can use this template to convert into a specific theme for any kind of CMS platform such as WordPress.
            You may <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact TemplateMo</a>
            for details.
            <br><br>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec interdum quam felis
            non ante.
          </p>
          <div class="main-button"><a rel="nofollow" href="#" target="_parent">External
              URL</a></div>
        </div>
      </div>
      <div class="col-md-6">
        <article class="video-item">
          <div class="video-caption">
            <h4>Power HTML Template</h4>
          </div>
          <figure>
            <a href="#" class="play"><img src="<?php echo base_url(); ?>assetshome//images/main-thumb.png"></a>
          </figure>
        </article>
      </div>
    </div>
  </div>
</section>

<section class="section contact" data-section="section6">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Let’s Keep In Touch</h2>
        </div>
      </div>
      <div class="col-md-6">

        <!-- Do you need a working HTML contact-form script?
                  
                    Please visit https://templatemo.com/contact page -->

        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-md-6">
              <fieldset>
                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
              </fieldset>
            </div>
            <div class="col-md-6">
              <fieldset>
                <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
              </fieldset>
            </div>
            <div class="col-md-12">
              <fieldset>
                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..."
                  required=""></textarea>
              </fieldset>
            </div>
            <div class="col-md-12">
              <fieldset>
                <button type="submit" id="form-submit" class="button">Send Message Now</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <div id="map">
          <iframe
            src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
            width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p><i class="fa fa-copyright"></i> COPYRIGHT © 2021. DELHI HIGH COURT. ALL RIGHTS RESERVED. ROUSE AVENUE COURT
          COMPLEX, PANDIT DEEN DAYAL UPADHYAYA MARG, MANDI HOUSE, NEW DELHI, DELHI 110002 | DESIGN: 
          <a href="https://templatemo.com" rel="sponsored" target="_parent">DELHI DISTRICT COURT</a></p>
      </div>
    </div>
  </div>
</footer>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url(); ?>assetshome/js/isotope.min.js"></script>
<script src="<?php echo base_url(); ?>assetshome/js/owl-carousel.js"></script>
<script src="<?php echo base_url(); ?>assetshome/js/lightbox.js"></script>
<script src="<?php echo base_url(); ?>assetshome/js/tabs.js"></script>
<script src="<?php echo base_url(); ?>assetshome/js/video.js"></script>
<script src="<?php echo base_url(); ?>assetshome/js/slick-slider.js"></script>
<script src="<?php echo base_url(); ?>assetshome/js/custom.js"></script>
<script>
  //according to loftblog tut
  $('.nav li:first').addClass('active');

  var showSection = function showSection(section, isAnimate) {
    var
      direction = section.replace(/#/, ''),
      reqSection = $('.section').filter('[data-section="' + direction + '"]'),
      reqSectionPos = reqSection.offset().top - 0;

    if (isAnimate) {
      $('body, html').animate({
        scrollTop: reqSectionPos
      },
        800);
    } else {
      $('body, html').scrollTop(reqSectionPos);
    }

  };

  var checkSection = function checkSection() {
    $('.section').each(function () {
      var
        $this = $(this),
        topEdge = $this.offset().top - 80,
        bottomEdge = topEdge + $this.height(),
        wScroll = $(window).scrollTop();
      if (topEdge < wScroll && bottomEdge > wScroll) {
        var
          currentId = $this.data('section'),
          reqLink = $('a').filter('[href*=\\#' + currentId + ']');
        reqLink.closest('li').addClass('active').
          siblings().removeClass('active');
      }
    });
  };

  $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
    if ($(e.target).hasClass('external')) {
      return;
    }
    e.preventDefault();
    $('#menu').removeClass('active');
    showSection($(this).attr('href'), true);
  });

  $(window).scroll(function () {
    checkSection();
  });
</script>
</body>

</html>