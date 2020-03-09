
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

     <!-- Main content -->
     <section class="content container-fluid">

    <div class="col-md-12">
      <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div> 
          <!-- /.box-header -->
          <div class="box-body">
            <?php if($this->session->flashdata('info')){ ?>
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('info'); ?>
                </div>
            <?php } ?>

		<?php
                $name = array(
                    'name'=>'addData',
                    'class'=>'form-horizontal'
                    );  
                echo form_open_multipart('pemesanan/addPemesanan/',$name);
            ?>
	
			   <div class="form-group">
                <label for="kategori" class="col-sm-3 control-label">Model</label>
                <div class="col-sm-9">
                  <input type="text" id="nominal" name="nama"  class="form-control" placeholder="Anggaran">
                  <?php echo form_error('nama');?>
                </div>
              </div>
        
               <div class="form-group">
                <label for="" class="col-sm-3 control-label">Keterangan</label>
                <div class="col-sm-9">
                <textarea id="editor1" name="keterangan" rows="8" cols="50"> </textarea>
                  <?php echo form_error('keterangan');?>
                </div>
              </div>
       <div class="form-group">
                <label for="kategori" class="col-sm-3 control-label">Jumlah</label>
                <div class="col-sm-9">
                  <input type="text" id="nominal" name="jumlah"  class="form-control" placeholder="Anggaran">
                  <?php echo form_error('jumlah');?>
                </div>
              </div>
               <div class="form-group">
                <label for="kategori" class="col-sm-3 control-label">Harga</label>
                <div class="col-sm-9">
                  <input type="text" id="nominal" name="harga"  class="form-control" placeholder="Anggaran">
                  <?php echo form_error('harga');?>
                </div>
              </div>
             
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-2">
                  <button type="submit" name="submit" value="submit" class="btn btn-success">Tambah</button>
                </div>
              </div>
			       </form>
            </div>
          <!-- /.box-body -->
      </div>
      <!-- /.col -->
    </div>
</div>
	<script type="text/javascript">
		$(document).ready(function(){

		    $('#title').autocomplete({
                source: "<?php echo site_url('kondisi/get_autocomplete');?>",
     
                select: function (event, ui) {
                    $('[name="title"]').val(ui.item.label); 
                    $('[name="NAMA"]').val(ui.item.NAMA); 
                }
            });

		});
	</script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#menu-keuangan").addClass("active");
});
</script>