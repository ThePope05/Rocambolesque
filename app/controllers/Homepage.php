<?php

class Homepage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Homepage'
        ];

        $this->view('Homepage/index', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact'
        ];

        $this->view('Homepage/contact', $data);
    }
}
