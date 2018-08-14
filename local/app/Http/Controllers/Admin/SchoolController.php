<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\nhatruong\AddSchoolInfoRequest;
use App\Http\Controllers\Controller;
use App\Models\danhmuckhac\AreaModel;
use App\Models\SchoolModel;
use DB;

class SchoolController extends Controller
{
    public function getThongtin() {
    	$data['area'] = AreaModel::all();
        $data['school'] = DB::table('uec_school')->get()->toArray();
        // dd($data);
    	return view('backend.nhatruong.adm_nhatruong', $data);
    }
    public function postThongtin(AddSchoolInfoRequest $request) {
    	$filename = $request->nt_logo->getClientOriginalName();
    	$scl = new SchoolModel;
    	$scl->school_code = $request->nt_code;
    	$scl->school_name = $request->nt_name;
    	$scl->school_slug = str_slug($request->nt_name);
    	$scl->school_logo = $filename;
    	$scl->school_address = $request->nt_address;
    	$scl->school_email = $request->nt_email;
    	$scl->school_phone = $request->nt_phone;
    	$scl->school_web = $request->nt_website;
    	$scl->school_describe = $request->nt_describe;
		$scl->area_id = $request->nt_area;
		$scl->save();
		$request->nt_logo->storeAs('school', $filename);
    	return back();
    }
    public function getTaikhoan() {
    	return view('backend.nhatruong.adm_nhatruong_taikhoan');
    }
}
