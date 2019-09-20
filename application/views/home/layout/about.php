<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcrumb-area">
  <div class="container h-100">
    <div class="row h-100 align-items-end">
      <div class="col-12">
        <div class="breadcumb--con">
          <h2 class="title">About</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <!-- Background Curve -->
  <div class="breadcrumb-bg-curve">
    <img src="./img/core-img/curve-5.png" alt="">
  </div>
</div>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ***** About Us Area Start ***** -->
<section class="uza-about-us-area section-padding-80">
  <div class="container">
    <div class="row align-items-center">
      <!-- About Thumbnail -->
      <div class="col-12 col-lg-6">
        <div class="about-us-thumbnail mb-80">
          <img src="./img/bg-img/2.jpg" alt="">
          <!-- Video Area -->
          <div class="uza-video-area hi-icon-effect-8">
            <a href="https://www.youtube.com/watch?v=sSakBz_eYzQ" class="hi-icon video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <!-- About Us Content -->
      <div class="col-12 col-lg-6">
        <div class="section-heading mb-5">
          <h2>Tentang Kami</h2>
        </div>

        <div class="about-us-content mb-80">
          <div class="about-tab-area">
            <ul class="nav nav-tabs mb-50" id="mona_modelTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">PERUSAHAAN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">LAYANAN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">MOTTO</a>
              </li>
            </ul>
          </div>

          <!-- Mona Tab Content -->
          <div class="about-tab-content">
            <div class="tab-content" id="mona_modelTabContent">
              <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                <!-- Tab Content Text -->
                <div class="tab-content-text">
                  <p><?=$about_us_perusahaan?></p>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                <!-- Tab Content Text -->
                <div class="tab-content-text">
                  <p><?=$about_us_layanan?></p>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3">
                <!-- Tab Content Text -->
                <div class="tab-content-text">
                  <p><?=$about_us_motto?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- About Background Pattern -->
  <div class="about-bg-pattern">
    <img src="./img/core-img/curve-2.png" alt="">
  </div>
</section>
<!-- ***** About Us Area End ***** -->

<!-- ***** Why Choose Us Area Start ***** -->
<section class="uza-why-choose-us-area">
  <div class="container">
    <div class="row align-items-center">
      <!-- Choose Us Content -->
      <div class="col-12 col-lg-6">
        <div class="choose-us-content mb-80">
          <div class="section-heading mb-4">
            <h2>Alasan memilih kami</h2>
            <p>Kami adalah partner anda menuju success</p>
          </div>
          <ul>
            <?php
            if ($alasan_memilih) {
              foreach ($alasan_memilih->result() as $alasan) {?>
                <li><i class="fa fa-check" aria-hidden="true"></i><?=$alasan->alasan?></li>
                <?php
              }
            }
            ?>
          </ul>
        </div>
      </div>
      <!-- Choose Us Thumbnail -->
      <div class="col-12 col-lg-6">
        <div class="choose-us-thumbnail mb-80">
          <img class="w-100" src="img/bg-img/22.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Why Choose Us Area End ***** -->

<!-- ***** Team Member Area Start ***** -->
<section class="uza-Portfolio-area section-padding-80">
  <div class="container">
    <div class="row">
      <!-- Section Heading -->
      <div class="col-12">
        <div class="section-heading text-center">
          <h2>Team of Experts</h2>
          <p>Kami konsisten pada industri kami dengan menjadi ahli di bidangnya.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <!-- Team Member Slides -->
      <div class="team-sildes owl-carousel">

        <!-- Single Team Slide -->
        <div class="single-team-slide">
          <img src="./img/bg-img/18.jpg" alt="">
          <!-- Overlay Effect -->
          <div class="overlay-effect">
            <h6>DESIGNER</h6>
            <h4>Roger Black</h4>
            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est.</p>
          </div>
          <!-- Social Info -->
          <div class="team-social-info">
            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
          </div>
        </div>

        <!-- Single Team Slide -->
        <div class="single-team-slide">
          <img src="./img/bg-img/19.jpg" alt="">
          <!-- Overlay Effect -->
          <div class="overlay-effect">
            <h6>DESIGNER</h6>
            <h4>Roger Black</h4>
            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est.</p>
          </div>
          <!-- Social Info -->
          <div class="team-social-info">
            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
          </div>
        </div>

        <!-- Single Team Slide -->
        <div class="single-team-slide">
          <img src="./img/bg-img/20.jpg" alt="">
          <!-- Overlay Effect -->
          <div class="overlay-effect">
            <h6>DESIGNER</h6>
            <h4>Roger Black</h4>
            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est.</p>
          </div>
          <!-- Social Info -->
          <div class="team-social-info">
            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
          </div>
        </div>

        <!-- Single Team Slide -->
        <div class="single-team-slide">
          <img src="./img/bg-img/21.jpg" alt="">
          <!-- Overlay Effect -->
          <div class="overlay-effect">
            <h6>DESIGNER</h6>
            <h4>Roger Black</h4>
            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est.</p>
          </div>
          <!-- Social Info -->
          <div class="team-social-info">
            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
          </div>
        </div>

        <!-- Single Team Slide -->
        <div class="single-team-slide">
          <img src="./img/bg-img/18.jpg" alt="">
          <!-- Overlay Effect -->
          <div class="overlay-effect">
            <h6>DESIGNER</h6>
            <h4>Roger Black</h4>
            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est.</p>
          </div>
          <!-- Social Info -->
          <div class="team-social-info">
            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
          </div>
        </div>

        <!-- Single Team Slide -->
        <div class="single-team-slide">
          <img src="./img/bg-img/19.jpg" alt="">
          <!-- Overlay Effect -->
          <div class="overlay-effect">
            <h6>DESIGNER</h6>
            <h4>Roger Black</h4>
            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est.</p>
          </div>
          <!-- Social Info -->
          <div class="team-social-info">
            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
          </div>
        </div>

        <!-- Single Team Slide -->
        <div class="single-team-slide">
          <img src="./img/bg-img/20.jpg" alt="">
          <!-- Overlay Effect -->
          <div class="overlay-effect">
            <h6>DESIGNER</h6>
            <h4>Roger Black</h4>
            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est.</p>
          </div>
          <!-- Social Info -->
          <div class="team-social-info">
            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
          </div>
        </div>

        <!-- Single Team Slide -->
        <div class="single-team-slide">
          <img src="./img/bg-img/21.jpg" alt="">
          <!-- Overlay Effect -->
          <div class="overlay-effect">
            <h6>DESIGNER</h6>
            <h4>Roger Black</h4>
            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est.</p>
          </div>
          <!-- Social Info -->
          <div class="team-social-info">
            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Border -->
  <div class="container">
    <div class="border-line mt-80"></div>
  </div>
</section>
<!-- ***** Team Member Area End ***** -->

<!-- ***** CTA Area Start ***** -->
<div class="uza-cta-area">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-lg-8">
        <div class="cta-content mb-80">
          <h2>Interested in working with us?</h2>
          <h6>Hit the button below or give us a call!</h6>
        </div>
      </div>

      <div class="col-12 col-lg-4">
        <div class="cta-content mb-80">
          <div class="call-now-btn">
            <a href="#"><span>Call us now:</span> (+65) 1234 5678</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ***** CTA Area End ***** -->

<!-- ***** Client Feedback Area Start ***** -->
<div class="clients-feedback-area section-padding-0-80 clearfix">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Testimonial Slides -->
        <div class="testimonial-slides owl-carousel">

          <!-- Single Testimonial Slide -->
          <div class="single-testimonial-slide d-flex align-items-center">
            <!-- Testimonial Thumbnail -->
            <div class="testimonial-thumbnail">
              <img src="./img/bg-img/7.jpg" alt="">
            </div>
            <!-- Testimonial Content -->
            <div class="testimonial-content">
              <h4>“Colorlib Ltd’s ranking has gone up so much from the great work that your team has done and our brand get organic sales consistently from your efforts. We are happy that the results of your efforts were lasting and profitable.”</h4>
              <!-- Ratings -->
              <div class="ratings">
                <i class="icon_star"></i>
                <i class="icon_star"></i>
                <i class="icon_star"></i>
                <i class="icon_star"></i>
                <i class="icon_star"></i>
              </div>
              <!-- Author Info -->
              <div class="author-info">
                <h5>Darrell Goodman <span>- CEO colorlib</span></h5>
              </div>
              <!-- Quote Icon -->
              <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
            </div>
          </div>

          <!-- Single Testimonial Slide -->
          <div class="single-testimonial-slide d-flex align-items-center">
            <!-- Testimonial Thumbnail -->
            <div class="testimonial-thumbnail">
              <img src="./img/bg-img/23.jpg" alt="">
            </div>
            <!-- Testimonial Content -->
            <div class="testimonial-content">
              <h4>“Colorlib Ltd’s ranking has gone up so much from the great work that your team has done and our brand get organic sales consistently from your efforts. We are happy that the results of your efforts were lasting and profitable.”</h4>
              <!-- Ratings -->
              <div class="ratings">
                <i class="icon_star"></i>
                <i class="icon_star"></i>
                <i class="icon_star"></i>
                <i class="icon_star"></i>
                <i class="icon_star"></i>
              </div>
              <!-- Author Info -->
              <div class="author-info">
                <h5>Darrell Goodman <span>- CEO colorlib</span></h5>
              </div>
              <!-- Quote Icon -->
              <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
            </div>
          </div>

          <!-- Single Testimonial Slide -->
          <div class="single-testimonial-slide d-flex align-items-center">
            <!-- Testimonial Thumbnail -->
            <div class="testimonial-thumbnail">
              <img src="./img/bg-img/24.jpg" alt="">
            </div>
            <!-- Testimonial Content -->
            <div class="testimonial-content">
              <h4>“Colorlib Ltd’s ranking has gone up so much from the great work that your team has done and our brand get organic sales consistently from your efforts. We are happy that the results of your efforts were lasting and profitable.”</h4>
              <!-- Ratings -->
              <div class="ratings">
                <i class="icon_star"></i>
                <i class="icon_star"></i>
                <i class="icon_star"></i>
                <i class="icon_star"></i>
                <i class="icon_star"></i>
              </div>
              <!-- Author Info -->
              <div class="author-info">
                <h5>Darrell Goodman <span>- CEO colorlib</span></h5>
              </div>
              <!-- Quote Icon -->
              <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- ***** Client Feedback Area End ***** -->

<!-- ***** Cool Facts Area Start ***** -->
<div class="uza-cf-area section-padding-80-0">
  <div class="container">
    <div class="row">

      <!-- Single Cool Facts Area -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cf-area d-flex align-items-center mb-80">
          <h2><span class="counter">90</span></h2>
          <div class="cf-text">
            <h6>Projects<br>Completed</h6>
          </div>
          <div class="bg-icon"><i class="icon_piechart"></i></div>
        </div>
      </div>

      <!-- Single Cool Facts Area -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cf-area d-flex align-items-center mb-80">
          <h2><span class="counter">120</span></h2>
          <div class="cf-text">
            <h6>Happy<br>clients</h6>
          </div>
          <div class="bg-icon"><i class="icon_heart_alt"></i></div>
        </div>
      </div>

      <!-- Single Cool Facts Area -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cf-area d-flex align-items-center mb-80">
          <h2><span class="counter">50</span></h2>
          <div class="cf-text">
            <h6>WEB<br>awards</h6>
          </div>
          <div class="bg-icon"><i class="icon_book_alt"></i></div>
        </div>
      </div>

      <!-- Single Cool Facts Area -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cf-area d-flex align-items-center mb-80">
          <h2><span class="counter">20</span></h2>
          <div class="cf-text">
            <h6>Our<br>experts</h6>
          </div>
          <div class="bg-icon"><i class="icon_profile"></i></div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- ***** Cool Facts Area End ***** -->

<!-- ***** Newsletter Area Start ***** -->
<section class="uza-newsletter-area">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <!-- Newsletter Content -->
      <div class="col-12 col-md-6 col-lg-6">
        <div class="nl-content mb-80">
          <h2>Subscribe to our Newsletter</h2>
          <p>Subscribe our newsletter gor get notification about new updates, etc...</p>
        </div>
      </div>
      <!-- Newsletter Form -->
      <div class="col-12 col-md-6 col-lg-5">
        <div class="nl-form mb-80">
          <form action="#" method="post">
            <input type="email" name="nl-email" value="" placeholder="Your Email">
            <button type="submit">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
    <!-- Border Bottom -->
    <div class="border-line"></div>
  </div>
</section>
<!-- ***** Newsletter Area End ***** -->
