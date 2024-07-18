<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/output.css">
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
            <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
          </div>
          <div class="forgotpass">
            <a href="">Forgot Password</a>
          </div>
        </div>
        <button class="bg-wm-blue-primary">Log in</button>
        <div class="signup">
          Didnt have an account yet? <a href="">sign up</a>
        </div>
      </form>
    </div>

  </div>
</body>

</html>