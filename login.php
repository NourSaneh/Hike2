<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="login.css">
    <script src="login.js" defer></script>
</head>
<body>
<div class="cont">
  <div class="form sign-in">
    <h2>Welcome back,</h2>
    <form method="post" action="LoginAction.php">
      <?php
      session_start();
      if (isset($_SESSION["ERROR"])) {
        echo "<span class='error'>" . $_SESSION["ERROR"] . "</span><br/>";
        unset($_SESSION["ERROR"]); // Clear the error after displaying it
      }
      ?>
      <label>
        <span>Username</span>
        <input type="text" name="Username" id="username" required />
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="Pass" id="password" required />
      </label>
      <p class="forgot-pass">Forgot password?</p>
      <button type="submit" class="submit">Sign In</button>
    </form>
  </div>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p>Sign up and discover a great amount of new opportunities!</p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already have an account, just sign in. We've missed you!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up">
      <h2>Time to feel like home,</h2>
      <form method="post" action="RegisterAction.php">
        <label>
          <span>Username</span>
          <input type="text" name="Username" id="Username" required />
        </label>
        <label>
          <span>Email</span>
          <input type="email" name="Email" required />
        </label>
        <label id="lblError"></label>
        <label>
          <span>Password</span>
          <input type="password" name="Pass" required />
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password" name="Confirm" required />
        </label>
        <?php
        if (isset($_SESSION["ERROR_Reg"])) {
          echo "<span class='error'>" . $_SESSION["ERROR_Reg"] . "</span><br/>";
          unset($_SESSION["ERROR_Reg"]); // Clear the error after displaying it
        }
        ?>
        <button type="submit" class="submit">Sign Up</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
