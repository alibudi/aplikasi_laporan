<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/img/user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li id="menu-beranda"><a href="<?php echo base_url('admin')?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li id="menu-pemesanan"><a href="<?php echo base_url('pemesanan')?>"><i class="fa fa-file"></i> Pemesanan Barang</a></li>
        <li id="menu-keuangan"><a href="<?php echo base_url('admin/harian');?>"><i class="fa fa-book"></i> Operasional Harian</a></li>
        <li id="menu-beban"><a href="<?php echo base_url('admin/beban');?>"><i class="fa fa-users"></i> Operasional Beban</a></li>
        <li id="menu-keuangan"><a href="<?php echo base_url('admin/gaji');?>"><i class="fa fa-money"></i> Gaji</a></li>
          <li id="menu-keuangan"><a href="<?php echo base_url('admin/event');?>"><i class="fa fa-dollar"></i> Biaya Event</a></li>
        <li id="menu-keuangan"><a href="<?php echo base_url('admin/keuangan');?>"><i class="fa fa-book"></i> Pengajuan Biaya</a></li>
        <li id="menu-profil"><a href="<?php echo base_url('admin/profil');?>"><i class="fa fa-users"></i> Profil</a></li>
         <li id="menu-user"><a href="<?php echo base_url('admin/member');?>"><i class="fa fa-users"></i> Kelola User</a></li>
        <li><a href="<?php echo base_url('auth/logout');?>"><i class="fa fa-sign-out"></i> <span>Keluar</span></a></li>
   
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
