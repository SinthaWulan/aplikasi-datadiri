<?php
      $mysqli = new mysqli("localhost","root","","kwu_sintha");
      if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL:" .$mysqli -> connect_error;
        exit();

      }
?>    