<?php 
require_once "../entity/Category.php";
require_once "../dao/Database.php";
require_once "BaseDAO.php";

class CategoryDAO extends BaseDAO {

    public $name = "category";
    //methods

    function __construct() {
        parent::__construct();
    }

    function insert($row) {
        parent::insert($row);
    }

    function update($row) {
        parent::update($row);
    }

    function delete($row) {
        parent::delete($row);
    }

    function findAll(){
        parent::findAll();
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