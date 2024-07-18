<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/output.css">
  <title>Login</title>
</head>

<body class="bg-wm-bg-light">
  <div class="container flex justify-center">
    <div class="login-card shadow">
      <h1>Masuk ke Wellmental</h1>
      <form action="">
        <div class="email">
          <label for="email" class="">Your Email</label>
          <input type="email" name="email" id="email" class="" placeholder="johndoe@gmail.com">
        </div>
        <div class="password">
          <label for="password" class="">Your Password</label>
          <input type="password" name="password" id="password" class="" placeholder="••••••••">
        </div>
        <div class="rememberforgot flex justify-between">
          <div class="rememberme">
            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
            <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
          </div>
          <div class="forgotpass">
            <a href="">Forgot Password</a>
          </div>
        </div>
        <div class="signup">
          Didnt have an account yet? <a href="">sign up</a>
        </div>
      </form>
    </div>

  </div>
</body>

</html>