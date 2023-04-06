<?php $this->load->view('admin/_template/header'); ?>
<?php $this->load->view('admin/_template/sidebar'); ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1><?= $page_title ?></h1>
    <?= $content_breadcrumb ?>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <?= $body ?>
    </div>
  </section>

</main><!-- End #main -->

<?php $this->load->view('admin/_template/footer'); ?>