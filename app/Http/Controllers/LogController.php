<?php

namespace App\Http\Controllers;

use App\Models\Itemlog;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index() {
        $data['title'] = 'Logs';
        $data['logs'] = Itemlog::all();

        return view('logs', $data);
    }
}
