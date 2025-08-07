<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <?php include('app/views/includes/link.php'); ?>
</head>

<body class="font-fira">
  <div class="container-fluid p-0 d-none d-lg-flex">
    <!-- side bar -->
    <aside class="col-2 bg-success sticky-top" style="height: 100vh">
      <div class="w-100 text-center py-0 border-bottom border-2 border-white">
        <img src="app\assets\images\logo.png" alt="no image" class="w-25" />
        <h4 class="text-light mb-0">
          pizza. <span class="text-warning"> Khmer</span>
        </h4>
        <h5 class="text-light fs-6 py-3">Yummy with me</h5>
      </div>
      <ul class="list-unstyled text-light mt-3 ps-5 fs-5 py-1">
        <a href="./index.php" class="text-decoration-none text-light mt-3 hover_bg">
          <li class="py-2 hover_bg mt-3">
            <i class="bi bi-house me-3"></i>
            Home
          </li>
        </a>
        <a href="./index.php?page=itemsPage" class="text-decoration-none text-light py-2 hover_bg">
          <li class="py-2 hover_bg mt-3">
            <i class="bi bi-fork-knife me-3"></i>
            Items
          </li>
        </a>
        <a href="./index.php?page=sizePage" class="text-decoration-none text-light hover_bg">
          <li class="py-2 hover_bg mt-3">
            <i class="bi bi-bookmark-plus me-3"></i>
            size
          </li>
        </a>
        <a href="" class="text-decoration-none text-light hover_bg">
          <li class="py-2 hover_bg mt-3">
            <i class="bi bi-info-circle order-2 order-md-1 me-3"></i>
            Orders
          </li>
        </a>
      </ul>
      <div class="px-2 position-absolute bottom-0 w-100 text-center py-3 border-top border-2 border-white">
        <button class="btn btn-danger w-100 rounded-lg">
          <i class="bi bi-box-arrow-right me-3"></i>
          <span class="position-relative">logout</span>
        </button>
      </div>
    </aside>
    <!-- main content -->
    <div class="col-10 bg-light p-2">
      <!-- header  -->
      <header class="d-flex justify-content-between text-secondary fs-5">
        <p class="m-0 mb-1">Welcome to pizza store</p>
        <p class="m-0 mb-1">Mr Tola</p>
      </header>
      <?php include $views ?>
      </main>
    </div>
    <!-- no responsive on phone screen -->
    <div class="container-fluid d-flex justify-content-center align-items-center d-lg-none" style="height: 100vh">
      <img class="object-fit-cover" src="../assets/images/page_not_found.png" alt="only use for laptop"
        style="width: 400px" />
    </div>
</body>
<script src="app/assets//js/preview.js"></script>

</html>