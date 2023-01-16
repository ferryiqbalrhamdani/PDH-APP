<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Itemlog;
use App\Models\Size;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $data['title'] = 'Dashboard';
        $data['logs'] = Itemlog::all();
        $data['users'] = User::all();
        $data['items'] = Item::all();
        $data['sizes'] = Size::all();
        $data['categories'] = Category::all();


        return view('admin.index', $data);
    }
}
