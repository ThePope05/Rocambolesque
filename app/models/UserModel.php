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

        if (isset($user[0])) {
            if ($user[0]->Password == hash('sha256', $password)) {
                return $user[0];
            } else {
                return "Password incorrect";
            }
        } else return "Email incorrect";
    }

    public function signup(string $email, string $password, string $name, string $phone_nr)
    {
        $this->db->query("INSERT INTO users (email, password, name, phone_nr) VALUES (:email, :password, :name, :phone_nr)");

        $this->db->bind(':email', $email);
        $this->db->bind(':password', hash('sha256', $password));
        $this->db->bind(':name', $name);
        $this->db->bind(':phone_nr', $phone_nr);

        $this->db->executeWithoutReturn();
    }
}
