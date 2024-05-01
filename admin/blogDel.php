<?php
include("class/blogClass.php");

$blog = new blog;

if(!isset($_GET['blog_id']) || $_GET['blog_id'] == null) {
    return;
}
else {
    $blog_id = $_GET['blog_id'];
}
$delete_blog = $blog->delete_blog($blog_id);
?>
