<?php
require_once "BaseRow.php";
require_once "../interface/IEntity.php";

class Product extends BaseRow implements IEntity{
    //properties
    public int $id;
    public string $name;
    protected int $categoryId;

    //methods
    
    function set_categoryId($categoryId) {
        $this->categoryId = $categoryId;
    }

    function get_categoryId() {
        return $this->categoryId;
    }

}
?>