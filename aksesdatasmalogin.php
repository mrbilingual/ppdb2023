<?php


include "koneksi.php";

// Check if the user is already logged in
// if (isset($_SESSION['username'])) {
//     echo "You are already logged in as " . $_SESSION['username'];
//     echo "<br><br>";
//     echo "<form method='POST' action='aksesdatasmalogout.php'>
//             <input type='submit' name='logout' value='Logout'>
//           </form>";
          
//     exit();
// }

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform a database query to check the username and password
    $query = "SELECT * FROM adminsma WHERE username='$username' LIMIT 1";
    $result = mysqli_query($koneksi, $query);

    // Check if the query was successful and a matching user was found
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row['password'];

        // Verify the entered password against the stored password
        if ($password === $storedPassword) {
            $_SESSION['username'] = $username;
            echo "<script>Login berhasil</script>";
            header ("location:aksesdatasma.php");
            
            exit();
        }
    }

    echo "<script>alert('Invalid username or password. Please try again.')</script>";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akses Data Login SMA</title>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script language="javascript" type="text/javascript">window.history.forward();</script>
    <style>
       body {
            background: #517a6a;
            background: linear-gradient(to right, #78c478, #0b7dc9);
        }


    </style>
    
</head>
<body>
<script src="bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="home.php">Home</a>
    </li>
  </ul>
</nav>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="picture/perpustakaan.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height:100%"/>
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="" method="POST">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">
                        <img src="picture/logo-1.png" alt="logo" width="100%">
                    </span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login Akses Data SMA</h5>

                  <div class="form-outline mb-3">
                    <input type="text" id="username" class="form-control form-control-lg" name="username" />
                    <label class="form-label" for="username">Username</label>
                  </div>

                  <div class="form-outline mb-3">
                    <input type="password" id="password" class="form-control form-control-lg" name="password" />
                    <label class="form-label" for="password">Password</label>
                  </div>

                  <div class="pt-1 mb-3">
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
