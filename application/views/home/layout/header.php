<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?=$about_us?>">
    <meta name="keywords" content="erigrafika, percetakan purwodadi" />
    <!-- <meta name="robots" content="index, follow"> -->
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="Suluh" />
    <meta name="DC.title" content="Erigrafika - Pusat percetakan purwodadi" />
    <meta name="geo.placename" content="Indonesia" />
    <meta name="geo.region" content="ID" />
    <link rel="canonical" href="https://erigrafika/" />
    <link rel="shortcut icon" href="/favicon.png" />
    <link rel="apple-touch-icon" href="/favicon.png" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:image" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Erigrafika - Pusat percetakan purwodadi" />
    <meta property="og:description" content="<?=$about_us?>" />
    <meta property="og:url" content="https://erigrafika/" />
    <meta property="og:site_name" content="<?=$title?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title><?=$title?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?=base_url('assets/home-master/')?>img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?=base_url('assets/home-master/')?>style.css">
    <script type="text/javascript" charset="utf-8" async defer>
      function previewImage() {
        document.getElementById("image-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("gambar_penilaian").files[0]);

        oFReader.onload = function(oFREvent) {
          document.getElementById("image-preview").src = oFREvent.target.result;
      };
  };
</script>
<style type="text/css">
  #image-preview{
    display:none;
    width : 250px;
}
.rating {
  display: inline-block;
  position: relative;
  height: 50px;
  line-height: 50px;
  font-size: 50px;
}

.rating label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
}

.rating label:last-child {
  position: static;
}

.rating label:nth-child(1) {
  z-index: 5;
}

.rating label:nth-child(2) {
  z-index: 4;
}

.rating label:nth-child(3) {
  z-index: 3;
}

.rating label:nth-child(4) {
  z-index: 2;
}

.rating label:nth-child(5) {
  z-index: 1;
}

.rating label input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.rating label .icon {
  float: left;
  color: transparent;
}

.rating label:last-child .icon {
  color: #000;
}

.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
  color: #09f;
}

.rating label input:focus:not(:checked) ~ .icon:last-child {
  color: #000;
  text-shadow: 0 0 5px #09f;
}
</style>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>

    <!-- ***** Top Search Area Start ***** -->
    <div class="top-search-area">
        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Search Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="<?=base_url('assets/logo/thumb/').$logo?>" width="150px" alt="<?=$title_logo?>"></a>


                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="current-item"><a href="./index.html">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./index.html">- Home</a></li>
                                        <li><a href="./about.html">- About</a></li>
                                        <li><a href="./services.html">- Services</a></li>
                                        <li><a href="./portfolio.html">- Portfolio</a></li>
                                        <li><a href="./portfolio-single.html">- Single Portfolio</a></li>
                                        <li><a href="./blog.html">- Blog</a></li>
                                        <li><a href="./single-blog.html">- Blog Details</a></li>
                                        <li><a href="./contact.html">- Contact</a></li>
                                        <li><a href="#">- Dropdown</a>
                                            <ul class="dropdown">
                                                <li><a href="#">- Dropdown Item</a></li>
                                                <li><a href="#">- Dropdown Item</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#">- Even Dropdown</a></li>
                                                        <li><a href="#">- Even Dropdown</a></li>
                                                        <li><a href="#">- Even Dropdown</a></li>
                                                        <li><a href="#">- Even Dropdown</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">- Dropdown Item</a></li>
                                                <li><a href="#">- Dropdown Item</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="./portfolio.html">Portfolio</a></li>
                                <li><a href="./about.html">About</a></li>
                                <li><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="./blog.html">- Blog</a></li>
                                        <li><a href="./single-blog.html">- Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>

                            <!-- Get A Quote -->
                            <div class="get-a-quote ml-4 mr-3">
                                <a href="#" id="rating" class="btn uza-btn">Beri Penilaian</a>
                            </div>
                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
