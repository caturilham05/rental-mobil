<section class="content-header">
    <h1>Driver<small>&nbsp;Biaya</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="Active">Driver</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
            <?php//$this->view('popup/messages')?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b>Biaya</b>&nbsp;Driver</h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped text-center" id="example1">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Biaya</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($row->result() as $driver => $data) {?>
                    <tr>
                        <td style="width: 10%"><?=$no++?>.</td>
                        <td style="width: 70%"><?=$data->biaya?></td>
                        <td>
                        <a href="<?= site_url('driver/edit/'.$data->id_driver)?>" class="btn btn-primary"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>