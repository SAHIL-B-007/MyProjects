<?php

  $conn = mysqli_connect('localhost');

  if(!$conn)
  {
    die('Unable to Connect to Database!');
  }
  else
  {
    echo 'Connected!';
  }

?>
