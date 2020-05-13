<section class="content-header">
    <h1>Data<small>&nbsp;Mobil</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Data Mobil</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
            <?php //$this->view('popup/messages')?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b>Data</b>&nbsp;Mobil</h3>
            <div class="pull-right">
            <a href="<?= site_url('mobil/add')?>" class="btn btn-primary btn-flat"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Tambah Data Mobil</a> 
            <!-- (pelanggan/add) dari routes -->
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped text-center" id="example1">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Mobil</th>
                        <th>Merek</th>
                        <th>No. Polisi</th>
                        <th>Harga Sewa</th>
                        <th>BB</th>
                        <th>Tahun</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($row->result() as $mobil => $data) {?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->nama_mobil?></td>
                        <td><?=$data->merek?></td>
                        <td><?=$data->nopol?></td>
                        <td><?=$data->harga?></td>
                        <td><?=$data->bahanbakar?></td>
                        <td><?=$data->tahun?></td>
                        <td style="width: 10%"><?=substr($data->deskripsi,0,40)?></td>
                        <td>
                            <?php if($data->gambar != null): ?>
                            <img src="<?=base_url('uploads/mobil/'.$data->gambar)?>" style="width: 100px">
                            <?php endif; ?>
                        </td>
                        <td>
                        <a href="<?= site_url('mobil/edit/'.$data->id_mobil)?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                        <a href="<?= site_url('mobil/del/'.$data->id_mobil)?>" onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>