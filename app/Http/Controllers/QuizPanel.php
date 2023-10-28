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
function create()
    {
        return view('main.blade');
    }

    function edit(Quiz $quiz)
    {
        return view('main.blade', compact('quiz'));
    }
function index()
{
    $quizzes = Quiz::all();

    return view('welcome', compact('quizzes'));
}
function storeOrUpdate(Request $request, $id = null)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'description' => 'nullable',
    ]);
    if ($id) {
        $quiz = Quiz::findOrFail($id);
        $quiz->update($validatedData);
        $message = 'Quiz updated successfully.';
    } else {
        $quiz = Quiz::create($validatedData);
        $message = 'Quiz created successfully.';
    }

    return redirect()->route('quizzes.index')->with('message', $message);
}
