<?php

namespace App\Http\Controllers;

use App\Models\Users;
use DB;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index($id)
    {
        $user = new Users;
        $json = $user->getALL($id);
        return json_encode($json, JSON_UNESCAPED_UNICODE);;
    }

}
