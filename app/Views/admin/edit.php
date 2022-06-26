<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main id="main">

  <!-- ======= Contact Section ======= -->
  <section class="contact">
    <div class="container">
      <a href="/admin" class="bx bx-link" id="tambah-data">Back</a>
      <div class="row" data-aos="fade-in">

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="/admin/update/<?= $product["pro_id"]; ?>" method="post" role="form" class="php-email-form"
            enctype="multipart/form-data">
            <h3>Update Data</h3>
            <?= csrf_field(); ?>
            <input type="hidden" name="pro_slug" value="<?= $product["pro_slug"]; ?>">
            <input type="hidden" name="imgLama" value="<?= $product["pro_image"]; ?>">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="pro_category">Category</label>
                <select name="pro_category"
                  class="form-control <?= ($validation->hasError('pro_category')) ?'is-invalid' : ''; ?>" id="pro_category"
                  autofocus value="<?= (old('pro_category')) ? old('pro_category'): $product["pro_category"] ?>">
                  <option value="normal" <?= ($product["pro_category"] == 'normal') ? 'selected' : ''?>>Normal</option>
                  <option value="bestSeller" <?= ($product["pro_category"] == 'bestSeller') ? 'selected' : ''?>>Best Seller
                  </option>
                  <option value="bestWeeks" <?= ($product["pro_category"] == 'bestWeeks') ? 'selected' : ''?>>Best Weeks
                  </option>
                </select>
                <div class="invalid-feedback">
                  <?= $validation->getError('pro_category'); ?>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="pro_name">Client</label>
                <input type="text" class="form-control" name="pro_name" id="pro_name"
                  value="<?= (old('pro_name')) ? old('pro_name'): $product["pro_name"] ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="pro_harga">Project Url</label>
              <input type="text" class="form-control" name="pro_harga" id="pro_harga"
                value="<?= (old('pro_harga')) ? old('pro_harga'): $product["pro_harga"] ?>">
            </div>


            <div class="form-group">
              <label for="pro_image">Image</label>
              <div class="form-group row">
                <div class="col-sm-2">
                  <img src="/assets/img/portfolio/<?= $product["pro_image"]; ?>" class="img-thumbnail img-preview" alt="">
                </div>
                <div class="col-sm-10">
                  <div class="input-group mb-3">
                    <input type="file" class="form-control <?= ($validation->hasError('pro_image')) ?'is-invalid' : ''; ?>"
                      id="pro_image" name="pro_image" onchange="previewImg()">
                    <label class="input-group-text" for="pro_image"><?= $product["pro_image"]; ?></label>
                    <div class="invalid-feedback">
                      <?= $validation->getError('pro_image'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="pro_details">Detail</label>
              <input type="textarea" class="form-control" name="pro_details" id="pro_details"
                value="<?= (old('pro_details')) ? old('pro_details'): $product["pro_details"] ?>">
            </div>
            <div class="text-center"><button type="submit">Update</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<?= $this->endSection(); ?>