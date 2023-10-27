
<?php

class Reservering extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Reservering'
        ];

        $this->view('Reservering/index', $data);
    }
}
