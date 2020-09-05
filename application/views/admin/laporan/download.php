<!DOCTYPE html>
<html><head>
<style type="text/css">
        table{
            border-collapse: collapse;
            border: 1.1px solid black;
            width: 100%;
        }
        table td, table th{
            border: 1px solid #ccc;
            padding: 8px;
        }

        table tr:nth-child(even){
            background-color: #f2f2f2;
        }

        .ttd{
            margin-left: 60%;
            margin-top : 10px;
        }

        .nama{
            margin-top: 70px;
            margin-left: 62%;

        }

        footer{
            margin-top: 5%;
            text-align: center;
        }
    </style>
    <title></title>
</head><body>
    <h3 style="text-align: center;">Laporan Data Penyewaan Mobil</h3>
    <table>
        <thead>
            <tr>
            <th style="padding-right: 20px;">No.</th>
            <th style="padding-right: 20px;">Kode Sewa</th>
            <th style="padding-right: 20px;">Penyewa</th>
            <th style="padding-right: 20px;">Tanggal Sewa</th>
            <th style="padding-right: 20px;">Tanggal Kembali</th>
            <th style="padding-right: 20px;">Total</th>
            <th style="padding-right: 20px;">Model Mobil</th>
            <th style="padding-right: 20px;">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach($download as $data){?>
            <tr>
                <td style="padding-top: 20px;"><?=$no++?>.</td>
                <td style="padding-top: 20px;"><?=$data->sewa_kode_sewa?></td>
                        <td style="padding-top: 20px;"><?=$data->name?></td>
                        <td style="padding-top: 20px;"><?= date('d/F/Y', strtotime($data->sewa_tgl_sewa)) ?></td>
                        <td style="padding-top: 20px;"><?= date('d/F/Y', strtotime($data->sewa_tgl_kembali)) ?></td>
                        <td style="padding-top: 20px;">
                            <!-- Kondisional Sewa Mobil Berdasarkan Hari -->
                            <?php
                                $dur = $data->durasi_sewa;
                                if($dur == '1 hari' ){ ?>
                                    Rp.<?= number_format($data->biaya_driver*1+$data->harga*1,0,',','.')?>
                                <?php }else if( $dur == '2 hari'){ ?>
                                    Rp.<?= number_format($data->biaya_driver*2+$data->harga*2,0,',','.') ?>
                                <?php }else if( $dur == 'lebih 3 hari'){ ?>
                                    Rp.<?= number_format($data->biaya_driver*3.8+$data->harga*3.8,0,',','.') ?>
                            <?php } ?>
                            <!-- Kondisional Sewa Mobil Berdasarkan Hari -->
                        </td>
                        <td style="padding-top: 20px;"><?=$data->mobil_nama_mobil?></td>
                        <td style="padding-top: 20px;"><?=$data->status?></td>
            </tr>
                <?php } ?>
        </tbody>
    </table>
    
    <div class="ttd">
        <h3> ............... , .......... / .......... / <?= date('Y')?></h3>
    </div>

    <div class="nama">
    <span>(Tanda Tangan & Nama Terang)</span>
    </div>

    <footer>
    <strong>Copyright &copy; <?= date('Y')?> Rental Mobil. All Rights Reserved.</strong>
  </footer>

</body></html>