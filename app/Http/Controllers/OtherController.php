<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OtherController extends Controller
{
    public function galeriScreen()
    {
        $galeris = Galeri::Where("deleted", 0)->get();

        return view("Admin.galeri.galeri", ["galeris" => $galeris]);
    }

    public function galeriCreateScreen()
    {
        return view("Admin.galeri.create");
    }

    public function galeriAdd(Request $request)
    {

        $newPic = new Galeri();

        $galeriCode = Galeri::orderBy("code", "DESC")->first();

        if ($galeriCode) {
            $newPic->code = $galeriCode->code + 1;
        } else {
            $newPic->code = 1;
        }

        $newPic->title = $request->title;
        $newPic->description = $request->description;

        if ($request->file('image')) {
            $path = "assets/other/images/galeri";
            $name = $newPic->code . "." . $request->file("image")->getClientOriginalExtension();

            $request->file('image')->move(public_path($path), $name);

            $newPic->image_url = $path . "/" . $name;
        } else {
            $newPic->image_url = "Not Exist";
        }

        $newPic->created_user_code = Auth::user()->code;

        $newPic->save();

        return redirect()->route("galeriScreen");
    }

    public function galeriRemove(Request $request)
    {
        $pic = Galeri::Where("code", $request->code)->first();
        $pic->deleted = 1;
        $pic->save();

        return redirect()->route("galeriScreen");
    }

    public function galeriUpdate()
    {
    }
}
