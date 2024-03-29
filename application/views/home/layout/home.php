<!-- ***** Welcome Area Start ***** -->
<section class="welcome-area">
  <div class="welcome-slides owl-carousel">
    <!-- Single Welcome Slide -->
    <?php
    foreach ($slider->result() as $slide) {?>
      <!-- Single Welcome Slide -->
      <div class="single-welcome-slide">
        <!-- Background Curve -->
        <div class="background-curve">
          <img src="<?=base_url('assets/home-master/')?>img/core-img/curve-1.png" alt="">
        </div>
        <!-- Welcome Content -->
        <div class="welcome-content h-100">
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <!-- Welcome Text -->
              <div class="col-12 col-md-6">
                <div class="welcome-text">
                  <h2 data-animation="fadeInUp" data-delay="100ms"><?=$slide->nama?></h2>
                  <h5 data-animation="fadeInUp" data-delay="400ms"><?=$slide->keterangan?></h5>
                  <a href="<?=base_url('home/download_gambar/'.$slide->gambar.'')?>" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Download Gambar</a>
                </div>
              </div>
              <!-- Welcome Thumbnail -->
              <div class="col-12 col-md-6">
                <div class="welcome-thumbnail">
                  <img src="<?=base_url('assets/slider/fix/'.$slide->gambar)?>" alt="<?=$slide->url?>" data-animation="slideInRight" data-delay="400ms">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
</section>
<!-- ***** Welcome Area End ***** -->

<!-- ***** About Us Area Start ***** -->
<?php
if ($video->result()) {
  foreach ($video->result() as $vid) {
    ?>
    <section class="uza-about-us-area">
      <div class="container">
        <div class="row align-items-center">

          <!-- About Thumbnail -->
          <div class="col-12 col-md-6">
            <div class="about-us-thumbnail mb-80">
              <img src="<?=base_url("assets/web_video/fix/$vid->gambar")?>" alt="">
              <!-- Video Area -->
              <div class="uza-video-area hi-icon-effect-8">
                <a href="<?=$vid->link_video?>" class="hi-icon video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>

          <!-- About Us Content -->
          <div class="col-12 col-md-6">
            <div class="about-us-content mb-80">
              <h2><?=$vid->judul?></h2>
              <p><?=$vid->keterangan?></p>
              <!-- <a href="#" class="btn uza-btn btn-2 mt-4">Start Exploring</a> -->
            </div>
          </div>
        </div>
      </div>
      <?php
    }
  }
  ?>
  <!-- About Background Pattern -->
  <div class="about-bg-pattern">
    <img src="<?=base_url('assets/home-master/')?>img/core-img/curve-2.png" alt="">
  </div>
</section>
<!-- ***** About Us Area End ***** -->

<!-- ***** Services Area Start ***** -->
<section class="uza-services-area section-padding-80-0">
  <div class="container">
    <div class="row">
      <!-- Section Heading -->
      <div class="col-12">
        <div class="section-heading text-center">
          <h2>Layanan kami</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
      if ($layanan->result()) {
        foreach ($layanan->result() as $layanan_kami) {?>
          <!-- Single Service Area -->
          <div class="col-12 col-lg-4">
            <div class="single-service-area mb-80">
              <!-- Service Icon -->
              <div class="service-icon">
                <img src="<?=base_url('assets/layanan/thumb/').$layanan_kami->gambar?>" width="70px">
              </div>
              <h5><?=$layanan_kami->nama?></h5>
              <p><?=$layanan_kami->keterangan?></p>
            </div>
          </div>
          <?php
        }
      }
      ?>
    </div>
  </div>
</section>
<!-- ***** Services Area End ***** -->
<!-- ***** keuanggulan Area Start ***** -->
<section class="uza-services-area section-padding-80-0">
  <div class="container">
    <div class="row">
      <!-- Section Heading -->
      <div class="col-12">
        <div class="section-heading text-center">
          <h2>Keunggulan Kami</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <?php
      if ($keunggulan->result()) {
        foreach ($keunggulan->result() as $keunggulan_kami) {?>
          <!-- Single Service Area -->
          <div class="col-12 col-lg-4">
            <div class="single-service-area mb-80">
              <!-- Service Icon -->
              <div class="service-icon">
                <img src="<?=base_url('assets/keunggulan/thumb/').$keunggulan_kami->gambar?>" width="70px">
              </div>
              <h5><?=$keunggulan_kami->nama?></h5>
              <p><?=$keunggulan_kami->keterangan?></p>
            </div>
          </div>
          <?php
        }
      }
      ?>

    </div>
  </div>
</section>
<!-- ***** keuanggulan Area End ***** -->


<!-- ***** Portfolio Area Start ***** -->
<section class="uza-portfolio-area section-padding-80">
  <div class="container">
    <div class="row">
      <!-- Section Heading -->
      <div class="col-12">
        <div class="section-heading text-center">
          <h2>Portfolio</h2>
          <p>We stay on top of our industry by being experts in yours.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <!-- Portfolio Slides -->
      <div class="portfolio-sildes owl-carousel">
        <?php
        if ($portofolio->result()) {
          foreach ($portofolio->result() as $web_portofolio) {?>
            <!-- Single Portfolio Slide -->
            <div class="single-portfolio-slide">
              <img src="<?=base_url('assets/portofolio/fix/').$web_portofolio->gambar?>" alt="">
              <!-- Overlay Effect -->
              <div class="overlay-effect">
                <h4><?=$web_portofolio->nama?> </h4>
                <p><?=$web_portofolio->keterangan?></p>
              </div>
              <!-- View More -->
              <div class="view-more-btn">
                <a href="<?=base_url('home/portofolio/').$web_portofolio->url?>"><i class="arrow_right"></i></a>
              </div>
            </div>
            <?php
          }
        }
        ?>
      </div>
    </div>
  </div>

  <!-- Client Feedback Area Start -->
  <div class="clients-feedback-area mt-80 section-padding-80 clearfix">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Testimonial Slides -->
          <div class="testimonial-slides owl-carousel" >

            <?php
            if ($review->result()) {
              foreach ($review->result() as $rev) {?>
                <div class="single-testimonial-slide d-flex align-items-center">
                  <!-- Testimonial Thumbnail -->
                  <div class="testimonial-thumbnail">
                    <img src="<?php echo base_url('assets/penilai/fix/').$rev->gambar?>" alt="">
                  </div>
                  <!-- Testimonial Content -->
                  <div class="testimonial-content">
                    <h4>“<?=$rev->keterangan?>”</h4>
                    <!-- Ratings -->
                    <div class="ratings">
                      <?php for ($i=0; $i < $rev->stars ; $i++) {?>
                        <i class="icon_star"></i>
                      <?php }
                      ?>
                    </div>
                    <!-- Author Info -->
                    <div class="author-info">
                      <h5><?=$rev->nama?> <span>- <?=$rev->perusahaan?></span></h5>
                    </div>
                    <!-- Quote Icon -->
                    <div class="quote-icon"><img src="<?php echo base_url('assets/home-master/')?>img/core-img/quote.png" alt=""></div>
                  </div>
                </div>
              <?php }
            }  ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Client Feedback Area End -->

  <!-- Border -->
  <div class="container">
    <div class="border-line"></div>
  </div>

  <!-- Background Curve -->
  <div class="portfolio-bg-curve">
    <img src="<?=base_url('assets/home-master/')?>img/core-img/curve-3.png" alt="">
  </div>
</section>
<!-- ***** Portfolio Area End ***** -->
