<?php

class Menu extends BaseController
{
    public function index(bool $editMode = false)
    {
        if ($editMode && isset($_SESSION['user_id']) && $_SESSION['user_id'] == 1) {
            $data = [
                'title' => 'Menu',
                'menu' => $this->getMenus(),
                'editMode' => $editMode
            ];

            $this->view('Menu/index', $data);
        } else {
            $data = [
                'title' => 'Menu',
                'menu' => $this->getMenus()
            ];

            $this->view('Menu/index', $data);
        }
    }

    public function editPage(int $id)
    {
        if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == 1) {
            $data = [
                'title' => 'Edit Menu',
                'menu' => $this->getMenuItem($id),
                'categorys' => $this->model('MenuModel')->getCategorys()
            ];

            $this->view('Menu/form', $data);
        } else {
            $data = [
                'title' => 'Menu',
                'menu' => $this->getMenus()
            ];

            $this->view('Menu/index', $data);
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'category' => $_POST['category']
            ];

            $this->model('MenuModel')->editMenuItem($data);
            header('location: /Menu/index/true');
        }
    }

    public function createPage()
    {
        if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == 1) {
            $data = [
                'title' => 'Create Menu',
                'categorys' => $this->model('MenuModel')->getCategorys()
            ];

            $this->view('Menu/form', $data);
        } else {
            $data = [
                'title' => 'Menu',
                'menu' => $this->getMenus()
            ];

            $this->view('Menu/index', $data);
        }
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'category' => $_POST['category']
            ];

            $this->model('MenuModel')->createMenuItem($data);
            header('location: /Menu/index/true');
        }
    }

    public function delete(int $id)
    {
        $this->model('MenuModel')->deleteMenuItem($id);
        header('location: /Menu/index/true');
    }

    public function getMenus()
    {
        $menus = $this->model('MenuModel')->getMenuCategorys();

        foreach ($menus as $menu) {
            $menu->menuItems = $this->model('MenuModel')->getCategoryItems($menu->Id);
        }

        return $menus;
    }

    public function getMenuItem(int $id)
    {
        $menuItem = $this->model('MenuModel')->getMenuItem($id);

        return $menuItem;
    }
}
