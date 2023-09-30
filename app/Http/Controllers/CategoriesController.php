<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
    }

    //Hiển thị danh sách chuyên mục ( Phương thức GET )
    public function index(Request $request)
    {
        

        // if(isset($_GET['id'])){
        //     echo $_GET['id'];
        // }
       
        // //Phương thức của $request 
        // $allData = $request->all();
            
        // dd($allData);

        $path = $request->path();
        echo $path;

        return view('clients/categories/list');
    }
    public function getCategory($id)
    {
        return 'Chi tiết chuyên mục ' . $id;
    }
    //Sửa 1 chuyên mục ( Phương thức POST)
    public function updateCategory($id)
    {
        return  'Submit sửa chuyên mục: ' . $id;
    }
    //Show form thêm dữ liệu ( Phương thức GET)
    public function addCategory(Request $request)
    {
        $path = $request->path();
        echo $path;
        return view('clients/categories/add');
    }
    //Thêm dữ liệu vào chuyên mục ( Phương thức POST)
    public function handleAddCategory(Request $request)
    {
        $allData = $request->all();
        dd($allData);
        // print_r($_POST);

        // return redirect(route('categories.add'));
        // return 'Submit thêm chuyên mục';
    }
    //Xóa dữ liệu (phương thức DELETE)
    public function deleteCategory($id)
    {
        return 'Submit xóa chuyên mục: ' . $id;
    }
}
