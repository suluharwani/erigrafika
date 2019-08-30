
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url('assets/AdminLTE/')?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$nama_admin?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?=base_url('admin')?>"><i class="fa fa-circle-o"></i> Dashboard</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Post</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">8</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('admin/slider')?>"><i class="fa fa-circle-o"></i>Slider</a></li>
            <li><a href="<?=base_url('admin/video')?>"><i class="fa fa-circle-o"></i>Video</a></li>
            <li><a href="<?=base_url('admin/layanan')?>"><i class="fa fa-circle-o"></i> Services/layanan</a></li>
            <li><a href="<?=base_url('admin/keunggulan')?>"><i class="fa fa-circle-o"></i> Keunggulan</a></li>
            <li><a href="<?=base_url('admin/portofolio')?>"><i class="fa fa-circle-o"></i> Portofolio</a></li>
            <li><a href="<?=base_url('admin/rating')?>"><i class="fa fa-circle-o"></i> Rating</a></li>
            <li><a href="<?=base_url('admin/blog')?>"><i class="fa fa-circle-o"></i> Blog</a></li>
            <li><a href="<?=base_url('admin/team')?>"><i class="fa fa-circle-o"></i> Team</a></li>
            <li><a href="<?=base_url('admin/popup')?>"><i class="fa fa-circle-o"></i> Popup</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-phone"></i>
            <span>Footer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('admin/contact')?>"><i class="fa fa-circle-o"></i> Contact</a></li>
            <li><a href="<?=base_url('admin/about_us')?>"><i class="fa fa-circle-o"></i> About Us</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
