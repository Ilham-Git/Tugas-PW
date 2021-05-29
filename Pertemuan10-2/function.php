<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'PW_D121191084');
}
function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  //jika datanya hanya 1
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) { //array asosiatif
    $rows[] = $row;
  }
  return $rows;
}
