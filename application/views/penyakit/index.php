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
                               
                                <h4 class="header-title">Data Penyakit Seluruh kabupaten Pangandaran</h4>
                                <div class="flash-data-news"
                                            data-flashdata="<?= $this->session->flashdata('flash') ?>">

                                        </div>
                                        <div class="flash-data-data"
                                            data-flashdata="<?= $this->session->flashdata('data') ?>">
                                        </div>
                                <a href ="<?=base_url()?>penyakit/tambah" type="button p-1 mb-2 " class="btn btn-success mdi mdi-plus mx-auto">Penyakit</a>
                                <br>
                                <br>
                                
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Penyakit</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $n0 = 1; ?>
                                        <?php foreach ($data_penyakit as $dtkec) : ?>
                                        <tr>
                                            <td style="width: 4%;"><?= $n0?></td>
                                            <td><a class="text-dark"
                                                    href="<?= base_url(); ?>Penyakit/detail/<?= $dtkec['id_penyakit']; ?>"
                                                    style=" color:white;" data-toggle="tooltip" data-placement="right" title="Lihat data Penyakit <?= $dtkec['penyakit'] ?>"><?= $dtkec['penyakit'] ?></a></td>
                                            <td style="width: 15%;">
                                                <a class="btn btn-warning mdi mdi-circle-edit-outline"
                                                    href="<?= base_url(); ?>Penyakit/edit/<?= $dtkec['id_penyakit']; ?>"
                                                    style=" color:white;"></a>
                                                <a class="btn btn-danger mdi mdi-trash-can-outline hapus-news"
                                                    href="<?= base_url(); ?>Penyakit/hapus/<?= $dtkec['id_penyakit']; ?>"
                                                    style="color:white;"></a>
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