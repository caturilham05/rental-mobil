<section class="content-header">
    <h1>Biaya<small>&nbsp;Edit</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Biaya</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b><?php echo ucfirst($page) ?></b>&nbsp;Biaya</h3>
            <div class="pull-right">
                <a href="<?= site_url('biaya')?>" class="btn btn-warning btn-flat"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                <?php //echo validation_errors(); ?>
                <form action="<?= site_url('driver/proses')?>" method="post">
                    <div class="form-group">
                        <label for="driver">Biaya Driver</label>
                        <input type="hidden" name="id_biaya" value="<?=$row->id_biaya?>">
                        <input type="text" name="driver" value="<?=$row->driver?>"class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="denda">Biaya Denda</label>
                        <input type="text" name="denda" value="<?=$row->denda?>"class="form-control" required/>
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