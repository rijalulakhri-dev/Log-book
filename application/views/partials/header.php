<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('public/')?>images/favicon.ico">

    <!-- App css -->
    <link href="<?= base_url('public/')?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('public/')?>css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('public/')?>css/theme.min.css" rel="stylesheet" type="text/css" />

    <?php if ($this->uri->segment(1)) { ?>
        <link href="<?= base_url('public/')?>plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('public/')?>plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('public/')?>plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('public/')?>plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
    
    <?php } ?>
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
    
    <?php $this->load->view('partials/topbar'); ?>
    <!-- topbar -->
    
    <!-- ========== Left Sidebar Start ========== -->
    <?php $this->load->view('partials/sidebar'); ?>


        <div class="main-content">


