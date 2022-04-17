<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function data()
    {
        return DataTables::of(User::query()->toJson());
    }

    public function index()
    {
        return view('user.index');
    }
}
