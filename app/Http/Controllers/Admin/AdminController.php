<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Kokpit
    public function kokpit(){
        $loggedUser = Auth::user();
        return view('admin.index' ,  ['user' => $loggedUser]);
    }
}
