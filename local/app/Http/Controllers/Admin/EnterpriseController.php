<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\EnterpriseInfoRequest;
use App\Http\Requests\doanhnghiep\AddUserEnterprisesRequest;
use App\Http\Requests\doanhnghiep\EditEnterprisesInfoRequest;
use App\Http\Requests\doanhnghiep\EditUserEnterprisesRequest;
use App\Http\Controllers\Controller;

use App\Models\danhmuckhac\AreaModel;
use App\Models\EnterprisesModel;
use App\Models\UserModel;

use DB;
use Response;
// use Url;
class EnterpriseController extends Controller
{
	// Thông tin doanh nghiệp
    public function getThongtin() {
    	$data['area'] = AreaModel::all();
    	$data['enter'] = EnterprisesModel::orderBy('id', 'desc')->paginate(2);
    	return view('backend.doanhnghiep.adm_doanhnghiep', $data);
    }
    public function postThongtin(EnterpriseInfoRequest $request) {
    	$filename = $request->dn_logo->getClientOriginalName();
    	$enter = new EnterprisesModel;
    	$enter->enterprise_name = $request->dn_acronym;
    	$enter->enterprise_full_name = $request->dn_name;
    	$enter->enterprise_slug = str_slug($request->dn_name);
    	$enter->enterprise_logo = $filename;
    	$enter->enterprise_size = $request->dn_size;
    	$enter->enterprise_address = $request->dn_address;
    	$enter->enterprise_tax_code = $request->dn_tax_code;
    	$enter->enterprise_email = $request->dn_email;
    	$enter->enterprise_phone = $request->dn_phone;
    	$enter->enterprise_web = $request->dn_website;
    	$enter->enterprise_describe = $request->dn_describe;
		$enter->area_id = $request->dn_area;
		$enter->save();
		$request->dn_logo->storeAs('public', $filename);
    	return back();
    }
    public function getEditThongtin($id) {
        $data['area'] = AreaModel::all();
        $data['enp'] = EnterprisesModel::find($id);
        return view('backend.doanhnghiep.adm_doanhnghiep_edit', $data);
    }
    public function postEditThongtin(EditEnterprisesInfoRequest $request, $id) {
        $enter = EnterprisesModel::find($id);
        $filename = $request->dn_logo->getClientOriginalName();
        $enter->enterprise_name = $request->dn_acronym;
        $enter->enterprise_full_name = $request->dn_name;
        $enter->enterprise_slug = str_slug($request->dn_name);
        $enter->enterprise_logo = $filename;
        $enter->enterprise_size = $request->dn_size;
        $enter->enterprise_address = $request->dn_address;
        $enter->enterprise_tax_code = $request->dn_tax_code;
        $enter->enterprise_email = $request->dn_email;
        $enter->enterprise_phone = $request->dn_phone;
        $enter->enterprise_web = $request->dn_website;
        $enter->enterprise_describe = $request->dn_describe;
        $enter->area_id = $request->dn_area;
        $enter->save();
        $request->dn_logo->storeAs('public', $filename);
        return redirect()->intended('admin/doanhnghiep/thongtin')->with("success", "Sửa thông tin doanh nghiệp thành công");
    }
    public function getDeleteThongtin($id) {
        // EnterprisesModel::destroy($id);
        // return back()->with("success", "Xóa thông tin doanh nghiệp thành công");
        $a = EnterprisesModel::destroy($id);
        return Response::json($a);
    }

    // Tài khoản doanh nghiệp
    public function getTaikhoan() {
        $data['enter'] = EnterprisesModel::all();
        $data['list_user'] = DB::table('uec_enterprises')
        ->join('uec_user', 'uec_user.enterprise_id', '=', 'uec_enterprises.id')
        ->join('uec_area', 'uec_area.id', '=', 'uec_enterprises.area_id')
        ->paginate(5);
    	return view('backend.doanhnghiep.adm_doanhnghiep_taikhoan', $data);
        // dd($data);
    }
    public function postTaikhoan(AddUserEnterprisesRequest $request) {
    	$enter_user = new UserModel;
    	$enter_user->user_name=$request->dn_user_name;
    	$enter_user->password=bcrypt($request->dn_user_pass);
    	$enter_user->enterprise_id=$request->dn_user_info;
    	$enter_user->user_level = 2;
    	$enter_user->save();
    	return back();
    }
    public function getEditTaikhoan($id) {
        $data['enter'] = EnterprisesModel::all();
        $data['list_user'] = UserModel::find($id);
        // return view('backend.doanhnghiep.adm_doanhnghiep_taikhoan_edit', $data);
        dd($data);
    }
    public function postEditTaikhoan(EditUserEnterprisesRequest $request, $id) {
        $enter = UserModel::find($id);
        $enter_user->user_name=$request->dn_user_name;
        $enter_user->password=bcrypt($request->dn_user_pass);
        $enter_user->enterprise_id=$request->dn_user_info;
        $enter_user->user_level = 2;
        $enter_user->save();
        return redirect()->intended('admin/doanhnghiep/taikhoan')->with("success", "Sửa tài khoản doanh nghiệp thành công");
    }
    public function getDeleteTaikhoan($id) {
        UserModel::destroy($id);
        return back()->with("success", "Xóa thông tin doanh nghiệp thành công");
    }

    public function getChitiet($id) {
    	$data['usct'] = EnterprisesModel::find($id)->User;
    	$data['dnct'] = EnterprisesModel::find($id)->get();
    	return view('backend.doanhnghiep.adm_doanhnghiep_user_info', $data);
    	// dd($data);
    }
    public function getAvatar($id)
    {
        $user['user'] = UserModel::join('uec_enterprises', function($join) {
            $join->on('uec_user.enterprise_id', '=', 'uec_enterprises.id');
        })->where('uec_enterprises.id', $id)->select('enterprise_logo')->fisrt();
        return view('backend.doanhnghiep.adm_doanhnghiep_taikhoan', $user);
    }
}
