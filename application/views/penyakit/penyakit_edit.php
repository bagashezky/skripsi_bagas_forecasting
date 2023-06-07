<div class="main-content">

    <div class="page-content">

        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1"><?= $nama?></h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                    </div>

                </div>

            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">


                                <div class="row d-flex justify-content-center ">
                                    <div class="col-md-10 p-4">
                                        <div class="flash-data-news"
                                            data-flashdata="<?= $this->session->flashdata('flash') ?>">

                                        </div>
                                        <div class="flash-data-data"
                                            data-flashdata="<?= $this->session->flashdata('data') ?>">
                                        </div>
                                        <!-- <?= $alpha['alpha']?> -->

                                        </h3>
                                        <!-- <?= var_dump($data_penyakit_id)?> -->
                                        <form action="<?= base_url('penyakit/e') ?>" method="POST">

                                            <div class="form-group">
                                                
                                                <input type="text" class="form-control" id="id_penyakit"
                                                    aria-describedby="id_penyakit" name="id_penyakit" hidden disabled value="<?= $data_penyakit_id['id_penyakit']?>">
                                                    <?= form_error('id_penyakit', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputpenyakit">Nama Penyakit</label>
                                                <input type="text" class="form-control" id="exampleInputpenyakit"
                                                    aria-describedby="penyakit" name="penyakit" placeholder="Masukan Nama Penyakit" value="<?= $data_penyakit_id['penyakit']?>">
                                                    <?= form_error('penyakit', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="d-flex justify-content-center">

                                                <button type="submmit" class="btn btn-success mx-auto mdi mdi-content-save">Simpan Perubahan</button>
                                                <butaton type="button" class="btn btn-danger mx-auto mdi mdi-window-close">Batal</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div> <!-- container-fluid -->
        </div>
        <!-- end page-content-wrapper -->
    </div>
    <!-- End Page-content -->