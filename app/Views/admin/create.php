<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main id="main">

  <!-- ======= Contact Section ======= -->
  <section class="contact">
    <div class="container">

      <a href="admin" class="bx bx-link" id="tambah-data">Back</a>

      <div class="row" data-aos="fade-in">

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="/admin/save" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <h3>Tambah Data</h3>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="pro_category">Category</label>
                <select class="form-control <?= ($validation->hasError('pro_category')) ?'is-invalid' : ''; ?>"
                  name="pro_category" id="pro_category" autofocus value="<?= old('pro_category'); ?>">
                  <option value="normal">Normal</option>
                  <option value="bestSeller">Best Seller</option>
                  <option value="bestWeeks">Best Weeks</option>
                </select>
                <div class="invalid-feedback">
                  <?= $validation->getError('pro_category'); ?>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="pro_name">Nama Kue</label>
                <input type="text" class="form-control" name="pro_name" id="pro_name" value="<?= old('pro_name'); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="pro_harga">Harga</label>
              <input type="text" class="form-control" name="pro_harga" id="pro_harga" value="<?= old('pro_harga'); ?>">
            </div>


            <div class="form-group">
              <label for="pro_image">Image</label>
              <div class="form-group row">
                <div class="col-sm-2">
                  <img src="/assets/img/portfolio/default.jpg" class="img-thumbnail img-preview" alt="">
                </div>
                <div class="col-sm-10">
                  <div class="input-group mb-3">
                    <input type="file" class="form-control <?= ($validation->hasError('pro_image')) ?'is-invalid' : ''; ?>"
                      id="pro_image" name="pro_image" value="<?= old('pro_image'); ?>" onchange="previewImg()">
                    <label class="input-group-text" for="pro_image">Upload</label>
                    <div class="invalid-feedback">
                      <?= $validation->getError('pro_image'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="pro_details">Detail</label>
              <textarea class=" form-control" name="pro_details" id="pro_details" value="<?= old('pro_details'); ?> cols=" 30"
                rows="10"></textarea>
            </div>
            <div class="text-center"><button type="submit">Add</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<?= $this->endSection(); ?>