<?php
include("./class/productClass.php");
$product = new product;
$category_id = $_GET['category_id'];
$categorySub_id = $_GET['categorySub_id'];

?>

<?php
$show_categorySub_ajax = $product->show_categorySub_ajax($category_id);
if ($show_categorySub_ajax) {
    while ($resultSub = $show_categorySub_ajax->fetch_assoc()) {
?>
        <option value="<?php echo $resultSub['categorySub_id'] ?>">
            <?php echo $resultSub['categorySub_name'] ?>
        </option>
<?php
    }
}
?>

<?php
$show_classify_ajax = $product->show_classify_ajax($categorySub_id);
if ($show_classify_ajax) {
    while ($resultClassify = $show_classify_ajax->fetch_assoc()) {
?>
        <option value="<?php echo $resultClassify['classify_id'] ?>">
            <?php echo $resultClassify['classify_name'] ?>
        </option>
<?php
    }
}
?>