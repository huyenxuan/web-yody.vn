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

    // show classify
    public function show_classify($categorySub_id)
    {
        $query = "SELECT * FROM tbl_classify WHERE categorySub_id = '$categorySub_id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function classify($classify_id)
    {
        $query = "SELECT cs.*, csub.* 
                FROM tbl_classify AS cs
                LEFT JOIN tbl_categorysub AS csub ON cs.categorySub_id = csub.categorySub_id
                WHERE classify_id = '$classify_id'";
        $result = $this->db->select($query);
        return $result;
    }

    // show categorySub
    public function categorySub($categorySub_id)
    {
        $query = "SELECT cs.*, csub.* 
        FROM tbl_categorysub AS cs
        LEFT JOIN tbl_category AS csub ON cs.category_id = csub.category_id
        WHERE categorySub_id = '$categorySub_id'";
        $result = $this->db->select($query);
        return $result;
    }

    // show product
    public function show_productFlashSale()
    {
        $query = "SELECT * FROM tbl_product WHERE price_sale <> 0 ORDER BY product_id ASC LIMIT 12";
        $result = $this->db->select($query);
        return $result;
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
        $query = "SELECT * FROM tbl_product WHERE LOWER(product_name) LIKE '%sơ mi%' OR LOWER(product_name) LIKE '%quần âu%' OR LOWER(product_name) LIKE '%quần tây%' LIMIT 12";
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
        $query = "SELECT p.*
        FROM tbl_product p
        LEFT JOIN tbl_classify cs ON p.classify_id = cs.classify_id
        LEFT JOIN tbl_categorysub csub ON cs.categorySub_id = csub.categorySub_id
        LEFT JOIN tbl_category c ON csub.category_id = c.category_id
        WHERE p.product_name LIKE '%$search%'
           OR c.category_name LIKE '%$search%'
           OR csub.categorySub_name LIKE '%$search%'
           OR cs.classify_name LIKE '%$search%'
           OR p.product_id = '$search'
        ";
        $result = $this->db->select($query);
        return $result;
    }

    // show detail
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
    public function show_productCateSub($categorySub_id)
    {
        $query = "SELECT p.*
        FROM tbl_product p
        LEFT JOIN tbl_classify cs ON p.classify_id = cs.classify_id
        LEFT JOIN tbl_categorysub csub ON cs.categorySub_id = csub.categorySub_id
        WHERE csub.categorySub_id = '$categorySub_id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_productClassify($classify_id)
    {
        $query = "SELECT * FROM tbl_product WHERE classify_id = '$classify_id' LIMIT 20";
        $result = $this->db->select($query);
        return $result;
    }
}
?>