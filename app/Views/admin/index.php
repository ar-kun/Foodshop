<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main id="main">


  <!-- Products Start -->
  <div class="container-fluid py-3">
    <div class="container">
      <div class="row">
        <?php foreach ($users as $user): ?>
        <div class="col-lg-3 col-md-6 mb-4 pb-2">
          <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
              <h4 class="font-weight-bold text-white mb-0"><?= $user->name; ?></h4>
            </div>
            <h5 class="font-weight-bold mt-4"><?= $user->username; ?></h5>
            <p><?= $user->email; ?></p>

          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <!-- Products End -->

  <!-- ======= Portfolio Details Section ======= -->


</main><!-- End #main -->

<?= $this->endSection(); ?>