
<?php

class User extends BaseController
{
    public function index()
    {
        //If the user is logged in redirect to the dashboard
        //else go to login page
        if (isset($_SESSION['user_id'])) {
            //send to method not view
            //else we have to double code
            $this->dashboard();
        } else {
            $data = [
                'title' => 'Login',
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => ''
            ];
            $this->view('/User/login', $data);
        }
    }

    public function loginPage()
    {
        $data = [
            'title' => 'Login',
            'email' => '',
            'password' => '',
            'email_err' => '',
            'password_err' => ''
        ];
        $this->view('/User/login', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login',
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'email_err' => '',
            'password_err' => ''
        ];

        if (isset($_POST['email'])) {
            if (isset($_POST['password'])) {
                $user = $this->model('UserModel')->login($_POST['email'], $_POST['password']);
                //if login is succesfull redirect to dashboard
                //else send back to login page
                if (!is_null($user)) {
                    $_SESSION['user_id'] = $user->id;
                    $this->dashboard();
                } else {
                    $data['password_err'] = 'Password incorrect';
                    $this->view('/User/login', $data);
                }
            } else {
                $data['password_err'] = 'Please enter password';
                $this->view('/User/login', $data);
            }
        } else {
            $data['email_err'] = 'Please enter email';
            $this->view('/User/login', $data);
        }
    }

    public function signUpPage()
    {
        $data = [
            'title' => 'Sign up',
            'email' => '',
            'password' => '',
            'phone_nr' => '',
            'email_err' => '',
            'password_err' => '',
            'phone_nr_err' => ''
        ];
        $this->view('/User/signUp', $data);
    }

    public function dashboard()
    {
        //double check if user is logged in because user can acces this url directly
        //if not send back to index (login)
        if (isset($_SESSION['user_id'])) {
            $data = [
                'title' => 'Dashboard'
            ];
            $this->view('/User/dashboard', $data);
        } else {
            $this->index();
        }
    }
}
