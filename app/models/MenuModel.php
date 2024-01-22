<?php

class MenuModel extends BaseController
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getMenuCategorys()
    {
        $this->db->query('SELECT DISTINCT Name, Id FROM categorys');
        return $this->db->execute(true);
    }

    public function getCategoryItems(int $categoryId)
    {
        $this->db->query('SELECT * FROM foods WHERE CategoryId = :categoryId');
        $this->db->bind(':categoryId', $categoryId);
        return $this->db->execute(true);
    }
}
