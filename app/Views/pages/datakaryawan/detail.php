<?= $this->extend('pages\layout\dashboard\template') ?>

<?= $this->section('content') ?>
    <!-- VALIDATION PLUGIN -->
    <?php $validation = \Config\Services::validation(); ?>
    
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <img src="/assets/logo/detail.jpg" width="180" alt="">
                    <div class="ml-2">
                        <h2>DETAIL DATA KARYAWAN</h2>
                        <div class="page-title-subheading">RSIA BUAH HATI PAMULANG</div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block dropdown">
                    </div>
                </div> 
            </div>
        </div>            
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title">
                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                            <i class="fas fa-fingerprint"></i>
                            RSIA BUAH HATI PAMULANG
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tab-pane fade show active" id="tabs-eg-77">
                                    <h5 class="text-primary"><strong>NIK</strong></h5>
                                    <h7 class="text-dark"><strong><?= $user[0]['nik'] ?></strong></h7>
                                    <h5 class="text-primary mt-3"><strong>NAMA KAYAWAN</strong></h5>
                                    <h7 class="text-dark"><strong><?= $user[0]['username'] ?></strong></h7>
                                    <h5 class="text-primary mt-3"><strong>DIVISI</strong></h5>
                                    <h7 class="text-dark"><strong><?= $user[0]['nama_divisi'] ?></strong></h7>
                                    <h5 class="text-primary mt-3"><strong>ALAMAT</strong></h5>
                                    <h7 class="text-dark"><strong><?= $user[0]['alamat'] ?></strong></h7>
                                    <h5 class="text-primary mt-3"><strong>STATUS TEMPAT TINGGAL</strong></h5>
                                    <h7 class="text-dark"><strong><?= $user[0]['status_tinggal'] == null ? '-' : $user[0]['status_tinggal'] ?></strong></h7>
                                    <h5 class="text-primary mt-3"><strong>GOLONGAN DARAH</strong></h5>
                                    <h7 class="text-dark"><strong><?= $user[0]['gol_darah'] == null ? '-' : $user[0]['gol_darah'] ?></strong></h7>
                                    <h5 class="text-primary mt-3"><strong>TELEPHONE</strong></h5>
                                    <h7 class="text-dark"><strong><?= $user[0]['no_tlp'] == null ? '-' : $user[0]['no_tlp'] ?></strong></h7>
                                    <h5 class="text-primary mt-3"><strong>AGAMA</strong></h5>
                                    <h7 class="text-dark"><strong><?= $user[0]['agama'] == null ? '-' : $user[0]['agama'] ?></strong></h7>
                                    <h5 class="text-primary mt-3"><strong>KEWARGANEGARAAN</strong></h5>
                                    <h7 class="text-dark"><strong><?= $user[0]['warga'] == null ? '-' : $user[0]['warga'] ?></strong></h7>
                                    <h5 class="text-primary mt-3"><strong>KTP</strong></h5>
                                    <h7 class="text-dark"><strong><?= $user[0]['ktp'] == null ? '-' : $user[0]['ktp'] ?></strong></h7>
                                    <h5 class="text-primary mt-3"><strong>NPWP</strong></h5>
                                    <h7 class="text-dark d-block"><strong><?= $user[0]['npwp'] == null ? '-' : $user[0]['npwp'] ?></strong></h7>
                                    <a href="/karyawan" class="btn btn-danger btn-icon-split mt-4">
                                            <i class="metismenu-icon pe-7s-back-2"></i>
                                        <span class="text">Kembali</span>
                                    </a>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>