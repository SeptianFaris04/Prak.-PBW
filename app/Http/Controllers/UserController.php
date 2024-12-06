<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
       $users = User::query()->latest()->get();

       return view(view:'users.index', data:compact(var_name:'users'));
    }
}