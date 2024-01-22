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

    public function getMenuItem(int $id)
    {
        $this->db->query('SELECT * FROM foods WHERE Id = :id');
        $this->db->bind(':id', $id);
        return $this->db->execute(true)[0];
    }

    public function getCategorys()
    {
        $this->db->query('SELECT * FROM categorys');
        return $this->db->execute(true);
    }

    public function editMenuItem(array $data)
    {
        $this->db->query('UPDATE foods SET Name = :name, Description = :description, CategoryId = :category WHERE Id = :id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':category', $data['category']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function createMenuItem(array $data)
    {
        $this->db->query('INSERT INTO foods (Name, Description, CategoryId) VALUES (:name, :description, :category)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':category', $data['category']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteMenuItem(int $id)
    {
        $this->db->query('DELETE FROM foods WHERE Id = :id');
        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
