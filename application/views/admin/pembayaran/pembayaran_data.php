<section class="content-header">
    <h1>Menunggu<small>&nbsp;Pembayaran</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="Active">Menunggu Pembayaran</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
            <?php //$this->view('popup/messages')?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b>Menunggu</b>&nbsp;Pembayaran</h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped text-center" id="example1">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Sewa</th>
                        <th>Tanggal Sewa</th>
                        <th>Tanggal Kembali</th>
                        <th>Lokasi</th>
                        <th>Waktu Pengambilan</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Durasi Sewa</th>
                        <th>Total</th>
                        <th>Model Mobil</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($row->result() as $pembayaran => $data) {?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->sewa_kode_sewa?></td>
                        <td><?=$data->sewa_tgl_sewa?></td>
                        <td><?=$data->sewa_tgl_kembali?></td>
                        <td><?=$data->lokasi?></td>
                        <td><?=$data->waktu_pengambilan?></td>
                        <td><?=$data->email?></td>
                        <td><?=$data->telepon?></td>
                        <td><?=$data->durasi_sewa?></td>
                        <td><?=$data->harga?></td>
                        <td><?=$data->mobil_nama_mobil?></td>
                        <td><?=$data->status?></td>
                        <td>
                        <a href="<?= site_url('pembayaran/edit/'.$data->id_detail_sewa)?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

