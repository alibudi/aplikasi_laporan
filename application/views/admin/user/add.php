  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Akun user
      <small>Akun user</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="javascript:void()"><i class="fa fa-users"></i>Akun user</a></li>
      <!--<li class="active">Here</li>-->
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">

    <div class="col-md-12">
      <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Akun</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <?php if($this->session->flashdata('info')){?>
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('info'); ?>
                </div>
            <?php } ?>
            <br />
            <?php echo form_open('admin/memberadd');?>
             
              <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" required oninvalid="setCustomValidity('Username Harus di Isi !')"
                                   oninput="setCustomValidity('')" placeholder="Masukan Username Member" >
                                   <?php echo form_error('username', '<div class="text-red">', '</div>'); ?>
                            </div>
                            <?php echo form_error('username');?>


              <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" required oninvalid="setCustomValidity('Password Harus di Isi !')"
                                   oninput="setCustomValidity('')" placeholder="Masukan Password " >
                                   <?php echo form_error('password', '<div class="text-red">', '</div>'); ?>
                            </div>
                            <?php echo form_error('password');?>


             <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" required oninvalid="setCustomValidity('Email Harus di Isi !')"
                                   oninput="setCustomValidity('')" placeholder="Masukan Email" >
                                   <?php echo form_error('email', '<div class="text-red">', '</div>'); ?>
                            </div>
                            <?php echo form_error('email');?>


              <div class="form-group">
                            <label for="first_name">Alamat</label>
                            <input type="text" name="alamat" class="form-control" required oninvalid="setCustomValidity('Alamat Harus di Isi !')"
                                   oninput="setCustomValidity('')" placeholder="Masukan Alamat " >
                                   <?php echo form_error('alamat', '<div class="text-red">', '</div>'); ?>
                            </div>
                            <?php echo form_error('alamat');?>


              <div class="form-group">
                            <label for="last_name">Nama Lengkap</label>
                            <input type="text" name="first_name" class="form-control" required oninvalid="setCustomValidity('Nama Lengkap Harus di Isi !')"
                                   oninput="setCustomValidity('')" placeholder="Masukan Nama Belakang " >
                                   <?php echo form_error('first_name', '<div class="text-red">', '</div>'); ?>
                            </div>
                            <?php echo form_error('first_name');?>

              <div class="form-group">
                            <label for="phone">No Handphone</label>
                            <input type="number" name="phone" class="form-control" required oninvalid="setCustomValidity('No Handphone Harus di Isi !')"
                                   oninput="setCustomValidity('')" placeholder="Masukan No Handphone" >
                                   <?php echo form_error('phone', '<div class="text-red">', '</div>'); ?>
                            </div>
                            <?php echo form_error('phone');?>


                              <div class="form-group">
                                <label>Pilih Grup</label>
                                <select id="groups" name="groups" class="form-control">
                                <?php 
                                 $no = 1;
                                foreach($list_groups as $e){ 
                                ?>
                                <option value="<?php echo $e->id ?>"><?php echo $e->name ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <?php echo form_error('groups');?>

              <div class="box-footer">
                  <button type="submit" name="Submit" value="submit" class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>&nbsp;
                  <a href="<?php echo base_url('admin/member');?>" class="btn btn-warning">Kembali</a>
              </div>
            </form>                        
          </div>
          <!-- /.box-body -->
      </div>
      <!-- /.col -->
    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
  $(document).ready(function(){
    $("#menu-user").addClass("active");
  });
</script>