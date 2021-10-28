<?= $this->extend('pages\layout\dashboard\template') ?>

<?= $this->section('content') ?>
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
                <div class="mb-4 card">
                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title">
                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                            <i class="fas fa-fingerprint"></i>
                            RSIA BUAH HATI PAMULANG
                        </div>
                    </div>
                        <div class="card-body">
                            <div class="col-lg-12">
                                <div class="tab-pane fade show active" id="tabs-eg-77">
                                    <form>
                                    <?= csrf_field(); ?>
                                        <div class="form-group">
                                            <h5 class="text-primary"><strong>NIK</strong></h5>
                                        </div>
                                        <div class="form-group">
                                            <h3 class="text-Dark"><strong>00000000</strong></h3>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="text-primary"><strong>Divisi</strong></h5>
                                        </div>
                                        <div class="form-group">
                                            <h3 class="text-Dark"><strong>Hrd</strong></h3>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="text-primary"><strong>Alamat Saat Ini</strong></h5>
                                        </div>
                                            <h3 class="text-Dark"><strong>Jalan Kenari 4 blok ae 1 </strong></h3>
                                        <div class="form-group">
                                            <h5 class="text-primary"><strong>Status Tempat Tinggal</strong></h5>
                                        </div>
                                        <div class="form-group">
                                            <h3 class="text-Dark"><strong>Orang Tua </strong></h3>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="text-primary"><strong>Golongan Darah</strong></h5>
                                        </div>
                                        <div class="form-group">
                                            <h3 class="text-Dark"><strong>O</strong></h3>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="text-primary"><strong>Telephon</strong></h5>
                                        </div>
                                        <di v class="form-group">
                                            <h3 class="text-Dark"><strong>0210321021</strong></h3>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="text-primary"><strong>No HP</strong></h5>
                                        </div>
                                        <div class="form-group">
                                            <h3 class="text-dark"><strong>08282828282</strong></h3>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="text-primary"><strong>Agama</strong></h5>
                                        </div>
                                        <div class="form-group">
                                            <h3 class="text-dark"><strong>Islam</strong></h3>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="text-primary"><strong>Kewarganegaraan</strong></h5>
                                        </div>
                                        <div class="form-group">
                                            <h3 class="text-dark"><strong>Wni</strong></h3>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="text-primary"><strong>Npwp</strong></h5>
                                        </div>
                                        <div class="form-group">
                                            <h3 class="text-dark"><strong>101012003030230</strong></h3>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="text-primary"><strong>KTP</strong></h5>
                                        </div>
                                        <div class="form-group">
                                            <h3 class="text-dark"><strong>31512003030230</strong></h3>
                                        </div>
                                            <a href="/karyawan" class="btn btn-danger btn-icon-split">
                                                <i class="metismenu-icon pe-7s-back-2"></i>
                                            <span class="text">Kembali</span>
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card text-center">
 <div class="card-body">
    Copyright  <i class="far fa-copyright"></i> RSIA Buah Hati Pamulang
  </div>
</div>
    </div>
<?= $this->endSection() ?>