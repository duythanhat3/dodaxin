<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Item as item_model;
use App\Category as category_model;
use App\Item_attach_file as item_attach_file_model;


class ProductController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
    }

    
    public function index(){
        return view('product');
    }

    //sản phẩm ví da
    public function vida(){
        $items_arr = DB::select("select * from items where category_id in (1, 2)");
        return view('product', compact('items_arr'));
    }

    //sản phẩm ví da nam
    public function vidanam(){
        $title = 'VÍ DA NAM';
        $items_arr = item_model::where('category_id', '=', 1)->orderBy('created_at', 'desc')->get();
        return view('product', compact('items_arr', 'title'));
    }


    //sản phẩm ví da nữ
    public function vidanu(){
        $title = 'VÍ DA NỮ';
        $items_arr = item_model::where('category_id', '=', 2)->orderBy('created_at', 'desc')->get();
        return view('product', compact('items_arr', 'title'));
    }


    //sản phẩm dây lưng
    public function daylung(){
        $title = 'DÂY LƯNG';
        $items_arr = item_model::where('category_id', '=', 3)->orderBy('created_at', 'desc')->get();
        return view('product', compact('items_arr', 'title'));
    }

    //sản phẩm túi da
    public function tuida(){
        $title = 'TÚI DA';
        $items_arr = item_model::where('category_id', '=', 4)->orderBy('created_at', 'desc')->get();
        return view('product', compact('items_arr', 'title'));
    }

    public function product_detail($item_url, Request $request){

        $item_obj = item_model::where('name_url', '=', $item_url)->first();

        if($item_obj != null && $item_obj->id > 0){

            $cart_qty = $request->input('cart_qty');
            if(isset($cart_qty) && $cart_qty > 0){
                $shopping_cart = is_array(session('cart')) ? session('cart') : array();

                if(count($shopping_cart) > 0){
                    $exist_in_cart = false;
                    $temp_shopping_cart = array();
                    foreach($shopping_cart as $cart_item){
                        if($cart_item['item_id'] == $item_obj->id){
                            $exist_in_cart = true;
                            $cart_item['quantity'] += $cart_qty;
                        }
                        $temp_shopping_cart[] = $cart_item;
                    }

                    if(!$exist_in_cart){
                        $new_cart = array();
                        $new_cart['item_id'] = $item_obj->id;
                        $new_cart['item_code'] = $item_obj->code;
                        $new_cart['quantity'] = $cart_qty;
                        $new_cart['price'] = $item_obj->unit_price;
                        $new_cart['img'] = $item_obj->image_file_name;
                        $shopping_cart[] = $new_cart;
                    } else {
                        $shopping_cart = $temp_shopping_cart;
                    }


                } else {
                    $new_cart = array();
                    $new_cart['item_id'] = $item_obj->id;
                    $new_cart['item_code'] = $item_obj->code;
                    $new_cart['quantity'] = $cart_qty;
                    $new_cart['price'] = $item_obj->unit_price;
                    $new_cart['img'] = $item_obj->image_file_name;
                    $shopping_cart[] = $new_cart;
                }

                session(['cart'=>$shopping_cart]);
                return redirect('gio-hang');
            }

            $attach_file_arr = item_attach_file_model::where('item_id','=', $item_obj->id)->get();
            $reference_items = DB::select("select * from items where id != ".$item_obj->id." order by rand() limit 8");
            return view('product_detail', compact('item_obj', 'attach_file_arr', 'reference_items'));
        }else {
            return view('errors.503');
        }

    }


}
