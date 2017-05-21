<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Penduduk</span>
              <div class="count"><?= $jumlah_penduduk;?></div>
              <span class="count_bottom"><i class="green">4% </i> From last Year</span>
            </div>
<!--
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
-->
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Laki-Laki</span>
              <div class="count green"><?= $jumlah_pria;?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Perempuan</span>
              <div class="count"><?= $jumlah_wanita;?></div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Surat Keluar</span>
              <div class="count"><?= $total_surat_keluar;?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Surat Masuk</span>
              <div class="count"><?= $total_surat_masuk;?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
          <!-- /top tiles -->
          <br><br>

     <div >
            <canvas id="myChart" style="max-height:500px;"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Total Penduduk", "Laki-Laki", "Perempuan", "Total Surat Keluar", "Total Masuk"],
                    datasets: [{
                            label: 'Overall',
                            data: [<?= $jumlah_penduduk;?>, 
                                   <?= $jumlah_pria;?>,
                                   <?= $jumlah_wanita;?>, 
                                   <?= $total_surat_keluar;?>,
                                   <?= $total_surat_masuk;?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
        </div>
      <!-- /.row -->
        <hr><hr>
                  <center><h3>Overall</h3></center>
     <div >
            <canvas id="myChartSurat" style="max-height:500px;"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChartSurat");
            var myChart = new Chart(ctx, {
                type: 'polarArea',
                data: {
                    labels: ["Kelakuan Baik", 
                             "Keterangan Lahir", 
                             "Keterangan Pas Jalan", 
                             "Keterangan Pindah", 
                             "Keterangan Usaha", 
                             "Pengantar Domisili", 
                             "Pengantar KK", 
                             "Pengantar KTP", 
                             "Pengesahan Kredit Bank", 
                             "Pengesahan Riwayat Hidup"],
                    datasets: [{
                            data: [<?= $skb;?>, 
                                   <?= $skl;?>,
                                   <?= $skpj;?>, 
                                   <?= $skp;?>,
                                   <?= $sku;?>,
                                   <?= $spd;?>,
                                   <?= $spkk;?>,
                                   <?= $spktp;?>,
                                   <?= $spkb;?>,
                                   <?= $sprh;?>],
                            backgroundColor: [
                                'rgba(0, 0, 155, 0.5)',
                                'rgba(150, 75, 0, 0.5)',
                                'rgba(0, 100, 0, 0.5)',
                                'rgba(255, 255, 0, 0.5)',
                                'rgba(0,8,0, 0.5)',
                                'rgba(70, 60, 52, 0.5)',
                                'rgba(128, 128, 70, 0.5)',
                                'rgba(189, 80, 26, 0.5)',
                                'rgba(90, 9, 90, 0.5)',
                                'rgba(90, 9, 180, 0.5)'
                            ],
                            borderColor: [
                                'rgba(0, 0, 155, 0.5)',
                                'rgba(150, 75, 0, 0.5)',
                                'rgba(0, 100, 0, 0.5)',
                                'rgba(255, 255, 0, 0.5)',
                                'rgba(0,8,0, 0.5)',
                                'rgba(70, 60, 52, 0.5)',
                                'rgba(128, 128, 70, 0.5)',
                                'rgba(189, 80, 26, 0.5)',
                                'rgba(90, 9, 90, 0.5)',
                                'rgba(90, 9, 180, 0.5)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->