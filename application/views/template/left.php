<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>/assets/admin/dist/img/useradm.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Kaur</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="<?php echo site_url() ?>/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
          
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Input Penduduk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>/form/input_penduduk"><i class="fa fa-circle-o"></i>Form Input Penduduk</a></li>
            <li><a href="<?php echo site_url() ?>/form/import_penduduk"><i class="fa fa-circle-o"></i>Import From Excel</a></li>
            <li><a href="<?php echo site_url() ?>/tables/data_penduduk"><i class="fa fa-circle-o"></i>Data Penduduk</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Input Pegawai</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>/form/input_pegawai"><i class="fa fa-circle-o"></i>Form Input Pegawai</a></li>
            <li><a href="<?php echo site_url() ?>/tables/data_pegawai"><i class="fa fa-circle-o"></i>Data Pegawai</a></li>
          </ul>
        </li>
      
        
        
        
       <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li> -->
        
        <li class="header">Pengajuan Surat Keluar</li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Surat Kelakuan Baik</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>/surat/surat_kelakuan_baik"><i class="fa fa-circle-o"></i>Input Surat</a></li>
            <li><a href="<?php echo site_url() ?>/tables/data_surat_kelakuan_baik"><i class="fa fa-circle-o"></i>Data Surat</a></li>
            </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Surat Keterangan Lahir</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>/surat/surat_keterangan_lahir"><i class="fa fa-circle-o"></i>Input Surat</a></li>
            <li><a href="<?php echo site_url() ?>/tables/data_surat_keterangan_lahir"><i class="fa fa-circle-o"></i>Data Surat</a></li>
            </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Surat Pengatar KTP</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>/surat/surat_pengantar_ktp"><i class="fa fa-circle-o"></i>Input Surat</a></li>
            <li><a href="<?php echo site_url() ?>/tables/data_surat_pengantar_ktp"><i class="fa fa-circle-o"></i>Data Surat</a></li>
            </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Surat Pengantar KK</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>/surat/surat_pengantar_kk"><i class="fa fa-circle-o"></i>Input Surat</a></li>
            <li><a href="<?php echo site_url() ?>/tables/data_surat_pengantar_kk"><i class="fa fa-circle-o"></i>Data Surat</a></li>
            </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Surat Keterangan Domisili</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>/surat/surat_pengantar_domisili"><i class="fa fa-circle-o"></i>Input Surat</a></li>
            <li><a href="<?php echo site_url() ?>/tables/data_surat_pengantar_domisili"><i class="fa fa-circle-o"></i>Data Surat</a></li>
            </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Surat Keterangan Pindah</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>/surat/surat_keterangan_pindah"><i class="fa fa-circle-o"></i>Input Surat</a></li>
            <li><a href="<?php echo site_url() ?>/tables/data_surat_keterangan_pindah"><i class="fa fa-circle-o"></i>Data Surat</a></li>
            </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Surat Keterangan Pas Jalan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="<?php echo site_url() ?>/surat/surat_keterangan_pas_jalan"><i class="fa fa-circle-o"></i>Input Surat</a></li>
            <li><a href="<?php echo site_url() ?>/tables/data_surat_keterangan_pas_jalan"><i class="fa fa-circle-o"></i>Data Surat</a></li>
            </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Surat Keterangan Usaha</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="<?php echo site_url() ?>/surat/surat_keterangan_usaha"><i class="fa fa-circle-o"></i>Input Surat</a></li>
            <li><a href="<?php echo site_url() ?>/tables/data_surat_keterangan_usaha"><i class="fa fa-circle-o"></i>Data Surat</a></li>
            </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Surat Pengesahan Riwayat Hidup</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="<?php echo site_url() ?>/surat/surat_pengesahan_riwayat_hidup"><i class="fa fa-circle-o"></i>Input Surat</a></li>
            <li><a href="<?php echo site_url() ?>/tables/data_surat_keterangan_riwayat_hidup"><i class="fa fa-circle-o"></i>Data Surat</a></li>
            </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Surat Pengesahan Kredit Bank</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="<?php echo site_url() ?>/surat/surat_pengesahan_kredit_bank"><i class="fa fa-circle-o"></i>Input Surat</a></li>
            <li><a href="<?php echo site_url() ?>/tables/data_pengesahan_kredit_bank"><i class="fa fa-circle-o"></i>Data Surat</a></li>
            </ul>
        </li>

        <li class="header">Surat Masuk</li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Surat Masuk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            <li><a href="<?php echo site_url() ?>/form/input_surat_masuk"><i class="fa fa-circle-o"></i>Form Input Surat Masuk</a></li>
            <li><a href="<?php echo site_url() ?>/tables/data_surat_masuk"><i class="fa fa-circle-o"></i>Agenda Surat Masuk</a></li>
            </ul>
        </li>
          <li class="treeview">
              <a href="<?php echo site_url() ?>/tables/data_surat_online"><i class="fa fa-circle-o"></i>Surat Online</a>
            </li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>