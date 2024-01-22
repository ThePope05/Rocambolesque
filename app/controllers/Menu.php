<?php

class Menu extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Homepage'
        ];
    
        $this->view('Menu/index', $data);
    }
}