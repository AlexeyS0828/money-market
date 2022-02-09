<?= $this->extend("/admin/layout") ?>

<?= $this->section('content') ?>





<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All Users</h3>

                    <div class="box-tools">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">«</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th style="width: 10px">#ID</th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th style="width:350px">Acrion</th>
                            </tr>
                            <?php
                            foreach ($user_details as $user) {
                                extract($user);
                            ?>
                                <tr>
                                    <td><?php echo $user_id; ?></td>
                                    <td>
                                        <a href="<?php echo base_url("/admin/edit-user/" . $user_id); ?>">
                                            <?php echo $user_firstName . ' ' . $user_lastName; ?>
                                        </a>
                                    </td>
                                    <td><?php echo $user_email; ?></td>
                                    <td>
                                        <a href="<?php echo base_url("/admin/edit-user/" . $user_id); ?>" class="btn btn-xs btn-primary"><i class="fa fa-user"></i></a>
                                        <a href="current_holding.php?user_id=<?php echo $user_id; ?>" class="btn btn-xs btn-success   ">Current Holding</a>
                                        <a href="quarterly_statement.php?user_id=<?php echo $user_id; ?>" class="btn btn-xs btn-warning   ">Quarterly Statement</a>
                                        <?php if ($user_id === $id) : ?>
                                            <a href="#" class="btn btn-xs btn-disabled" onclick=""><i class="fa fa-trash"></i></a>
                                        <?php else : ?>
                                            <a href="<?php echo base_url("/admin/delete-user/" . $user_id); ?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.row -->


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->








<?= $this->endSection() ?>