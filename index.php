<?php
include "content.php";
include "connection.php";
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/output.css" />
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kaisei+HarunoUmi&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
  <!-- <script src="./assets/js/theme-switcher.js"></script> -->
  <title>Wellmental</title>
</head>

<body class="bg-background text-text dark:darkt font-body">
  <div class="sticky top-0 bg-background">

    <div class="container sticky top-0 p-4 max-w-7xl">

      <div class="navbar flex justify-between">
        <a class="navbar-brand uppercase text-primary font-bold text-2xl font-fredoka" href="./index.php">wellmental</a>
        <nav class="flex my-auto">
          <ul class="flex">
            <li><a class="p-2 mx-2" href="">Beranda</a></li>
            <li><a class="p-2 mx-2" href="">Test</a></li>
            <li><a class="p-2 mx-2" href="">Riwayat</a></li>
            <li><a class="bg-secondary dark:darkt bg-opacity-30 rounded-md p-2 mx-2" href="login.php"> sign up </a></li>

            <!-- theme switcher -->

          </ul>
        </nav>
      </div>
    </div>
    <div class="border-b-2 border-accent/30"></div>
  </div>
  <main class="mt-4"><?php include $content ?></main>
  <footer>
    <div class="container my-8 max-w-7xl">
      <div class="grid grid-cols-3">

        <a class="brand uppercase text-primary font-bold text-2xl font-fredoka" href="./index.php">wellmental</a>
        <div class="footer-nav">
          <ul>
            <li><a class="p-2 mx-2" href="">Beranda</a></li>
            <li><a class="p-2 mx-2" href="">Test</a></li>
            <li><a class="p-2 mx-2" href="">Riwayat</a></li>
          </ul>
        </div>
        <div class="footer-social">
          <ul>
            <li><a class="p-2 mx-2" href="">Instagram</a></li>
            <li><a class="p-2 mx-2" href="">Facebook</a></li>
            <li><a class="p-2 mx-2" href="">Gmail</a></li>
          </ul>
        </div>
      </div>
      <div class="credit flex justify-between">
        <p>Wellmental by Terra Team</p>
        <span class="flex gap-8">
          <a href="">Terms of service</a>
          <a href="">Privacy policy</a>
        </span>
      </div>
    </div>
  </footer>
</body>

</html>