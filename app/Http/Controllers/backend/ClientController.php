<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Type $var = null)
    {
        return view('backend.pages.clients.index');
    }
}
