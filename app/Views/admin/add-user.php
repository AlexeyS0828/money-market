<?= $this->extend("/admin/layout") ?>

<?= $this->section("content") ?>


<?php
    $message = '';
?>

<!-- Main content -->
<section class="content">
    <form action="<?= site_url('/admin/create-user') ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">About User</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <?php if ($message != '') { ?>
                            <div class="callout callout-success">
                                <h4><?php echo $message; ?></h4>
                            </div>
                        <?php } ?>

                        <?php if (isset($validation)) : ?>
                            <div class="callout callout-danger">
                                <?= $validation->listErrors() ?>
                            </div>
                        <?php endif; ?>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_email">Email:</label>
                                    <input type="email" name="user_email" id="user_email" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="user_firstName">First Name</label>
                                    <input type="Text" name="user_firstName" class="form-control" value="" id="user_firstName" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="user_middleName">Middle Name</label>
                                    <input type="Text" name="user_middleName" class="form-control" value="" id="user_middleName" placeholder="Middle Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="user_lastName">Last Name</label>
                                    <input type="Text" name="user_lastName" class="form-control" value="" id="user_lastName" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-xs-6">
                                <div class="form-group">
                                    <label for="user_dob">Date Of Birth</label>
                                    <input type="Text" name="user_dob" class="form-control" value="" id="user_dob" placeholder="Date Of Birth">
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select name="user_gender" class="form-control">
                                        <option>Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Nationality </label>
                                    <input type="Text" name="user_education" class="form-control" value="" id="user_dob" placeholder="Nationality">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Account Type</label>
                                    <select name="user_residence" class="form-control">
                                        <option value="">Individual Account</option>
                                        <option value="uk">Joint Account</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" name="user" class="btn btn-primary">SAVE</button>
                    </div>
                </div>
                <!-- /.box -->

            </div>

    </form>



</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- < ?php include 'footer.php';?> -->

















<?= $this->endSection() ?>