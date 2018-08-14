<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\ScienceModel;
use App\Models\CourseModel;
use App\Models\SpecializeModel;

class WidenController extends Controller
{
    public function getKhoahoc() {
    	return view('backend.morong.adm_science');
    }
}
