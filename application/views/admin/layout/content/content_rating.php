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
    oFReader.readAsDataURL(document.getElementById("gambar_layanan").files[0]);

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
      <li><a href="<?=base_url('admin/slider')?>"></a>Layanan</li>

    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <!-- /.box -->
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Manage Rating</h3>

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
                  <th>Nama</th>
                  <th>Perusahaan</th>
                  <th>keterangan</th>
                  <th>Bintang</th>
                  <th>Tanggal</th>
                  <th style="text-align: right;">Actions</th>
                </tr>
              </thead>
              <tbody id="rating_list">

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
  <div class="modal fade" id="ModalHapusVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button> -->
          <h4 class="modal-title" id="myModalLabel">Hapus Video</h4>
        </div>
        <form class="form-horizontal">
          <div class="modal-body">

            <input type="hidden" name="kode" id="id_video_hapus" value="">
            <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus <u> <span id="nama_video_hapus"></span></u>?</p>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button class="btn_hapus btn btn-danger" id="btn_hapus_video">Hapus</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--END MODAL HAPUS-->
   <!--MODAL HAPUS-->
  <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button> -->
          <h4 class="modal-title" id="myModalLabel">Delete Rating</h4>
        </div>
        <form class="form-horizontal">
          <div class="modal-body">

            <input type="hidden" name="id_delete" id="id_delete" value="">
            <div class="alert alert-warning"><p>Apakah Anda akan menghapus <u> <span id="nama"></span></u>?</p>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button class="btn_aktivasi btn btn-warning" id="btn_hapus">Hapus</button>
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
    show_layanan();
    function show_layanan(){
      $.ajax({
        type  : 'ajax',
        url   : "<?php echo base_url('admin/rating_list')?>",
        async : false,
        dataType : 'json',
        success : function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            no = i+1;
            html += '<tr>'+
            '<td>'+ no++ +'</td>'+
            '<td>'+data[i].nama.substr(0, 50)+'</td>'+
            '<td>'+data[i].perusahaan.substr(0, 50)+'</td>'+
            '<td>'+data[i].keterangan.substr(0, 50)+'</td>'+
            '<td>'+data[i].stars.substr(0, 50)+'</td>'+
            '<td>'+data[i].tanggal+'</td>'+
            '<td style="text-align:right;">'+
            '<a href="javascript:void(0);" class="btn btn-danger btn-sm rating_delete" id="'+data[i].id+'" nama="'+data[i].nama+'"    >Delete</a>'+
            '</td>'+
            '</tr>';
          }
          $('#rating_list').html(html);
        }

      });
    };
    $('#rating_list').on('click','.rating_delete',function(){
      var id=$(this).attr('id');
      var nama=$(this).attr('nama');

      $('#id_delete').val(id);
      $('#nama').html(nama);
      $('#ModalDelete').modal('show');
    });
    $('#btn_hapus').on('click',function(){
      var id = $('#id_delete').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('admin/hapus_rating')?>",
        dataType : "JSON",
        data : {id:id},
        success: function(data){
              // $('[name="kode"]').val("");
              $('#ModalDelete').modal('hide');
              show_layanan();
              swal ( "Sukses" ,  "Rating berhasil dihapus!" ,  "success", {
                buttons: false,
                timer: 1000,
              } );
            },
            error:function(data) {
             swal ( "Gagal" ,  "Rating gagal dihapus!" ,  "error", {
              buttons: false,
              timer: 1000,
            } );
             $("form").trigger("reset");
           }
          });
      return false;
    });
  </script>
