<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Jadwal Kuliah</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">Aplikasi Jadwal Kuliah</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('jadwal'); ?>">Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('jadwalmahasiswa'); ?>">Jadwal Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('mahasiswa'); ?>">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('matakuliah'); ?>">Mata Kuliah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('user'); ?>">User</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
    <?php if ($this->session->userdata('user_id')): ?>
        <li class="nav-item">
            <a class="nav-link" href="#">Selamat datang, <?php echo $this->session->userdata('username'); ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('auth/logout'); ?>">Logout</a>
        </li>
    <?php else: ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('auth/login'); ?>">Login</a>
        </li>
    <?php endif; ?>
</ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4 mb-6">