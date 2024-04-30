<?php
include("database.php");
?>
<?php
class product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function insert_product()
    {
        $product_name = $_POST['product_name'];
        $category_id = $_POST['category_id'];
        $categorySub_id = $_POST['categorySub_id'];
        $classify_id = $_POST['classify_id'];
        $price_old = $_POST['price_old'];
        $price_sale = $_POST['price_sale'];
        $product_desc = $_POST['product_desc'];
        $product_img = $_FILES['product_img']['name'];

        $query = "INSERT INTO tbl_product (
            product_name, 
            category_id, 
            categorySub_id, 
            classify_id, 
            price_old, 
            price_sale, 
            product_desc, 
            product_img) 
            VALUES (
                '$product_name', 
                '$category_id', 
                '$categorySub_id', 
                '$classify_id', 
                '$price_old', 
                '$price_sale', 
                '$product_desc', 
                '$product_img')";
        $result = $this->db->insert($query);
        if ($result) {
            $query = "SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 1";
            $result = $this->db->select($query)->fetch_assoc();
            $product_id = $result["product_id"];
            $filename = $_FILES['product_imgList']['name'];

            foreach ($filename as $key => $value) {
                $query = "INSERT INTO tbl_product_imgList (product_id, product_imgList) VALUES ('$product_id', '$value')";
                $result = $this->db->select($query);
            }
        }
        header('Location: productAdd.php?productName=' . urldecode($product_name));
        return $result;
    }
    public function show_category()
    {
        $query = "SELECT * FROM tbl_category";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_categorySub()
    {
        $query = "SELECT * FROM tbl_categorysub";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_classify()
    {
        $query = "SELECT * FROM tbl_classify";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_categorySub_ajax($category_id)
    {
        $query = "SELECT * FROM tbl_categorysub WHERE category_id = '$category_id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_classify_ajax($categorySub_id)
    {
        $query = "SELECT * FROM tbl_classify WHERE categorySub_id = '$categorySub_id'";
        $result = $this->db->select($query);
        return $result;
    }

    
    

    public function update_classify($category_id, $categorySub_id, $classify_name, $classify_id)
    {
        $query = "UPDATE tbl_classify SET classify_name = '$classify_name', category_id = '$category_id', categorySub_id = '$categorySub_id' WHERE classify_id = '$classify_id'";
        $result = $this->db->update($query);
        header("Location:classifyShow.php");
        return $result;
    }
    public function delete_classify($classify_id)
    {
        $query = "DELETE FROM tbl_classify WHERE classify_id = '$classify_id'";
        $result = $this->db->delete($query);
        header("Location:classifyShow.php");
        return $result;
    }
}
?>