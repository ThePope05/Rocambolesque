<?php

class ReserveringModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function GetReservationsByUserId(int $id)
    {
        if ($id != 1) {
            $this->db->query("SELECT * FROM reservations WHERE User_Id = :id");
            $this->db->bind(':id', $id);
        } else {
            $this->db->query("SELECT * FROM reservations");
        }

        return $this->db->execute(true);
    }

    public function GetReservationById(int $id)
    {
        $this->db->query("SELECT * FROM reservations WHERE id = :id");
        $this->db->bind(':id', $id);

        return $this->db->execute(true)[0];
    }

    public function CreateReservation($amountofpeople, $amountofchildren, $reservationtime, $comment, $user_id)
    {
        $this->db->query("INSERT INTO reservations (AmountOfPeople, AmountOfChildren, ReservationTime, Comment, user_id) VALUES (:AmountOfPeople, :AmountOfChildren, :ReservationTime, :Comment, :user_id)");

        // convert to int 
        $amountofpeople = (int)$amountofpeople;
        $amountofchildren = (int)$amountofchildren;
        $user_id = (int)$user_id;
        $this->db->bind(':AmountOfPeople', $amountofpeople);
        $this->db->bind(':AmountOfChildren', $amountofchildren);
        $this->db->bind(':ReservationTime', $reservationtime);
        $this->db->bind(':Comment', $comment);
        $this->db->bind(':user_id', $user_id);

        return $this->db->execute();
    }

    public function UpdateReservation($id, $amountofpeople, $amountofchildren, $reservationtime, $comment)
    {
        $this->db->query("UPDATE reservations SET AmountOfPeople = :AmountOfPeople, AmountOfChildren = :AmountOfChildren, ReservationTime = :ReservationTime, Comment = :Comment WHERE id = :id");

        $this->db->bind(':id', $id);
        $this->db->bind(':AmountOfPeople', $amountofpeople);
        $this->db->bind(':AmountOfChildren', $amountofchildren);
        $this->db->bind(':ReservationTime', $reservationtime);
        $this->db->bind(':Comment', $comment);

        return $this->db->execute();
    }

    public function DeleteReservation($id)
    {
        $this->db->query("DELETE FROM reservations WHERE id = :id");

        $this->db->bind(':id', $id);

        return $this->db->execute();
    }

    public function EditReservation($id, $amountofpeople, $amountofchildren, $reservationtime, $comment, $user_id)
    {
        $this->db->query("UPDATE reservations SET AmountOfPeople = :AmountOfPeople, AmountOfChildren = :AmountOfChildren, ReservationTime = :ReservationTime, Comment = :Comment WHERE id = :id");

        $this->db->bind(':id', $id);
        $this->db->bind(':AmountOfPeople', $amountofpeople);
        $this->db->bind(':AmountOfChildren', $amountofchildren);
        $this->db->bind(':ReservationTime', $reservationtime);
        $this->db->bind(':Comment', $comment);

        return $this->db->execute();
    }
}
