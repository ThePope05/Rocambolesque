
<?php

class User extends BaseController
{
    public function index()
    {
        //If the user is logged in redirect to the dashboard
        //else go to login page
        if (isset($_SESSION['user_id'])) {
            //go to reservation page
            header('location: /reservering/index');
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
                if (!is_string($user) && !is_null($user)) {
                    $_SESSION['user_id'] = $user->Id;
                    header('location: /reservering/index');
                } else {
                    $data['password_err'] = "Email or password incorrect";
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

    public function tempUserPage()
    {
        $data = [
            'title' => 'Login',
            'phone_nr' => '',
            'name' => '',
            'phone_nr_err' => '',
            'name_err' => ''
        ];
        $this->view('/User/tempUserSignUp', $data);
    }

    public function tempUserSignUp()
    {
        $data = [
            'title' => 'Login',
            'phone_nr' => $_POST['phone_nr'],
            'name' => $_POST['name'],
            'phone_nr_err' => '',
            'name_err' => ''
        ];

        $fullname = explode(" ", $_POST['name']);

        if (!isset($_POST['name']) || count($fullname) < 2) {
            $data['name_err'] = 'Please enter your full name';
            return $this->view('/User/tempUserSignUp', $data);
        } else {
            if ($fullname[0] == "" || $fullname[1] == "") {
                $data['name_err'] = 'Please enter your full name';
                return $this->view('/User/tempUserSignUp', $data);
            }
        }

        if (!isset($_POST['phone_nr'])) {
            $data['phone_nr_err'] = 'Please enter phone number';
            return $this->view('/User/tempUserSignUp', $data);
        }

        $this->model('UserModel')->tempUserSignUp($_POST['phone_nr'], $fullname);
        $this->view('/User/tempUserPage', $data);
    }

    public function signUpPage()
    {
        $data = [
            'title' => 'Sign up',
            'email' => '',
            'password' => '',
            'name' => '',
            'phone_nr' => '',
            'name_err' => '',
            'email_err' => '',
            'password_err' => '',
            'phone_nr_err' => ''
        ];
        $this->view('/User/signUp', $data);
    }

    public function signUp()
    {
        $data = [
            'title' => 'Sign up',
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'phone_nr' => $_POST['phone_nr'],
            'name_err' => '',
            'email_err' => '',
            'password_err' => '',
            'phone_nr_err' => ''
        ];

        $fullname = explode(" ", $_POST['name']);

        if (!isset($_POST['name']) || count($fullname) < 2) {
            $data['name_err'] = 'Please enter your full name';
            return $this->view('/User/signUp', $data);
        } else {
            if ($fullname[0] == "" || $fullname[1] == "") {
                $data['name_err'] = 'Please enter your full name';
                return $this->view('/User/signUp', $data);
            }
        }

        if (!isset($_POST['email'])) {
            $data['email_err'] = 'Please enter email';
            return $this->view('/User/signUp', $data);
        }

        if (!$this->model('UserModel')->isFreeUser($_POST['email'], $_POST['phone_nr'])) {
            $data['email_err'] = 'Email or phone number already in use';

            return $this->view('/User/signUp', $data);
        }

        if (isset($_POST['password'])) {
            if (isset($_POST['phone_nr'])) {
                $this->model('UserModel')->signup($_POST['email'], $_POST['password'], $fullname, $_POST['phone_nr']);
                return $this->index();
            } else {
                $data['phone_nr_err'] = 'Please enter phone number';
                return $this->view('/User/signUp', $data);
            }
        } else {
            $data['password_err'] = 'Please enter password';
            return $this->view('/User/signUp', $data);
        }
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        session_destroy();
        $this->index();
    }
}
