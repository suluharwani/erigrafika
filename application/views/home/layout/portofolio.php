
<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcrumb-area">
  <div class="container h-100">
    <div class="row h-100 align-items-end">
      <div class="col-12">
        <div class="breadcumb--con">
          <h2 class="title">Portofolio</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
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

<!-- ****** Gallery Area Start ****** -->
<section class="uza-portfolio-area section-padding-80">

  <!-- Portfolio Menu -->
  <div class="portfolio-menu text-center mb-80">
    <button class="btn active" data-filter="*">All Portfolio</button>
    <?php
    foreach ($kategori_portofolio_list->result() as $port_cat) {?>
      <button class="btn" data-filter=".<?=str_replace(' ', '-', $port_cat->nama);?>"><?=$port_cat->nama?></button>
      <?php
    }
    ?>
    <!-- <button class="btn" data-filter=".ux-ui-design">UX/UI Design</button>
    <button class="btn" data-filter=".ux-ui-design">UX/UI Design</button>
    <button class="btn" data-filter=".market-analytics">Market Analytics</button>
    <button class="btn" data-filter=".marketing-social">Marketing Social</button> -->
  </div>

  <div class="container-fluid">
    <div class="row uza-portfolio">
      <!-- Single Portfolio Item -->
      <?php
      foreach ($portofolio_full->result() as $port_value) {?>
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item <?=str_replace(' ', '-', $port_value->kategori);?>">
          <div class="single-portfolio-slide">
            <img src="<?=base_url('assets/portofolio/thumb/').$port_value->gambar?>" alt="$port_value->nama">
            <!-- Overlay Effect -->
            <div class="overlay-effect">
              <h4><?=$port_value->kategori?></h4>
              <p><?=$port_value->keterangan?></p>
            </div>
            <!-- View More -->
            <div class="view-more-btn">
              <a href="#"><i class="arrow_right"></i></a>
            </div>
          </div>
        </div>
        <?php
      }
      ?>




    </div>

    <div class="row">
      <div class="col-12 text-center mt-30">
        <a href="#" class="btn uza-btn btn-3">Load More</a>
      </div>
    </div>
  </div>
</section>
<!-- ****** Gallery Area End ****** -->

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
