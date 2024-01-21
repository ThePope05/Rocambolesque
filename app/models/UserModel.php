<?php

class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUserId(string $phone_nr)
    {
        $this->db->query("SELECT * FROM users WHERE number = :phone_nr");

        $number = str_replace(" ", "", $phone_nr);
        $number = str_replace("-", "", $number);
        $this->db->bind(':phone_nr', $number);

        $user = $this->db->execute(true);

        if (isset($user[0])) {
            return $user[0]->Id;
        } else {
            return false;
        }
    }

    public function login(string $email, string $password)
    {
        $this->db->query("SELECT * FROM users WHERE email = :email");

        $this->db->bind(':email', $email);

        $user = $this->db->execute(true);

        if (isset($user[0])) {
            if ($user[0]->Password == hash('sha256', $password)) {
                return $user[0];
            } else {
                return "Password incorrect";
            }
        } else return "Email incorrect";
    }

    public function signup(string $email, string $password, array $full_name, string $phone_nr)
    {
        $phone_nr = str_replace(" ", "", $phone_nr);
        $phone_nr = str_replace("-", "", $phone_nr);

        $this->db->query("INSERT INTO users (email, password, firstname, lastname, number) VALUES (:email, :password, :firstname, :lastname, :phone_nr)");

        $this->db->bind(':email', $email);
        $this->db->bind(':password', hash('sha256', $password));
        $this->db->bind(':firstname', $full_name[0]);
        $this->db->bind(':lastname', $full_name[1]);
        $this->db->bind(':phone_nr', $phone_nr);

        $this->db->execute();
    }

    public function tempUserSignUp(string $phone_nr, array $full_name)
    {
        $phone_nr = str_replace(" ", "", $phone_nr);
        $phone_nr = str_replace("-", "", $phone_nr);

        $this->db->query("INSERT INTO users (firstname, lastname, number) VALUES (:firstname, :lastname, :phone_nr)");

        $this->db->bind(':firstname', $full_name[0]);
        $this->db->bind(':lastname', $full_name[1]);
        $this->db->bind(':phone_nr', $phone_nr);

        $this->db->execute();
    }

    public function isFreeUser(string $email, string $phone_nr)
    {
        $sql = "SELECT * FROM users WHERE email = :email OR number = :phone_nr";

        $this->db->query($sql);

        $this->db->bind(':email', $email);
        $this->db->bind(':phone_nr', $phone_nr);

        $user = $this->db->execute(true);

        if (isset($user[0])) {
            return false;
        } else {
            return true;
        }
    }
}
