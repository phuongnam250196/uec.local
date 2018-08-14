<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\baiviet\NewsRequest;
use App\Http\Requests\baiviet\CareerOrientationRequest;
use App\Http\Requests\baiviet\IntroUecRequest;
use App\Http\Requests\baiviet\JobFairRequest;
use App\Http\Requests\baiviet\TowardBusinessRequest;
use App\Http\Requests\baiviet\InfoStudentRequest;
use App\Http\Requests\baiviet\EditNewsRequest;

use App\Models\baiviet\NewsModel;
use App\Models\baiviet\CareerOrientationModel;
use App\Models\baiviet\InfoStudentModel;
use App\Models\baiviet\IntroUecModel;
use App\Models\baiviet\JobFairModel;
use App\Models\baiviet\TowardBusinessModel;
class PostController extends Controller
{

	// Tin tức
    public function getTintuc() {
    	return view('backend.baiviet.adm_tintuc');
    }
    public function postTintuc(NewsRequest $request) {
    	$filename = $request->tt_img->getClientOriginalName();
    	$enter = new NewsModel;
    	$enter->news_name = $request->tt_title;
    	$enter->news_slug = str_slug($request->tt_title);
    	$enter->news_img = $filename;
    	$enter->news_content = $request->tt_content;
		$enter->save();
		$request->tt_img->storeAs('tintuc', $filename);
    	return back();
    }
    public function getDanhsachTintuc() {
    	$data = NewsModel::all();
    	return view('backend.baiviet.adm_tintuc_danhsach')->with(compact('data'));
    }
    
    public function postEditTintuc(EditNewsRequest $request) {
    	$data = NewsModel::find($request->id)->get();
    	$filename = $request->tt_img->getClientOriginalName();
    	$enter->news_name = $request->tt_title;
    	$enter->news_slug = str_slug($request->tt_title);
    	$enter->news_img = $filename;
    	$enter->news_content = $request->tt_content;
		$enter->save();
		$request->tt_img->storeAs('tintuc', $filename);
		return response()->json($data);
    }

    // Giới thiệu
    public function getGioithieu() {
    	return view('backend.baiviet.adm_gioithieu');
    }
    public function postGioithieu(IntroUecRequest $request) {
    	$filename = $request->tt_img->getClientOriginalName();
    	$enter = new IntroUecModel;
    	$enter->introuec_name = $request->tt_title;
    	$enter->introuec_slug = str_slug($request->tt_title);
    	$enter->introuec_img = $filename;
    	$enter->introuec_content = $request->tt_content;
		$enter->save();
		$request->tt_img->storeAs('gioithieuUEC', $filename);
    	return back();
    }
    public function getDanhsachGioithieu() {
    	$data = IntroUecModel::all();
    	return view('backend.baiviet.adm_gioithieu_danhsach')->with(compact('data'));
    }

    // Hướng về doanh nghiệp
    public function getHuongdoanhnghiep() {
    	return view('backend.baiviet.adm_huongdoanhnghiep');
    }
    public function postHuongdoanhnghiep(TowardBusinessRequest $request) {
    	$filename = $request->tt_img->getClientOriginalName();
    	$enter = new TowardBusinessModel;
    	$enter->towardbusiness_name = $request->tt_title;
    	$enter->towardbusiness_slug = str_slug($request->tt_title);
    	$enter->towardbusiness_img = $filename;
    	$enter->towardbusiness_content = $request->tt_content;
		$enter->save();
		$request->tt_img->storeAs('huongdoanhnghiep', $filename);
    	return back();
    }
    public function getDanhsachHuongdoanhnghiep() {
    	$data = TowardBusinessModel::all();
    	return view('backend.baiviet.adm_huongdoanhnghiep_danhsach')->with(compact('data'));
    }

    // Thông tin sinh viên
    public function getThongtinsinhvien() {
    	return view('backend.baiviet.adm_thongtinSV');
    }
    public function postThongtinsinhvien(InfoStudentRequest $request) {
    	$filename = $request->tt_img->getClientOriginalName();
    	$enter = new InfoStudentModel;
    	$enter->infostudent_name = $request->tt_title;
    	$enter->infostudent_slug = str_slug($request->tt_title);
    	$enter->infostudent_img = $filename;
    	$enter->infostudent_content = $request->tt_content;
		$enter->save();
		$request->tt_img->storeAs('thongtinSV', $filename);
    	return back();
    }
    public function getDanhsachThongtinsinhvien() {
    	$data = InfoStudentModel::all();
    	return view("backend.baiviet.adm_thongtinSV_danhsach")->with(compact('data'));
    }

    // Định hướng nghề nghiệp
    public function getDinhhuongnghe() {
    	return view('backend.baiviet.adm_dinhhuong');
    }
    public function postDinhhuongnghe(CareerOrientationRequest $request) {
    	$filename = $request->tt_img->getClientOriginalName();
    	$enter = new CareerorientationModel;
    	$enter->careerorientation_name = $request->tt_title;
    	$enter->careerorientation_slug = str_slug($request->tt_title);
    	$enter->careerorientation_img = $filename;
    	$enter->careerorientation_content = $request->tt_content;
		$enter->save();
		$request->tt_img->storeAs('dinhhuong', $filename);
    	return back();
    }
    public function getEditDinhhuongnghe() {
        return view('backend.baiviet.adm_dinhhuong_edit');
    }
    public function postEditDinhhuongnghe(CareerOrientationRequest $request, $id) {
        $filename = $request->tt_img->getClientOriginalName();
        $enter = CareerorientationModel::find($id);
        $enter->careerorientation_name = $request->tt_title;
        $enter->careerorientation_slug = str_slug($request->tt_title);
        $enter->careerorientation_img = $filename;
        $enter->careerorientation_content = $request->tt_content;
        $enter->save();
        $request->tt_img->storeAs('dinhhuong', $filename);
        return back();
    }
    public function getDanhsachDinhhuongnghe() {
    	$data = CareerorientationModel::all();
    	return view("backend.baiviet.adm_dinhhuong_danhsach")->with(compact('data'));
    }
    // public function postDeleteDinhhuongnghe($id) {

    // }

    // JobFair
    public function getJobfair() {
    	return view('backend.baiviet.adm_jobFair');
    }
    public function postJobfair(JobFairRequest $request) {
    	$filename = $request->tt_img->getClientOriginalName();
    	$enter = new JobFairModel;
    	$enter->jobfair_name = $request->tt_title;
    	$enter->jobfair_slug = str_slug($request->tt_title);
    	$enter->jobfair_img = $filename;
    	$enter->jobfair_content = $request->tt_content;
		$enter->save();
		$request->tt_img->storeAs('jobfair', $filename);
    	return back();
    }
    public function getDanhsachJobFair() {
    	$data = JobFairModel::all();
    	return view("backend.baiviet.adm_jobFair_danhsach")->with(compact('data'));
    }

}
