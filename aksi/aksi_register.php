<?php

include "../connection.php";


if ($_POST) {
  // Aksi Tambah User
  if ($_POST['aksi'] == 'tambah') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO user VALUES('','$username','$email','$password')";


    mysqli_query($connection, $query);
    header('location:../login.php');
  }
}
