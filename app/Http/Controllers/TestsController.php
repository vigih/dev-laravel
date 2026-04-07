<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function index()
    {
        $nama = 'Tests';
        return view('tests.index', compact('nama'));
    }
}
