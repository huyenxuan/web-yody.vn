<?php
include("database.php");
?>
<?php
class blog
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function insert_blog($categoryBlog_id, $blog_name, $blog_img, $blog_content)
    {
        $query = "INSERT INTO tbl_blog (categoryBlog_id, blog_name, blog_img, blog_content) VALUES ('$categoryBlog_id', '$blog_name', '$blog_img', '$blog_content')";
        $result = $this->db->insert($query);
        header("Location: blogAdd.php?blogName=" . urldecode($blog_name));
        return $result;
    }
    public function show_categoryBlog()
    {
        $query = "SELECT * FROM tbl_categorysub WHERE category_id = '9' ORDER BY categorySub_id ASC";
        $result = $this->db->select($query);
        return $result;
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
    public function show_categorySub()
    {
        $query = "SELECT * FROM tbl_categorysub WHERE category_id = '9' ORDER BY categorySub_id ASC";
        $result = $this->db->select($query);
        return $result;
    }
    public function get_blog($blog_id)
    {
        $query = "SELECT * FROM tbl_blog WHERE blog_id = '$blog_id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function update_blog($categoryBlog_id, $blog_name, $blog_img, $blog_content, $blog_id)
    {
        $query = "UPDATE tbl_blog SET categoryBlog_id = '$categoryBlog_id', blog_name = '$blog_name', blog_img = '$blog_img', blog_content = '$blog_content' WHERE blog_id = '$blog_id'";
        $result = $this->db->update($query);
        header("Location:blogShow.php");
        return $result;
    }
    public function delete_blog($blog_id)
    {
        $query = "DELETE FROM tbl_blog WHERE blog_id = '$blog_id'";
        $result = $this->db->delete($query);
        header("Location:blogShow.php");
        return $result;
    }
}
?>