<?php
include("database.php");
?>
<?php
class loginAdmin {
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    public function login () {
        $query = "SELECT * FROM tbl_user";
        $result = $this->db->select($query);
        return $result;
    }
}
?>