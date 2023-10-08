<?php

  $conn = mysqli_connect('localhost','root','','dbname');

  if(!$conn)
  {
    die('Unable to Connect to Database!');
  }
  else
  {
    echo 'Connected!';
  }

?>
