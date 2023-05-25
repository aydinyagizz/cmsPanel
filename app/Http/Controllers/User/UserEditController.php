<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserEditController extends Controller
{
    public function userEdit()
    {
        $data = [
            'user' => User::where('id', Session::get('userId'))->first(),
        ];

        return view('user.pages.userEdit', $data);

    }
}
