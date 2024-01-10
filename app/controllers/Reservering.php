
<?php

class Reservering extends BaseController
{
    public function index()
    {
        $reserveringModel = $this->model('ReserveringModel')->fetchreservering($_SESSION['user_id']);
        $data = [
            'title' => 'Reservering',
            'reservation' => $reserveringModel
        ];

        $this->view('Reservering/index', $data);
    }

    public function createPage()
    {
        $data = [
            'title' => 'Reservering'
        ];
        $this->view('Reservering/create', $data);
    }

    public function create()
    {
        if (isset($_SESSION['user_id'])) {
            $data = [
                'title' => 'Reservering',
                'amount_of_people' => $_POST['amount_of_people'],
                'amount_of_children' => $_POST['amount_of_children'],
                'reservation_time' => $_POST['reservation_time'],
                'comment' => $_POST['comment'],
                'user_id' => $_SESSION['user_id']
            ];

            $this->model('ReserveringModel')->CreateReservation($data['amount_of_people'], $data['amount_of_children'], $data['reservation_time'], $data['comment'], $data['user_id']);
            $this->view('User/dashboard', $data);
        } else {
            $data = [
                'reservation' => [
                    'amount_of_people' => $_POST['amount_of_people'],
                    'amount_of_children' => $_POST['amount_of_children'],
                    'reservation_time' => $_POST['reservation_time'],
                    'comment' => $_POST['comment']
                ]
            ];

            $controller = "/User/tempUserSignUp";
        }
    }
}
