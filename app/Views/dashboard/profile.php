<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>


<br>
<?= current_url(); ?><br>
<?= base_url('user/profile'); ?>
<?= $this->endSection(); ?>