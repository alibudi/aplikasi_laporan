<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Detail
      <small>Pesanan</small>
    </h1>

  </section>

  <!-- Main content -->
  <section class="content container-fluid">

    <div class="col-md-12">
      <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Detail Pesanan</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-lg-3">
                <p>Nomor</p>
              </div>
              <div class="col-lg-1">
                <p>:</p>
              </div>
              <div class="col-lg-8">
                <p>
                  <?php echo $pesanan->nomor                  
                  // $tanggal = date('d-m-Y',strtotime($darurat->waktu));
                  // echo $tanggal;
                ?></p>
              </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                  <p>Tanggal</p>
                </div>
                <div class="col-lg-1">
                  <p>:</p>
                </div>
                <div class="col-lg-8">
                  <p> <?php echo $pesanan->tgl?> </p>
                </div>
              </div>
          <div class="row">
                  <div class="col-lg-3">
                    <p>Kepada</p>
                  </div>
                  <div class="col-lg-1">
                    <p>:</p>
                  </div>
                  <div class="col-lg-8">
                    <p> <?php echo $pesanan->kepada?> </p>
                  </div>
                </div>
        <div class="row">
                <div class="col-lg-3">
                  <p>Alamat</p>
                </div>
                <div class="col-lg-1">
                  <p>:</p>
                </div>
                <div class="col-lg-8">
                  <p> <?php echo $pesanan->alamat?> </p>
                </div>
              </div>

        <div class="row">
                <div class="col-lg-3">
                  <p>Model pesanan 1</p>
                </div>
                <div class="col-lg-1">
                  <p>:</p>
                </div>
                <div class="col-lg-8">
                  <p> <?php echo $pesanan->nama?> </p>
                </div>
              </div>

        <div class="row">
                <div class="col-lg-3">
                  <p>Jumlah</p>
                </div>
                <div class="col-lg-1">
                  <p>:</p>
                </div>
                <div class="col-lg-8">
                  <p> <?php echo $pesanan->jumlah?> </p>
                </div>
              </div>

        <div class="row">
                <div class="col-lg-3">
                  <p>Harga</p>
                </div>
                <div class="col-lg-1">
                  <p>:</p>
                </div>
                <div class="col-lg-8">
                  <p> <?php echo number_format($pesanan->harga,2,',','.')?> </p>
                </div>
              </div>

        <div class="row">
                <div class="col-lg-3">
                  <p>Total</p>
                </div>
                <div class="col-lg-1">
                  <p>:</p>
                </div>
                <div class="col-lg-8">
                  <p> <?php echo number_format($pesanan->total,2,',','.')?> </p>
                </div>
              </div>

 
              
          </div>
          <!-- /.box-body -->
      </div>
      <!-- /.col -->
    </div>

<div class="col-md-12">
      <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Detail Pesanan</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">

 <div class="row">
                <div class="col-lg-3">
                  <p>Model pesanan 2</p>
                </div>
                <div class="col-lg-1">
                  <p>:</p>
                </div>
                <div class="col-lg-8">
                  <p> <?php echo $pesanan->nama2?> </p>
                </div>
              </div>

        <div class="row">
                <div class="col-lg-3">
                  <p>Jumlah</p>
                </div>
                <div class="col-lg-1">
                  <p>:</p>
                </div>
                <div class="col-lg-8">
                  <p> <?php echo $pesanan->jumlah2?> </p>
                </div>
              </div>

        <div class="row">
                <div class="col-lg-3">
                  <p>Harga</p>
                </div>
                <div class="col-lg-1">
                  <p>:</p>
                </div>
                <div class="col-lg-8">
                  <p> <?php echo number_format($pesanan->harga2,2,',','.')?> </p>
                </div>
              </div>

        <div class="row">
                <div class="col-lg-3">
                  <p>Total</p>
                </div>
                <div class="col-lg-1">
                  <p>:</p>
                </div>
                <div class="col-lg-8">
                  <p><?php echo number_format($pesanan->total2,2,',','.')?> </p>
                </div>
              </div>


   </div>
          <!-- /.box-body -->
      </div>
      <!-- /.col -->
    </div>

<div class="col-md-12">
      <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Detail Pesanan</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">

 <div class="row">
                <div class="col-lg-3">
                  <p>Model pesanan 3</p>
                </div>
                <div class="col-lg-1">
                  <p>:</p>
                </div>
                <div class="col-lg-8">
                  <p> <?php echo $pesanan->nama3?> </p>
                </div>
              </div>

        <div class="row">
                <div class="col-lg-3">
                  <p>Jumlah</p>
                </div>
                <div class="col-lg-1">
                  <p>:</p>
                </div>
                <div class="col-lg-8">
                  <p> <?php echo $pesanan->jumlah3?> </p>
                </div>
              </div>

        <div class="row">
                <div class="col-lg-3">
                  <p>Harga</p>
                </div>
                <div class="col-lg-1">
                  <p>:</p>
                </div>
                <div class="col-lg-8">
                  <p> <?php echo number_format($pesanan->harga3,2,',','.')?> </p>
                </div>
              </div>

        <div class="row">
                <div class="col-lg-3">
                  <p>Total</p>
                </div>
                <div class="col-lg-1">
                  <p>:</p>
                </div>
                <div class="col-lg-8">
                  <p> <?php echo number_format($pesanan->total3,2,',','.')?> </p>
                </div>
              </div>

          <div class="row">
                <div class="col-lg-3">
                  <p>Total</p>
                </div>
                <div class="col-lg-1">
                  <p>:</p>
                </div>
                <div class="col-lg-8">
                  <p> <?php echo number_format($pesanan->subtotal,2,',','.')?> </p>
                </div>
              </div>

         <a href="<?php echo base_url('pemesanan');?>" class="btn btn-warning btn-sm">Kembali</a> 
   </div>
          <!-- /.box-body -->
      </div>
      <!-- /.col -->
    </div>   
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  function functionTerima(url){
    swal({
      title: 'Apakah Anda Yakin akan menerima pesan darurat?',
      text: "Sistem secara otomatis mengirim notif ke pelapor dan rs terdekat lainnya!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Terima!',
      cancelButtonText: 'Tidak, gagalkan!',
      confirmButtonClass: 'btn btn-success',
      cancelButtonClass: 'btn btn-danger',
      buttonsStyling: false
    }).then(function () {
        swal("Terhapus!", "Pesan Darurat Telah Diterima", "success");
        window.location = url;

    }, function (dismiss) {
      // dismiss can be 'cancel', 'overlay',
      // 'close', and 'timer'
      if (dismiss === 'cancel') {
        swal("Cancelled", "Pesan Darurat tidak jadi diterima", "error")
      }

    });
}
</script>



  <script type="text/javascript">
  function functionTolak(url){
    swal({
      title: 'Apakah Anda Yakin akan menolak pesan darurat?',
      text: "Jika ditolak sistem secara otomatis mengirim notif ke pelapor dan rs terdekat lainnya!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Tolak!',
      cancelButtonText: 'Tidak, gagalkan!',
      confirmButtonClass: 'btn btn-success',
      cancelButtonClass: 'btn btn-danger',
      buttonsStyling: false
    }).then(function () {
        swal("Terhapus!", "Pesan Darurat Telah Tertolak", "success");
        window.location = url;

    }, function (dismiss) {
      // dismiss can be 'cancel', 'overlay',
      // 'close', and 'timer'
      if (dismiss === 'cancel') {
        swal("Cancelled", "Pesan Darurat tidak jadi ditolak", "error")
      }

    });
}
</script>


<script type="text/javascript">
  function ambilDarurat(){
   $.ajax({
      type: "POST",
      url: "<?php echo base_url('rs/daruratjson');?>",
      dataType:'json',
      success: function(response2){
       $("#darurat").text(""+response2+"");
       timer = setTimeout("ambilDarurat()",5000);
      }
     });  
  }

  $(document).ready(function(){
   ambilDarurat();
    $("#menu-pemesanan").addClass("active");
  });

</script>