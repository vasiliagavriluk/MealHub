<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $user = Users::all();
        

        return json_encode($user, JSON_UNESCAPED_UNICODE);;
    }

}
