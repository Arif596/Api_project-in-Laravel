<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyApi extends Controller
{
    //
    function getData()
    {
        return [
            'name' => 'Arif jamal',
            'email' => 'arifjamalchohan111@gmail.com',
            'address' => '123street','class'=>'BSCS8A(MORNING)'
        ];
    }
}
