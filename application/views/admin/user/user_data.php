<section class="content-header">
    <h1>Users<small>Data</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li <?= $this->uri->segment(1) == 'user' ? 'class="active"' : '' ?>>Users</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b>Data</b> Users</h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped text-center" id="example1">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Level</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($row->result() as $user => $data) {?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->name?></td>
                        <td><?=$data->username?></td>
                        <td><?=$data->email?></td>
                        <td><?=$data->gender == 'L' ? "Laki-Laki" : "Perempuan"?></td>
                        <td><?=$data->telepon?></td>
                        <td><?=$data->address?></td>
                        <td><?php 
                            if($data->level == 'admin'){
                                echo "Admin";
                            }else if($data->level == 'mitra'){
                                echo "Mitra";
                            }else{
                                echo "User";
                            }
                        ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>