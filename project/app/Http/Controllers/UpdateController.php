<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdateController extends Controller
{

    public function update()
    {
        $products=Products::where('productID',593430)->update(array('productID' => 2));

        //bejme update cdo elemnte te tabeles qe deshirojme jo vetem te tabeles
        // products por dhe tabelave te tjera qe ndodhen ne databaze
    }
}
