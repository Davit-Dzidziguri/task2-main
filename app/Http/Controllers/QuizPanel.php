<?php

namespace App\Http\Controllers;
use App\Quiz;

class QuizPanel extends Controller
{
public function index()
{
    $quiz = 
    [
        ['name' => 'question 1','picture'=> 'pictureOne.png', 'status' => 'true',],
        ['name' => 'question 2','picture'=> 'pictureTwo.png','status' => 'false',],
        ['name' => 'question 3','picture'=> 'pictureThree.png','status' => 'true',]
    ];
    
}

}
function index()
{
    $quizzes = Quiz::all();

    return view('welcome', compact('quizzes'));
}
