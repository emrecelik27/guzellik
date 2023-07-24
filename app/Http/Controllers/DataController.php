<?php

namespace App\Http\Controllers;

use App\Models\KeyValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function kurumsalScreen()
    {
        $kurumsal_title = KeyValue::Where("key", "kurumsal_title")->first();
        $kurumsal = KeyValue::Where("key", "kurumsal")->first();
        return view("Admin.data.kurumsal", ["kurumsal_title" => $kurumsal_title, "kurumsal" => $kurumsal]);
    }

    public function kurumsalUpdate(Request $request)
    {
        $kurumsal_title = KeyValue::Where("key", "kurumsal_title")->first();
        $kurumsal = KeyValue::Where("key", "kurumsal")->first();
        $control = false;

        if (!$kurumsal_title) {
            $kurumsal_title = new KeyValue();

            $keyValue_code = KeyValue::orderBy("code", "DESC")->first();

            if (!$keyValue_code) {
                $kurumsal_title->code = 1;
                $control = true;
            } else {
                $kurumsal_title->code = $keyValue_code->code + 1;
            }

            $kurumsal_title->key = "kurumsal_title";

            $kurumsal_title->created_user_code = Auth::user()->code;
        }

        if (!$kurumsal) {
            $kurumsal = new KeyValue();

            $keyValue_code = KeyValue::orderBy("code", "DESC")->first();

            if (!$keyValue_code && !$control) {
                $kurumsal->code = 1;
            } else {
                $kurumsal->code = $keyValue_code->code + 1;
            }

            $kurumsal->key = "kurumsal";

            $kurumsal->created_user_code = Auth::user()->code;
        }

        $kurumsal_title->value = $request->kurumsal_title;
        $kurumsal->value = $request->kurumsal;
        $kurumsal->optional = $request->kurumsal_optional;

        $kurumsal_title->updated_user_code = Auth::user()->code;
        $kurumsal->updated_user_code = Auth::user()->code;

        $kurumsal_title->save();
        $kurumsal->save();

        return redirect()->route("kurumsalScreen")->with("success", "Başarılı bir şekilde veriler güncellendi.");
    }

    public function contactDataScreen()
    {
        $emails = KeyValue::Where("key", "email")->where("deleted", 0)->get();
        $phones = KeyValue::Where("key", "phone")->where("deleted", 0)->get();
        $address = KeyValue::Where("key", "address")->where("deleted", 0)->get();

        return view("Admin.data.contact", ["emails" => $emails, "phones" => $phones, "address" => $address]);
    }

    public function contactDataUpdate(Request $request)
    {
        KeyValue::Where("key", "email")->delete();
        KeyValue::Where("key", "phone")->delete();
        KeyValue::Where("key", "address")->delete();

        foreach ($request->emails as $item) {
            $newEmail = new KeyValue();
            $keyValue_code = KeyValue::orderBy("code", "DESC")->first();

            if (!$keyValue_code) $newEmail->code = 1;
            else $newEmail->code = $keyValue_code->code + 1;

            $newEmail->key = "email";
            $newEmail->value = $item;
            $newEmail->created_user_code = Auth::user()->code;
            $newEmail->updated_user_code = Auth::user()->code;

            $newEmail->save();
        }

        foreach ($request->phones as $item) {
            $newPhone = new KeyValue();
            $keyValue_code = KeyValue::orderBy("code", "DESC")->first();

            if (!$keyValue_code) $newPhone->code = 1;
            else $newPhone->code = $keyValue_code->code + 1;

            $newPhone->key = "phone";
            $newPhone->value = $item;
            $newPhone->created_user_code = Auth::user()->code;
            $newPhone->updated_user_code = Auth::user()->code;

            $newPhone->save();
        }

        foreach ($request->addresses as $item) {
            $newAddress = new KeyValue();
            $keyValue_code = KeyValue::orderBy("code", "DESC")->first();

            if (!$keyValue_code) $newAddress->code = 1;
            else $newAddress->code = $keyValue_code->code + 1;

            $newAddress->key = "address";
            $newAddress->value = $item;
            $newAddress->created_user_code = Auth::user()->code;
            $newAddress->updated_user_code = Auth::user()->code;

            $newAddress->save();
        }

        return redirect()->route("contactDataScreen")->with("success", "Başarılı bir şekilde veriler güncellendi");
    }
}
