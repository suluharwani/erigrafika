<style type="text/css">
  #image-preview{
    display:none;
    width : 250px;
  }
</style>
<script type="text/javascript" charset="utf-8" async defer>
  function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("gambar_popup").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
</script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?=$title?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url('admin')?>"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="<?=base_url('admin/slider')?>"></a>Popup</li>
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
              <h3 class="box-title">Input Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" id="submitpopup">
              <div class="box-body">
                <div class="form-group">
                  <label for="judul_popup">Judul</label>
                  <input type="text" class="form-control" id="judul_popup" name="judul_popup" placeholder="Nama Popup">
                </div>
                <div class="form-group">
                  <label for="keterangan_popup">Keterangan</label>
                  <textarea class="form-control" id="keterangan_popup" name="keterangan_popup"></textarea>
                </div>
                <div class="form-group">
                  <label for="gambar_popup">Gambar</label>
                  <input type="file" id="gambar_popup" name="gambar_popup" onchange="previewImage();">
                  <img id="image-preview" alt="image preview"/>
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
          <h3 class="box-title">Manage Popup</h3>
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
                  <th>Judul</th>
                  <th>Keterangan</th>
                  <th>Gambar</th>
                  <th>Status</th>
                  <th style="text-align: right;">Actions</th>
                </tr>
              </thead>
              <tbody id="popup_list">

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

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!--MODAL HAPUS-->
  <div class="modal fade" id="ModalHapusPopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button> -->
          <h4 class="modal-title" id="myModalLabel">Hapus Popup</h4>
        </div>
        <form class="form-horizontal">
          <div class="modal-body">

            <input type="hidden" name="kode" id="id_popup" value="">
            <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus <u> <span id="nama_popup"></span></u>?</p>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button class="btn_hapus btn btn-danger" id="btn_hapus_popup">Hapus</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--END MODAL HAPUS-->
   <!--MODAL popup-->
  <div class="modal fade" id="ModalAktivasiPopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button> -->
          <h4 class="modal-title" id="myModalLabel">Aktifkan Popup</h4>
        </div>
        <form class="form-horizontal">
          <div class="modal-body">

            <input type="hidden" name="kode" id="id_popup" value="">
            <div class="alert alert-warning"><p>Apakah Anda akan mengaktifkan <u> <span id="nama_popup"></span></u>?</p>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button class="btn_aktivasi btn btn-success" id="btn_aktivasi_popup">Aktifkan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--MODAL popup-->
 <div class="modal fade" id="ModalDisablePopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button> -->
         <h4 class="modal-title" id="myModalLabel">Disable Popup</h4>
       </div>
       <form class="form-horizontal">
         <div class="modal-body">

           <input type="hidden" name="kode" id="id_popup" value="">
           <div class="alert alert-warning"><p>Apakah Anda akan menghentikan <u> <span id="nama_popup"></span></u>?</p>
           </div>

         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
           <button class="btn_aktivasi btn btn-warning" id="btn_disable_popup">Hentikan Popup</button>
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
    show_popup();
    function show_popup(){
      $.ajax({
        type  : 'ajax',
        url   : "<?php echo base_url('admin/popup_list')?>",
        async : false,
        dataType : 'json',
        success : function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            no = i+1;
            if (data[i].status == '1') {
              var status_popup = "aktif";
              html += '<tr>'+
              '<td>'+ no++ +'</td>'+
              '<td>'+data[i].judul.substr(0, 50)+'</td>'+
              '<td>'+data[i].keterangan.substr(0, 50)+'</td>'+
              '<td> <img src="<?php echo base_url('assets/web_popup/thumb/')?>'+data[i].gambar+'"></td>'+
              '<td>'+ status_popup +'</td>'+
              '<td style="text-align:right;">'+
              '<a href="javascript:void(0);" class="btn btn-warning btn-sm popup_aktivasi_disable" popup_id="'+data[i].id+'" nama_popup="'+data[i].judul+'"    >Disable</a>'+
              '</td>'+
              '</tr>';
            }else{
              var status_popup = "tidak aktif";
              html += '<tr>'+
              '<td>'+ no++ +'</td>'+
              '<td>'+data[i].judul.substr(0, 50)+'</td>'+
              '<td>'+data[i].keterangan.substr(0, 50)+'</td>'+
              '<td> <img src="<?php echo base_url('assets/web_popup/thumb/')?>'+data[i].gambar+'"></td>'+
              '<td>'+ status_popup +'</td>'+
              '<td style="text-align:right;">'+
              '<a href="javascript:void(0);" class="btn btn-danger btn-sm popup_delete" popup_id="'+data[i].id+'" nama_popup="'+data[i].judul+'"    >Delete</a>'+
              '<a href="javascript:void(0);" class="btn btn-success btn-sm popup_aktivasi" popup_id="'+data[i].id+'" nama_popup="'+data[i].judul+'"    >Aktifkan</a>'+
              '</td>'+
              '</tr>';
            }

          }
          $('#popup_list').html(html);
        }

      });
    }

    $('#submitpopup').submit(function(e){
      e.preventDefault();

      $.ajax({
       url:"<?php echo site_url('admin/tambah_popup')?>",
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
      show_video();
      swal ( "Sukses" ,  "Foto Slider Berhasil Ditambahkan!" ,  "success", {
        buttons: false,
        timer: 1000,
      } );

      show_video();
      $("form").trigger("reset");
    },
    error:function(data) {
     swal ( "Gagal" ,  "Foto Popup Gagal Ditambahkan!" ,  "error", {
      buttons: false,
      timer: 1000,
    } );
     $("form").trigger("reset");
   }

 });
    });

    $('#popup_list').on('click','.popup_delete',function(){
      var id=$(this).attr('popup_id');
      var nama=$(this).attr('nama_popup');

      $('#id_popup').val(id);
      $('#nama_popup').html(nama);
      $('#ModalHapusPopup').modal('show');

    });
    $('#btn_hapus_popup').on('click',function(){
      var id_popup = $('#id_popup').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('admin/hapus_popup')?>",
        dataType : "JSON",
        data : {id_popup:id_popup},
        success: function(data){
              // $('[name="kode"]').val("");
              $('#ModalHapusPopup').modal('hide');
              show_popup();
              swal ( "Sukses" ,  "Popup Berhasil Dihapus!" ,  "success", {
                buttons: false,
                timer: 1000,
              } );
            }
          });
      return false;
    });
    $('#popup_list').on('click','.popup_aktivasi',function(){
      var id=$(this).attr('popup_id');
      var nama=$(this).attr('nama_popup');

      $('#id_popup').val(id);
      $('#nama_popup').html(nama);
      $('#ModalAktivasiPopup').modal('show');
    });
    $('#popup_list').on('click','.popup_aktivasi_disable',function(){
      var id=$(this).attr('popup_id');
      var nama=$(this).attr('nama_popup');

      $('#id_popup').val(id);
      $('#nama_popup').html(nama);
      $('#ModalDisablePopup').modal('show');
    });
    $('#btn_aktivasi_popup').on('click',function(){
      var id_popup = $('#id_popup').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('admin/aktivasi_popup')?>",
        dataType : "JSON",
        data : {id_popup:id_popup},
        success: function(data){
              // $('[name="kode"]').val("");
              $('#ModalAktivasiPopup').modal('hide');
              show_popup();
              swal ( "Sukses" ,  "Popup Berhasil Diaktifkan!" ,  "success", {
                buttons: false,
                timer: 1000,
              } );
            }
          });
      return false;
    });
    $('#btn_disable_popup').on('click',function(){
      var id_popup = $('#id_popup').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('admin/nonatifkan_popup')?>",
        dataType : "JSON",
        data : {id_popup:id_popup},
        success: function(data){
              // $('[name="kode"]').val("");
              $('#ModalDisablePopup').modal('hide');
              show_popup();
              swal ( "Sukses" ,  "Popup disabled!" ,  "success", {
                buttons: false,
                timer: 1000,
              } );
            }
          });
      return false;
    });
  </script>
