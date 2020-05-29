<section class="content-header">
    <h1>Data<small>&nbsp;Biaya</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="Active">Data</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
            <?php//$this->view('popup/messages')?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b>Biaya</b>&nbsp;Data</h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped text-center" id="example1">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Driver</th>
                        <th>Denda</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($row->result() as $driver => $data) {?>
                    <tr>
                        <td style="width:5%"><?=$no++?>.</td>
                        <td>Rp.<?=number_format($data->driver,0,',','.')?></td>
                        <td>Rp.<?=number_format($data->denda,0,',','.')?></td>
                        <td style="width:15%">
                        <a href="<?= site_url('edit%20biaya/'.$data->id_biaya)?>" class="btn btn-primary"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>