<div class="main-content">

    <div class="page-content">

        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">Beranda</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Selamat Datang, <?=$user['username']?></li>
                        </ol>
                    </div>

                </div>

            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <blockquote class="blockquote text-center">
                                        <p>PERAMALAN SEBARAN PENYAKIT MATA DI KABUPATEN PANGANDARAN METODE
                                            DOUBLE EXPONENTIAL SMOOTHING</p>


                                    </blockquote>

                                </div>
                                <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

                                </div>
                                <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
                                </div>
                                <div class="row">
                                    <blockquote class="blockquote text-center">
                                        <table class="table ">
                                            <tr>
                                                <td  class="d-flex justify-content-start">Data</td>
                                                <td>:</td>
                                               <td class="d-flex justify-content-start">Sebaran Penyakit Mata di Kabupaten Pangandaran</td>
                                            </tr>
                                            <tr>
                                                <td  class="d-flex justify-content-start">Tahun</td>
                                                <td>:</td>
                                               <td class="d-flex justify-content-start">2022</td>
                                            </tr>
                                            <tr>
                                                <td  class="d-flex justify-content-start">Sumber Data</td>
                                                <td>:</td>
                                               <td class="d-flex justify-content-start">RSUD Pandega Pangandaran Dan Klinik SO Medika Utama Pangandaran</td>
                                            </tr>
                                            
                                        </table>


                                    </blockquote>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 mx-auto">

                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered d-flex justify-content-center">

                                                <tbody>
                                                    <tr class="d-flex align-items-center px-auto">
                                                        <td class="mx-auto"><img class="img-fluid d-flex align-items-center"
                                                                src="<?=base_url()?>assets/images/3.png"
                                                                width="100px" height="100px"></td>

                                                    </tr>
                                                    <tr class="mx-auto">
                                                        <td clas>Bagas Pratama</td>

                                                    </tr>
                                                    <tr class="mx-auto">
                                                        <td>NRP 190914004</td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
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