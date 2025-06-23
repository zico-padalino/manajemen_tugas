<?php

namespace App\Http\Controllers;

use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Data User',
            'menuAdminUser' => 'active',
        );
        return view('admin/user/index',$data);
    }
}
