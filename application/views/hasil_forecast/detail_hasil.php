<!-- <?php
    // foreach($at as $at){
        
    // echo((double)$at['jumlah_penyakit']);
    // echo(',');
    // }
    //   die;                                      
    ?> -->
<div class="main-content">

    <div class="page-content">

        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">Penyakit <?= $dt_penyakit['penyakit']?></h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Kabupaten Pangandaran</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">


                                <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

                                </div>
                                <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
                                </div>
                                <h4 class="header-title">Chart Hasil Perhitungan</h4>
                                <p class="card-title-desc">Chart Hasil Forecasting Penyakit Mata
                                    <?= $dt_penyakit['penyakit']?></p>
                                <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                                <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->
                                <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3"></script> -->
                                <div id="chart">
                                </div>
                                <script>
                                var options = {
                                    chart: {
                                        type: 'line'
                                    },
                                    series: [{
                                        name: 'Data Real (At)',
                                        type: 'line',
                                        data: [

                                            <?php
                                                foreach($at as $at):
                                            
                                            ?>
                                            <?= (double)$at['jumlah_penyakit'].','?>
                                            <?php
                                            endforeach;
                                            ?>
                                        ]
                                    }, {
                                        name: 'Data Hasil Forecast (Ft)',
                                        type: 'line',
                                        data: [
                                            <?php
                                                foreach($ft as $ft):
                                            
                                            ?>
                                            <?= (double)$ft['hasil_forecast'].','?>
                                            <?php
                                            endforeach;
                                            ?>
                                        ]
                                    }], dataLabels: {
                                        enabled: true,
                                        enabledOnSeries: [0,1],
                                        
                                       
                                    },
                                   
                                    xaxis: {
                                        categories: [
                                            <?php
                                                foreach($bulan as $bulan):
                                            
                                            ?>
                                            <?= (double)$bulan['bulan'].','?>
                                            <?php
                                            endforeach;
                                            ?>

                                        ]
                                    }
                                }


                                var chart = new ApexCharts(document.querySelector("#chart"), options);

                                chart.render();
                                </script>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Perhitungan Permalan</h4>
                                <p class="card-title-desc">Penyakit Mata
                                    <?= $dt_penyakit['penyakit']?></p>

                                <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

                                </div>
                                <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
                                </div>
                                <!-- <?= var_dump($dt_penyakit['id_penyakit'])?> -->

                                <br>
                                <!-- <?= var_dump($data_penyakit)?> -->
                                <table id="datatable" class="table table-bordered dt-responsive "
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Tahun</th>
                                            <th>Bulan</th>
                                            <th>Jumlah Penyakit (At)</th>
                                            <th>S'</th>
                                            <th>S''</th>
                                            <th>At</th>
                                            <th>Bt</th>

                                            <th>Hasil Forecast</th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $n0 = 1; ?>
                                        <?php foreach ($hitung as $hitung) : ?>
                                        <tr>
                                            <td style="width: 4%;"><?= $n0?></td>
                                            <td style="width: 7%;"><?= $hitung['tahun']; ?></td>
                                            <td><?= $hitung['bulan']; ?></td>
                                            <td><?= $hitung['jumlah_penyakit']; ?></td>
                                            <td><?= $hitung['y_aksen']; ?></td>
                                            <td><?= $hitung['y_dbl_aksen']; ?></td>
                                            <td><?= $hitung['a']; ?></td>
                                            <td><?= $hitung['b']; ?></td>

                                            <td><?= $hitung['hasil_forecast']; ?></td>

                                        </tr>
                                        <?php $n0++ ?>
                                        <?php endforeach ?>
                                    </tbody>


                                </table>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Perhitungan Mean Absolute Percentage Error (MAPE)</h4>
                                <p class="card-title-desc">Permalan Data Penyakit Mata
                                    <?= $dt_penyakit['penyakit']?></p>

                                <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

                                </div>
                                <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
                                </div>
                                <!-- <?= var_dump($dt_penyakit['id_penyakit'])?> -->

                                <br>

                                <br>
                                <!-- <?= var_dump($data_penyakit)?> -->
                                <table id="datatable" class="table table-bordered dt-responsive "
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Jumlah Penyakit (Xt)</th>
                                            <th>Hasil Forecast (Ft)</th>
                                            <th>Xt_Ft</th>
                                            <th>abs_Xt_Xt_bagiXt</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $n0 = 1; ?>
                                        <?php foreach ($haha as $haha1) : ?>
                                        <tr>
                                            <td style="width: 4%;"><?= $n0?></td>
                                            <td><?= $haha1['jumlah_penyakit']; ?></td>
                                            <td><?= $haha1['hasil_forecast']; ?></td>
                                            <td><?= $haha1['at_ft']; ?></td>
                                            <td><?= $haha1['abs_at_ft_bagiat']; ?></td>


                                        </tr>
                                        <?php $n0++ ?>
                                        <?php endforeach ?>
                                    </tbody>


                                </table>
                                <h4>MAPE=<?=$MAPE?></h4>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="header-title">Permalan Masa Depan</h4>
                                <p class="card-title-desc">Peramalan Penyakit Mata
                                    <?= $dt_penyakit['penyakit']?></p>

                                <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

                                </div>
                                <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
                                </div>
                                <!-- <?= var_dump($dt_penyakit['id_penyakit'])?> -->
                                <a href="<?=base_url()?>hasil/ramal/<?= $dt_penyakit['id_penyakit']?>"
                                    type="button p-1 mb-2 " class="btn btn-success mdi mdi-plus mx-auto">Ramal Masa
                                    Depan</a>
                                <br>
                                <br>
                                <!-- <?= var_dump($data_penyakit)?> -->
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Tahun</th>
                                            <th>Bulan</th>
                                            <th>Jumlah Penyakit(At)</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $n0 = 1; ?>
                                        <?php foreach ($masa_dpn as $masa_dpn) : ?>
                                        <tr>
                                            <td><?=$n0?></td>
                                            <td><?=$masa_dpn['tahun']?></td>
                                            <td><?=$masa_dpn['bulan']?></td>
                                            <td><?=$masa_dpn['jumlah_penyakit']?></td>

                                        </tr>
                                        <?php $n0++ ?>
                                        <?php endforeach ?>
                                    </tbody>


                                </table>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>


            </div> <!-- container-fluid -->
        </div>
        <!-- end page-content-wrapper -->
    </div>
    <!-- End Page-content -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>