<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Current Holding</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="<?= base_url() ?>/assets/img/favicon.png" rel="icon">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/admin/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/admin/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <?= $this->renderSection('stylesheet') ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">





        <?= view("/admin/header") ?>
        <?= view("/admin/side-bar-admin") ?>



        <?php

        // include 'function.php';

        // if (isset($_GET['del_user_id'])) {
        //     $query = "DELETE from vss_user where user_id =" . $_GET['del_user_id'] . "";
        //     update_row($query);
        // }
        // $query = "SELECT * from `vss_user`";
        // $user_details = select_array($query);

        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?= isset($title) ? $title : "" ?>
                </h1>

                <!-- <a href="profile.php" class="btn bg-olive btn-flat margin"> <i class="fa fa-plus"></i>&nbsp; Add New User</a> -->


                <!-- edit-user -->
                <!-- < ?php if($user_id !=''){ ?>
		<a href="current_holding.php?user_id=< ?php echo $user_id ;?>" class="btn bg-olive btn-flat margin"> Current Holding</a>
		<a href="quarterly_statement.php?user_id=< ?php echo $user_id ;?>" class="btn bg-olive btn-flat margin"> Quarterly Statement</a>
	    < ?php } ?> -->

            </section>



            <?= $this->renderSection('content') ?>

            <?= $this->include("/admin/footer") ?>

        </div>
        <!-- ./wrapper -->

        <!-- jQuery 3 -->
        <script src="<?= base_url() ?>/assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?= base_url() ?>/assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?= base_url() ?>/assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url() ?>/assets/admin/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url() ?>/assets/admin/dist/js/demo.js"></script>

        <?= $this->renderSection('javascript') ?>
</body>

</html>