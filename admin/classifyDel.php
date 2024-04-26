<?php
include ("class/classifyClass.php");

$classify = new classify;
$classify_id = $_GET['classify_id'];
$delete_classify = $classify->delete_classify($classify_id);
?>