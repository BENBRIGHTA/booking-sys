<?php
namespace App\Models;

class Room
{
    public function getAll()
    {
        // TODO: This method should return all rooms.

    }

    public function getAvailableRooms()
    {
        //TODO: Get all rooms that are available for booking
    }

    public function findById(int $id)
    {
        //TODO:  Fetch a room by id
    }

    public function deleteRoom(int $id)
    {
        //TODO: Find a room by id and delete it
    }

    public function updateRoom(int $id, array $data)
    {
        //TODO: Find a room by id and then update their details with the data
    }
}
