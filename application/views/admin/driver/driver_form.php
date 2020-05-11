<section class="content-header">
    <h1>Driver<small>&nbsp;Edit</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Driver</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b><?php echo ucfirst($page) ?></b>&nbsp;Driver</h3>
            <div class="pull-right">
                <a href="<?= site_url('driver')?>" class="btn btn-warning btn-flat"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                <?php //echo validation_errors(); ?>
                <form action="<?= site_url('driver/proses')?>" method="post">
                    <div class="form-group">
                        <label for="biaya">Harga</label>
                        <input type="hidden" name="id_driver" value="<?=$row->id_driver?>">
                        <input type="text" name="biaya" value="<?=$row->biaya?>"class="form-control" required/>
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