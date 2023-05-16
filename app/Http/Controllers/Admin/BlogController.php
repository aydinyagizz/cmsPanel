<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function blogList()
    {
        $data = [
            'admin' => User::where('id', Session::get('adminId'))->first(),
            //'blog' => Blog::all(),
            'blog' => DB::table('blogs')
                ->join('blog_categories', 'blogs.category_id', '=', 'blog_categories.id')
                ->select('blogs.*', 'blog_categories.name as category_name')
                ->get(),
            'blog_category' => BlogCategory::where('status',1)->get(),
        ];


        return view('admin.pages.blog', $data);
    }

    public function blogAdd(Request $request, FlasherInterface $flasher)
    {

        $data = [
            'admin' => User::where('id', Session::get('adminId'))->first(),
            'blog' => Blog::all(),
        ];

        if ($request->blog_content == '' || $request->title == ''){
            $flasher->addError('Blog content or blog title is required');
            return Redirect::route('admin.blog.list');
        }


//        $uploadedFile = $request->file('blog_image');
//        $base64Image = base64_encode(file_get_contents($uploadedFile->path()));
//dd($base64Image);






        $blog = new Blog();
        $blog->category_id = $request->blog_category;
        $blog->title = $request->title;
        //$blog->image =  $request->image;
        $blog->content = $request->blog_content;
        // $blog->content_short =  $request->content_short;

        if (!empty($request->file('blog_image'))) {

//            TODO: fotoğraf kontrolü yap validate

            $image = base64_encode(file_get_contents($request->file('blog_image')->path()));

//            $file = $request->file('blog_image');
//
//            $extension = $file->getClientOriginalExtension();
//
//            $fileOriginalName = $file->getClientOriginalName();
//
//            $explode = explode('.', $fileOriginalName);
//
//            $fileOriginalName = Str::slug($explode[0], '-') . '_' . now()->format('d-m-Y_H-i-s') . '.' . $extension;
//
//
//            $request->blog_image->move(public_path('admin/assets/blog/'), $fileOriginalName);
//
//            $blog->image = $fileOriginalName;



            $blog->image = $image;
        }

        $blog->save();
        $flasher->addSuccess('Blog Added');
        return Redirect::route('admin.blog.list');

       // return view('admin.pages.blog', $data);
    }
}
