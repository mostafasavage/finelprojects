<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashbarodController extends Controller
{
    public function index()
    {
        $coutUser = User::count();
        $data = User::with('role')->get();
        return view('admin.dashboard' , compact('coutUser' , 'data'));
    }
}
