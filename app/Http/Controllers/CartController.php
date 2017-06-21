<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Item as item_model;
use Illuminate\Support\Facades\Mail;


class CartController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index(Request $request)
    {

        $title = 'Giỏ hàng';
        $success_mes = '';
        $cart_details_arr = is_array(session('cart')) ? session('cart') : array();

        $act= $request->input('act');
        if(!empty($act) && $act == 'save'){

            $cart_data = array();
            $cart_data['cus_name'] = $request->input('fullname');
            $cart_data['cus_phone'] = $request->input('phone');
            $cart_data['cus_email'] = $request->input('email');
            $cart_data['cus_address'] = $request->input('address');
            $cart_data['note'] = $request->input('note');
            $cart_data['created_at'] = date('Y-m-d H:i:s');
            $cart_id = DB::table('carts')->insertGetId($cart_data);


            $cart_details_data_arr = array();

            $cart_item_ids_arr = $request->input('cart_item_ids');
            $cart_price_arr = $request->input('cart_price');
            $cart_qty_arr = $request->input('cart_qty');
            if($cart_id > 0 && is_array($cart_item_ids_arr) && is_array($cart_qty_arr) && is_array($cart_price_arr)){
                $total_due = 0;
                for($i=0; $i<count($cart_item_ids_arr); $i++){
                    if(isset($cart_qty_arr[$i]) && $cart_qty_arr[$i] > 0 ){
                        $cart_detail_data = array();
                        $cart_detail_data['cart_id'] = $cart_id;
                        $cart_detail_data['item_id'] = $cart_item_ids_arr[$i];
                        $cart_detail_data['item_quantity'] = $cart_qty_arr[$i];
                        $cart_detail_data['item_price'] = $cart_price_arr[$i];
                        $cart_detail_data['amount'] = $cart_detail_data['item_price'] * $cart_detail_data['item_quantity'];
                        
                        $cart_details_data_arr[] = $cart_detail_data;

                        $total_due += $cart_detail_data['amount'];
                        $cart_detail_id = DB::table('cart_details')->insertGetId($cart_detail_data);
                    }
                }

                DB::table('carts')->where('id', $cart_id)->update(array('total_due' => $total_due));
                
                
                //order successfully
                session(['cart'=>array()]);
                $success_mes = "Đã gửi đơn hàng thanh công";

                $email_subject = "Đơn Hàng Mới - Mã Đơn Hàng ".$cart_id;
                Mail::send('email_templates.shopping_cart', array('cart_id' => $cart_id, 'total_due' => $total_due, 'cart' => $cart_data, 'cart_details' => $cart_details_data_arr), function($m) use ($email_subject){
                    $m->from('dodaxin@gmail.com', 'Đồ Da Xịn');
                    $m->to('taomanhdung@gmail.com', 'Tào Mạnh Dũng')->subject($email_subject);
                });

            }


        }



        return view('cart', compact('title', 'cart_details_arr', 'success_mes'));
    }

//    public function test_send_email(){
//        Mail::send('email_templates.shopping_cart', array(), function($m){
//            $m->from('dodaxin@gmail.com', 'Đồ Da Xịn');
//            $m->to('taomanhdung@gmail.com', 'Tào Mạnh Dũng')->subject('New Order');
//        });
//    }

}
?>