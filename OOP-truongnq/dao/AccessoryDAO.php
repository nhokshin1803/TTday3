<?php 
require_once "../entity/Accessory.php";
require_once "../dao/Database.php";
require_once "BaseDAO.php";

class AccessoryDAO extends BaseDAO{
    protected $name = "accessory";
    //methods

    function findById($id) {
        for($i = 0; $i < sizeof(Database::getInstance()->accessoryTable); $i++) {
            if(Database::getInstance()->accessoryTable[$i]->get_id() == $id) {
                return Database::getInstance()->accessoryTable[$i];
            }
        }        
    }

    function findByName($name) {
        for($i = 0; $i < sizeof(Database::getInstance()->accessoryTable); $i++) {
            if(Database::getInstance()->accessoryTable[$i]->get_name() == $name) {
                return Database::getInstance()->accessoryTable[$i];
            }
        }        
    }

    function search($where) {
        for($i = 0; $i < sizeof(Database::getInstance()->accessoryTable); $i++) {
            if($where == $i) {
                return Database::getInstance()->accessoryTable[$i];
            }
        }   
    }

}
?>