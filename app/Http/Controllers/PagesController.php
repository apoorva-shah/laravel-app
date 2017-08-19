<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//

    public function about()
    {
        $name = "<span style='color: red'>Test name</span>";
        /*return view('pages.about')->with([
            'first' => 'Test',
            'last' => 'shah'
        ]);*/


        /*$data = [];
        $data['first'] = 'Test';
        $data['last'] = 'Shah';
        return view('pages.about', $data);*/

        $first = 'Test';
        $last= 'Shah';

        $people = [];

//        return view('pages.about', compact('first', 'last'));

        return view('pages.about', compact('people'));


    }


    public function contact()
    {
        return view('pages.contact');
    }
}
