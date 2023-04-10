<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index()
    {
        return response('ТЕСТ')->header('Content-type', 'text/plain');
    }
}
