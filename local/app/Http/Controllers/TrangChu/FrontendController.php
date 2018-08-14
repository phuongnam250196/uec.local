<?php

namespace App\Http\Controllers\TrangChu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\danhmuckhac\AreaModel;
use App\Models\EnterprisesModel;
use App\Models\UserModel;
use App\Models\baiviet\IntroUecModel;

use DB;
use Response;

class FrontendController extends Controller
{

	// Đăng nhập
	public function getLogin() {
         $data['enterprise'] = EnterprisesModel::all();
		return view('frontend.pub.pub_login', $data);
	}
	
	// Trang chủ
    public function getHome() {
        $data['enterprise'] = EnterprisesModel::all();
        $data['news'] = IntroUecModel::paginate(5);
    	return view('frontend.index', $data);
    }

    // Giới thiệu
    public function getGioithieu() {
         $data['enterprise'] = EnterprisesModel::all();
    	return view('frontend.pub.pub_gioithieu', $data);
    }

    // Hướng về doanh nghiệp
    public function getHuongDN() {
         $data['enterprise'] = EnterprisesModel::all();
    	return view('frontend.pub.pub_huongdoanhnghiep', $data);
    }

    // Định hướng nghề nghiệp
    public function getDinhhuongnghe() {
         $data['enterprise'] = EnterprisesModel::all();
    	return view('frontend.pub.pub_dinhhuongNN', $data);
    }

    // Jobfair
    public function getJobfair() {
         $data['enterprise'] = EnterprisesModel::all();
    	return view('frontend.pub.pub_job', $data);
    }

    // liên hệ
    public function getLienhe() {
         $data['enterprise'] = EnterprisesModel::all();
    	return view('frontend.pub.pub_lienhe', $data);
    }

    // thông tin sinh viên
    public function getThongtinsinhvien() {
         $data['enterprise'] = EnterprisesModel::all();
    	return view('frontend.pub.pub_thongtinSV', $data);
    }

    // khao sát sinh viên, cựu sinh viên
    public function getKSsinhvien() {
         $data['enterprise'] = EnterprisesModel::all();
    	return view('frontend.pub.pub_khaosat', $data);
    }
    public function getKScuusinhvien() {
         $data['enterprise'] = EnterprisesModel::all();
    	return view('frontend.pub.pub_khaosat_cuusinhvien', $data);
    }

    // Khóa đào tạo
    public function getKhoadaotao() {
         $data['enterprise'] = EnterprisesModel::all();
    	return view('frontend.pub.pub_khoadaotao', $data);
    }
    public function getKhoadaotaoChitiet() {
         $data['enterprise'] = EnterprisesModel::all();
    	return view('frontend.pub.pub_khoadaotao_chitiet', $data);
    }

    // bài viết
    public function getBaiviet() {
         $data['enterprise'] = EnterprisesModel::all();
    	return view('frontend.pub.pub_baiviet', $data);
    }
    public function getBaivietChitiet() {
         $data['enterprise'] = EnterprisesModel::all();
    	return view('frontend.pub.pub_baiviet_chitiet', $data);
    }

    // Tìm việc
    public function getTimviec() {
         $data['enterprise'] = EnterprisesModel::all();
    	return view('frontend.pub.pub_timviec', $data);
    }
    public function getTimviecChitiet() {
         $data['enterprise'] = EnterprisesModel::all();
    	return view('frontend.pub.pub_timviec_chitiet', $data);
    }

    // doanh nghiệp
    public function getDoanhnghiepPub() {
        $data['enterprise'] = EnterprisesModel::all();
        $data['area']= AreaModel::all();
    	return view('frontend.pub.pub_doanhnghiep', $data);
        // dd($data, $a);
    }
    public function getDoanhnghiepChitiet() {
         $data['enterprise'] = EnterprisesModel::all();
    	return view('frontend.pub.pub_doanhnghiep_chitiet', $data);
    }

}
