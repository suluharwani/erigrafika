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
                        <h3>(+65) 1234 5678</h3>
                        <p>40 Baria Sreet 13/2 NY City, US <br> hello.colorlib@gmail.com</p>
                    </div>
                    <p class="mb-0">Mon - Fri: 9:00 - 19:00 <br>
                    Closed on Weekends</p>
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
                    <p>Integer vehicula mauris libero, at molestie eros imperdiet sit amet.</p>

                    <!-- Copywrite Text -->
                    <div class="copywrite-text mb-30">
                        <p>&copy; Copyright 2018 <a href="#">Colorlib</a>.</p>
                    </div>

                    <!-- Social Info -->
                    <div class="footer-social-info">
                        <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" style="margin-bottom: 30px;">

            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
</body>

</html>
<script type="text/javascript">

   $('#rating').on('click',function(){
    $('#Modal_Rating').modal('show');
})
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
  success: function(data){
      // penilaian();
      swal ( "Sukses" ,  "penilaian Berhasil Ditambahkan!" ,  "success", {
        buttons: false,
        timer: 1000,
    } );

      // penilaian();
      $("form").trigger("reset");
  },
  error:function(data) {
     swal ( "Gagal" ,  "penilaian Gagal Ditambahkan!" ,  "error", {
      buttons: false,
      timer: 1000,
  } );
     $("form").trigger("reset");
 }
});
});
</script>