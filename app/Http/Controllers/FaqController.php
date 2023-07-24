<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{
    public function faqScreen()
    {

        $faq = Faq::where("deleted", 0)->get();
        return view("admin.faq.list", ["faq" => $faq]);
    }

    public function createFaqScreen(Request $request)
    {
        $faq = Faq::Where("code", $request->code)->first();

        return view("admin.faq.create", ["faq" => $faq]);
    }

    public function createFaq(Request $request)
    {
        $newFaq = Faq::where("code", $request->code)->first();

        if (!$newFaq) {
            $newFaq = new Faq();

            $faqCode = Faq::orderBy("code", "DESC")->first();

            if ($faqCode) {
                $newFaq->code = $faqCode->code + 1;
            } else {
                $newFaq->code = 1;
            }

            $newFaq->created_user_code = Auth::user()->code;
        } else {
            $newFaq->updated_user_code = Auth::user()->code;
        }


        $newFaq->question = $request->question;
        $newFaq->answer = $request->answer;



        $newFaq->save();

        return redirect()->route("faqScreen");
    }

    public function deleteFaq(Request $request)
    {
        $faq = Faq::Where("code", $request->code)->first();

        if (!$faq || $faq->deleted == 1) {
            return redirect()->route("faqScreen")->with("error", "Böyle bir hizmet bulunamadı");
        }

        $faq->deleted = 1;
        $faq->updated_user_code = Auth::user()->code;
        $faq->save();

        return redirect()->route("faqScreen")->with("success", "Başarılı bir şekilde veri silindi");
    }
}
