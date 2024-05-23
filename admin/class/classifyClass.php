<?php
include("database.php");
?>
<?php
class classify
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function insert_classify($categorySub_id, $classify_name)
    {
        $query = "INSERT INTO tbl_classify (categorySub_id, classify_name) VALUES ('$categorySub_id', '$classify_name')";
        $result = $this->db->insert($query);
        header("Location: classifyAdd.php?classifyName=" . urldecode($classify_name));
        return $result;
    }
    public function show_category()
    {
        $query = "SELECT * FROM tbl_category ORDER BY category_id ASC";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_categorySub()
    {
        $query = "SELECT * FROM tbl_categorySub ORDER BY categorySub_id ASC";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_classify()
    {
        $query = "SELECT cls.*, cat.category_name, sub.categorySub_name 
            FROM tbl_classify cls
            LEFT JOIN tbl_categorysub sub ON cls.categorySub_id = sub.categorySub_id
            LEFT JOIN tbl_category cat ON sub.category_id = cat.category_id
            ORDER BY cls.classify_id ASC";
        $result = $this->db->select($query);
        return $result;
    }
    public function get_classify($classify_id)
    {
        $query = "SELECT cls.*, cat.category_id
                FROM tbl_classify cls
                LEFT JOIN tbl_categorysub sub ON cls.categorySub_id = sub.categorySub_id
                LEFT JOIN tbl_category cat ON sub.category_id = cat.category_id
                WHERE cls.classify_id = '$classify_id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function update_classify($categorySub_id, $classify_name, $classify_id)
    {
        $query = "UPDATE tbl_classify
                SET classify_name = '$classify_name', categorySub_id = '$categorySub_id'
                WHERE classify_id = '$classify_id'";
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