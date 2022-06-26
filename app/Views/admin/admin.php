<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main id="main">


  <!-- Products Start -->
  <div class="container-fluid py-3">
    <div class="container">
      <div class="row justify-content-center">
        <div class="container d-flex justify-content-between align-items-end mb-5 garis">

          <div class="d-flex justify-content-between align-items-center mt-5">
            <h2>Product</h2>
            <?php if(session()->getFlashdata('Pesan')): ?>
            <div class="alert alert-success" role="alert"><?= session()->getFlashdata('Pesan'); ?></div>
            <?php endif; ?>
          </div>
          <div class="link-a d-flex justify-content-center">
            <a href="/create" class="bx bx-link m-3 button-lg" id="tambah-data">Add</a>
            <a href="/logout" class="bx bx-link m-3 button-lg">Logout</a>
          </div>

        </div>
      </div>
      <div class="row">
        <?php foreach ($product as $pro): ?>
        <div class="col-lg-3 col-md-6 mb-4 pb-2">
          <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
              <h4 class="font-weight-bold text-white mb-0"><?= $pro["pro_harga"]; ?></h4>
            </div>
            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
              <img class="rounded-circle w-100 h-100" src="<?= base_url() ?>/assets/img/product/<?= $pro["pro_image"]; ?>"
                style="object-fit: cover;">
            </div>
            <h5 class="font-weight-bold mb-4"><?= $pro["pro_name"]; ?></h5>
            <div class="d-flex justify-content-between align-items-center">
              <a href="/edit/<?= $pro['pro_slug']; ?>" class="bx bx-link button-lg-view" id="btn">Edit</a>

              <form action="/<?= $pro['pro_id']; ?>" method="post" class="d-inline">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="bx bx-link button-lg-view" id="btn"
                  onclick="return  confirm('Hapus Product ?')">Delete</button>
              </form>
            </div>

          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <!-- Products End -->

  <!-- ======= Portfolio Details Section ======= -->

  <?= $pager->links('product','admin_pagination'); ?>

</main><!-- End #main -->

<?= $this->endSection(); ?>