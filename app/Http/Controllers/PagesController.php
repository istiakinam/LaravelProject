<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function about()
    {
//        return view('pages.about')->with([
//         'first' => 'My',
//            'last' => 'Way'
//        ]);  //load this view with this data
    
//        $data = [];
//        $data['first'] = 'Khan';
//        $data['last'] = 'Monkhe';
//        
//        return view('pages.about', $data);
        
        //$first = 'John';
        
        
        
        $people = [
            'Nod', 'Cody', 'Jaden'
        ];
        
        return view('pages.about', compact('people'));
    }
    
    public function contact()
    {
        return view('pages.contact');
    }
}
