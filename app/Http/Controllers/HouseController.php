<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HouseController extends Controller
{
    public $imgCasate=[
        [
            "img"=> "https://m.media-amazon.com/images/I/71makxUWzCL._AC_UF1000,1000_QL80_.jpg",
            "name"=> "Grifondoro",
        ],
        [
            "img"=> "https://www.picclickimg.com/oH8AAOSwG-1Z3NY~/Serpeverde-Crest-Da-Harry-Potter-da-Parete-Ufficiale.webp",
            "name"=> "Serpeverde",
        ],
        [
            "img"=> "https://m.media-amazon.com/images/I/71SHyMkX6gL._AC_UY1000_.jpg",
            "name"=> "Tassorosso",
        ],
        [
            "img"=> "https://m.media-amazon.com/images/I/71IgpxIE-cL._AC_UF1000,1000_QL80_.jpg",
            "name"=> "Corvonero",
        ],
    ];

    public function housesIndex()   
    {
        $houses= Http::get('https://potterapi-fedeperin.vercel.app/it/houses')->json();
        return view('houses', [
            'houses'=>$houses,
            'imgCasate'=>$this->imgCasate
            ]);
    }
}
