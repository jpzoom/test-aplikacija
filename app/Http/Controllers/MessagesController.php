<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // use = korištenje, Illuminate = Laravel, dakle uzimanje funkcije Http\Request iz laravela

class MessagesController extends Controller // definiranje klasa, svaki novi controller mora imati "extends Controller"
{
    public function submit(Request $request) {
        $this->validate($request, [ // određuje koja polja su nužna, povlači ovo iz Controller.php
            "name" => "required",
            "email" => "required"
        ]);

        return "Success!";
    }
}
