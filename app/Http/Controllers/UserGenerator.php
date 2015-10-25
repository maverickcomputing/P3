<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserGenerator extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


      public function getIndex()
          {
             //return 'Show Text';
             return view('users.index');

           }


public function postIndex(Request $request)

    {
          // $NoNames = $request->input('number','5');

          // Validate the request data
          $this->validate($request,
                ['number' => 'required|integer|min:1|max:99',
                ]);

 // If the code makes it here, you can assume the validation passed
 $NoNames = $request->input('number');





// require the Faker autoloader
//require_once '/vendor/fzaninotto/faker/src/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
            $faker = \Faker\Factory::create();
// $RandomName = $faker->name;
// $RandomAddress = $faker->address;
// $RandomProfile = $faker->text;

            $randomStuff = array();
            $RandomAdd = array();
            $RandomPro = array();

            for ($i=0; $i < $NoNames; $i++){

                $randomStuff[] = $faker->title.' '.$faker->name;
                $RandomAdd[] = $faker->address;
                $RandomPro[] = $faker->text;

    //loop and store each username into the username array
            }



          






   //Pass array into view
   //return view('users.index', ['randomStuff' => $randomStuff]);
   return view('users.index')
     ->with('randomStuff', $randomStuff)
    //  ->with('number', $number)
     ->with('RandomAdd', $RandomAdd)
     ->with('RandomPro', $RandomPro);
}
}
