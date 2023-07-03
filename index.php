<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Login Form Demo</title>
</head>

<body>
  <div class="nav" style="display: flex; justify-content: space-between;">
    <div>
      <img src="cu.png" alt="" height="100" width="230">
    </div>
    <div>
      <img src="logo.png" alt="" height="100" width="230">
    </div>
  </div>
  <div class="login-wrapper">
    <form action="login.php" method="post" class="form">
      <img src="avatar.png" alt="">
      <h2>Login</h2>
      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
      <div class="input-group">
        <input type="text" name="uname" id="loginUser" required>
        <label for="loginUser">University_ID</label>
      </div>
      <div class="input-group">
        <input type="password" name="password" id="loginPassword" required>
        <label for="loginPassword">Password</label>
      </div>
      <input type="submit" value="Login" class="submit-btn">
      <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
    </form>
    <div id="forgot-pw">
      <form action="" class="form">
        <a href="#" class="close">&times;</a>
        <h2>Reset Password</h2>
        <div class="input-group">
          <input type="email" name="email" id="email" required>
          <label for="email">Email</label>
        </div>
        <input type="submit" value="Submit" class="submit-btn">
      </form>
    </div>
  </div>
</body>

</html>