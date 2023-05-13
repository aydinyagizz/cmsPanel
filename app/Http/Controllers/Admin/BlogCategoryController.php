<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\User;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class BlogCategoryController extends Controller
{


    public function blogCategoryList()
    {
        $data = [
            'admin' => User::where('id', Session::get('adminId'))->first(),
            'blog_category' => BlogCategory::all(),
        ];

        return view('admin.pages.blogCategory', $data);
    }

    public function blogCategoryAdd(Request $request, FlasherInterface $flasher)
    {

        $data = [
            //'user' => User::where('id', Session::get('adminId'))->first(),
            'admin' => User::where('id', Session::get('adminId'))->first(),
        ];

        $blogCategory = new BlogCategory();
        $blogCategory->name = $request->name;
        $blogCategory->save();

        $flasher->addSuccess('Category added');


        return Redirect::route('admin.blog.category.list');
    }

    public function blogCategoryDelete(Request $request)
    {
        if ($request->input('IDs')){
            $IDs = $request->input('IDs');
            BlogCategory::whereIn('id', $IDs)->delete();
        }
        if ($request->input('blogCategoryId')){
            $blogCategoryId = $request->input('blogCategoryId');
            BlogCategory::find($blogCategoryId)->delete();
        }


        return response()->json(['success'=>'Selected users have been deleted.']);
        // dd($request->all());
//        $data = [
//            'users' => User::where('user_role', 1)->with('roles')->get(),
//            'admin' => User::where('id', Session::get('adminId'))->first(),
//            // 'user' => User::where('id', Session::get('adminId'))->first(),
//        ];
//
//
//        return view('admin.company.adminCompanyList', $data);
    }

}
