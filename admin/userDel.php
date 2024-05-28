<?php
include('class/userClass.php');

$user = new user();
$user_id = $_GET['user_id'];
$delete_user = $user->delete_user($user_id);
?>