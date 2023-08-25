<?php

namespace App\Http\Controllers\Folder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function index()
    {
        return view('characters');
    }
}
