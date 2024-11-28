<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PublicController extends Controller
{
    public function homepage() 
    {
        $personaggi= Http::get("https://potterapi-fedeperin.vercel.app/it/characters")->json();
        return view('welcome', compact('personaggi'));
    }
}
