<?php
//======================================================================
// HOME PAGE
//======================================================================
include_once __DIR__ . '/php/path.php';
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <?php include_once ROOT_PATH . '/include/head.php'; ?>
    <title>Home - Basic Login</title>


  </head>

  <body>
    <?php include_once ROOT_PATH . '/include/header.php'; ?>
    

    <main role="main" class="container my-5">

      <!-- Hero / Welcome Section -->
      <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">Welcome to the Basic Login System</h1>
        <p class="lead text-muted">
          This is your homepage — a central place to navigate to your dashboard, log in, or create an account.
        </p>

        <?php if (!isset($_SESSION['user_name'])): ?>
          <a href="./index.php" class="btn btn-primary btn-lg m-2">Login</a>
          <a href="./signup.php" class="btn btn-outline-secondary btn-lg m-2">Sign Up</a>
        <?php else: ?>
          <a href="./php/logout.php" class="btn btn-danger btn-lg m-2">Logout</a>
        <?php endif; ?>
      </div>

      <!-- Info / Features Section -->
      <div class="row text-center">
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Secure Login</h5>
              <p class="card-text">
                Our system uses secure hashing and session handling to protect your credentials.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">User Roles</h5>
              <p class="card-text">
                Access the appropriate dashboard based on your role — Admin, User, or Guest.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Simple Navigation</h5>
              <p class="card-text">
                Use the navbar to easily reach your login, signup, or account pages anytime.
              </p>
            </div>
          </div>
        </div>
      </div>

    </main>

    <?php include_once ROOT_PATH . '/include/footer.php'; ?>
  </body>
</html>
