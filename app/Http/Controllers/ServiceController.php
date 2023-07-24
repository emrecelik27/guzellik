<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function serviceScreen()
    {

        $services = Service::where("deleted", 0)->get();
        return view("admin.services.list", ["services" => $services]);
    }

    public function createServiceScreen(Request $request)
    {
        $service = Service::Where("code", $request->code)->first();

        return view("admin.services.create", ["service" => $service]);
    }

    public function createService(Request $request)
    {
        $newService = Service::where("code", $request->code)->first();

        if (!$newService) {
            $newService = new Service();

            $serviceCode = Service::orderBy("code", "DESC")->first();

            if ($serviceCode) {
                $newService->code = $serviceCode->code + 1;
            } else {
                $newService->code = 1;
            }

            $newService->created_user_code = Auth::user()->code;
        } else {
            $newService->updated_user_code = Auth::user()->code;
        }


        $newService->title = $request->title;
        $newService->mini_description = $request->mini_description;
        $newService->description = $request->description;

        if ($request->file('image')) {
            $path = "assets/other/images/services";
            $name = $newService->code . "." . $request->file("image")->getClientOriginalExtension();

            $request->file('image')->move(public_path($path), $name);

            $newService->image_url = $path . "/" . $name;
        }



        $newService->save();

        return redirect()->route("serviceScreen");
    }

    public function deleteService(Request $request)
    {
        $service = Service::Where("code", $request->code)->first();

        if (!$service || $service->deleted == 1) {
            return redirect()->route("serviceScreen")->with("error", "Böyle bir hizmet bulunamadı");
        }

        $service->deleted = 1;
        $service->updated_user_code = Auth::user()->code;
        $service->save();

        return redirect()->route("serviceScreen")->with("success", "Başarılı bir şekilde veri silindi");
    }
}
