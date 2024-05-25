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
        $query = "SELECT cls.*, csub.* 
                FROM tbl_classify AS cls
                LEFT JOIN tbl_categorysub AS csub ON cls.categorySub_id = csub.categorySub_id
                WHERE classify_id = '$classify_id'";
        $result = $this->db->select($query);
        return $result;
    }

    // show category
    public function category($category_id)
    {
        $query = "SELECT *
                FROM tbl_category
                WHERE category_id = '$category_id'";
        $result = $this->db->select($query);
        return $result;
    }

    // show categorySub
    public function categorySub($categorySub_id)
    {
        $query = "SELECT csub.*, cs.* 
                FROM tbl_categorysub AS csub
                LEFT JOIN tbl_category AS cs ON csub.category_id = cs.category_id
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
        $query = "SELECT * FROM tbl_product 
                WHERE LOWER(product_name) 
                LIKE '%polo%' 
                ORDER BY product_id DESC 
                LIMIT 12";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_productSport()
    {
        $query = "SELECT * FROM tbl_product 
                WHERE LOWER(product_name) 
                LIKE '%thể thao%' 
                OR LOWER(product_name) 
                LIKE '%sport%' LIMIT 12";
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
        $query = "SELECT * FROM tbl_product 
                WHERE LOWER(product_name) 
                LIKE '%sơ mi%' OR LOWER(product_name) 
                LIKE '%quần âu%' OR LOWER(product_name) 
                LIKE '%quần tây%' LIMIT 12";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_productAccessory()
    {
        $query = "SELECT * FROM tbl_product prod
                LEFT JOIN tbl_classify cls ON prod.classify_id = cls.classify_id
                LEFT JOIN tbl_categorysub sub ON cls.categorySub_id = sub.categorySub_id
                WHERE sub.categorySub_id IN (9, 16, 23) LIMIT 12";
        $result = $this->db->select($query);
        return $result;
    }
    public function search_product($search)
    {
        $query = "SELECT prod.*
                FROM tbl_product prod
                LEFT JOIN tbl_classify cls ON prod.classify_id = cls.classify_id
                LEFT JOIN tbl_categorysub sub ON cls.categorySub_id = sub.categorySub_id
                LEFT JOIN tbl_category cat ON sub.category_id = cat.category_id
                WHERE prod.product_name LIKE '%$search%'
                   OR cat.category_name LIKE '%$search%'
                   OR sub.categorySub_name LIKE '%$search%'
                   OR cls.classify_name LIKE '%$search%'
                   OR prod.product_id = '$search'";
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
        $query = "SELECT * FROM tbl_product_imglist WHERE product_id = '$product_id'";
        $result = $this->db->select($query);
        return $result;
    }

    // show product category
    public function show_productCate($category_id)
    {
        $query = "SELECT prod.* FROM tbl_product prod
                LEFT JOIN tbl_classify cls ON prod.classify_id = cls.classify_id
                LEFT JOIN tbl_categorysub sub ON cls.categorySub_id = sub.categorySub_id
                LEFT JOIN tbl_category cat ON sub.category_id = cat.category_id
                WHERE cat.category_id = '$category_id'";
        $result = $this->db->select($query);
        return $result;
    }


    // show product categorysub
    public function show_productCateSub($categorySub_id)
    {
        $query = "SELECT prod.* FROM tbl_product prod
                LEFT JOIN tbl_classify cls ON prod.classify_id = cls.classify_id
                LEFT JOIN tbl_categorysub sub ON cls.categorySub_id = sub.categorySub_id
                WHERE sub.categorySub_id = '$categorySub_id'";
        $result = $this->db->select($query);
        return $result;
    }

    // show product classify
    public function show_productClassify($classify_id)
    {
        $query = "SELECT * FROM tbl_product WHERE classify_id = '$classify_id' LIMIT 20";
        $result = $this->db->select($query);
        return $result;
    }
}

// blog
class blog
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function show_blog()
    {
        $query = "SELECT blog.*, sub.categorySub_name
            FROM tbl_blog AS blog
            LEFT JOIN tbl_categorysub AS sub ON blog.categoryBlog_id = sub.categorySub_id
            ORDER BY blog.blog_id ASC";
        $result = $this->db->select($query);
        return $result;
    }
    public function get_blog($blog_id)
    {
        $query = "SELECT *
            FROM tbl_blog 
            WHERE blog_id = '$blog_id'";
        $result = $this->db->select($query);
        return $result;
    }
}

// account
class account
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    // login
    public function loginUser()
    {
        $query = "SELECT * FROM tbl_user";
        $result = $this->db->select($query);
        return $result;
    }
    // register
    public function registerUser($fullName, $phoneNumber, $email, $password)
    {
        $query = "INSERT INTO tbl_user (
                    fullName,
                    phoneNumber,
                    email,
                    password) 
                VALUES (
                    '$fullName',
                    '$phoneNumber',
                    '$email',
                    '$password')";
        $result = $this->db->select($query);
        return $result;
    }
}
?>