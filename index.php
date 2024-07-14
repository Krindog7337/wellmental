<?php 
  include "content.php";
  include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="src/css/output.css">

    <title>Wellmental</title>
  </head>
  <body>
    <nav class="navbar">
      <a class="navbar-brand" href="#">WellMental</a>
    </nav>
    <div class="container-fluid">
      <?php include $content ?>
    </div>
    <div class="bg-slate-400">terra</div>

    <script src=""></script>
  </body>
</html>
