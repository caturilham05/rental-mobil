<section class="content-header">
    <h1>Sewa<small>&nbsp;Tambah</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Tambah Data Sewa</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b>Tambah</b>&nbsp;Data Sewa</h3>
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
                        <input type="text" name="kode_sewa" class="form-control" readonly/>
                    </div>
                <?php } ?>
                    
                    <div class="form-group">
                        <label for="tgl_sewa">Tanggal Sewa</label>
                        <input type="hidden" name="kode_sewa" class="form-control" readonly/>
                        <input type="hidden" name="simpel" class="form-control" readonly/>
                        <input type="date" name="tgl_sewa" class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="tgl_kembali">Tanggal Kembali</label>
                        <input type="date" name="tgl_kembali" class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                    <label for="waktu_pengambilan">Waktu Pengambilan</label>
                    <select name="waktu_pengambilan" class="form-control" required/>
                
                            <option value="">- Pilih Waktu Pengambilan -</option>
                            <option value="09:00 AM">- 09:00 AM -</option>
                            <option value="10:00 AM">- 10:00 AM -</option>
                            <option value="11:00 AM">- 11:00 AM -</option>
                            <option value="12:00 PM">- 12:00 PM -</option>
                            <option value="01:00 PM">- 01:00 PM -</option>
                            <option value="02:00 PM">- 02:00 PM -</option>
                            <option value="03:00 PM">- 03:00 PM -</option>
                           
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" name="telepon" class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="durasi_sewa">Durasi Sewa</label>
                        <select name="durasi_sewa" class="form-control" required/>
        
                            <option value="">- Pilih Durasi Sewa -</option>
                            <option value="1 hari">- 1 Hari -</option>
                            <option value="2 hari">- 2 Hari -</option>
                            <option value="lebih 3 hari">- Lebih 3 Hari -</option>
                            
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="biaya">Driver / Tidak</label>
                            <select name="biaya" class="form-control" required/>
                                <option value="">- Driver / Tidak -</option>
                                <?php foreach($biaya->result() as $key => $data) { ?>
                                <option value="<?=$data->id_biaya?>">
                                <?=$data->keterangan?></option>
                                <?php } ?>
                            </select>
                    </div>
                    
                    
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" required/>
            
                            <option value="">- Pilih Pembayaran -</option>
                            <option value="menunggu pembayaran">- Menunggu Pembayaran -</option>
                            <option value="menunggu konfirmasi">- Menunggu Konfirmasi -</option>
                            <option value="pembayaran terkonfirmasi">- Pembayaran Konfirmasi -</option>
                            <option value="batal">- Batal -</option>
                            <option value="selesai">- Selesai -</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="add" class="btn btn-success"><i class="fa fa-send"></i>&nbsp;Save</button>
                        <button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i>&nbsp;reset</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>