<?php

  $conn = mysqli_connect('localhost','root','','mydb');

  if(!$conn)
  {
    die('Unable to Connect to Database!');
  }
  else
  {
    echo 'Connected!';
  }

?>
