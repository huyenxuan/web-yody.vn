<?php
include("database.php");
?>
<?php
class categorySub
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function insert_categorySub($category_id, $categorySub_name)
    {
        $query = "INSERT INTO tbl_categorysub (category_id, categorySub_name) VALUES ('$category_id', '$categorySub_name')";
        $result = $this->db->insert($query);
        return $result;
    }
    public function show_category()
    {
        $query = "SELECT * FROM tbl_category ORDER BY category_id ASC";
        $result = $this->db->select($query);
        return $result;
    }
    public function get_categorySub($categorySub_id)
    {
        $query = "SELECT * FROM tbl_categorysub WHERE categorySub_id = '$categorySub_id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_categorySub()
    {
        $query = "SELECT c.*, cat.category_name 
                FROM tbl_categorysub AS c
                LEFT JOIN tbl_category AS cat ON c.category_id = cat.category_id
                ORDER BY c.categorySub_id ASC";
        $result = $this->db->select($query);
        return $result;
    }
    public function update_categorySub($category_id, $categorySub_name, $categorySub_id)
    {
        $query = "UPDATE tbl_categorysub SET categorySub_name = '$categorySub_name', category_id = '$category_id' WHERE categorySub_id = '$categorySub_id'";
        $result = $this->db->update($query);
        header("Location:cateShow.php");
        return $result;
    }
    public function delete_categorySub($categorySub_id)
    {
        $query = "DELETE FROM tbl_categorysub WHERE categorySub_id = '$categorySub_id'";
        $result = $this->db->delete($query);
        header("Location:categorySubShow.php");
        return $result;
    }
}
?>