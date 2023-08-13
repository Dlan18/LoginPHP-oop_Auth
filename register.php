<?php

include_once('models/Auth.php');

if(isset($_POST['register'])) {
    $data = [
        "name" => $_POST["name"],
        "username" => $_POST["username"],
        "password" => $_POST["password"],
        "confirm_password" => $_POST["confirm_password"]
    ];

    $register = Auth::register($data);

    if($register["status"] === "success") {
        header("Location: login.php");
    } 
    else {
      $_SESSION['error_message'] = $register["message"];
      header("Location: register.php");
      exit();
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

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
      <?php if(isset($_SESSION["error_message"])): ?>
        <div class="position-absolute top-1 start-50 translate-middle alert alert-danger" role="alert" id="error-message">
            <?php echo $_SESSION["error_message"]; ?>
        </div>
      <?php unset($_SESSION["error_message"]); ?>
      <?php endif; ?>

      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="img/regis.jpg" class="img-fluid" />
        </div>
        <div class="col-md-8 col-lg-6 col-xl-5 offset-xl-1">
          <form action="" method="POST">
            <div class="text-center">
              <h1 style="letter-spacing: 1px;" class="mt-3 mb-4">REGISTER</h1>
            </div>

            <hr />

            <div class="mt-4 mb-3">
              <label for="name"><span class="text-primary fw-bold"> - </span>Nama</label>
              <input class="form-control" type="text" name="name" id="name" placeholder="Masukkan nama anda" required />
            </div>
            <div class="mb-3">
              <label for="username"><span class="text-primary fw-bold"> - </span>Username</label>
              <input class="form-control" type="text" name="username" id="username" placeholder="Masukkan username anda" required />
            </div>
            <div class="mb-3">
              <label for="password"><span class="text-primary fw-bold"> - </span>Password</label>
              <input class="form-control" type="password" name="password" id="password" placeholder="Masukkan password anda" required />
            </div>
            <div class="mb-3">
              <label for="confirm_password"><span class="text-primary fw-bold"> - </span>Confirmasi Password</label>
              <input class="form-control" type="password" name="confirm_password" id="confirm_password" placeholder="Confirmasi password anda" required />
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button name="register" type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem">Register</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Sudah punya akun? <a href="login.php" class="link-danger">Login</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="JS.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>