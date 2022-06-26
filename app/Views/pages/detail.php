<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center mt-5">
        <h2>Product Details</h2>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= product Details Section ======= -->
  <section id="product-details" class="product-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="product-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide position-relative mt-n3 mb-4 p-3" style="width: 700px; height: 500px;">
                <img class="w-100 h-100" src="<?= base_url() ?>/assets/img/product/<?= $product["pro_image"]; ?>" alt=""
                  style="object-fit: cover;">
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="product-info">
            <h3>Deskripsi Product</h3>
            <ul>
              <li><strong>Category</strong>: <?= $product["pro_category"]; ?></li>
              <li><strong>Nama</strong>: <?= $product["pro_name"]; ?></li>
              <?php use CodeIgniter\I18n\Time; $time = Time::parse($product["created_at"]); ?>
              <li><strong>Date</strong>: <?= $time->toLocalizedString('MMM d, yyyy'); ?></li>
              <li><strong>Harga</strong>: <?= $product["pro_harga"]; ?>K</li>
            </ul>
          </div>
          <div class="product-description">
            <h2>Resep & Bahan</h2>
            <p><?= $product["pro_details"]; ?></p>
            <a href="">Buy</a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End product Details Section -->

</main><!-- End #main -->

<?= $this->endSection(); ?>