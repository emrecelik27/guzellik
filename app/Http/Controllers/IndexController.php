<?php

namespace App\Http\Controllers;

use App\Models\AltEducation;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Randevu;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function indexScreen()
    {
        return view('index.index');
    }

    public function kurumsalScreen()
    {
        return view('index.kurumsal');
    }

    public function hizmetlerimizScreen()
    {
        return view('index.services');
    }

    public function galeriScreen()
    {
        return view('index.galeri');
    }

    public function blogScreen()
    {
        return view('index.blog');
    }

    public function singleBlogScreen(Request $request)
    {
        $blog = Blog::Where("code", $request->code)->where("deleted", 0)->first();

        if (!$blog) {
            echo 404;
        }
        return view("index.singleBlog", ["blog" => $blog]);
    }

    public function educationScreen(Request $request)
    {
        $edu = Education::Where("code", $request->code)->where("deleted", 0)->first();
        return view('index.education', ["edu" => $edu]);
    }

    public function singleEducationScreen(Request $request)
    {
        $edu = AltEducation::Where("code", $request->code)->where("deleted", 0)->first();

        if (!$edu) {
            echo 404;
        }

        return view("index.singleEducation", ["edu" => $edu]);
    }

    public function contactScreen()
    {
        return view('index.contact');
    }

    public function randevuScreen()
    {
        return view('index.randevu');
    }

    public function contactus(Request $request)
    {
        $newContact = new Contact();

        $contactCode = Contact::orderBy("code", "DESC")->first();

        if ($contactCode) {
            $newContact->code = $contactCode->code + 1;
        } else {
            $newContact->code = 1;
        }


        $newContact->name = $request->name;
        $newContact->email = $request->email;
        $newContact->description = $request->description;



        $newContact->save();

        return redirect()->route("index");
    }

    public function randevuAl(Request $request)
    {
        $newRandevu = new Randevu();

        $randevuCode = Randevu::orderBy("code", "DESC")->first();

        if ($randevuCode) {
            $newRandevu->code = $randevuCode->code + 1;
        } else {
            $newRandevu->code = 1;
        }


        $newRandevu->name = $request->name;
        $newRandevu->email = $request->email;
        $newRandevu->phone = $request->phone;
        $newRandevu->description = $request->description;
        $newRandevu->date = $request->date;

        $newRandevu->save();

        return redirect()->route("index");
    }
}
