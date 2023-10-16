<?php

include "conn.php";
  $id = $_REQUEST['id'];
  $log_submit = $_REQUEST['log_submit'];

  $mysqli = "INSERT INTO respondent_submit (log_submit) VALUES (1)";

  $result = mysqli_query($conn, $mysqli);

  mysqli_close($conn);

  header("location:/form-kuesioner/index-end.php");
?>