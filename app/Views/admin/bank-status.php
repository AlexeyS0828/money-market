<?= $this->extend('/admin/layout') ?>

<?= $this->section('content') ?>


<?php 
    $message = "";


?>

<section class="content">




    <div class="box box-primary clearfix">
        <div class="col-md-12">
            <br>

            <!-----------------Current Holdings----------------->
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Bank Status</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php if ($message != '') { ?>
                        <div class="callout callout-success">
                            <h4><?php echo $message; ?></h4>
                        </div>
                    <?php } ?>
                    <form action="" method="POST">
                        <div class="box-body">
                            




                        
                        </div>
                        <!-- /.box-body -->



                        <div class="box-footer">
                            <button type="submit" name="user_CH" class="btn btn-primary">SAVE</button>
                        </div>
                    </form>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->





        </div>
        <!-- /.row -->
    </div>




















</section>

<?= $this->endSection() ?>