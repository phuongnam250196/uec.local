<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('detail/{id}/{slug}.html', 'FrontendController@getDetail');
Route::post('detail/{id}/{slug}.html', 'FrontendController@postComment');

Route::get('category/{id}/{slug}.html', 'FrontendController@getCategory');

Route::get('search', 'FrontendController@getSearch');

Route::group(['prefix'=>'cart'], function() {
	Route::get('add/{id}', 'CartController@getAddCart');
	Route::get('show', 'CartController@getShowCart');

	Route::get('delete/{id}', 'CartController@getDeleteCart');
	Route::get('update', 'CartController@getUpdateCart');

	Route::post('show', 'CartController@postComplete');	
});

Route::group(['namespace'=>'TrangChu'], function() {

	Route::group(['prefix'=>'dangnhap'], function() {
		Route::get('/', 'FrontendController@getLogin');
		Route::post('/', 'FrontendController@postLogin');
	});
	Route::get('logout', 'FrontendController@getLogout');

	Route::get('/', 'FrontendController@getHome');

	Route::get('gioithieu', 'FrontendController@getGioithieu');
	Route::get('huongdoanhnghiep', 'FrontendController@getHuongDN');
	Route::get('dinhhuongnghe', 'FrontendController@getDinhhuongnghe');
	Route::get('jobfair', 'FrontendController@getJobfair');
	Route::get('lienhe', 'FrontendController@getLienhe');
	Route::get('thongtinsinhvien', 'FrontendController@getThongtinsinhvien');


	Route::group(['prefix'=>'khaosat'], function() {
		Route::get('sinhvien', 'FrontendController@getKSsinhvien');
		Route::get('cuusinhvien', 'FrontendController@getKScuusinhvien');
	});

	Route::group(['prefix'=>'khoadaotao'], function() {
		Route::get('/', 'FrontendController@getKhoadaotao');
		Route::get('chitiet', 'FrontendController@getKhoadaotaoChitiet');
	});

	Route::group(['prefix'=>'baiviet'], function() {
		Route::get('/', 'FrontendController@getBaiviet');
		Route::get('chitiet', 'FrontendController@getBaivietChitiet');
	});

	Route::group(['prefix'=>'timviec'], function() {
		Route::get('/', 'FrontendController@getTimviec');
		Route::get('chitiet', 'FrontendController@getTimviecChitiet');
	});

	Route::group(['prefix'=>'doanhnghiep'], function() {
		Route::get('/', 'FrontendController@getDoanhnghiepPub');
		Route::get('chitiet', 'FrontendController@getDoanhnghiepChitiet')->name('dn_chitiet');
	});
});



//----------------------------------------------------------------------------------------//
//
//------------------------------ADMIN-----------------------------------------------------//
//
// ---------------------------------------------------------------------------------------//

 
Route::group(['namespace'=>'Admin'], function() {
	Route::group(['prefix'=>'login', 'middleware'=>'CheckLogin'], function() {
		Route::get('/', 'LoginController@getLogin');
		Route::post('/', 'LoginController@postLogin');

	});
	Route::get('logout', 'HomeController@getLogout');

	Route::group(['prefix'=>'admin', 'middleware'=>'CheckLogout'], function() {
		// Trang chủ admin
		Route::get('home', 'HomeController@getHome');


		// Bài viết
		Route::group(['prefix'=>'baiviet'], function() {

			Route::group(['prefix'=>'tintuc'], function() {
				Route::get('/', 'PostController@getTintuc');
				Route::post('/', 'PostController@postTintuc');

				Route::get('danhsach', 'PostController@getDanhsachTintuc');

				Route::get('danhsach/{id}', 'PostController@getDanhsachTintuc');
				Route::post('danhsach', 'PostController@postEditTintuc');

				Route::get('danhsach/delete/{id}', 'PostController@getDeleteTintuc');
			});

			Route::group(['prefix'=>'gioithieu'], function() {
				Route::get('/', 'PostController@getGioithieu');
				Route::post('/', 'PostController@postGioithieu');

				Route::get('/edit/{id}', 'PostController@getEditGioithieu');
				Route::post('/edit/{id}', 'PostController@postEditGioithieu');

				Route::get('danhsach', 'PostController@getDanhsachGioithieu');
				Route::post('delete', 'PostController@postDeleteGioithieu');
			});

			Route::group(['prefix'=>'huongdoanhnghiep'], function() {
				Route::get('/', 'PostController@getHuongdoanhnghiep');
				Route::post('/', 'PostController@postHuongdoanhnghiep');

				Route::get('/edit/{id}', 'PostController@getEditHuongdoanhnghiep');
				Route::post('/edit/{id}', 'PostController@postEditHuongdoanhnghiep');

				Route::get('danhsach', 'PostController@getDanhsachHuongdoanhnghiep');
				Route::post('delete', 'PostController@postDeleteHuongdoanhnghiep');
			});

			Route::group(['prefix'=>'thongtinsinhvien'], function() {
				Route::get('/', 'PostController@getThongtinsinhvien');
				Route::post('/', 'PostController@postThongtinsinhvien');

				Route::get('/edit/{id}', 'PostController@getEditThongtinsinhvien');
				Route::post('/edit/{id}', 'PostController@postEditThongtinsinhvien');

				Route::get('danhsach', 'PostController@getDanhsachThongtinsinhvien');
				Route::post('delete', 'PostController@postDeleteThongtinsinhvien');
			});

			Route::group(['prefix'=>'dinhhuongnghe'], function() {
				Route::get('/', 'PostController@getDinhhuongnghe');
				Route::post('/', 'PostController@postDinhhuongnghe');

				Route::get('/edit/{id}', 'PostController@getEditDinhhuongnghe');
				Route::post('/edit/{id}', 'PostController@postEditDinhhuongnghe');

				Route::get('danhsach', 'PostController@getDanhsachDinhhuongnghe');
				Route::post('delete', 'PostController@postDeleteDinhhuongnghe');
			});

			Route::group(['prefix'=>'jobfair'], function() {
				Route::get('/', 'PostController@getJobfair');
				Route::post('/', 'PostController@postJobfair');

				Route::get('/edit/{id}', 'PostController@getEditJobfair');
				Route::post('/edit/{id}', 'PostController@postEditJobfair');

				Route::get('danhsach', 'PostController@getDanhsachJobfair');
				Route::post('delete', 'PostController@postDeleteJobFair');
			});
		});


		// Doanh nghiệp
		Route::group(['prefix'=>'doanhnghiep'], function() {
			Route::group(['prefix'=>'thongtin'], function() {
				Route::get('/', 'EnterpriseController@getThongtin');
				Route::post('/', 'EnterpriseController@postThongtin');

				Route::get('edit/{id}', 'EnterpriseController@getEditThongtin');
				Route::post('edit/{id}', 'EnterpriseController@postEditThongtin');

				Route::get('delete/{id}', 'EnterpriseController@getDeleteThongtin');
				
			});



			Route::group(['prefix'=>'taikhoan'], function() {
				Route::get('/', 'EnterpriseController@getTaikhoan');
				Route::post('/', 'EnterpriseController@postTaikhoan');

				Route::get('chitiet/{id}', 'EnterpriseController@getChitiet');

				Route::get('edit/{id}', 'EnterpriseController@getEditTaikhoan');
				Route::post('edit/{id}', 'EnterpriseController@postEditTaikhoan');

				Route::get('delete/{id}', 'EnterpriseController@getDeleteTaikhoan');
				Route::get('avatar/{id}','EnterpriseController@getAvatar');
			});
		});

		// Nhà trường
		Route::group(['prefix'=>'nhatruong'], function() {
			Route::group(['prefix'=>'thongtin'], function() {
				Route::get('/', 'SchoolController@getThongtin');
				Route::post('/', 'SchoolController@postThongtin');

				Route::get('edit/{id}', 'SchoolController@getEditThongtin');
				Route::post('edit/{id}', 'SchoolController@postEditThongtin');

				Route::get('delete/{id}', 'SchoolController@getDeleteThongtin');
			});

			Route::group(['prefix'=>'taikhoan'], function() {
				Route::get('/', 'SchoolController@getTaikhoan');
				Route::post('/', 'SchoolController@postTaikhoan');

				Route::get('edit/{id}', 'SchoolController@getEditTaikhoan');
				Route::post('edit/{id}', 'SchoolController@postEditTaikhoan');

				Route::get('delete/{id}', 'SchoolController@getDeleteTaikhoan');
			});
		});

		// Giáo viên
		Route::group(['prefix'=>'giaovien'], function() {
			Route::group(['prefix'=>'thongtin'], function() {
				Route::get('/', 'TeacherController@getThongtin');
				Route::post('/', 'TeacherController@postThongtin');

				Route::get('edit/{id}', 'TeacherController@getEditThongtin');
				Route::post('edit/{id}', 'TeacherController@postEditThongtin');

				Route::get('delete/{id}', 'TeacherController@getDeleteThongtin');
			});

			Route::group(['prefix'=>'taikhoan'], function() {
				Route::get('/', 'TeacherController@getTaikhoan');
				Route::post('/', 'TeacherController@postTaikhoan');

				Route::get('edit/{id}', 'TeacherController@getEditTaikhoan');
				Route::post('edit/{id}', 'TeacherController@postEditTaikhoan');

				Route::get('delete/{id}', 'TeacherController@getDeleteTaikhoan');
			});
			
		});

		// Sinh viên
		Route::group(['prefix'=>'sinhvien'], function() {
			Route::group(['prefix'=>'thongtin'], function() {
				Route::get('/', 'StudentController@getThongtin');

				Route::get('themmot', 'StudentController@getThemmot');
				Route::post('themmot', 'StudentController@postThemmot');

				Route::get('edit/{id}', 'StudentController@getEditThemmot');
				Route::post('edit/{id}', 'StudentController@postEditThemmot');

				Route::get('delete/{id}', 'StudentController@getDeleteThongtin');

				Route::get('themnhieu', 'StudentController@getThemnhieu');
				Route::post('themnhieu', 'StudentController@postThemnhieu');
			});

			Route::group(['prefix'=>'taikhoan'], function() {
				Route::get('/', 'StudentController@getTaikhoan');
				Route::post('/', 'StudentController@postTaikhoan');
			});
		});

		// Danh mục khác
		Route::group(['prefix'=>'danhmuckhac'], function() {

			// nghề nghiệp
			Route::group(['prefix'=>'nghenghiep'], function() {
				Route::get('/', 'OtherCategoryController@getNghenghiep')->name('nghenghiep');
				Route::post('/', 'OtherCategoryController@postNghenghiep')->name('nghenghiep');

				Route::get('edit/{id}', 'OtherCategoryController@getEditNghenghiep')->name('nghenghiep-edit');
				Route::post('edit/{id}', 'OtherCategoryController@postEditNghenghiep');

				Route::get('delete/{id}', 'OtherCategoryController@getDeleteNghenghiep')->name('nghenghiep-del');
			});

			// Năm kinh nghiệm
			Route::group(['prefix'=>'namkinhnghiem'], function() {
				Route::get('/', 'OtherCategoryController@getNamkinhnghiem');
				Route::post('/', 'OtherCategoryController@postNamkinhnghiem');

				Route::get('edit/{id}', 'OtherCategoryController@getEditNamkinhnghiem');
				Route::post('edit/{id}', 'OtherCategoryController@postEditNamkinhnghiem');

				Route::get('delete/{id}', 'OtherCategoryController@getDeleteNamkinhnghiem');
			});
			
			// Học vấn
			Route::group(['prefix'=>'hocvan'], function() {
				Route::get('/', 'OtherCategoryController@getHocvan');
				Route::post('/', 'OtherCategoryController@postHocvan');

				Route::get('edit/{id}', 'OtherCategoryController@getEditHocvan');
				Route::post('edit/{id}', 'OtherCategoryController@postEditHocvan');

				Route::get('delete/{id}', 'OtherCategoryController@getDeleteHocvan');
			});

			// Hình thức
			Route::group(['prefix'=>'hinhthuc'], function() {
				Route::get('/', 'OtherCategoryController@getHinhthuc');
				Route::post('/', 'OtherCategoryController@postHinhthuc');

				Route::get('edit/{id}', 'OtherCategoryController@getEditHinhthuc');
				Route::post('edit/{id}', 'OtherCategoryController@postEditHinhthuc');

				Route::get('delete/{id}', 'OtherCategoryController@getDeleteHinhthuc');
			});
			
			// Kĩ năng
			Route::group(['prefix'=>'kinang'], function() {
				Route::get('/', 'OtherCategoryController@getKinang');
				Route::post('/', 'OtherCategoryController@postKinang');

				Route::get('edit/{id}', 'OtherCategoryController@getEditKinang');
				Route::post('edit/{id}', 'OtherCategoryController@postEditKinang');

				Route::get('delete/{id}', 'OtherCategoryController@getDeleteKinang');
			});
			
			// Khu vực
			Route::group(['prefix'=>'khuvuc'], function() {
				Route::get('/', 'OtherCategoryController@getKhuvuc');
				Route::post('/', 'OtherCategoryController@postKhuvuc');

				Route::get('edit/{id}', 'OtherCategoryController@getEditKhuvuc');
				Route::post('edit/{id}', 'OtherCategoryController@postEditKhuvuc');

				Route::get('delete/{id}', 'OtherCategoryController@getDeleteKhuvuc');
			});

			// Chức vụ
			Route::group(['prefix'=>'chucvu'], function() {
				Route::get('/', 'OtherCategoryController@getChucvu');
				Route::post('/', 'OtherCategoryController@postChucvu');

				Route::get('edit/{id}', 'OtherCategoryController@getEditChucvu');
				Route::post('edit/{id}', 'OtherCategoryController@postEditChucvu');

				Route::get('delete/{id}', 'OtherCategoryController@getDeleteChucvu');
			});

		});

		// Mở rộng
		Route::group(['prefix'=>'morong'], function() {
			// Khoa học
			Route::group(['prefix'=>'khoahoc'], function(){
				Route::get('/', 'WidenController@getKhoahoc');
				Route::post('add', 'WidenController@AddKhoahoc');

				Route::post('edit', 'WidenController@EditKhoahoc');

				Route::post('delete', 'WidenController@DeleteKhoahoc');
			});

			// Khóa
			Route::group(['prefix'=>'khoa'], function() {
				Route::get('/', 'WidenController@getKhoa');
				Route::post('add', 'WidenController@AddKhoa');

				Route::post('edit', 'WidenController@EditKhoa');

				Route::post('delete', 'WidenController@DeleteKhoa');
			});

			// Chuyên ngành
			Route::group(['prefix'=>'chuyennganh'], function() {
				Route::get('/', 'WidenController@getChuyennganh');
				Route::post('add', 'WidenController@AddChuyennganh');

				Route::post('edit', 'WidenController@EditChuyennganh');

				Route::post('delete', 'WidenController@DeleteChuyennganh');
			});
		});
	});
});
