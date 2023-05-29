<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $firstname = htmlspecialchars($_POST['firstname']);
  $lastname  = htmlspecialchars($_POST['lastname']);
  $email  = htmlspecialchars($_POST['email']);

  echo  $firstname, ' ', $lastname, ' ', $email;
?>
