<div class="container-fluid bg-primary py-3 d-none d-md-block">
  <div class="container">
    <div class="row">

      <div class="col-md-5 text-center text-lg-left mb-2 mb-lg-0">
        <div class="d-inline-flex align-items-center">
          <a class="text-white pr-3" href="">FAQs</a>
          <span class="text-white">|</span>
          <a class="text-white px-3" href="">Help</a>
          <span class="text-white">|</span>
          <a class="text-white pl-3" href="">Support</a>
        </div>
      </div>
      <div class="col-md-4 text-center text-lg-left mb-2 mb-lg-0">
        <div class="d-inline-flex align-items-center">
          <a class="text-white pr-3" href="<?= base_url('/login'); ?>">Login</a>
          <span class="text-white">|</span>
          <a class="text-white px-3" href="<?= base_url('/register'); ?>">Register</a>
        </div>
      </div>

      <div class="col-md-3 text-center text-lg-right">
        <div class="d-inline-flex align-items-center">
          <a class="text-white px-3" href="">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a class="text-white px-3" href="">
            <i class="fab fa-twitter"></i>
          </a>
          <a class="text-white px-3" href="">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a class="text-white px-3" href="">
            <i class="fab fa-instagram"></i>
          </a>
          <a class="text-white pl-3" href="">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-md text-center text-lg-center">
        <div class="d-inline-flex align-items-center">
          <?php if(in_groups('admin')): ?>
          <a class="text-white px-3" href="<?= base_url('/admin'); ?>">
            Manage Product</i>
          </a>
          <span class="text-white">|</span>
          <a class="text-white px-3" href="<?= base_url('admin/index'); ?>">
            User List</i>
          </a>
          <span class="text-white">|</span>
          <?php endif; ?>
          <?php if(in_groups('admin')||in_groups('user')): ?>
          <a class="text-white px-3" href="">
            <?= user()->username; ?></i>
          </a>
          <span class="text-white">|</span>
          <a href="/logout" class="bx bx-link m-3">Logout</a>
          <?php endif; ?>

        </div>
      </div>

    </div>
  </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
  <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
      <a href="index.html" class="navbar-brand d-block d-lg-none">
        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Food</span>Shope</h1>
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav ml-auto py-0">
          <a href="/" class="nav-item nav-link active">Home</a>
          <a href="<?= base_url('/product'); ?>" class="nav-item nav-link">Product</a>
        </div>
        <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
          <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Food</span>Shope</h1>
        </a>
        <div class="navbar-nav mr-auto py-0">
          <a href="<?= base_url('/gallery'); ?>" class="nav-item nav-link">Gallery</a>
          <a href="<?= base_url('/contact'); ?>" class="nav-item nav-link">Contact</a>
        </div>
      </div>
    </nav>
  </div>
</div>