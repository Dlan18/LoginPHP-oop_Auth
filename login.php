<?php

include_once('models/Auth.php');

if(isset($_POST['login'])) {
  $data = [
    "username" => $_POST['username'],
    "password" => $_POST['password']
  ];
  $result = Auth::login($data);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <style>
      * {
        margin: 0;
      }
      label {
        margin-bottom: 5px;
      }
    </style>
  </head>
  <body>
    <div class="mt-5 m-4">
      <?php if(isset($result)) : ?>
        <div  id="error-message" class="position-absolute top-1 start-50 translate-middle alert alert-<?php $result["status"] === 'error' ? print("danger") : print("success") ?>">
          <?= $result["message"] ?>
        </div>
      <?php endif ?>
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="img/login.jpg" class="img-fluid" />
        </div>
        <div class="col-md-8 col-lg-6 col-xl-5 offset-xl-1">
          <form action="" method="POST">
            <div class="text-center">
              <h1 style="letter-spacing: 1px">LOGIN</h1>
            </div>

            <hr />

            <div class="mt-4 mb-3">
              <label for="username"><span class="text-primary fw-bold"> - </span>Username</label>
              <input class="form-control" type="text" name="username" id="username" placeholder="Masukkan username anda" required />
            </div>
            <div class="mb-3">
              <label for="password"
                ><span class="text-primary fw-bold"> - </span>Password &nbsp;<span id="showPassword"><i class="bi bi-eye h1 btn px-1 py-0 mt-1 border-0 bg-white shadow text-primary cursor-pointer"></i></span
              ></label>
              <input class="form-control" type="password" name="password" id="password" placeholder="Masukkan password anda" required />
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button name="login" type="submit" class="btn btn-primary btn-lg shadow" style="padding-left: 2.5rem; padding-right: 2.5rem">Login</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Belum punya akun? <a href="register.php" class="link-danger">Register</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="JS.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
