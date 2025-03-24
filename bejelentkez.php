<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KWheels - Login</title>
  <link rel="icon" type="image/x-icon" href="img/autoink/car-check.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="css/bejelentkez.css">

</head>

<body>
  <div class="back">
    <a href="index.php"><i class="fa fa-arrow-left"></i> Back to Homepage</a>

    <h2 id="nologin" <?php if (isset($_GET['login']) && $_GET['login'] == 'failed') echo 'style="display:block;"'; ?>>User not found!</h2>
    <h2 id="nosignup" <?php if (isset($_GET['signup']) && $_GET['signup'] == 'failed') echo 'style="display:block;"'; ?>>This user already exists!</h2>
    <h2 id="yessignup" <?php if (isset($_GET['signup']) && $_GET['signup'] == 'success') echo 'style="display:block;"'; ?>>Account created successfully!</h2>

  </div>


  <div class="container" id="signup" <?php if (isset($_GET['signup']) && $_GET['signup'] == 'failed') echo 'style="display:block;"'; ?>>
    <h1 class="form-title">Sign Up</h1>
    <form method="post" action="register.php">

      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="lName" id="lName" placeholder="First Name" autocomplete="off" required>
        <label for="lName">First Name</label>
      </div>

      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="fName" id="fName" placeholder="Last Name" autocomplete="off" required>
        <label for="fName">Last Name</label>
      </div>



      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" required>
        <label for="email">Email</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>
        <label for="password">Password</label>
      </div>
      <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>

    <div class="links">
      <p>Already have an account?</p>
      <button id="signInButton">Log In</button>
    </div>
  </div>

  <div class="container" id="signIn" <?php if (isset($_GET['signup']) && $_GET['signup'] == 'failed') echo 'style="display:none;"'; ?>>
    <h1 class="form-title">Log In</h1>
    <form method="post" action="register.php">
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" required>
        <label for="email">Email</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>
        <label for="password">Password</label>
      </div>
      <input type="submit" class="btn" value="Log In" name="signIn">
    </form>

    <div class="links">
      <p>Don't have an account yet?</p>
      <button id="signUpButton">Create One</button>
    </div>
  </div>





  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="javascript/bejelentkez.js"></script>
</body>

</html>