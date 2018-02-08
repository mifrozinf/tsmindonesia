<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
  <div class="container">
    <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">MENU</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded"  href="<?php echo base_url('Dashboard'); ?>">Home</a>
        </li>
        <li class="nav-item active px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url('Products'); ?>">Products</a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url('Contact') ?>">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php foreach ($dataProduct as $row) : ?>
<section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex ml-auto rounded">
          <h2 class="section-heading mb-0">
<!--             <span class="section-heading-upper"><?php echo $row->name; ?></span> -->
            <span class="section-heading-lower"><?php echo $row->name; ?></span>
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="<?php echo base_url(); ?>assets/img/<?php echo $row->picture; ?>" alt="">
      <div class="product-item-description d-flex mr-auto">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0"><?php echo $row->description; ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>