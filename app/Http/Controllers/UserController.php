<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userScreen()
    {

        $users = User::where("deleted", 0)->get();
        return view("admin.users.list", ["users" => $users]);
    }

    public function createUserScreen(Request $request)
    {
        $user = User::Where("code", $request->code)->first();

        return view("admin.users.create", ["user" => $user]);
    }

    public function createUser(Request $request)
    {
        $newUser = User::where("code", $request->code)->first();

        if (!$newUser) {
            $newUser = new User();

            $userCode = User::orderBy("code", "DESC")->first();

            if ($userCode) {
                $newUser->code = $userCode->code + 1;
            } else {
                $newUser->code = 1;
            }
            $newUser->type = 0;
            $newUser->password = Hash::make($request->password);
            $newUser->created_user_code = Auth::user()->code;
        } else {
            $newUser->updated_user_code = Auth::user()->code;
        }

        $newUser->name = $request->name;
        $newUser->email = $request->email;

        if ($request->active) $newUser->active = 1;
        else $newUser->active = 0;

        $newUser->save();

        return redirect()->route("userScreen");
    }

    public function deleteUser(Request $request)
    {
        $user = User::Where("code", $request->code)->first();

        if (!$user || $user->deleted == 1) {
            return redirect()->route("userScreen")->with("error", "Böyle bir kullanıcı bulunamadı");
        }

        $user->deleted = 1;
        $user->updated_user_code = Auth::user()->code;
        $user->save();

        return redirect()->route("userScreen")->with("success", "Başarılı bir şekilde veri silindi");
    }

    public function changePassword(Request $request)
    {
        $user = User::Where("code", $request->code)->where("deleted", 0)->first();
        if (!$user) {
            return redirect()->route("userScreen")->with("error", "Şifre değiştirilirken bir hata meydana geldi.");
        }

        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route("userScreen")->with("success", "Başarılı bir şekilde şifre değiştirildi.");
    }
}
