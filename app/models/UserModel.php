<?php

class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function login(string $email, string $password)
    {
        $this->db->query("SELECT * FROM users WHERE email = :email");

        $this->db->bind(':email', $email);

        $user = $this->db->resultSet();

        if ($user->password == hash('sha256', $password)) {
            return $user;
        } else {
            return null;
        }
    }
}
