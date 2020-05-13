<section class="content-header">
    <h1>Mobil<small>&nbsp;Input</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Tambah Data Mobil</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b><?php echo ucfirst($page) ?></b>&nbsp;Mobil</h3>
            <div class="pull-right">
                <a href="<?= site_url('mobil')?>" class="btn btn-warning btn-flat"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                <?php //echo validation_errors(); ?>
                <?php echo form_open_multipart('mobil/proses') ?>
                    <div class="form-group">
                        <label for="nama_mobil">Nama Mobil</label>
                        <input type="hidden" name="id_mobil" value="<?=$row->id_mobil?>">
                        <input type="text" name="nama_mobil" value="<?=$row->nama_mobil?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="merek">Merek Mobil</label>
                        <input type="text" name="merek" value="<?=$row->merek?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="nopol">Nomor Polisi</label>
                        <input type="text" name="nopol" value="<?=$row->nopol?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="harga">Harga Sewa</label>
                        <input type="text" name="harga" value="<?=$row->harga?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="bahanbakar">Bahan Bakar</label>
                        <input type="text" name="bahanbakar" value="<?=$row->bahanbakar?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="tahun">Tahun Mobil</label>
                        <input type="text" name="tahun" value="<?=$row->tahun?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" cols="52" rows="5"><?=$row->deskripsi?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar Mobil</label>
                        <?php if($page == 'edit'):
                            if($row->gambar != null): ?>
                            <div style="margin-bottom: 5px">
                                <img src="<?=base_url('uploads/mobil/'.$row->gambar)?>" style="width:80%">
                            </div>
                            <?php
                            endif;
                        endif; ?>
                        <input type="file" name="gambar" class="form-control">
                        <small>(Biarkan Kosong Jika Tidak <?=$page == 'edit' ? 'diganti' : 'ada' ?>)</small>
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

