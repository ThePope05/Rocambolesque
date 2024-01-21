
<?php

class Reservering extends BaseController
{
    public function index()
    {
        if (isset($_SESSION['user_id'])) {
            $reserveringModel = $this->model('ReserveringModel')->fetchreservering($_SESSION['user_id']);
            $data = [
                'title' => 'Reservering',
                'reservation' => $reserveringModel
            ];

            $this->view('Reservering/index', $data);
        } else {
            $this->view('Homepage/index');
        }
    }

    public function delete($id)
    {
        if ($this->model('ReserveringModel')->DeleteReservation($id)) {
            die('Something went wrong');
        } else {
            header('location: /reservering/index');
        }
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

            $reservation = $this->model('ReserveringModel')->CreateReservation($_POST['amount_of_people'], $_POST['amount_of_children'], $_POST['reservation_time'], $_POST['comment'], $_SESSION['user_id']);

            $this->index();
        } else {
            $data = [
                'reservation' => [
                    'amount_of_people' => $_POST['amount_of_people'],
                    'amount_of_children' => $_POST['amount_of_children'],
                    'reservation_time' => $_POST['reservation_time'],
                    'comment' => $_POST['comment']
                ]
            ];

            $url = 'User/tempUserPage';

            foreach ($data['reservation'] as $key => $value) {
                $url .= '/' . $value;
            }

            header('location: /' . $url);
        }
    }
}
