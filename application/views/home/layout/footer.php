<!-- ***** Footer Area Start ***** -->
<footer class="footer-area section-padding-80-0">
  <div class="container">
    <div class="row justify-content-between">

      <!-- Single Footer Widget -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-footer-widget mb-80">
          <!-- Widget Title -->
          <h4 class="widget-title">Contact Us</h4>

          <!-- Footer Content -->
          <div class="footer-content mb-15">
            <h3><?=$telepon?></h3>
            <p><?=$alamat?> <br><?=$email?></p>
          </div>
          <p class="mb-0"><?=$buka?><br>
            Tutup <?=$tutup?></p>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-footer-widget mb-80">
            <!-- Widget Title -->
            <h4 class="widget-title">Quick Link</h4>

            <!-- Nav -->
            <nav>
              <ul class="our-link">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Forum Registeration</a></li>
                <li><a href="#">Forum Sign In</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-footer-widget mb-80">
            <!-- Widget Title -->
            <h4 class="widget-title">Resources</h4>
            <!-- Nav -->
            <nav>
              <ul class="our-link">
                <li><a href="#">Customer Support</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Media &amp; Press</a></li>
                <li><a href="#">Our Team</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-footer-widget mb-80">
            <!-- Widget Title -->
            <h4 class="widget-title">About Us</h4>
            <p><?=$about_us?></p>
            <!-- Copywrite Text -->
            <div class="copywrite-text mb-30">
              <!-- <p>&copy; Copyright 2018 <a href="#">Colorlib</a>.</p> -->
            </div>
            <!-- Social Info -->
            <div class="footer-social-info">
              <?php
              foreach ($sosmed->result() as $social) {?>
                <a href="<?=$social->link?>" class="<?=$social->sosmed?>" data-toggle="tooltip" data-placement="top" title="<?=$social->sosmed?>"><i class="<?=$social->class?>"></i></a>
                <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-bottom: 30px;">
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </div>
    </div>
  </footer>
  <!-- ***** Footer Area End ***** -->
  <!--MODAL HAPUS-->
  <div class="modal fade" id="Modal_Rating" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button> -->
          <h4 class="modal-title" id="myModalLabel">Beri nilai kami</h4>
        </div>
        <form enctype="multipart/form-data" id="submitpenilaian" class="form-horizontal">
          <div class="modal-body">
            <label for="nama_penilai">Nama</label>
            <input type="text" class="form-control" id="nama_penilai" name="nama_penilai" required>
            <label for="perusahaan_penilai">Perusahaan/Instansi</label>
            <input type="text" class="form-control" id="perusahaan_penilai" name="perusahaan_penilai" required>
            <label for="gambar_penilaian">Foto</label>
            <input type="file" id="gambar_penilaian" name="gambar_penilaian" onchange="previewImage();">
            <img id="image-preview" alt="image preview"/>
            <br>
            <label for="penilaian_keterangan">Penilaian</label>
            <textarea class="form-control" id="penilaian_keterangan" name="penilaian_keterangan" class="form-control" required></textarea>
            <div class="rating">
              <label>
                <input type="radio" name="stars" value="1" required />
                <span class="icon">★</span>
              </label>
              <label>
                <input type="radio" name="stars" value="2" />
                <span class="icon">★</span>
                <span class="icon">★</span>
              </label>
              <label>
                <input type="radio" name="stars" value="3" />
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
              </label>
              <label>
                <input type="radio" name="stars" value="4" />
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
              </label>
              <label>
                <input type="radio" name="stars" value="5" />
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
              </label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button class="btn_hapus btn btn-success" id="btn_simpan_penilaian">Submit</button>
          </div>
        </form>


      </div>
    </div>
  </div>
  <!--END MODAL HAPUS-->
  <!-- popup -->
  <!-- popup -->
  <!-- ******* All JS Files ******* -->
  <!-- jQuery js -->
  <script src="<?=base_url('assets/home-master/')?>js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="<?=base_url('assets/home-master/')?>js/popper.min.js"></script>

  <!-- Bootstrap js -->
  <script src="<?=base_url('assets/home-master/')?>js/bootstrap.min.js"></script>
  <!-- All js -->
  <script src="<?=base_url('assets/home-master/')?>js/uza.bundle.js"></script>
  <!-- Active js -->
  <script src="<?=base_url('assets/home-master/')?>js/default-assets/active.js"></script>
  <script src="<?=base_url('assets/admin/js/')?>sweetalert.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</body>

</html>
<script type="text/javascript">
$(document).ready(function() {
})


$('#rating').on('click',function(){
  $('#Modal_Rating').modal('show');
})
list_review();
popup();
function list_review(){
  $.ajax({
    type  : 'ajax',
    url   : "<?php echo base_url('home/review_list')?>",
    async : false,
    dataType : 'json',
    success : function(data){
      var html = '';
      var html1 = '';
      var html2 = '';
      var i;
      html =  ' <div class="single-testimonial-slide d-flex align-items-center">';
      html3 = '</div>';
      for(i=0; i<data.length; i++){
        no = i+1;

        html1 +=   '<div class="single-testimonial-slide d-flex align-items-center">'+
        '<div class="testimonial-thumbnail">'+
        '<img src="./img/bg-img/7.jpg" alt="">'+
        '</div>'+
        '<div class="testimonial-content">'+
        '<h4>“Colorlib Ltd’s ranking has gone up so much from the great work that your team has done and our brand get organic sales consistently from your efforts. We are happy that the results of your efforts were lasting and profitable.”</h4>'+
        '<div class="ratings">'+
        '<i class="icon_star"></i>'+
        '<i class="icon_star"></i>'+
        '<i class="icon_star"></i>'+
        '<i class="icon_star"></i>'+
        '<i class="icon_star"></i>'+
        '</div>'+
        '<div class="author-info">'+
        '<h5>Darrell Goodman <span>- CEO colorlib</span></h5>'+
        '</div>'+
        '<div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>'+
        '</div>'+
        '</div>';
      }
      html4 = html1+html2+html3;
      $('.review_list').html(html4);
    }
  });

}
function popup(){
  $.ajax({
    type  : 'ajax',
    url   : "<?php echo base_url('home/popup')?>",
    async : false,
    dataType : 'json',
    success : function(data){
      Swal.fire({
        imageUrl: 'https://placeholder.pics/svg/500',
        title: 'Custom animation with Animate.css',
        animation: false,
        showCloseButton: true,
        showConfirmButton: false,
        timer: 7000,
        text: 'Something went wrong!',
        customClass: {
          popup: 'animated tada'
        }
      })
    }
  });

}

$('#submitpenilaian').submit(function(e){
  e.preventDefault();

  $.ajax({
    url:"<?php echo site_url('home/tambah_penilaian')?>",
    type:"post",
    data:new FormData(this),
    processData:false,
    contentType:false,
    cache:false,
    async:false,
    // xhr: function(data){
    //  $('#wait').show();
    // },
    beforeSend: function(data) {
      $('#wait').show();
    },
    success: function(data){
      list_review();
      swal ( "Sukses" ,  "Penilaian Berhasil Ditambahkan!" ,  "success", {
        buttons: false,
        timer: 1000,
      } );
      $('#wait').hide();
      $('#Modal_Rating').modal('hide');
    },
    error:function(data) {
      swal ( "Gagal" ,  "Penilaian Gagal Ditambahkan, maximal 3 review dari perangkat anda!" ,  "error", {
        buttons: false,
        timer: 7000,
      } );
      $('#wait').hide();
      $('#Modal_Rating').modal('hide');
    }
  });
});
</script>
