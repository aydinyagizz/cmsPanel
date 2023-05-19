<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminServices;
use App\Models\User;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    public function servicesList()
    {
        $data = [
            'admin' => User::where('id', Session::get('adminId'))->first(),
            //'about_us' => AdminAboutUs::first(),
            'services' => DB::table('admin_services')->get(),
        ];

        return view('admin.pages.services', $data);
    }

    public function servicesAdd(Request $request, FlasherInterface $flasher)
    {
//        $data = [
//            'admin' => User::where('id', Session::get('adminId'))->first(),
//            //'about_us' => AdminAboutUs::first(),
//            'services' => DB::table('admin_services')->get(),
//        ];

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'services_content' => 'required',
            'status' => 'required',
            'home_status' => 'required',
        ], [
            'title.required' => 'Title is required',
            'services_content.required' => 'Content is required',
            'status.required' => 'Status is required',
            'home_status.required' => 'Category is required',
        ]);

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                $flasher->addError($error);
            }
            // Hata oluştuğunda yapılması gereken diğer işlemler...
            return Redirect::route('admin.services.list');
        }

        $services = new AdminServices();
        $services->title = $request->title;
        $services->content = $request->services_content;
        $services->status = $request->status;
        $services->home_status = $request->home_status;
        $services->save();
        $flasher->addSuccess('Services Added Success');

        return Redirect::route('admin.services.list');

    }
}
