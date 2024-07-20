<?php
if (empty($_GET['p'])) {
    $content = "content/home.php";
} elseif ($_GET['p'] == 'quiz') {
    $content = "content/quiz.php";
}
