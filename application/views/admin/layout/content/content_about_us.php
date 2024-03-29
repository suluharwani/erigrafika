<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?=$title?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url('admin')?>"><i class="fa fa-dashboard"></i><?=$this->uri->segment(1)?></a></li>
      <li><a href="<?=base_url('admin/blog')?>"></a><?=$this->uri->segment(2)?></li>

    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Add <?=$title?></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Tentang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" id="submittentang">
              <div class="box-body">
                <div class="form-group">
                  <label for="tentang">Tentang Web</label>
                  <textarea name="tentang" id="tentang" class="form-control tentang_view"  rows="8" cols="80"></textarea>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" id="btn_simpan" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
    <!-- halaman about us -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Add Tentang Kami></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Perusahaan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" id="submitperusahaan">
              <div class="box-body">
                <div class="form-group">
                  <label for="tentang">Tentang Web</label>
                  <textarea name="perusahaan" id="perusahaan" class="form-control perusahaan_view"  rows="8" cols="80"></textarea>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" id="btn_simpan_perusahaan" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Layanan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" id="submitlayanan">
              <div class="box-body">
                <div class="form-group">
                  <label for="layanan">Tentang Web</label>
                  <textarea name="layanan" id="layanan" class="form-control layanan_view"  rows="8" cols="80"></textarea>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" id="btn_simpan_layanan" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Motto</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" id="submitmotto">
              <div class="box-body">
                <div class="form-group">
                  <label for="motto">Tentang Web</label>
                  <textarea name="motto" id="motto" class="form-control motto_view"  rows="8" cols="80"></textarea>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" id="btn_simpan_motto" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Add <?=$title?></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Daftar Sosial Media</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" id="submitsosmed">
              <div class="box-body">
                <div class="form-group">
                  <label for="link_sosmed">Link Sosial Media</label>
                  <input type="text" class="form-control" id="link_sosmed" name="link_sosmed" placeholder="https://www.facebook.com/suluh" required>
                </div>
                <div class="form-group">
                  <label for="sosial_media">Sosial</label>
                  <select class="form-control" id="sosial_media" name="sosial_media">
                    <?php
                    foreach ($sosmed->result() as $sosial) {
                    ?>
                    <option value="<?=$sosial->id?>"><?=$sosial->nama?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" id="btn_simpan" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Manage Social Media</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
            title="Collapse">
            <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="table-responsive" >
             <table class="table table-bordered table-striped" id="mydata">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Social Media</th>
                  <th>Link</th>
                  <th style="text-align: right;">Actions</th>
                </tr>
              </thead>
              <tbody id="sosmed_list">

              </tbody>
            </table>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!--MODAL HAPUS-->
  <div class="modal fade" id="ModalHapusSosmed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button> -->
          <h4 class="modal-title" id="myModalLabel">Hapus Sosmed</h4>
        </div>
        <form class="form-horizontal">
          <div class="modal-body">
            <input type="hidden" name="kode" id="id_sosmed_hapus" value="">
            <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus <u> <span id="nama_sosmed_hapus"></span></u>?</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button class="btn_hapus btn btn-danger" id="btn_hapus_sosmed">Hapus</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--END MODAL HAPUS-->
   <!--MODAL HAPUS-->
  <div class="modal fade" id="ModalAktivasiVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button> -->
          <h4 class="modal-title" id="myModalLabel">Aktifkan Video</h4>
        </div>
        <form class="form-horizontal">
          <div class="modal-body">
            <input type="hidden" name="kode" id="id_video_aktivasi" value="">
            <div class="alert alert-warning"><p>Apakah Anda akan mengaktifkan <u> <span id="nama_video_aktivasi"></span></u>?</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button class="btn_aktivasi btn btn-success" id="btn_aktivasi_video">Aktifkan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--END MODAL HAPUS-->

  <script type="text/javascript">
    $(document).ready(function() {
      $('#mydata').DataTable();

    } );
    show_sosmed();
    show_tentang();
    show_perusahaan();
    show_layanan();
    show_motto();
    function show_tentang(){
      $.ajax({
        type  : 'ajax',
        url   : "<?php echo base_url('admin/show_tentang')?>",
        async : false,
        dataType : 'json',
        success : function(data){
              $('.tentang_view').val(data[0].isi);
        }

      });
    }
    function show_perusahaan(){
      $.ajax({
        type  : 'ajax',
        url   : "<?php echo base_url('admin/show_perusahaan')?>",
        async : false,
        dataType : 'json',
        success : function(data){
              $('.perusahaan_view').val(data[0].perusahaan);
        }

      });
    }
    function show_layanan(){
      $.ajax({
        type  : 'ajax',
        url   : "<?php echo base_url('admin/show_layanan')?>",
        async : false,
        dataType : 'json',
        success : function(data){
              $('.layanan_view').val(data[0].layanan);
        }

      });
    }
    function show_motto(){
      $.ajax({
        type  : 'ajax',
        url   : "<?php echo base_url('admin/show_motto')?>",
        async : false,
        dataType : 'json',
        success : function(data){
              $('.motto_view').val(data[0].motto);
        }

      });
    }

    function show_sosmed(){
      $.ajax({
        type  : 'ajax',
        url   : "<?php echo base_url('admin/sosmed_list')?>",
        async : false,
        dataType : 'json',
        success : function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            no = i+1;
            html += '<tr>'+
            '<td>'+ no++ +'</td>'+
            '<td>'+data[i].sosmed+'</td>'+
            '<td> <a href="'+data[i].link+'" target="_blank">Link</a></td>'+
            '<td style="text-align:right;">'+
            '<a href="javascript:void(0);" class="btn btn-danger btn-sm sosmed_delete" sosmed_hapus_id="'+data[i].id+'" sosmed="'+data[i].sosmed+'"    >Delete</a>'+
            '</td>'+
            '</tr>';
          }
          $('#sosmed_list').html(html);
        }

      });
    }
    //submitperusahaan
    $('#submitperusahaan').submit(function(e){
      e.preventDefault();

      $.ajax({
       url:"<?php echo site_url('admin/tambah_perusahaan')?>",
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
      swal ( "Sukses" ,  "About Us Perusahaan Berhasil Ditambahkan!" ,  "success", {
        buttons: false,
        timer: 1000,
      } );
    show_perusahaan();
    },
    error:function(data) {
     swal ( "Gagal" ,  "About Us Perusahaan Gagal Ditambahkan!" ,  "error", {
      buttons: false,
      timer: 1000,
    } );
   }
 });
    });
    //submitlayanan
    $('#submitlayanan').submit(function(e){
      e.preventDefault();

      $.ajax({
       url:"<?php echo site_url('admin/tambah_layanan_about')?>",
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
      swal ( "Sukses" ,  "About Us Layanan Perusahaan Berhasil Ditambahkan!" ,  "success", {
        buttons: false,
        timer: 1000,
      } );
    show_layanan();
    },
    error:function(data) {
     swal ( "Gagal" ,  "About Us Layanan Perusahaan Gagal Ditambahkan!" ,  "error", {
      buttons: false,
      timer: 1000,
    } );
   }
 });
    });
    //submitmotto
    $('#submitmotto').submit(function(e){
      e.preventDefault();

      $.ajax({
       url:"<?php echo site_url('admin/tambah_motto')?>",
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
      swal ( "Sukses" ,  "About Us Perusahaan Berhasil Ditambahkan!" ,  "success", {
        buttons: false,
        timer: 1000,
      } );
    show_motto();
    },
    error:function(data) {
     swal ( "Gagal" ,  "About Us Perusahaan Gagal Ditambahkan!" ,  "error", {
      buttons: false,
      timer: 1000,
    } );
   }
 });
    });
    //submit tentang
    $('#submittentang').submit(function(e){
      e.preventDefault();

      $.ajax({
       url:"<?php echo site_url('admin/tambah_about_us')?>",
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
      swal ( "Sukses" ,  "About Us Berhasil Ditambahkan!" ,  "success", {
        buttons: false,
        timer: 1000,
      } );
    show_tentang();
    },
    error:function(data) {
     swal ( "Gagal" ,  "About Us Gagal Ditambahkan!" ,  "error", {
      buttons: false,
      timer: 1000,
    } );
   }
 });
    });
    $('#submitsosmed').submit(function(e){
      e.preventDefault();

      $.ajax({
       url:"<?php echo site_url('admin/tambah_sosmed')?>",
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
      show_sosmed();
      show_tentang();
      show_perusahaan();
      show_layanan();
      show_motto();
      swal ( "Sukses" ,  "Social Media Berhasil Ditambahkan!" ,  "success", {
        buttons: false,
        timer: 1000,
      } );

     $("form").trigger("reset");
    },
    error:function(data) {
     swal ( "Gagal" ,  "Social Media Gagal Ditambahkan!" ,  "error", {
      buttons: false,
      timer: 1000,
    } );
    $("form").trigger("reset");
   }
 });
    });
    $('#sosmed_list').on('click','.sosmed_delete',function(){
      var id=$(this).attr('sosmed_hapus_id');
      var nama=$(this).attr('sosmed');

      $('#id_sosmed_hapus').val(id);
      $('#nama_sosmed_hapus').html(nama);
      $('#ModalHapusSosmed').modal('show');

    });
    $('#btn_hapus_sosmed').on('click',function(){
      var id_sosmed = $('#id_sosmed_hapus').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('admin/hapus_sosmed')?>",
        dataType : "JSON",
        data : {id_sosmed:id_sosmed},
        success: function(data){
              // $('[name="kode"]').val("");
              $('#ModalHapusSosmed').modal('hide');
              show_sosmed();
              swal ( "Sukses" ,  "Sosmed Berhasil Dihapus!" ,  "success", {
                buttons: false,
                timer: 1000,
              } );
            }
          });
      return false;
    });
    $('#blog_list').on('click','.video_aktivasi',function(){
      var id=$(this).attr('video_aktif_id');
      var nama=$(this).attr('sosmed');

      $('#id_video_aktivasi').val(id);
      $('#nama_video_aktivasi').html(nama);
      $('#ModalAktivasiVideo').modal('show');
    });
    $('#btn_aktivasi_video').on('click',function(){
      var id_video = $('#id_video_aktivasi').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('admin/aktivasi_video')?>",
        dataType : "JSON",
        data : {id_video:id_video},
        success: function(data){
              // $('[name="kode"]').val("");
              $('#ModalAktivasiVideo').modal('hide');
              show_contact();
              swal ( "Sukses" ,  "Video Berhasil Diaktifkan!" ,  "success", {
                buttons: false,
                timer: 1000,
              } );
            }
          });
      return false;
    });
  </script>
