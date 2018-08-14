<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\sinhvien\AddUser1Requeset;
use App\Http\Controllers\Controller;
use App\Models\UserModel;
use App\Models\StudentModel;
use App\Models\danhmuckhac\AreaModel;
use Excel;
use DB;
use Input;

class StudentController extends Controller
{
	//Thông tin sinh viên
    public function getThongtin() {
    	$data['std'] = StudentModel::paginate(20);
    	return view('backend.sinhvien.adm_sinhvien', $data);
    }
    public function getThemmot() {
    	$data['area'] = AreaModel::all();
    	return view('backend.sinhvien.adm_sinhvien_add', $data);
    }
    public function postThemmot(AddUser1Requeset $request) {
    	$filename = $request->std_img->getClientOriginalName();
    	$std = new StudentModel;
    	$std->student_code = $request->std_code;
    	$std->student_name = $request->std_name;
    	$std->student_slug = str_slug($request->std_name);
    	$std->student_img = $filename;
    	$std->student_birthday = $request->std_birthday;
    	$std->student_gender = $request->std_gender;
    	$std->student_phone = $request->std_phone;
    	$std->student_email = $request->std_email;
    	$std->student_specialize = $request->std_specialize;
    	$std->student_course = $request->std_course;
    	$std->student_science = $request->std_science;
    	$std->student_class = $request->std_class;
    	$std->student_head_teacher = $request->std_head_teacher;
    	$std->student_address = $request->std_address;
    	$std->student_employment_status = $request->std_employ_status;
    	$std->student_employment_name = $request->std_employ_name;
    	$std->student_company_name = $request->std_company_name;
    	$std->student_timeserving = $request->std_timeserving;
    	$std->student_tick = 1;
		$std->area_id = $request->std_area;
		$std->save();
		$request->std_img->storeAs('sinhvien', $filename);

    	return redirect()->intended('admin/sinhvien/thongtin');
    }
    public function getEditThemmot() {
        $data['area'] = AreaModel::all();
        return view('backend.sinhvien.adm_sinhvien_edit', $data);
    }
    public function postEditThemmot(AddUser1Requeset $request, $id) {
        $filename = $request->std_img->getClientOriginalName();
        $std = StudentModel::find($id);
        $std->student_code = $request->std_code;
        $std->student_name = $request->std_name;
        $std->student_slug = str_slug($request->std_name);
        $std->student_img = $filename;
        $std->student_birthday = $request->std_birthday;
        $std->student_gender = $request->std_gender;
        $std->student_phone = $request->std_phone;
        $std->student_email = $request->std_email;
        $std->student_specialize = $request->std_specialize;
        $std->student_course = $request->std_course;
        $std->student_science = $request->std_science;
        $std->student_class = $request->std_class;
        $std->student_head_teacher = $request->std_head_teacher;
        $std->student_address = $request->std_address;
        $std->student_employment_status = $request->std_employ_status;
        $std->student_employment_name = $request->std_employ_name;
        $std->student_company_name = $request->std_company_name;
        $std->student_timeserving = $request->std_timeserving;
        $std->student_tick = 1;
        $std->area_id = $request->std_area;
        $std->save();
        $request->std_img->storeAs('sinhvien', $filename);

        return redirect()->intended('admin/sinhvien/thongtin');
    }

    public function getThemnhieu() {
    	$data['area'] = AreaModel::all();
    	return view('backend.sinhvien.adm_sinhvien_add_file', $data);
    }
    public function postThemnhieu(Request $request) {

        if($request->hasFile('std_img')){

            $path = $request->file('std_img')->getRealPath();
            $data = Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] = [
                        'student_code' => $value->masv,
                        'student_name' => $value->hoten,
                        'student_slug' => str_slug($value->hoten),
                        'student_img' => 'fdsfsdf.jpg',
                        'student_birthday' => $value->date,
                        'student_gender' => $value->gioitinh,
                        'student_phone' => $value->dienthoai,
                        'student_email' => 'a@gmail.com',
                        'student_specialize' => 'sfsdf',
                        'student_course' => $value->khoahoc,
                        'student_science' => $value->nhaphoc,
                        'student_class' => $value->lop,
                        'student_head_teacher' => 'sfdfdsf',
                        'student_address' => $value->noisinh,
                        'area_id'=>1,
                    ];
                }
                if(!empty($arr)){
                    DB::table('uec_student')->insert($arr);
                    dd('Insert Record successfully.');
                    // return redirect()
                }
            }
        }
        dd('Request data does not have any files to import.'); 
    }

    public function getDeleteThongtin($id) {
        StudentModel::destroy($id);
        return back()->with("success", "Xóa hình thức thành công");
    }

    // Tài khoản sinh viên
    public function getTaikhoan() {
    	$data['area'] = AreaModel::all();
    	return view('backend.sinhvien.adm_sinhvien_taikhoan', $data);
    }
    public function postTaikhoan(AddUser1Requeset $request) {
    	$filename = $request->std_img->getClientOriginalName();
    	$std = new StudentModel;
    	$std->student_code = $request->std_code;
    	$std->student_name = $request->std_name;
    	$std->student_slug = str_slug($request->std_name);
    	$std->student_img = $filename;
    	$std->student_birthday = $request->std_birthday;
    	$std->student_gender = $request->std_gender;
    	$std->student_phone = $request->std_phone;
    	$std->student_email = $request->std_email;
    	$std->student_specialize = $request->std_specialize;
    	$std->student_course = $request->std_course;
    	$std->student_science = $request->std_science;
    	$std->student_class = $request->std_class;
    	$std->student_head_teacher = $request->std_head_teacher;
    	$std->student_address = $request->std_address;
    	$std->student_employment_status = $request->std_employ_status;
    	$std->student_employment_name = $request->std_employ_name;
    	$std->student_company_name = $request->std_company_name;
    	$std->student_timeserving = $request->std_timeserving;
    	$std->student_tick = 1;
		$std->area_id = $request->std_area;
		$std->save();
		$request->std_img->storeAs('sinhvien', $filename);

    	return back();
    }

}
