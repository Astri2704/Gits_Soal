<?php

    if(isset($_POST['save']))
    {
      $huruf = $_POST['huruf'];

      echo "<center>";
      echo strrev($huruf);
      echo "</center>";

    }
?>