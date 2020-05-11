<section class="content-header">
    <h1>Sewa<small>&nbsp;Edit</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Edit Konfirmasi Pembayaran</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b><?php echo ucfirst($page) ?></b>&nbsp;Data Sewa</h3>
            <div class="pull-right">
                <a href="<?= site_url('sewa')?>" class="btn btn-warning btn-flat"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                <?php //echo validation_errors(); ?>
                <form action="<?= site_url('konfirmasi/proses')?>" method="post">
                    <div class="form-group">
                        <label>Kode Sewa</label>
                        <input type="hidden" name="id_detail_sewa" value="<?=$row->id_detail_sewa?>">
                        <input type="text" name="kode_sewa" value="<?=$row->sewa_kode_sewa?>"class="form-control" readonly/>
                    </div>
                    
                    <div class="form-group">
                        <label>Tanggal Sewa</label>
                        <input type="text" name="sewa_tgl_sewa" value="<?=$row->sewa_tgl_sewa?>"class="form-control" readonly/>
                    </div>
                    
                    <div class="form-group">
                        <label>Tanggal Kembali</label>
                        <input type="text" name="sewa_tgl_kembali" value="<?=$row->sewa_tgl_kembali?>"class="form-control" readonly/>
                    </div>
                    
                    <div class="form-group">
                        <label>Lokasi</label>
                        <input type="text" name="lokasi" value="<?=$row->lokasi?>"class="form-control" readonly/>
                    </div>
                    
                    <div class="form-group">
                        <label>Waktu Pengambilan</label>
                        <input type="text" name="waktu_pengambilan" value="<?=$row->waktu_pengambilan?>"class="form-control" readonly/>
                    </div>
                    
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?=$row->email?>"class="form-control" readonly/>
                    </div>
                    
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" name="telepon" value="<?=$row->telepon?>"class="form-control" readonly/>
                    </div>
                    
                    <div class="form-group">
                        <label>Durasi Sewa</label>
                        <input type="text" name="durasi_sewa" value="<?=$row->durasi_sewa?>"class="form-control" readonly/>
                    </div>
                    
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" value="<?=$row->harga?>"class="form-control" readonly/>
                    </div>
                    
                    
                    <div class="form-group">
                        <label>Model Mobil</label>
                        <input type="text" name="sewa_model_mobil" value="<?=$row->mobil_nama_mobil?>"class="form-control" readonly/>
                    </div>
                    
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" required/>
                            <?php $status = $this->input->post('status') ? $this->input->post('status') : $row->status ?>
                            <option value="menunggu konfirmasi">-Menunggu Konfirmasi Pembayaran -</option>
                            <option value="pembayaran terkonfirmasi"<?= $status == 'konfirmasi pembayaran' ? 'selected' : null ?>>- Konfirmasi Pembayaran -</option>
                            <option value="batal"<?= $status == 'batal' ? 'selected' : null ?>>- Batal Penyewaan -</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="<?=$page?>" class="btn btn-success"><i class="fa fa-send"></i>&nbsp;Save</button>
                        <?php if($page == 'add') { ?>
                        <button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i>&nbsp;reset</button>
                        <?php } ?>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>