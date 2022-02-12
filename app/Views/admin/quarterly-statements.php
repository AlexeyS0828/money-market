<?= $this->extend('/admin/layout') ?>

<?= $this->section('content') ?>


<?php 
    $message = "";
    extract($user);

?>

<section class="content">




    <div class="box box-primary clearfix">
        <div class="col-md-12">
            <br>

            <!-----------------Current Holdings----------------->
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Current Holdings</h3>

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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_portfolioValue">PORTFOLIO VALUE</label>
                                    <input type="Text" class="form-control" name="user_portfolioValue" id="user_portfolioValue" value="<?php echo $user_portfolioValue; ?>" placeholder="Security Questions Answer">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_portfolioGain">Portfolio Gains</label>
                                    <input type="Text" class="form-control" name="user_portfolioGain" id="user_portfolioGain" value="<?php echo $user_portfolioGain; ?>" placeholder="Security Questions Answer">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_cashBalance">Your Cash Balance</label>
                                    <input type="Text" class="form-control" name="user_cashBalance" id="user_cashBalance" value="<?php echo $user_cashBalance; ?>" placeholder="Security Questions Answer">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_interestBalance">Interest Balance</label>
                                    <input type="Text" class="form-control" name="user_interestBalance" id="user_interestBalance" value="<?php echo $user_interestBalance; ?>" placeholder="Security Questions Answer">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_savingsBalance">Savings Balance</label>
                                    <input type="Text" class="form-control" name="user_savingsBalance" id="user_savingsBalance" value="<?php echo $user_savingsBalance; ?>" placeholder="Security Questions Answer">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_pendingTransactions">Pending Transactions</label>
                                    <input type="Text" class="form-control" name="user_pendingTransactions" id="user_pendingTransactions" value="<?php echo $user_pendingTransactions; ?>" placeholder="Security Questions Answer">
                                </div>
                            </div>
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