<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="../assets/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css" />
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo2/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <?php include 'template/sidebar.php'; ?>
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            <?php include 'template/header.php'; ?>
            <!-- partial -->

            <div class="page-content">
                <?php include "konten.php"; ?>
            </div>

            <!-- partial:partials/_footer.html -->
            <?php include 'template/footer.php'; ?>
            <!-- partial -->

        </div>
    </div>

    <!-- core:js -->
    <script src="../assets/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="../assets/vendors/flatpickr/flatpickr.min.js"></script>
    <script src="../assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="../../../assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="../assets/vendors/feather-icons/feather.min.js"></script>
    <script src="../assets/js/template.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="../assets/js/dashboard-dark.js"></script>
    <script src="../../../assets/js/data-table.js"></script>
    <!-- End custom js for this page -->

</body>

</html>