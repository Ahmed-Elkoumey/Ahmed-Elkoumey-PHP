<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public const STATUSES = ['Not Active','Active'];
    public const MAX_UPLOAD_SIZE = 1024; // 1024k
    public const AVAIALBE_EXTENSIONS = ['png','jpeg','jpg'];
    public function index()
    {
        $products = DB::table('products')->get(); // SELECT * FROM `products`
        return view('products.index',compact('products'));
    }

    public function create()
    {
        $brands = DB::table('brands')->select('id','name_en','name_ar')->get();
        $subcategories = DB::table('subcategories')->select('id','name_en','name_ar')->get();
        return view('products.create',compact('brands','subcategories'))->with('statues',self::STATUSES);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_en'=>['required','string','max:32'],
            'name_ar'=>['required','string','max:32'],
            'price'=>['required','numeric','between:1,999999.99'],
            'quantity'=>['nullable','integer','min:1','max:99'],
            'code'=>['required','max:20','unique:products'],
            'status'=>['nullable','in:'.implode(',',array_keys(self::STATUSES))],
            'brand_id'=>['nullable','integer','exists:brands,id'],
            'subcategory_id'=>['required','integer','exists:subcategories,id'],
            'desc_en'=>['required','string'],
            'desc_ar'=>['required','string'],
            'image'=>['required','max:'.self::MAX_UPLOAD_SIZE,'mimes:'.implode(',',self::AVAIALBE_EXTENSIONS)]
        ]);
        
    }
}
