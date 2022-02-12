<?= $this->extend('/admin/layout') ?>

<?= $this->section('content') ?>


<?php 
    $message = "";


?>

<section class="content">




    <div class="box box-primary clearfix">
        <div class="col-md-12">
            <br>


            <!-----------------Payment Schedule----------------->
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Payment Schedule</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="" method="POST">
                        <div class="box-body">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="trans_date">DATE </label>
                                    <input type="Text" name="trans_date[]" class="form-control" id="trans_date" placeholder="DATE">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="trans_description">DESCRIPTION </label>
                                    <input type="Text" name="trans_description[]" class="form-control" id="trans_description" placeholder="DESCRIPTION">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>STATUS</label>
                                    <select name="trans_status[]" class="form-control">
                                        <option value="">Status </option>
                                        <option value="Recieved">Recieved </option>
                                        <option value="Pending">Pending </option>
                                        <option value="Unpaid">Unpaid </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="trans_amount">AMOUNT </label>
                                    <input name="trans_amount[]" type="Text" class="form-control" id="trans_amount" placeholder="AMOUNT">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <br>
                                    <div id="button_add_pay">
                                        <a onclick="addPAY(1)" class="btn btn-success add_quarterly_statements">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add_filedpay"></div>
                        <script>
                            function addPAY(id) {
                                var append_id = id + 1;
                                $(".add_filedpay").append('<div class="box-body box_pay' + append_id + '"><div class="col-md-2"><div class="form-group"> <label for="trans_date">DATE </label><input type="Text" name="trans_date[]" class="form-control" id="trans_date" placeholder="DATE"><input type="hidden" name="trans_type[] " value="PS"></div></div><div class="col-md-3"><div class="form-group"><label for="trans_description">DESCRIPTION </label><input type="Text" name="trans_description[]" class="form-control" id="trans_description" placeholder="DESCRIPTION"></div></div><div class="col-md-3"><div class="form-group"> <label>STATUS</label> <select name="trans_status[]" class="form-control"><option value="">Status </option><option value="Recieved">Recieved </option><option value="Pending">Pending </option><option value="Unpaid">Unpaid </option> </select></div></div><div class="col-md-2"><div class="form-group"> <label for="trans_amount">AMOUNT </label> <input name="trans_amount[]" type="Text" class="form-control" id="trans_amount" placeholder="AMOUNT"></div></div><div class="col-md-2"><div class="form-group"><br><a onclick="removePAY(' + append_id + ')"class="btn btn-danger "><i class="fa fa-minus"></i> </a></div></div></div></div>');

                                document.getElementById("button_add_pay").innerHTML = '<a onclick="addPAY(' + append_id + ')" class="btn btn-success add_quarterly_statements"><i class="fa fa-plus"></i>  </a>';

                            }

                            function removePAY(id) {
                                $(".box_pay" + id + "").remove();

                            }
                        </script>
                        <div class="box-footer">
                            <button type="submit" name="payment_schedule" class="btn btn-primary">SAVE</button>
                        </div>
                    </form>
                    <!-- /.box-header -->
                    <div class="box-header with-border">
                        <h3 class="box-title"> Account Statements of<b> <?php echo $username; ?></b></h3>
                    </div>
                    <div class="box-body no-padding">

                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th style="width: 10px">ID</th>
                                    <th>Date</th>
                                    <th>DESCRIPTION</th>
                                    <th>STATUS</th>
                                    <th>AMOUNT</th>
                                    <th style="width:350px">Action</th>
                                </tr>
                                <?php
                                if ($payment_schedule['status'] != '404') {
                                    foreach ($payment_schedule as $payment_PS) {
                                        extract($payment_PS);
                                ?>
                                        <tr>
                                            <td><?php echo $trans_id; ?></td>
                                            <td><?php echo $trans_date; ?></td>
                                            <td><?php echo $trans_description; ?></td>
                                            <td><?php echo $trans_status; ?></td>
                                            <td><?php echo $trans_amount; ?></td>
                                            <td>
                                                <a href="<?php echo DOMAIN; ?>current_holding.php?user_id=<?php echo $user_id; ?>&del_trans_id=<?php echo $trans_id; ?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php }
                                } else { ?>
                                    <tr>
                                        <td>0</td>
                                        <td> No Records Found Yet.</td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->




        </div>
        <!-- /.row -->
    </div>




















</section>

<?= $this->endSection() ?>