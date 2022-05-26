<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionnaryController extends Controller
{
    public function index(Request $request)
    {
        $dictionary = [
            "Hello" => "Xin chaoo",
            "How" => "The nao",
            "Book" => "quyen vo",

        ];

        $searchWord = $request->input('search');
        $flag = 0;
        foreach ($dictionary as $key => $description) {
            if ($key == $searchWord) {
                echo "From: " . $key . "<br>" . "Meaning of words: " . $description;
                echo "<br>";
                $flag = 1;
            }
        }
        if ($flag == 0) {
            echo "Did not find the words to look up: ";
        }
        return view('dictionary');
    }
}
