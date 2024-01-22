<?php

class Menu extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Menu',
            'menu' => $this->model('MenuModel')->getMenuCategorys()
        ];

        foreach ($data['menu'] as $menu) {
            $menu->menuItems = $this->model('MenuModel')->getCategoryItems($menu->Id);
        }

        $this->view('Menu/index', $data);
    }
}
