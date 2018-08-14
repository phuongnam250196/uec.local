<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\giaovien\AddTeacherInfoRequest;
use App\Http\Requests\giaovien\EditTeacherInfoRequest;

use App\Models\TeacherModel;
use App\Models\danhmuckhac\AreaModel;

use DB;

class TeacherController extends Controller
{
	// Thông tin giáo viên
    public function getThongtin() {
    	$area = AreaModel::all();
    	$teach = TeacherModel::paginate(2);
    	return view('backend.giaovien.adm_giaovien')->with(compact('area', 'teach'));
    }
    public function postThongtin(AddTeacherInfoRequest $request) {
    	$filename = $request->gv_img->getClientOriginalName();
    	$teach = new TeacherModel;
    	$teach->teacher_name = $request->gv_name;
    	$teach->teacher_slug = str_slug($request->gv_name);
    	$teach->teacher_img = $filename;
    	$teach->teacher_birthday = $request->gv_birthday;;
    	$teach->teacher_email = $request->gv_email;
    	$teach->teacher_phone = $request->gv_phone;
    	$teach->teacher_science = $request->gv_science;
    	$teach->teacher_address = $request->gv_address;
		$teach->area_id = $request->gv_area;
		$teach->save();
		$request->gv_img->storeAs('giaovien', $filename);
    	return back();
    }
    public function getEditThongtin($id) {
        $data['area'] = AreaModel::all();
        $data['teach'] = TeacherModel::find($id);
        return view('backend.giaovien.adm_giaovien_edit', $data);
    }
    public function postEditThongtin(EditTeacherInfoRequest $request, $id) {
        $filename = $request->gv_img->getClientOriginalName();
        $teach =TeacherModel::find($id);
        $teach->teacher_name = $request->gv_name;
        $teach->teacher_slug = str_slug($request->gv_name);
        $teach->teacher_img = $filename;
        $teach->teacher_birthday = $request->gv_birthday;;
        $teach->teacher_email = $request->gv_email;
        $teach->teacher_phone = $request->gv_phone;
        $teach->teacher_science = $request->gv_science;
        $teach->teacher_address = $request->gv_address;
        $teach->area_id = $request->gv_area;
        $teach->save();
        $request->gv_img->storeAs('giaovien', $filename);
        return redirect()->intended('admin/giaovien/thongtin')->with("success", "Sửa thông tin giáo viên thành công");;
    }
    public function getDeleteThongtin($id) {
        TeacherModel::destroy($id);
        return back()->with("success", "Xóa thông tin giáo viên thành công");
    }


    // Tài khoản giáo viên
    public function getTaikhoan() {
        $data['teach'] = TeacherModel::all();
        // dd($data);
        $data['list_user'] = DB::table('uec_teacher')
        ->join('uec_user', 'uec_user.teacher_id', '=', 'uec_teacher.id')
        ->join('uec_area', 'uec_area.id', '=', 'uec_teacher.area_id')
        ->paginate(5);
        return view('backend.giaovien.adm_giaovien_taikhoan', $data);
    }
    public function postTaikhoan(AddTeacherUserRequest $request) {
        $teach_user = new UserModel;
        $teach_user->user_name=$request->gv_user_name;
        $teach_user->password=bcrypt($request->gv_user_pass);
        $teach_user->id=$request->gv_user_info;
        $teach_user->user_level = 4;
        $teach_user->save();
        return back();
    }
    public function getEditTaikhoan($id) {
        $data['teach'] = TeacherModel::all();
        $data['list_user'] = UserModel::find($id);
        return view('backend.giaovien.adm_giaovien_taikhoan_edit', $data);
    }
    public function postEditTaikhoan(EditTeacherUserRequest $request, $id) {
        $teach = UserModel::find($id);
        $teach_user->user_name=$request->gv_user_name;
        $teach_user->password=bcrypt($request->gv_user_pass);
        $teach_user->id=$request->gv_user_info;
        $teach_user->user_level = 4;
        $teach_user->save();
        return redirect()->intended('admin/giaovien/taikhoan')->with("success", "Sửa tài khoản giáo viên thành công");
    }
    public function getDeleteTaikhoan($id) {
        UserModel::destroy($id);
        return back()->with("success", "Xóa thông tin giáo viên thành công");
    }
}
