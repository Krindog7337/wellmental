<?php
if (empty($_GET['p'])) {
    $content = "content/home.php";
} elseif ($_GET['p'] == 'quiz') {
    $content = "content/quiz.php";
} elseif ($_GET['p'] == 'register') {
    $content = "content/register.php";
} elseif ($_GET['p'] == 'article') {
    $content = "content/article.php";
} elseif ($_GET['p'] == 'kegiatan') {
    $content = "content/kegiatan.php";
}
