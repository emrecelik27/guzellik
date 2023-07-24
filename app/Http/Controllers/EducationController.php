<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    public function educationScreen()
    {

        $educations = Education::where("deleted", 0)->get();
        return view("Admin.education.list", ["educations" => $educations]);
    }

    public function creatEducationScreen(Request $request)
    {
        $education = Education::Where("code", $request->code)->first();

        return view("admin.education.create", ["education" => $education]);
    }

    public function createEducation(Request $request)
    {
        $newEducation = Education::where("code", $request->code)->first();

        if (!$newEducation) {
            $newEducation = new Education();

            $educationCode = Education::orderBy("code", "DESC")->first();

            if ($educationCode) {
                $newEducation->code = $educationCode->code + 1;
            } else {
                $newEducation->code = 1;
            }

            $newEducation->created_user_code = Auth::user()->code;
        } else {
            $newEducation->updated_user_code = Auth::user()->code;
        }


        $newEducation->title = $request->title;
        $newEducation->mini_description = $request->mini_description;
        $newEducation->description = $request->description;


        $newEducation->save();

        return redirect()->route("educationScreen");
    }

    public function deleteEducation(Request $request)
    {
        $education = Education::Where("code", $request->code)->first();

        if (!$education || $education->deleted == 1) {
            return redirect()->route("educationScreen")->with("error", "Böyle bir hizmet bulunamadı");
        }

        $education->deleted = 1;
        $education->updated_user_code = Auth::user()->code;
        $education->save();

        return redirect()->route("educationScreen")->with("success", "Başarılı bir şekilde veri silindi");
    }
}
