<div class="main-content">

    <div class="page-content">

        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1"><?= $nama?></h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Seluruh Kab. Pangandaran</li>
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
                               
                                <h4 class="header-title">Hasil Forecast Perpenyakit Seluruh Kab. Pangandaran</h4>
                                <div class="flash-data-news"
                                            data-flashdata="<?= $this->session->flashdata('flash') ?>">

                                        </div>
                                        <div class="flash-data-data"
                                            data-flashdata="<?= $this->session->flashdata('data') ?>">
                                        </div>
                                
                                <br>
                                <br>
                                
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Penyakit</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $n0 = 1; ?>
                                        <?php foreach ($data_penyakit as $dtkec) : ?>
                                        <tr>
                                            <td style="width: 4%;"><?= $n0?></td>
                                            <td><a class="text-dark"
                                                    href="<?= base_url(); ?>hasil/detail/<?= $dtkec['id_penyakit']; ?>"
                                                    style=" color:white;" data-toggle="tooltip" data-placement="right" title="Lihat Hasil Kecamatan <?= $dtkec['penyakit'] ?>"><?= $dtkec['penyakit'] ?></a></td>
                                            <td style="width: 15%;">
                                                <a class="btn btn-info mdi mdi-eye"  data-toggle="tooltip" data-placement="right" title="Lihat Hasil Kecamatan <?= $dtkec['penyakit'] ?>"
                                                    href="<?= base_url(); ?>hasil/detail/<?= $dtkec['id_penyakit']; ?>"
                                                    style=" color:white;"></a>
                                            
                                            </td>
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