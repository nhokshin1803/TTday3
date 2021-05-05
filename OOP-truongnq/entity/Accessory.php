<?php
require_once "BaseRow.php";
class Accessory extends BaseRow {
    //properties
    private int $id;
    private string $name;

    //methods
    function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name; 
    }
    
    function set_id($id) {
        $this->id = $id;
    }

    function get_id() {
        return $this->id;
    }

    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}
?>