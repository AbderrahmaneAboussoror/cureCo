<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="./public/css/style.css" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Sofia+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />

    <!-- bootstrap cdn -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    />
  </head>
  <body>
    
  

    <nav class="p-4">
      <div
        class="container-fluid d-flex align-items-center justify-content-between"
      >
        <div class="">cureCo</div>

        <div class="d-none d-md-flex gap-3">
          <a href="#" class="text-decoration-none text-dark">Home</a>
          <a href="#" class="text-decoration-none text-dark">Products</a>
          <a href="#" class="text-decoration-none text-dark">About Us</a>
        </div>

        <div class="d-none d-md-flex gap-3">
          <a
            href="#"
            class="text-decoration-none text-dark"
            data-bs-toggle="modal"
            data-bs-target="#exampleModal"
            >Sign In</a
          >
          <a href="#" class="text-decoration-none text-dark">Sign Up</a>
        </div>
        <!-- hamburger icon -->
        <button id="menu-btn" class="d-block hamburger d-md-none text-decoration-none border-0 bg-transparent">
          <i class="fa fa-bars fs-5"></i>
        </button>
      </div>

      <!-- mobile menu -->
      <div id="menu" class="d-none d-flex flex-column align-items-center align-self-end gap-2 pt-4 shadow-sm pb-3 bg-body fw-bold" style="transition: 1s">
          <a href="#" class="text-decoration-none text-dark">Home</a>
          <a href="#" class="text-decoration-none text-dark">Products</a>
          <a href="#" class="text-decoration-none text-dark">About Us</a>
          <a
            href="#"
            class="text-decoration-none text-dark"
            data-bs-toggle="modal"
            data-bs-target="#exampleModal"
            >Sign In</a
          >
          <a href="#" class="text-decoration-none text-dark">Sign Up</a>
      </div>
    </nav>