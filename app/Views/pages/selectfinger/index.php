<?= $this->extend('pages\layout\dashboard\template') ?>

<?= $this->section('content') ?>
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <img src="/assets/dashboard/assets/images/data.jpg" width="120" alt="">
                    <div class="ml-2">
                        <h2>DATA KARYAWAN</h2>
                        <div class="page-title-subheading">RSIA BUAH HATI PAMULANG</div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block dropdown">
                    </div>
                </div>    
            </div>
        </div>            
            <div class="col-md-10 col-lg-12 text-right">
                <a href="/tambahkaryawan" class="btn btn-primary btn-icon-split mb-2 ">
                    <span class="icon text-white-50">
                        <i class="metismenu-icon pe-7s-add-user"></i>
                    </span>
                    <span class="text">Tambah Karyawan</span>
                </a> 
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
                               <table id="table_karyawan" class="table nowrap table-striped table-hover display" width="100%">
                                   <thead class="bg-primary text-white">
                                   <tr>
                                   <th>No</th>
                                   <th>Nik </th>
                                   <th>Nama Karyawan</th>
                                   <th>Divisi</th>
                                   <th>Alamat</th>
                                   <th>Aksi</th>
                                   </tr>
                                    </thead>
                                   <tbody class="bg-white text-black">
                                    <tr>
                                    <th>1</th>
                                    <th>21.09.3</th>
                                    <th>Budi sudarsono</th>
                                    <th>Keuangan</th>
                                    <th>Jalan Bali Raya No 1 RT 005 RW 017</th>
                                    <th><i class="far fa-trash-alt"></i>
                                    <i class="fas fa-server mr-3 ml-3" ></i>
                                    <i class="fas fa-edit"></i>
                                    </th>
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