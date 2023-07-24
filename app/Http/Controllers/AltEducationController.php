<?php

namespace App\Http\Controllers;

use App\Models\AltEducation;
use App\Models\Education;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AltEducationController extends Controller
{
    public function altEducationScreen()
    {

        //$altEducations = AltEducation::where("deleted", 0)->get();
        $altEducations = DB::table('alt_education')
            ->where("alt_education.deleted", 0)
            ->join("education", "alt_education.education_code", "=", "education.code")
            ->select("alt_education.*", "education.title as education")
            ->get();

        return view("Admin.altEducation.list", ["altEducations" => $altEducations]);
    }

    public function createAltEducationScreen(Request $request)
    {
        $altEducation = AltEducation::Where("code", $request->code)->first();
        $education = Education::Where("deleted", 0)->get();

        return view("admin.altEducation.create", ["altEducation" => $altEducation, "education" => $education]);
    }

    public function createAltEducation(Request $request)
    {
        $newAltEducation = AltEducation::where("code", $request->code)->first();

        if (!$newAltEducation) {
            $newAltEducation = new AltEducation();

            $altEducationCode = AltEducation::orderBy("code", "DESC")->first();

            if ($altEducationCode) {
                $newAltEducation->code = $altEducationCode->code + 1;
            } else {
                $newAltEducation->code = 1;
            }

            $newAltEducation->created_user_code = Auth::user()->code;
        } else {
            $newAltEducation->updated_user_code = Auth::user()->code;
        }

        $newAltEducation->education_code = $request->education_code;
        $newAltEducation->title = $request->title;
        $newAltEducation->mini_description = $request->mini_description;
        $newAltEducation->description = $request->description;


        if ($request->file('image')) {
            $path = "assets/other/images/alt_education/main_image";
            $name = $newAltEducation->code . "." . $request->file("image")->getClientOriginalExtension();

            $request->file('image')->move(public_path($path), $name);

            $newAltEducation->main_image_url = $path . "/" . $name;
        }

        if ($request->file('files')) {
            $sayac = 1;
            $path = "assets/other/images/alt_education/images";

            foreach ($request->file('files') as $item) {
                $name = $newAltEducation->code . "_" . $sayac . "." . $item->getClientOriginalExtension();
                $item->move(public_path($path), $name);
                $sayac++;

                $newFile = new File();

                $fileCode = File::orderBy("code", "DESC")->first();

                if ($fileCode) {
                    $newFile->code = $fileCode->code + 1;
                } else {
                    $newFile->code = 1;
                }

                $newFile->type = "education";
                $newFile->type_code = $newAltEducation->code;
                $newFile->file_type = $item->getClientOriginalExtension();
                $newFile->file_url = $path . "/" . $name;
                $newFile->created_user_code = Auth::user()->code;
                $newFile->save();
            }
        }


        $newAltEducation->save();

        return redirect()->route("altEducationScreen");
    }

    public function deleteAltEducation(Request $request)
    {
        $altEducation = AltEducation::Where("code", $request->code)->first();

        if (!$altEducation || $altEducation->deleted == 1) {
            return redirect()->route("educationScreen")->with("error", "Böyle bir alt eğitim bulunamadı");
        }

        $altEducation->deleted = 1;
        $altEducation->updated_user_code = Auth::user()->code;
        $altEducation->save();

        return redirect()->route("altEducationScreen")->with("success", "Başarılı bir şekilde veri silindi");
    }
}
