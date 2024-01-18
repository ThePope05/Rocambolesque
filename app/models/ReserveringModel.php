<?php

class ReserveringModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    //Example of a query
    public function index(int $id)
    {
        //Here you can write your query
        $this->db->query("SELECT * FROM reservations WHERE id = :id");

        //Here you can bind your parameters
        $this->db->bind(':id', $id);

        //Here you can execute your query
        return $this->db->execute();
    }

    public function fetchreservering(int $id)
    {
        if ($id != 1) {
            $this->db->query("SELECT * FROM reservations WHERE user_id = :id");
            $this->db->bind(':id', $id);
        } else {
            $this->db->query("SELECT * FROM reservations");
        }

        return $this->db->execute(true);
    }

    public function CreateReservation($amountofpeople, $amountofchildren, $reservationtime, $comment, $user_id)
    {

        if (empty($amountofpeople) || empty($amountofchildren) || empty($reservationtime)) {
            return true;
        }

        $this->db->query("INSERT INTO reservations (AmountOfPeople, AmountOfChildren, ReservationTime, Comment, user_id) VALUES (:AmountOfPeople, :AmountOfChildren, :ReservationTime, :Comment, :user_id)");

        // convert to int 
        $amountofpeople = (int)$amountofpeople;
        $amountofchildren = (int)$amountofchildren;
        $this->db->bind(':AmountOfPeople', $amountofpeople);
        $this->db->bind(':AmountOfChildren', $amountofchildren);
        $this->db->bind(':ReservationTime', $reservationtime);
        $this->db->bind(':Comment', $comment);
        $this->db->bind(':user_id', $user_id);

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
