<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public $data = [];
    public function index(){
        // $this->data['welcome'] = 'Học lập trình Laravel tại <b>Unicode</b>';
        // $this->data['content'] = '<h3>Chương 1: Nhập môn Laravel</h3>
        // <p>Kiến thức 1</p>
        // <p>Kiến thức 2</p>
        // <p>Kiến thức 3</p>';
        // $this->data['index'] = 1;
        // $this->data['dataArr'] = [
        //     // 'Item 1',
        //     // 'Item 2',
        //     // 'Item 3',
        // ];
        // $this->data['number']=3;
        // $this->data['message'] = 'Đặt hàng thành công';

        $this->data['title'] = 'Đào tạo lập trình web';
        $this->data['message'] = 'Đăng ký tài khoản thành công';
        // return 'Unicode';
        // $users = DB::select('SELECT * FROM users WHERE id > ?', [1]);
        // $users = DB::select('SELECT * FROM users WHERE email=:email', [
        //     'email' => 'huyen.hothi25@student.passerellesnumeriques.org'
        // ]);

        // dd($users);
        return view('clients.home', $this->data);
    }

    public function products(){
        $this->data['title'] = 'Sản phẩm';

        return view('clients.products', $this->data);
    }

    public function getAdd(){
        $this->data['title'] = 'Thêm sản phẩm';

        return view('clients.add', $this->data);
    }

    public function postAdd(Request $request){
        dd($request);
    }

    public function putAdd(Request $request){
        return 'phương thức PUT';
        dd($request);
    }
}
