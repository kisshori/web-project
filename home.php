<?php
ob_start();
?>
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
  <div class="card-body">
    <h2 class="mb-1">Welcome to Bella Pasta Artisanal</h2>
    <p class="text-muted mb-0">Handcrafted dried pasta, made the traditional way.</p>
  </div>
</div>

<div class="card shadow-sm mb-4 text-center">
  <div class="card-body py-5">
    <i class="bi bi-basket3-fill text-primary display-3"></i>
    <h3 class="mt-3">Artisanal Dried Pasta</h3>
    <p class="text-muted mb-0">
      From slow-dried spaghetti to rustic penne, every pack is made from carefully
      selected wheat. Manage your products, customers, staff and orders in one place.
    </p>
  </div>
</div>

<div class="row g-4">
  <div class="col-md-3">
    <div class="card shadow-sm h-100 text-center">
      <div class="card-body">
        <i class="bi bi-box-seam-fill text-primary fs-1"></i>
        <h5 class="mt-2">Products</h5>
        <p class="text-muted">Manage the pasta range.</p>
        <a href="products.php" class="btn btn-primary btn-sm">Open</a>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card shadow-sm h-100 text-center">
      <div class="card-body">
        <i class="bi bi-people-fill text-primary fs-1"></i>
        <h5 class="mt-2">Customers</h5>
        <p class="text-muted">Keep track of buyers.</p>
        <a href="customers.php" class="btn btn-primary btn-sm">Open</a>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card shadow-sm h-100 text-center">
      <div class="card-body">
        <i class="bi bi-person-badge-fill text-primary fs-1"></i>
        <h5 class="mt-2">Staffs</h5>
        <p class="text-muted">Manage the team.</p>
        <a href="staffs.php" class="btn btn-primary btn-sm">Open</a>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card shadow-sm h-100 text-center">
      <div class="card-body">
        <i class="bi bi-cart-fill text-primary fs-1"></i>
        <h5 class="mt-2">Orders</h5>
        <p class="text-muted">View and track orders.</p>
        <a href="orders.php" class="btn btn-primary btn-sm">Open</a>
      </div>
    </div>
  </div>
</div>
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>