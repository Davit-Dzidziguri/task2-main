<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function store(Request $request)
{
    return redirect()->back()->with('message', 'Subbed!');
}
}

