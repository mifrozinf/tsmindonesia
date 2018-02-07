<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
  <div class="container">
    <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded"  href="<?php echo base_url(); ?>index.php">Home
          </a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url().'index.php/dashboard/about' ?>">About</a>
        </li>
        <li class="nav-item active px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url().'index.php/dashboard/products' ?>">Products</a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url().'index.php/dashboard/contact' ?>">Contact</a>
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
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="<?php echo base_url(); ?>assets/frontend/img/<?php echo $row->picture; ?>" alt="">
      <div class="product-item-description d-flex mr-auto">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>