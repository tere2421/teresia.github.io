<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class BookingController extends Controller
{
    public function index()
    {
        // Ambil semua data kamar dari database
        $rooms = Room::all();

        // Kirim data ke view
        return view('rooms', ['rooms' => $rooms, 'title' => 'Daftar Kamar']);
    }

        public function book(Room $room)
    {
        // Logika untuk booking kamar
        return view('roomsbook', compact('room'));
    }
}
