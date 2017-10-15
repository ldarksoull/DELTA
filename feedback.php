<?php 
$userName = $_POST[userName];
$userEmail = $_POST[userEmail];
$userTel = $_POST[userTel];
$db = new mysqli("localhost", "root", "", "database");

if (mysqli_connect_errno()) {
    printf(mysqli_connect_error());
    exit();
}

$userName = $db->real_escape_string($userName);
$userEmail = $db->real_escape_string($userEmail);
$userTel = $db->real_escape_string($userTel);

$db->query("INSERT into tbl (id, userName, userEmail, userTel)
  VALUES ('NULL', '$userName', '$userEmail', '$userTel')");

$db->close();
?>