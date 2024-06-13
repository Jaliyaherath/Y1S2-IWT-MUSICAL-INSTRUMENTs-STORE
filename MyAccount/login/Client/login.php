<!DOCTYPE html>
<html>
  <head>
    <title>Log In</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="mainCard">
        <div class="left"></div>

        <div class="right">
          <form action="./login-submit.php" method="post">
            <h2 class="title">Login</h2>

            <div class="emailDiv">
              <label for="emailInput" id="email">Email</label>
              <input type="email" name="email" id="emailInput" placeholder="Enter Your Email" required />
            </div>

            <div class="passwordDiv">
              <label for="passwordInput" id="password">Password</label>
              <input type="password" name="pass" id="passwordInput" placeholder="Enter Your Password" required />
            </div>

            <p class="forget-password">Forgot Password</p>

            <div class="submit" style="padding-top:20px" >
              <button>Login</button>
            </div>

            <p class="signUpLink">
              If you haven't account <a href="./signup.php">Sign Up</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
