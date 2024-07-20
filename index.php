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
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Kaisei+HarunoUmi&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet" />

  <title>Wellmental</title>
</head>

<body class="bg-background text-text dark:darkt font-body">
  <div class="sticky top-0 bg-background z-max">
    <div class="container top-0 p-4 max-w-7xl">
      <div class="navbar flex justify-between">
        <a class="navbar-brand uppercase text-primary font-bold text-2xl font-fredoka" href="./index.php">wellmental</a>
        <nav class="flex my-auto">
          <ul class="flex gap-4">
            <li><a class="p-2" href="">Beranda</a></li>
            <li><a class="p-2" href="">Test</a></li>
            <li><a class="p-2" href="">Riwayat</a></li>
            <li>
              <a class="bg-secondary dark:darkt bg-opacity-30 rounded-md p-2" href="login.php">
                Sign up
              </a>
            </li>

            <!-- theme switcher -->
            <div class="border-l-2 border-accent/30 pl-2">
              <svg class="moon cursor-pointer fill-primary hover:fill-secondary selection:fill-secondary transition-colors" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                <path d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Zm0-80q88 0 158-48.5T740-375q-20 5-40 8t-40 3q-123 0-209.5-86.5T364-660q0-20 3-40t8-40q-78 32-126.5 102T200-480q0 116 82 198t198 82Zm-10-270Z" />
              </svg>
              <svg class="sun cursor-pointer fill-primary hover:fill-secondary transition-colors" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                <path d="M480-360q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Zm0 80q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Zm326-268Z" />
              </svg>
            </div>
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
  <script src="./assets/js/theme-switcher.js"></script>
</body>

</html>