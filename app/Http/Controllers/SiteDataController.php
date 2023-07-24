<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Galeri;
use App\Models\KeyValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteDataController extends Controller
{
    public function logoScreen()
    {
        $admin_main_logo = KeyValue::Where("key", "admin_main_logo")->first();
        $admin_mini_logo = KeyValue::Where("key", "admin_mini_logo")->first();
        $index_main_logo = KeyValue::Where("key", "index_main_logo")->first();
        $index_footer_logo = KeyValue::Where("key", "index_footer_logo")->first();

        return view("Admin.siteData.logo", ["admin_main_logo" => $admin_main_logo, "admin_mini_logo" => $admin_mini_logo, "index_main_logo" => $index_main_logo, "index_footer_logo" => $index_footer_logo]);
    }

    public function changeLogo(Request $request)
    {

        if ($request->file("admin_main_logo")) {
            $admin_main_logo = KeyValue::Where("key", "admin_main_logo")->first();

            if (!$admin_main_logo) {
                $admin_main_logo = new KeyValue();
                $admin_main_logo->key = "admin_main_logo";
                $admin_main_logo->created_user_code = Auth::user()->code;

                $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

                if ($keyValueCode) {
                    $admin_main_logo->code = $keyValueCode->code + 1;
                } else {
                    $admin_main_logo->code = 1;
                }
            } else {
                $admin_main_logo->updated_user_code = Auth::user()->code;
            }

            $path = "assets/other/images/logo";
            $name = "admin_main_logo" . "." . $request->file("admin_main_logo")->getClientOriginalExtension();

            $request->file('admin_main_logo')->move(public_path($path), $name);

            $admin_main_logo->value = $path . "/" . $name;

            $admin_main_logo->save();
        }

        if ($request->file("admin_mini_logo")) {
            $admin_mini_logo = KeyValue::Where("key", "admin_mini_logo")->first();

            if (!$admin_mini_logo) {
                $admin_mini_logo = new KeyValue();
                $admin_mini_logo->key = "admin_mini_logo";
                $admin_mini_logo->created_user_code = Auth::user()->code;

                $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

                if ($keyValueCode) {
                    $admin_mini_logo->code = $keyValueCode->code + 1;
                } else {
                    $admin_mini_logo->code = 1;
                }
            } else {
                $admin_mini_logo->updated_user_code = Auth::user()->code;
            }

            $path = "assets/other/images/logo";
            $name = "admin_mini_logo" . "." . $request->file("admin_mini_logo")->getClientOriginalExtension();

            $request->file('admin_mini_logo')->move(public_path($path), $name);

            $admin_mini_logo->value = $path . "/" . $name;

            $admin_mini_logo->save();
        }

        if ($request->file("index_main_logo")) {
            $index_main_logo = KeyValue::Where("key", "index_main_logo")->first();

            if (!$index_main_logo) {
                $index_main_logo = new KeyValue();
                $index_main_logo->key = "index_main_logo";
                $index_main_logo->created_user_code = Auth::user()->code;

                $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

                if ($keyValueCode) {
                    $index_main_logo->code = $keyValueCode->code + 1;
                } else {
                    $index_main_logo->code = 1;
                }
            } else {
                $index_main_logo->updated_user_code = Auth::user()->code;
            }

            $path = "assets/other/images/logo";
            $name = "index_main_logo" . "." . $request->file("index_main_logo")->getClientOriginalExtension();

            $request->file('index_main_logo')->move(public_path($path), $name);

            $index_main_logo->value = $path . "/" . $name;

            $index_main_logo->save();
        }

        if ($request->file("index_footer_logo")) {
            $index_footer_logo = KeyValue::Where("key", "index_footer_logo")->first();

            if (!$index_footer_logo) {
                $index_footer_logo = new KeyValue();
                $index_footer_logo->key = "index_footer_logo";
                $index_footer_logo->created_user_code = Auth::user()->code;

                $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

                if ($keyValueCode) {
                    $index_footer_logo->code = $keyValueCode->code + 1;
                } else {
                    $index_footer_logo->code = 1;
                }
            } else {
                $index_footer_logo->updated_user_code = Auth::user()->code;
            }

            $path = "assets/other/images/logo";
            $name = "index_footer_logo" . "." . $request->file("index_footer_logo")->getClientOriginalExtension();

            $request->file('index_footer_logo')->move(public_path($path), $name);

            $index_footer_logo->value = $path . "/" . $name;

            $index_footer_logo->save();
        }

        return redirect()->route("logoScreen")->with("success", "Başarılı bir şekilde veriler güncellendi.");
    }

    public function footerScreen()
    {
        $admin_footer = KeyValue::Where("key", "admin_footer")->first();
        $index_footer = KeyValue::Where("key", "index_footer")->first();

        return view("Admin.siteData.footer", ["admin_footer" => $admin_footer, "index_footer" => $index_footer]);
    }

    public function changeFooter(Request $request)
    {

        if (!empty($request->admin_footer)) {
            $admin_footer = KeyValue::Where("key", "admin_footer")->first();

            if (!$admin_footer) {
                $admin_footer = new KeyValue();
                $admin_footer->key = "admin_footer";
                $admin_footer->created_user_code = Auth::user()->code;

                $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

                if ($keyValueCode) {
                    $admin_footer->code = $keyValueCode->code + 1;
                } else {
                    $admin_footer->code = 1;
                }
            } else {
                $admin_footer->updated_user_code = Auth::user()->code;
            }

            $admin_footer->value = $request->admin_footer;
            $admin_footer->save();
        }

        if (!empty($request->index_footer)) {
            $index_footer = KeyValue::Where("key", "index_footer")->first();

            if (!$index_footer) {
                $index_footer = new KeyValue();
                $index_footer->key = "index_footer";
                $index_footer->created_user_code = Auth::user()->code;

                $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

                if ($index_footer) {
                    $index_footer->code = $keyValueCode->code + 1;
                } else {
                    $index_footer->code = 1;
                }
            } else {
                $index_footer->updated_user_code = Auth::user()->code;
            }

            $index_footer->value = $request->index_footer;
            $index_footer->save();
        }

        return redirect()->route("footerScreen")->with("success", "Başarılı bir şekilde veriler güncellendi.");
    }

    public function socialMediaScreen()
    {
        $facebook = KeyValue::Where("key", "facebook")->first();
        $twitter = KeyValue::Where("key", "twitter")->first();
        $instagram = KeyValue::Where("key", "instagram")->first();

        return view("Admin.siteData.socailMedia", ["facebook" => $facebook, "twitter" => $twitter, "instagram" => $instagram]);
    }

    public function changeSocialMedia(Request $request)
    {
        $facebook = KeyValue::Where("key", "facebook")->first();
        $twitter = KeyValue::Where("key", "twitter")->first();
        $instagram = KeyValue::Where("key", "instagram")->first();

        if (!$request->facebook || $request->facebook == "") {
            if ($facebook) {
                $facebook->delete();
            }
        } else {
            if ($facebook) {
                $facebook->updated_user_code = Auth::user()->code;
            } else {
                $facebook = new KeyValue();
                $facebook->key = "facebook";

                $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

                if ($keyValueCode) {
                    $facebook->code = $keyValueCode->code + 1;
                } else {
                    $facebook->code = 1;
                }

                $facebook->created_user_code = Auth::user()->code;
            }
            $facebook->value = $request->facebook;

            $facebook->save();
        }

        if (!$request->twitter || $request->twitter == "") {
            if ($twitter) {
                $twitter->delete();
            }
        } else {
            if ($twitter) {
                $twitter->updated_user_code = Auth::user()->code;
            } else {
                $twitter = new KeyValue();
                $twitter->key = "twitter";

                $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

                if ($keyValueCode) {
                    $twitter->code = $keyValueCode->code + 1;
                } else {
                    $twitter->code = 1;
                }

                $twitter->created_user_code = Auth::user()->code;
            }
            $twitter->value = $request->twitter;

            $twitter->save();
        }

        if (!$request->instagram || $request->instagram == "") {
            if ($instagram) {
                $instagram->delete();
            }
        } else {
            if ($instagram) {
                $instagram->updated_user_code = Auth::user()->code;
            } else {
                $instagram = new KeyValue();
                $instagram->key = "instagram";

                $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

                if ($keyValueCode) {
                    $instagram->code = $keyValueCode->code + 1;
                } else {
                    $instagram->code = 1;
                }

                $instagram->created_user_code = Auth::user()->code;
            }
            $instagram->value = $request->instagram;

            $instagram->save();
        }

        return redirect()->route("socialMediaScreen")->with("success", "Başarılı bir şekidle veriler güncellendi");
    }

    public function workTimeScreen()
    {
        $general = KeyValue::Where("key", "general_worktime")->first();

        $pazartesi = KeyValue::Where("key", "pazartesi_worktime")->first();
        $sali = KeyValue::Where("key", "sali_worktime")->first();
        $carsamba = KeyValue::Where("key", "carsamba_worktime")->first();
        $persembe = KeyValue::Where("key", "persembe_worktime")->first();
        $cuma = KeyValue::Where("key", "cuma_worktime")->first();
        $cumartesi = KeyValue::Where("key", "cumartesi_worktime")->first();
        $pazar = KeyValue::Where("key", "pazar_worktime")->first();

        return view("Admin.siteData.workTime", ["general" => $general, "pazartesi" => $pazartesi, "sali" => $sali, "carsamba" => $carsamba, "persembe" => $persembe, "cuma" => $cuma, "cumartesi" => $cumartesi, "pazar" => $pazar]);
    }

    public function changeWorkTime(Request $request)
    {
        $general = KeyValue::Where("key", "general_worktime")->first();

        $pazartesi = KeyValue::Where("key", "pazartesi_worktime")->first();
        $sali = KeyValue::Where("key", "sali_worktime")->first();
        $carsamba = KeyValue::Where("key", "carsamba_worktime")->first();
        $persembe = KeyValue::Where("key", "persembe_worktime")->first();
        $cuma = KeyValue::Where("key", "cuma_worktime")->first();
        $cumartesi = KeyValue::Where("key", "cumartesi_worktime")->first();
        $pazar = KeyValue::Where("key", "pazar_worktime")->first();

        if (!$general) {
            $general = new KeyValue();
            $general->key = "general_worktime";
            $general->created_user_code = Auth::user()->code;

            $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

            if ($keyValueCode) {
                $general->code = $keyValueCode->code + 1;
            } else {
                $general->code = 1;
            }
        } else {
            $general->updated_user_code = Auth::user()->code;
        }

        $general->value = $request->general;

        $general->save();

        if (!$pazartesi) {
            $pazartesi = new KeyValue();
            $pazartesi->key = "pazartesi_worktime";
            $pazartesi->created_user_code = Auth::user()->code;

            $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

            if ($keyValueCode) {
                $pazartesi->code = $keyValueCode->code + 1;
            } else {
                $pazartesi->code = 1;
            }
        } else {
            $pazartesi->updated_user_code = Auth::user()->code;
        }

        $pazartesi->value = $request->pazartesi;

        $pazartesi->save();

        if (!$sali) {
            $sali = new KeyValue();
            $sali->key = "sali_worktime";
            $sali->created_user_code = Auth::user()->code;

            $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

            if ($keyValueCode) {
                $sali->code = $keyValueCode->code + 1;
            } else {
                $sali->code = 1;
            }
        } else {
            $sali->updated_user_code = Auth::user()->code;
        }

        $sali->value = $request->sali;

        $sali->save();

        if (!$carsamba) {
            $carsamba = new KeyValue();
            $carsamba->key = "carsamba_worktime";
            $carsamba->created_user_code = Auth::user()->code;

            $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

            if ($keyValueCode) {
                $carsamba->code = $keyValueCode->code + 1;
            } else {
                $carsamba->code = 1;
            }
        } else {
            $carsamba->updated_user_code = Auth::user()->code;
        }

        $carsamba->value = $request->carsamba;

        $carsamba->save();

        if (!$persembe) {
            $persembe = new KeyValue();
            $persembe->key = "persembe_worktime";
            $persembe->created_user_code = Auth::user()->code;

            $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

            if ($keyValueCode) {
                $persembe->code = $keyValueCode->code + 1;
            } else {
                $persembe->code = 1;
            }
        } else {
            $persembe->updated_user_code = Auth::user()->code;
        }

        $persembe->value = $request->persembe;

        $persembe->save();

        if (!$cuma) {
            $cuma = new KeyValue();
            $cuma->key = "cuma_worktime";
            $cuma->created_user_code = Auth::user()->code;

            $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

            if ($keyValueCode) {
                $cuma->code = $keyValueCode->code + 1;
            } else {
                $cuma->code = 1;
            }
        } else {
            $cuma->updated_user_code = Auth::user()->code;
        }

        $cuma->value = $request->cuma;

        $cuma->save();

        if (!$cumartesi) {
            $cumartesi = new KeyValue();
            $cumartesi->key = "cumartesi_worktime";
            $cumartesi->created_user_code = Auth::user()->code;

            $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

            if ($keyValueCode) {
                $cumartesi->code = $keyValueCode->code + 1;
            } else {
                $cumartesi->code = 1;
            }
        } else {
            $cumartesi->updated_user_code = Auth::user()->code;
        }

        $cumartesi->value = $request->cumartesi;

        $cumartesi->save();

        if (!$pazar) {
            $pazar = new KeyValue();
            $pazar->key = "pazar_worktime";
            $pazar->created_user_code = Auth::user()->code;

            $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

            if ($keyValueCode) {
                $pazar->code = $keyValueCode->code + 1;
            } else {
                $pazar->code = 1;
            }
        } else {
            $pazar->updated_user_code = Auth::user()->code;
        }

        $pazar->value = $request->pazar;

        $pazar->save();

        return redirect()->route("workTimeScreen")->with("success", "Başarılı bir şekilde veriler değiştirildi");
    }

    public function sliderScreen()
    {
        $slider_1_title = KeyValue::Where("key", "slider_1_title")->first();
        $slider_1 = KeyValue::Where("key", "slider_1")->first();

        $slider_2_title = KeyValue::Where("key", "slider_2_title")->first();
        $slider_2 = KeyValue::Where("key", "slider_2")->first();

        $slider_3_title = KeyValue::Where("key", "slider_3_title")->first();
        $slider_3 = KeyValue::Where("key", "slider_3")->first();

        return view("Admin.siteData.slider", ["slider_1_title" => $slider_1_title, "slider_1" => $slider_1, "slider_2_title" => $slider_2_title, "slider_2" => $slider_2, "slider_3_title" => $slider_3_title, "slider_3" => $slider_3]);
    }

    public function changeSlider(Request $request)
    {
        $slider_1_title = KeyValue::Where("key", "slider_1_title")->first();
        $slider_1 = KeyValue::Where("key", "slider_1")->first();

        $slider_2_title = KeyValue::Where("key", "slider_2_title")->first();
        $slider_2 = KeyValue::Where("key", "slider_2")->first();

        $slider_3_title = KeyValue::Where("key", "slider_3_title")->first();
        $slider_3 = KeyValue::Where("key", "slider_3")->first();

        if (!$slider_1_title) {
            $slider_1_title = new KeyValue();
            $slider_1_title->key = "slider_1_title";
            $slider_1_title->created_user_code = Auth::user()->code;

            $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

            if ($keyValueCode) {
                $slider_1_title->code = $keyValueCode->code + 1;
            } else {
                $slider_1_title->code = 1;
            }
        } else {
            $slider_1_title->updated_user_code = Auth::user()->code;
        }

        $slider_1_title->value = $request->slider_1_title;

        $slider_1_title->save();

        if (!$slider_1) {
            $slider_1 = new KeyValue();
            $slider_1->key = "slider_1";
            $slider_1->created_user_code = Auth::user()->code;

            $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

            if ($keyValueCode) {
                $slider_1->code = $keyValueCode->code + 1;
            } else {
                $slider_1->code = 1;
            }
        } else {
            $slider_1->updated_user_code = Auth::user()->code;
        }

        $slider_1->value = $request->slider_1;

        $slider_1->save();

        if (!$slider_2_title) {
            $slider_2_title = new KeyValue();
            $slider_2_title->key = "slider_2_title";
            $slider_2_title->created_user_code = Auth::user()->code;

            $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

            if ($keyValueCode) {
                $slider_2_title->code = $keyValueCode->code + 1;
            } else {
                $slider_2_title->code = 1;
            }
        } else {
            $slider_2_title->updated_user_code = Auth::user()->code;
        }

        $slider_2_title->value = $request->slider_2_title;

        $slider_2_title->save();

        if (!$slider_2) {
            $slider_2 = new KeyValue();
            $slider_2->key = "slider_2";
            $slider_2->created_user_code = Auth::user()->code;

            $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

            if ($keyValueCode) {
                $slider_2->code = $keyValueCode->code + 1;
            } else {
                $slider_2->code = 1;
            }
        } else {
            $slider_2->updated_user_code = Auth::user()->code;
        }

        $slider_2->value = $request->slider_2;

        $slider_2->save();

        if (!$slider_3_title) {
            $slider_3_title = new KeyValue();
            $slider_3_title->key = "slider_3_title";
            $slider_3_title->created_user_code = Auth::user()->code;

            $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

            if ($keyValueCode) {
                $slider_3_title->code = $keyValueCode->code + 1;
            } else {
                $slider_3_title->code = 1;
            }
        } else {
            $slider_3_title->updated_user_code = Auth::user()->code;
        }

        $slider_3_title->value = $request->slider_3_title;

        $slider_3_title->save();

        if (!$slider_3) {
            $slider_3 = new KeyValue();
            $slider_3->key = "slider_3";
            $slider_3->created_user_code = Auth::user()->code;

            $keyValueCode = KeyValue::orderBy("code", "DESC")->first();

            if ($keyValueCode) {
                $slider_3->code = $keyValueCode->code + 1;
            } else {
                $slider_3->code = 1;
            }
        } else {
            $slider_3->updated_user_code = Auth::user()->code;
        }

        $slider_3->value = $request->slider_3;

        $slider_3->save();

        return redirect()->route("sliderScreen")->with("success", "Başarılı bir şekilde veriler değiştirildi");
    }

    public function videoScreen()
    {
        return view("Admin.siteData.video");
    }

    public function changeVideo(Request $request)
    {
        if ($request->file('mini_picture')) {
            $path = "assets/other/images/video";
            $name = "mini_picture." . $request->file("mini_picture")->getClientOriginalExtension();

            $request->file('mini_picture')->move(public_path($path), $name);

            $mini_picture = new File();

            $fileCode = File::orderBy("code", "DESC")->first();

            if ($fileCode) {
                $mini_picture->code = $fileCode->code + 1;
            } else {
                $mini_picture->code = 1;
            }


            $mini_picture->type = "mini_picture";
            $mini_picture->type_code = "0";
            $mini_picture->file_type = $request->file("mini_picture")->getClientOriginalExtension();
            $mini_picture->file_url = $path . "/" . $name;
            $mini_picture->created_user_code = Auth::user()->code;
            $mini_picture->updated_user_code = Auth::user()->code;

            $mini_picture->save();
        }

        if ($request->file('video')) {
            $path = "assets/other/videos";
            $name = "main_video." . $request->file("video")->getClientOriginalExtension();

            $request->file('video')->move(public_path($path), $name);

            $main_video = new File();

            $fileCode = File::orderBy("code", "DESC")->first();

            if ($fileCode) {
                $main_video->code = $fileCode->code + 1;
            } else {
                $main_video->code = 1;
            }


            $main_video->type = "main_video";
            $main_video->type_code = "0";
            $main_video->file_type = $request->file("video")->getClientOriginalExtension();
            $main_video->file_url = $path . "/" . $name;
            $main_video->created_user_code = Auth::user()->code;
            $main_video->updated_user_code = Auth::user()->code;

            $main_video->save();
        }

        return redirect()->route("videoScreen")->with("success", "Başarılı bir şekilde veriler güncellendi.");
    }
}
