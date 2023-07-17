<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WritingController extends Controller
{
    public function getWriting() {
        return view('writing.writing');
    }
}
