
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Profile
      <small>Profile Admin </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('admin/member');?>"><i class="fa fa-user"></i>Profile</a></li>
      <!--<li class="active">Here</li>-->
    </ol>
  </section>

 <!-- Main content -->
  <section class="content container-fluid">

    <div class="col-md-12">
      <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Profil</h3>

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
                    'name'=>'profil',
                    'class'=>'form-horizontal'
                    );  
                echo form_open('admin/changeProfil/'.$user->id,$name);
            ?>
              <div class="form-group">
                <label for="username" class="col-sm-3 control-label">Username</label>
                <div class="col-sm-9">
                  <input type="text" name="username" value="<?php echo $user->username;?>" class="form-control" placeholder="Username">
                  <?php echo form_error('username');?>
                </div>
                
              </div>

              <div class="form-group">
                <label for="firstname" class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-9">
                  <input type="text" name="firstname" value="<?php echo $user->first_name;?>" class="form-control" placeholder="Nama Depan">
                  <?php echo form_error('firstname');?>
                </div>
                
              </div>


              <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                  <input type="text" name="email" value="<?php echo $user->email;?>" class="form-control" placeholder="Masukan Email Anda">
                  <?php echo form_error('email');?>
                </div>
                
              </div>

              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-2">
                  <button type="submit" name="submit" value="submit" class="btn btn-success">Simpan</button>
                </div>
              </div>
            </form>             
          </div>
          <!-- /.box-body -->
      </div>
      <!-- /.col -->
    </div>

    <div class="col-md-12">
      <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Change Password</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
             <?php if($this->session->flashdata('info-pass')){ ?>
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('info-pass'); ?>
                </div>
            <?php } ?>

            <?php
                $name = array(
                    'name'=>'password',
                    'class'=>'form-horizontal'
                    );  
                echo form_open('admin/changePassword/'.$user->id,$name);
            ?>
              
              <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                  <?php echo form_error('password');?>
                </div>
                
              </div>

              <div class="form-group">
                <label for="r_password" class="col-sm-3 control-label">Retype Password</label>
                <div class="col-sm-9">
                  <input type="password" name="r_password" class="form-control" placeholder="Retype Password">
                  <?php echo form_error('r_password');?>
                </div>
                
              </div>

              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-2">
                  <button type="submit" name="submit" value="submit" class="btn btn-success">Simpan</button>
                </div>
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
    $("#menu-profil").addClass("active");
  });
</script>