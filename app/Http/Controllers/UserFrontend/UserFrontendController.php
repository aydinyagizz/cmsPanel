<?php

namespace App\Http\Controllers\UserFrontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserFrontendController extends Controller
{
    public function userFrontendIndex (Request $request, $slug)
    {
//        $user = array();
//        if (Session::has('userId')){
//            $user = User::where('id', Session::get('userId'))->first();
//        }
        $data = [
            'user' => User::where('slug', $slug)->first(),
        ];

        if ($data['user']->status == 0){
//            TODO: burayı admin frontend'e yönlendireceğiz.
            return view('welcome');
        }

        if ($data['user']->template == 1){
            return view('userFrontend.pages.userFrontendIndex', $data);
        }elseif ($data['user']->template == 2){
            return view('userFrontend_2.pages.userFrontend2Index', $data);
        }elseif ($data['user']->template == 3){
            return view('userFrontend_3.pages.userFrontend3Index', $data);
        }else{
            return view('userFrontend.pages.userFrontendIndex', $data);
        }



    }
}
