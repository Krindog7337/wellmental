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
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Wellmental</title>
</head>

<body class="bg-wm-bg-light mx-2">
  <div class="navbar flex justify-between m-4">
    <a class="navbar-brand uppercase text-wm-darkblue font-bold text-2xl font-poppins" href="./index.php">wellmental</a>
    <nav>
      <ul>
        <li><a href="login.php">
            sign up
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <main>
    <?php include $content ?>
  </main>
  <footer>

  </footer>
</body>

</html>