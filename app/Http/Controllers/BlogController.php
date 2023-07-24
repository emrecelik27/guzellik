<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function blogScreen()
    {

        $blogs = Blog::where("deleted", 0)->get();
        return view("admin.blog.list", ["blogs" => $blogs]);
    }

    public function createBlogScreen(Request $request)
    {
        $blog = Blog::Where("code", $request->code)->first();

        return view("admin.blog.create", ["blog" => $blog]);
    }

    public function createBlog(Request $request)
    {
        $newBlog = Blog::where("code", $request->code)->first();

        if (!$newBlog) {
            $newBlog = new Blog();

            $blogCode = Blog::orderBy("code", "DESC")->first();

            if ($blogCode) {
                $newBlog->code = $blogCode->code + 1;
            } else {
                $newBlog->code = 1;
            }

            $newBlog->created_user_code = Auth::user()->code;
        } else {
            $newBlog->updated_user_code = Auth::user()->code;
        }

        if ($request->file('image')) {
            $path = "assets/other/images/blog";
            $name = $newBlog->code . "." . $request->file("image")->getClientOriginalExtension();

            $request->file('image')->move(public_path($path), $name);

            $newBlog->image_url = $path . "/" . $name;
        }


        $newBlog->title = $request->title;
        $newBlog->description = $request->description;


        $newBlog->save();

        return redirect()->route("blogScreen");
    }

    public function deleteBlog(Request $request)
    {
        $blog = Blog::Where("code", $request->code)->first();

        if (!$blog || $blog->deleted == 1) {
            return redirect()->route("blogScreen")->with("error", "Böyle bir blog bulunamadı");
        }

        $blog->deleted = 1;
        $blog->updated_user_code = Auth::user()->code;
        $blog->save();

        return redirect()->route("blogScreen")->with("success", "Başarılı bir şekilde veri silindi");
    }
}
