<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?= $title; ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Favicon -->
  <link href="<?= base_url() ?>/assets/img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="<?= base_url() ?>/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/css/my.css" rel="stylesheet">
</head>

<body>
  <!-- Topbar Start -->
  <?= $this->include('layout/navbar'); ?>

  <?= $this->renderSection('content'); ?>

  <!-- Footer Start -->
  <?= $this->include('layout/footer'); ?>

  <!-- Back to Top -->
  <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/assets/lib/easing/easing.min.js"></script>
  <script src="<?= base_url() ?>/assets/lib/waypoints/waypoints.min.js"></script>
  <script src="<?= base_url() ?>/assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>/assets/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>/assets/lib/lightbox/js/lightbox.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="<?= base_url() ?>/assets/mail/jqBootstrapValidation.min.js"></script>
  <script src="<?= base_url() ?>/assets/mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="<?= base_url() ?>/assets/js/main.js"></script>
</body>

</html>