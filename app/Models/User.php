<?php

namespace App\Models;

use PDO;

class User
{
    public function getAll()
    {
        $db = Database::getInstance();
        $pdo = $db->getConnection();

        $stmt = $pdo->query('SELECT * FROM users');
        $users = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $users;
    }

    public function createUser(array $data)
    {
        //TODO: Create a new user
    }

    public function findById(int $id)
    {
        //TODO:  Fetch a user by id
    }

    public function findByEmail(string $email)
    {
        //TODO: Fetch a user by email address
    }

    public function updateUser(int $id, array $data)
    {
        //TODO: Find a user by id and then update their details with the data
    }

    public function deleteUser(int $id)
    {
        //TODO: Find a user by id and delete it
    }

    public function getBookingsById(int $id)
    {
        //TODO: Get bookings by a user id
    }

    public function getBookingsByEmail(string $email)
    {
        // TODO: Get bookings by a user email
    }
}
