<?php

require_once "Model.php";

class Category extends Model
{
    private $id, $category_name, $table_name = "categories";

    public function getData()
    {
        $query = $this->connect();
        $data = $query
            ->query("SELECT * FROM $this->table_name")
            ->fetchAll();
        return $data;
    }
}
