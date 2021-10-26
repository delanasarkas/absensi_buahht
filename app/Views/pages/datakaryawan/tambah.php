<?= $this->extend('pages\layout\dashboard\template') ?>

<?= $this->section('content') ?>
    <!-- VALIDATION PLUGIN -->
    <?php $validation = \Config\Services::validation(); ?>
    
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <img src="/assets/dashboard/assets/images/tambah.jpg" width="180" alt="">
                    <div class="ml-2">
                        <h2>TAMBAH DATA KARYAWAN</h2>
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
                                    <form action="/karyawan/add" method="post">
                                    <?= csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="nik">Nik</label>
                                            <input type="number" class="form-control" id="nik" name="nik" placeholder="Enter NIK">
                                            <!-- Error -->
                                            <?php if($validation->getError('nik')) {?>
                                                <small class="error-text">
                                                    <?= $error = $validation->getError('nik'); ?>
                                                </small>
                                            <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Nama Karyawan</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                                            <!-- Error -->
                                            <?php if($validation->getError('name')) {?>
                                                <small class="error-text">
                                                    <?= $error = $validation->getError('name'); ?>
                                                </small>
                                            <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">No HP</label>
                                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
                                            <!-- Error -->
                                            <?php if($validation->getError('phone')) {?>
                                                    <small class="error-text">
                                                        <?= $error = $validation->getError('phone'); ?>
                                                    </small>
                                            <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label for="divition">Divisi</label>
                                            <select class="form-control" id="divition" name="divition">
                                                <option value="">PILIH</option>
                                                <?php foreach($divisi as $data) : ?>
                                                    <option value="<?= $data['id_divisi'] ?>"><?= $data['nama_divisi'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <!-- Error -->
                                            <?php if($validation->getError('divition')) {?>
                                                    <small class="error-text">
                                                        <?= $error = $validation->getError('divition'); ?>
                                                    </small>
                                            <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Alamat</label>
                                            <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                                            <!-- Error -->
                                            <?php if($validation->getError('address')) {?>
                                                    <small class="error-text">
                                                        <?= $error = $validation->getError('address'); ?>
                                                    </small>
                                            <?php }?>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">
                                            <i class="fas fa-plus"></i>
                                                Tambah
                                        </button>
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
<?= $this->endSection() ?>