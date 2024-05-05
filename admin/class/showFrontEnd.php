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

    public function show_productFlashSale()
    {
        // $query = "SELECT * FROM tbl_product WHERE LOWER(product_name) LIKE '%jeans%' LIMIT 12";
        // $result = $this->db->select($query);
        // return $result;
    }
    public function show_productNew()
    {
        $query = "SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 12";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_productBestSaler()
    {
        $query = "SELECT * FROM tbl_product ORDER BY RAND() LIMIT 12";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_productPolo()
    {
        $query = "SELECT * FROM tbl_product WHERE LOWER(product_name) LIKE '%polo%' ORDER BY product_id DESC LIMIT 12";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_productSport()
    {
        $query = "SELECT * FROM tbl_product WHERE LOWER(product_name) LIKE '%thể thao%' OR LOWER(product_name) LIKE '%sport%' LIMIT 12";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_productTShirt()
    {
        $query = "SELECT * FROM tbl_product WHERE LOWER(product_name) LIKE '%t-shirt%' LIMIT 12";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_productJeans()
    {
        $query = "SELECT * FROM tbl_product WHERE LOWER(product_name) LIKE '%jeans%' LIMIT 12";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_productOffice()
    {
        $query = "SELECT * FROM tbl_product WHERE LOWER(product_name) LIKE '%sơ mi%' OR LOWER(product_name) LIKE '%quần âu%' LIMIT 12";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_productAccessory()
    {
        $query = "SELECT * FROM tbl_product WHERE categorySub_id IN (9, 16, 23) LIMIT 12";
        $result = $this->db->select($query);
        return $result;
    }
    public function search_product($search)
    {
        $query = "SELECT * FROM tbl_product WHERE product_name LIKE '%$search%' OR product_id = '$search'";
        $result = $this->db->select($query);
        return $result;
    }
}
?>