<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<section class="content pt-3">
  <div class="container-fluid">
    <h1>Welcome, <?= session()->get('user_name') ?></h1>
    <p>This is your dashboard.</p>
     <a href="<?= base_url('logout') ?>" class="btn btn-danger">Logout</a>
  </div>
</section>

<?= $this->endSection() ?>
