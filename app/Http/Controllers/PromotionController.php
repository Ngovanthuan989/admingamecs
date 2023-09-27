<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Promotion;


class PromotionController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.promotion.show');
    }
    public function create()
    {
        return view('dashboard.promotion.create');
    }
    public function addPost(Request $request)
    {
        if($request->file('image') != ''){
            $path = public_path().'/uploads/images/';

            //upload new file
            $file     =    $request -> file('image');
            $filename =    $file    -> getClientOriginalName();
            $file -> move($path, $filename);


            $validate = Validator::make(

                $request->all(),
                [
                    'title'     => 'required',
                    'sub_title' => 'required',
                    'content'     => 'required',
                    'content_mobile'  => 'required',
                    'percent'       => 'required'

                ], [

                    'title.required'     => 'Tiêu đề không được bỏ trống',
                    'sub_title.required' => 'Tiêu đề phụ không được bỏ trống',
                    'content.required'   => 'Nội dung không được bỏ trống',
                    'content_mobile.required'   => 'Nội dung mobile không được bỏ trống',
                    'percent.required' => 'Phần trăm không được để trống'
                ]

            );



            if ($validate -> fails()) {

                return redirect()->route('dashboard.promotion.create')->withErrors($validate);

            }

            $promotion = new Promotion;

            $promotion -> title           = $request     -> get('title');
            $promotion -> sub_title       = $request     -> get('sub_title');
            $promotion -> content         = $request     -> get('content');
            $promotion -> content_mobile  = $request     -> get('content_mobile');
            $promotion -> max_number      = $request     -> get('max_number');
            $promotion -> min_amount      = $request     -> get('min_amount');
            $promotion -> max_amount      = $request     -> get('max_amount');
            $promotion -> percent         = $request     -> get('percent');
            $promotion -> betting_round   = $request     -> get('betting_round');
            $promotion -> sequence        = $request     -> get('sequence');
            $promotion -> category_id     = $request     -> get('category_id');
            $promotion -> status          = $request     -> get('status');
            $promotion -> time_start      = $request     -> get('time_start');
            $promotion -> time_end        = $request     -> get('time_end');
            $promotion -> image           = $filename;

            $promotion -> save();

            if ($promotion->wasRecentlyCreated == true) {


                return redirect()->route('dashboard.promotion.show')->with('success', 'Thêm thành công');

            }else{

                return redirect()->route('dashboard.promotion.create')->with('error','Có lỗi xảy ra');

            }

        }else{

            return redirect()->route('dashboard.promotion.create')->with('error','Xin vui lòng chọn ảnh');

        }
        return view('dashboard.promotion.create');
    }
}
