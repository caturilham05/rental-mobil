<!DOCTYPE html>
<html><head>
    <title></title>
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
            margin-top : 50px;
        }

        .nama{
            margin-top: 100px;
            margin-left: 62%;

        }

        footer{
            margin-top: 35%;
            text-align: center;
        }
    </style>

</head><body>

    <h3 style="text-align: center;">Laporan Data Penyewaan Mobil</h3>
    <table>
        <thead >
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
            <tr>
                <td style="padding-top: 20px;">1.</td>
                <td style="padding-top: 20px; "><?=$row->sewa_kode_sewa?></td>
                        <td style="padding-top: 20px; "><?=$row->name?></td>
                        <td style="padding-top: 20px; "><?= date('d/F/Y', strtotime($row->sewa_tgl_sewa)) ?></td>
                        <td style="padding-top: 20px; "><?= date('d/F/Y', strtotime($row->sewa_tgl_kembali)) ?></td>
                        <td style="padding-top: 20px; ">
                            <!-- Kondisional Sewa Mobil Berdasarkan Hari -->
                            <?php
                                $dur = $row->durasi_sewa;
                                if($dur == '1 hari' ){ ?>
                                    Rp.<?= number_format($row->biaya_driver*1+$row->harga*1,0,',','.')?>
                                <?php }else if( $dur == '2 hari'){ ?>
                                    Rp.<?= number_format($row->biaya_driver*2+$row->harga*2,0,',','.') ?>
                                <?php }else if( $dur == 'lebih 3 hari'){ ?>
                                    Rp.<?= number_format($row->biaya_driver*3.8+$row->harga*3.8,0,',','.') ?>
                            <?php } ?>
                            <!-- Kondisional Sewa Mobil Berdasarkan Hari -->
                        </td>
                        <td style="padding-top: 20px; "><?=$row->mobil_nama_mobil?></td>
                        <td style="padding-top: 20px;"><?=$row->status?></td>
            </tr>
        </tbody>
    </table>

    <div class="ttd">
        <h3> ............... , .......... / .......... / <?= date('Y')?></h3>
    </div>

    <div class="nama">
    <span>(Tanda Tangan & Nama Terang)</span>
    </div>
<div class="">
<footer>
    <strong>Copyright &copy; <?= date('Y')?> Rental Mobil. All Rights Reserved.</strong>
  </footer>
</div>
</body>
</html>