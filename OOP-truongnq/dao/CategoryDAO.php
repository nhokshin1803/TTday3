<?php 
require_once "../entity/Category.php";
require_once "../dao/Database.php";
require_once "BaseDAO.php";

class CategoryDAO extends BaseDAO {

    protected $name = "category";
    //methods
    function findAll(){
        Database::getInstance()->selectTable($this->name);
    }

    function findById($id) {
        for($i = 0; $i < sizeof(Database::getInstance()->categoryTable); $i++) {
            if(Database::getInstance()->categoryTable[$i]->get_id() == $id) {
                return Database::getInstance()->categoryTable[$i];
            }
        }        
    }

}
?>