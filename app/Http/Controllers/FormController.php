<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;

class FormController extends Controller
{

    public function showForm()
    {
        $users = User::all(); // Mengambil semua data user dari tabel
        return view('pengguna',compact('users'));
    }
}