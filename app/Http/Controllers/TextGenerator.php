<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator;
class TextGenerator extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     **/
    public function getIndex()
   {
      //return 'Show Text';
      return view('text.index');
        //
    //   $generator = new Badcow\LoremIpsum\Generator();
      // $paragraphs = $generator->getParagraphs(5);
    //  echo implode('<p>', $paragraphs);

    }

    public function postIndex(Request $request)
   {
      $this->validate($request, [
        'number' => 'required|max:100'
      ]);
      $numParagraphs = $request->input('number','5');
      $generator = new Generator();
      $paragraphs = $generator->getParagraphs($numParagraphs);
    //  echo implode('<p>', $paragraphs);
      return view('text.index')
        ->with('paragraphs', $paragraphs)
        ->with('number', $numParagraphs);

    }



}
