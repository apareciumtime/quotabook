<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageLibraryController extends Controller
{
    public function getManageLibrary() {
        return view('managelibrary.managelibrary');
    }
}
