<?php
/**
 * tables.php -- Header
 */

 include '../../config/configurations.php'; // Database & Other Configurations
 include '../../config/constant-variable.php'; // Constants Defined
 include 'layout/header.php';

?>

<!-- Custom styles for this page -->
<link href="<?= ASSETS_URL; ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'layout/sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'layout/topbar.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Fullname</th>
                                            <th>Address</th>
                                            <th>Created On</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Username</th>
                                            <th>Fullname</th>
                                            <th>Address</th>
                                            <th>Created On</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            // Users
                                            $users = $db_con->prepare("SELECT * FROM ". USR);

                                            if ( $users->execute() ){
                                                $i = 0;
                                                while ( $row = $users->fetch(PDO::FETCH_ASSOC) ){
                                                    $i++;
                                            ?>
                                        <tr>
                                            <td><?= $row['username']; ?></td>
                                            <td><?= $row['fullname']; ?></td>
                                            <td><?= $row['address']; ?></td>
                                            <td><?= date('M j, Y / h:i A', strtotime($row['created_on'])); ?></td>
                                        </tr>
                                        <?php }} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include 'layout/footer.php'; ?>

    <!-- Page level plugins -->
    <script src="<?= ASSETS_URL; ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= ASSETS_URL; ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= ASSETS_URL; ?>js/demo/datatables-demo.js"></script>

    

    <script src="<?= APP_URL; ?>vuejs/vue.js"></script>
    <script src="<?= APP_URL; ?>vuejs/axios.js"></script>
    <script src="<?= APP_URL; ?>vuejs/auth.js"></script>

</body>

</html>

<?php ob_end_flush(); ?>