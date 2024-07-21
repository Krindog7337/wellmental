<?php

session_start();
if ($_SESSION['username'] != true) {
  header("location:login.php");
}

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
      <div class="navbar grid grid-cols-2 md:flex justify-between">
        <a class="navbar-brand w-10 h-10" href="./index.php">
          <svg class="fill-primary w-10 h-10" viewBox="0 0 119.25868 112.2988" version="1.1" id="svg1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
            <defs id="defs1" />
            <g id="layer2" transform="translate(-51.220079,-55.369151)">
              <g id="g4">
                <path style="fill-opacity:1;stroke-width:0.264583" d="m 99.573359,115.62741 c 3.765951,10.63584 12.422351,19.43329 26.852321,23.22105 -4.45946,1.49811 -8.91892,0.35181 -13.37838,-1.4334 0.41326,3.8861 0.72005,7.94024 2.10231,11.6583 1.32824,3.57273 3.02344,6.8688 2.58012,10.41602 -0.1016,0.81292 -6.66791,-10.3232 -8.60039,-11.08494 -2.24285,-0.88408 -5.09276,12.57618 -5.35135,11.84942 -3.62585,-10.19033 2.29929,-18.86306 0.2389,-26.32674 -1.95591,-7.0852 -4.657428,-11.37105 -4.443531,-18.29971 z" id="path1" />
                <path style="fill-opacity:1;stroke-width:0.264583" d="m 109.05767,121.48045 c -2.1123,3.70609 -1.52052,5.99365 0.2389,7.66868 3.85939,1.57291 6.51651,-0.32358 8.14648,-5.18412 2.3804,-1.47651 2.77141,-3.17036 2.62789,-5.08856 -0.67992,0.55828 -1.03826,1.19344 -3.22514,0.90782 -2.15806,-0.41032 -4.31612,-0.65512 -6.47418,-0.11946 -0.7494,0.40704 -1.26357,0.96377 -1.31395,1.81564 z" id="path2" />
                <path style="fill-opacity:1;stroke-width:0.264583" d="M 54.328343,167.66795 51.220076,154.73752 V 61.731659 C 112.17779,30.916777 144.52595,120.56134 138.75289,148.5 c -0.49085,6.24086 -4.05075,11.34467 -8.02702,16.34073 0.72224,-31.85522 -10.62359,-104.462163 -55.697052,-96.531072 -12.447688,2.190285 -14.23588,9.90207 -14.23588,24.634468 0,15.171624 -0.891554,60.312194 -1.46434,61.793394 z" id="path3" />
                <path style="fill-opacity:1;stroke-width:0.264583" d="m 167.37049,167.66795 3.10827,-12.93043 V 61.731659 C 109.52105,30.916777 77.172887,120.56134 82.945947,148.5 c 0.49085,6.24086 4.05075,11.34467 8.02702,16.34073 -0.72224,-31.85522 10.623593,-104.462163 55.697053,-96.531072 12.44769,2.190285 14.23588,9.90207 14.23588,24.634468 0,15.171624 0.89155,60.312194 1.46434,61.793394 z" id="path4" />
              </g>
            </g>
          </svg>
        </a>
        <span class="hamburger cursor-pointer flex md:hidden ml-auto my-auto">
          <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#5f6368">
            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
          </svg>
        </span>
        <nav id="navigation" class="hidden mt-4 md:flex md:my-auto">
          <ul class="flex-col flex md:flex-row gap-4 ml-auto">
            <li><a class="p-2 hover:text-primary transition-colors" href="index.php?p=">Beranda</a></li>
            <li><a class="p-2 hover:text-primary transition-colors" href="index.php?p=quiz">Test</a></li>
            <li><a class="p-2 hover:text-primary transition-colors" href="index.php?p=article">Artikel</a></li>
            <li><a class="p-2 hover:text-primary transition-colors" href="index.php?p=kegiatan">Riwayat</a></li>
            <li>
              <a class="bg-secondary/30 dark:darkt hover:bg-secondary transition-colors rounded-md p-2" href="login.php">
                <?= $_SESSION['username'] ?>
              </a>
            </li>

            <!-- theme switcher -->
            <div class="flex md:border-l-2 border-accent/30 pl-2">
              <svg class="moon cursor-pointer fill-primary -rotate-12 hover:rotate-12 hover:fill-secondary selection:fill-secondary transition-all" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                <path d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Zm0-80q88 0 158-48.5T740-375q-20 5-40 8t-40 3q-123 0-209.5-86.5T364-660q0-20 3-40t8-40q-78 32-126.5 102T200-480q0 116 82 198t198 82Zm-10-270Z" />
              </svg>
              <svg class="sun cursor-pointer fill-primary hover:fill-secondary hover:-rotate-45 transition-all" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                <path d="M480-360q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Zm0 80q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Zm326-268Z" />
              </svg>
              <span class="select-none cursor-pointer sun moon theme-switcher-label ml-2 md:hidden">Switch theme</span>
            </div>
          </ul>
        </nav>
      </div>
    </div>
    <div class="border-b-2 border-accent/30"></div>
  </div>
  <main class="mt-4"><?php include $content ?></main>
  <footer class="bg-primary/10">
    <div class="container py-8 max-w-7xl">
      <div class="grid md:grid-cols-3 mb-12">
        <a class="brand uppercase text-primary font-bold text-2xl font-fredoka" href="./index.php">wellmental</a>
        <div class="footer-nav">
          <ul class="mt-2 flex flex-col gap-2">
            <li class="font-bold">Menu</li>
            <li><a class="" href="index.php?p=">Beranda</a></li>
            <li><a class="" href="index.php?p=quiz">Test</a></li>
            <li><a class="" href="index.php?p=article">Artikel</a></li>
            <li><a class="" href="index.php?p=kegiatan">Kegiatan</a></li>
          </ul>
        </div>
        <div class="footer-social">
          <ul class=" mt-8 md:mt-2 flex flex-col gap-2">
            <li class="font-bold">Social</li>
            <li><a class="" href="">Instagram</a></li>
            <li><a class="" href="">Facebook</a></li>
            <li><a class="" href="">Gmail</a></li>
          </ul>
        </div>
      </div>
      <div class="credit flex justify-between border-t-2 border-primary/30 pt-10">
        <p>Wellmental by Terra Team</p>
        <span class="flex gap-8">
          <a href="">Terms of service</a>
          <a href="">Privacy policy</a>
        </span>
      </div>
    </div>
  </footer>
  <script src="./assets/js/theme-switcher.js"></script>
  <script src="./assets/js/hamburger.js"></script>
</body>

</html>