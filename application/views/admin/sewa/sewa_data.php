<section class="content-header">
    <h1>Data<small>&nbsp;Sewa</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="Active">Sewa</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
            <?php //$this->view('popup/messages')?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b>Data</b>&nbsp;Sewa</h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped text-center" id="example1">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Sewa</th>
                        <th>Penyewa</th>
                        <th>Tanggal Sewa</th>
                        <th>Tanggal Kembali</th>
                        <th>Total</th>
                        <th>Model Mobil</th>
                        <th>Bukti Pembayaran</th>
                        <th>Status</th>
                        <th>Lihat Detail</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($row->result() as $sewa => $data) {?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->sewa_kode_sewa?></td>
                        <td><?=$data->name?></td>
                        <td><?=$data->sewa_tgl_sewa?></td>
                        <td><?=$data->sewa_tgl_kembali?></td>
                        <td>Rp.<?=number_format($data->biaya_driver+$data->harga,0,',','.')?></td>
                        <td><?=$data->mobil_nama_mobil?></td>
                        <td>
                            <?php if($data->bukti != null): ?>
                            <img src="<?=base_url('uploads/transaksi/'.$data->bukti)?>" style="width: 100px">
                            <a href="<?=site_url('uploads/transaksi/'.$data->bukti)?>" class="btn btn-xs btn-success" target="_blank">Bukti Transfer</a>
                            <?php endif; ?>
                        </td>
                        <td><?=$data->status?></td>
                        <td>
                            <a id="view" class="btn btn-info" data-toggle="modal" data-target="#modal-detail"
                                data-kodesewa="<?= $data->sewa_kode_sewa?>"
                                data-namapengguna="<?= $data->name?>"
                                data-tglsewa="<?= $data->sewa_tgl_sewa?>"
                                data-tglkembali="<?= $data->sewa_tgl_kembali?>"
                                data-lokasisewa="<?= $data->lokasi?>"
                                data-pengambilan="<?= $data->waktu_pengambilan?>"
                                data-emailpenyewa="<?= $data->email?>"
                                data-teleponpenyewa="<?= $data->telepon?>"
                                data-durasi="<?= $data->durasi_sewa?>"
                                data-driver="<?=number_format($data->biaya_driver,0,',','.')?>"
                                data-hargamobil="<?=number_format($data->harga,0,',','.')?>"
                                data-totalsemua="<?=number_format($data->biaya_driver+$data->harga,0,',','.')?>"
                                data-mobil="<?= $data->mobil_nama_mobil?>"
                                data-statussewa="<?= $data->status?>"><i class="fa fa-eye"></i> Detail</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<div class="modal fade" id="modal-detail">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-label="close" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <center><h2 class="modal-title">Detail Riwayat Sewa</h2></center>
                </div>
                <div class="modal-body table-responsive">
                    <table class="table table-bordered no-margin">
                        <tbody>
                            <tr>
                                <th width="200">Kode Sewa :</th>
                                <td><center><span id="sewa_kode_sewa"></center></span></td>
                            </tr>
                            <tr>
                                <th>Penyewa :</th>
                                <td><center><span id="name"></span></center></td>
                            </tr>
                            <tr>
                                <th>Tanggal Sewa :</th>
                                <td><center><span id="sewa_tgl_sewa"></span></center></td>
                            </tr>
                            <tr>
                                <th>Tanggal Kembali :</th>
                                <td><center><span id="sewa_tgl_kembali"></span></center></td>
                            </tr>
                            <tr>
                                <th>Lokasi :</th>
                                <td><center><span id="lokasi"></span></center></td>
                            </tr>
                            <tr>
                                <th>Waktu Pengambilan :</th>
                                <td><center><span id="waktu_pengambilan"></center></span></td>
                            </tr>
                            <tr>
                                <th>Email :</th>
                                <td><center><span id="email"></span></center></td>
                            </tr>
                            <tr>
                                <th>Telepon :</th>
                                <td><center><span id="telepon"></span></center></td>
                            </tr>
                            <tr>
                                <th>Durasi Sewa :</th>
                                <td><center><span id="durasi_sewa"></center></span></td>
                            </tr>
                            <tr>
                                <th>Biaya Driver :</th>
                                <td><center><span id="biaya_driver"></span></center></td>
                            </tr>
                            <tr>
                                <th>Harga :</th>
                                <td><center><span id="harga"></span></center></td>
                            </tr>
                            <tr>
                                <th>Total :</th>
                                <td><center><span id="total"></span></center></td>
                            </tr>
                            <tr>
                                <th>Mobil :</th>
                                <td><center><span id="mobil_nama_mobil"></span></center></td>
                            </tr>
                            <tr>
                                <th>Status :</th>
                                <td><center><span id="status"></span></center></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>





