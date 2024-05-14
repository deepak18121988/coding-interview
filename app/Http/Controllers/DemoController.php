<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DemoController extends Controller
{
    
    public function admin()
    {
        $users = User::paginate(15);
        echo '<pre>';print_r($users->toArray());die;
        return view('admin');
    }
}
