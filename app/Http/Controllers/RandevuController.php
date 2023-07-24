<?php

namespace App\Http\Controllers;

use App\Models\Randevu;
use Illuminate\Http\Request;

class RandevuController extends Controller
{
    public function randevuScreen()
    {
        $randevu = Randevu::where("deleted", 0)->get();

        return view("Admin.randevu.list", ["randevu" => $randevu]);
    }
}
