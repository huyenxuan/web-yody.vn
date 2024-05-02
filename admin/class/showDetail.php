<?php
include("./admin/database.php");
?>
<?php
class product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function show_product($product_id)
    {
        $query = "SELECT * FROM tbl_product WHERE product_id = '$product_id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_imgList($product_id)
    {
        $query = "SELECT * FROM tbl_product_imgList WHERE product_id = '$product_id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_productCate($category_id)
    {
        $query = "SELECT * FROM tbl_product WHERE category_id = '$category_id' LIMIT 20";
        $result = $this->db->select($query);
        return $result;
    }
}
?>