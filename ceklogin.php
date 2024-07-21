<?php
// mengaktifkan session
session_start();

//coneksi kedatabase
include "connection.php";

// menampilkan data 
$username = $_POST['username'];
$password = $_POST['password'];

// menampilkan data dari database
$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$sql = mysqli_query($connection, $query);

// cek Data
$cek = mysqli_num_rows($sql);

if ($cek > 0) {
  $row = mysqli_fetch_array($sql);
  $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['password'];
  header('location:index.php');
} else {
  header('location:login_error.php');
}
