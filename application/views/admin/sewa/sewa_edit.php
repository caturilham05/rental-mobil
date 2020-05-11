<section class="content-header">
    <h1>Sewa<small>&nbsp;<?php echo ucfirst($page)?></small></h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active"><?php echo ucfirst($page)?> Data Sewa</li>
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
                <form action="<?= site_url('sewa/proses')?>" method="post">
                <?php if($page == 'edit') { ?>
                    <div class="form-group">
                        <label>Kode Sewa</label>
                        <input type="text" name="kode_sewa" value="<?=$row->kode_sewa?>"class="form-control" readonly/>
                    </div>
                <?php } ?>
                    
                    <div class="form-group">
                        <label for="tgl_sewa">Tanggal Sewa</label>
                        <input type="hidden" name="id_detail_sewa" value="<?=$row->id_detail_sewa?>">
                        <input type="date" name="tgl_sewa" value="<?=$row->tgl_sewa?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="tgl_kembali">Tanggal Kembali</label>
                        <input type="date" name="tgl_kembali" value="<?=$row->tgl_kembali?>"class="form-control" required/>
                    </div>

                    <div class="form-group">
                        <label for="mobil">Mobil</label>
                            <select name="mobil" class="form-control" required/>
                                <option value="">- Pilih Mobil -</option>
                                <?php foreach($mobil->result() as $key => $data) { ?>
                                <option value="<?=$data->id_mobil?>" <?=$data->id_mobil == $row->id_mobil ? "selected" : null?>><?=$data->nama_mobil?></option>
                                <?php } ?>
                            </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" name="lokasi" value="<?=$row->lokasi?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                    <label for="waktu_pengambilan">Waktu Pengambilan</label>
                    <select name="waktu_pengambilan" class="form-control" required/>
                           
                            <?php $waktu_pengambilan = $this->input->post('waktu_pengambilan') ? $this->input->post('status') : $row->waktu_pengambilan ?>
                            <option value="">- Pilih Waktu Pengambilan -</option>
                            <option value="09:00 AM">- 09:00 AM -</option>
                            <option value="10:00 AM"<?= $waktu_pengambilan == '10:00 AM' ? 'selected' : null ?>>- 10:00 AM -</option>
                            <option value="11:00 AM"<?= $waktu_pengambilan == '11:00 AM' ? 'selected' : null ?>>- 11:00 AM -</option>
                            <option value="12:00 PM"<?= $waktu_pengambilan == '12:00 PM' ? 'selected' : null ?>>- 12:00 PM -</option>
                            <option value="01:00 PM"<?= $waktu_pengambilan == '01:00 PM' ? 'selected' : null ?>>- 01:00 PM -</option>
                            <option value="02:00 PM"<?= $waktu_pengambilan == '02:00 PM' ? 'selected' : null ?>>- 02:00 PM -</option>
                            <option value="03:00 PM"<?= $waktu_pengambilan == '03:00 PM' ? 'selected' : null ?>>- 03:00 PM -</option>
                           
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?=$row->email?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" name="telepon" value="<?=$row->telepon?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="durasi_sewa">Durasi Sewa</label>
                        <select name="durasi_sewa" class="form-control" required/>
                           
                            <?php $durasi_sewa = $this->input->post('durasi_sewa') ? $this->input->post('status') : $row->durasi_sewa ?>
                            <option value="">- Pilih Durasi Sewa -</option>
                            <option value="1 hari">- 1 Hari -</option>
                            <option value="2 hari"<?= $durasi_sewa == '2 hari' ? 'selected' : null ?>>- 2 Hari -</option>
                            <option value="lebih 3 hari"<?= $durasi_sewa == 'lebih 3 hari' ? 'selected' : null ?>>- Lebih 3 Hari -</option>
                            
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" value="<?=$row->harga?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" required/>
                            <?php $status = $this->input->post('status') ? $this->input->post('status') : $row->status ?>
                            <option value="">- Pilih Pembayaran -</option>
                            <option value="menunggu pembayaran">- Menunggu Pembayaran -</option>
                            <option value="menunggu konfirmasi"<?= $status == 'menunggu konfirmasi' ? 'selected' : null ?>>- Menunggu Konfirmasi -</option>
                            <option value="pembayaran terkonfirmasi"<?= $status == 'pembayaran terkonfirmasi' ? 'selected' : null ?>>- Pembayaran Konfirmasi -</option>
                            <option value="batal"<?= $status == 'batal' ? 'selected' : null ?>>- Batal -</option>
                            <option value="selesai"<?= $status == 'selesai' ? 'selected' : null ?>>- Selesai -</option>
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