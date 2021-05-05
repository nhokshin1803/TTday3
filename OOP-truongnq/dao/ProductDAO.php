<?php 
require_once "../entity/Product.php";
require_once "../dao/Database.php";
require_once "BaseDAO.php";

class ProductDAO extends BaseDAO{
    protected $name = "product";
    //methods

    function findById($id) {
        for($i = 0; $i < sizeof(Database::getInstance()->productTable); $i++) {
            if(Database::getInstance()->productTable[$i]->get_id() == $id) {
                return Database::getInstance()->productTable[$i];
            }
        }        
    }

    function findByName($name) {
        for($i = 0; $i < sizeof(Database::getInstance()->productTable); $i++) {
            if(Database::getInstance()->productTable[$i]->get_name() == $name) {
                return Database::getInstance()->productTable[$i];
            }
        }        
    }

    function search($where) {
        for($i = 0; $i < sizeof(Database::getInstance()->productTable); $i++) {
            if($where == $i) {
                return Database::getInstance()->productTable[$i];
            }
        }   
    }

}
?>