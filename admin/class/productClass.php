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
        move_uploaded_file($_FILES['product_img']['tmp_name'], "uploads/" . $_FILES['product_img']['name']);

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
            $filetmp = $_FILES['product_imgList']['tmp_name'];

            foreach ($filename as $key => $value) {
                move_uploaded_file($filetmp[$key], "uploads/" . $value);
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
    public function show_product()
    {
        // $query = "SELECT prod.*, cat.category_name, sub.categorySub_name, cla.classify_name, imgList.product_imgList
        //     FROM tbl_product AS prod
        //     LEFT JOIN tbl_category AS cat ON prod.category_id = cat.category_id
        //     LEFT JOIN tbl_categorysub AS sub ON prod.categorySub_id = sub.categorySub_id
        //     LEFT JOIN tbl_classify AS cla ON prod.classify_id = cla.classify_id
        //     LEFT JOIN tbl_product_imgList AS imgList ON prod.product_id = imgList.product_id
        //     ORDER BY prod.product_id ASC";
        $query = "SELECT * FROM tbl_product";
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
    public function get_product($product_id)
    {
        $query = "SELECT * FROM tbl_product WHERE product_id = '$product_id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function update_product($category_id, $categorySub_id, $classify_id, $product_name, $price_old, $price_sale, $product_desc, $product_img, $filename, $filetmp, $product_id)
    {
        $query = "UPDATE tbl_product SET product_name = '$product_name', category_id = '$category_id', categorySub_id = '$categorySub_id', classify_id = '$classify_id', price_old = '$price_old', price_sale = '$price_sale', product_desc = '$product_desc', product_img = '$product_img' WHERE product_id = '$product_id'";
        $result = $this->db->update($query);
        if ($result) {
            $query = "SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 1";
            $result = $this->db->select($query)->fetch_assoc();
            $product_id = $result["product_id"];

            foreach ($filename as $key => $value) {
                move_uploaded_file($filetmp[$key], "uploads/" . $value);
                $query = "UPDATE tbl_product_imgList SET product_imgList = '$value' WHERE product_id = '$product_id'";
                $result = $this->db->select($query);
            }
        }
        header("Location:productShow.php");
        return $result;
    }

    public function delete_product($product_id)
    {
        $query = "DELETE FROM tbl_product WHERE product_id = '$product_id'";
        $result = $this->db->delete($query);
        header("Location:productShow.php");
        return $result;
    }
}
?>