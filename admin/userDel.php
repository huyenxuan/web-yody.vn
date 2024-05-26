<?php
include('class/showFrontEnd.php');

$account = new account();
$user_id = $_GET['user_id'];
$delete_user = $account->delete_user($user_id);
?>