<?php
include "content.php";
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/output.css">
  <title>Wellmental</title>
</head>

<body class="bg-wm-bg-light mx-2">
  <div class="navbar flex justify-between m-4">
    <a class="navbar-brand uppercase text-wm-darkblue font-bold text-2xl" href="./index.php">wellmental</a>
    <nav>
      <ul>
        <li><a href="login.php">
            sign up
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <?php include $content ?>
</body>

</html>