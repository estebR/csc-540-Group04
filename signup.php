<?php
include_once __DIR__ . '/php/path.php';
session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <?php include_once ROOT_PATH . '/include/head.php'; ?>
  <title>Create Account</title>
</head>
<body>
  <?php include_once ROOT_PATH . '/include/header.php'; ?>
  <main role="main" class="container">
    <div class="row justify-content-sm-center">
      <div class="col-sm-6">
        <h1>Create Account</h1>

        <form action="./php/create_account.php" method="post">
          <div class="mb-3">
            <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
          </div>
          <div class="mb-3">
            <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
          </div>
          <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="mb-3">
            <input type="text" name="phone" class="form-control" placeholder="Phone" required>
          </div>
          <div class="mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
          </div>
          <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="mb-3">
            <input type="text" name="street" class="form-control" placeholder="Street">
          </div>
          <div class="mb-3">
            <input type="text" name="street_additional" class="form-control" placeholder="Street 2 (Optional)">
          </div>
          <div class="mb-3">
            <input type="text" name="city" class="form-control" placeholder="City">
          </div>
          <div class="mb-3">
            <input type="text" name="state" class="form-control" placeholder="State">
          </div>
          <div class="mb-3">
            <input type="text" name="zip" class="form-control" placeholder="ZIP Code">
          </div>

          <?php include_once ROOT_PATH . '/php/error_rprt.php'; ?>

          <button class="btn btn-primary" type="submit">Create Account</button>
        </form>
        <p class="mt-3"><a href="./index.php">Back to Login</a></p>
      </div>
    </div>
  </main>
  <?php include_once ROOT_PATH . '/include/footer.php'; ?>
</body>
</html>
