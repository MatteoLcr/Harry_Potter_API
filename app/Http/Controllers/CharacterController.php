<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CharacterController extends Controller
{
    public function characterIndex()
    {
        $personaggi= Http::get("https://potterapi-fedeperin.vercel.app/it/characters")->json();
        return view('characters', compact('personaggi'));
    }

    public function show($nickname)
    {
        $personaggi= Http::get('https://potterapi-fedeperin.vercel.app/it/characters')->json();
        foreach ($personaggi as $personaggio) {
            if($personaggio['nickname'] == $nickname)
            {
            return view('detail', compact('personaggio')); 
            }
        }
    }

    public function housesDetail($hogwartsHouse)
    {
        $personaggiCasata=[];
        $personaggi= Http::get('https://potterapi-fedeperin.vercel.app/it/characters')->json();
        foreach ($personaggi as $personaggio) {
            if($personaggio['hogwartsHouse'] == $hogwartsHouse)
            {
                $personaggiCasata[]=$personaggio;
            }
        }
        return view('personaggiPerCasata', compact('personaggiCasata')); 
    }
}
