<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item as item_model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Category as category_model;
use App\Item_attach_file as item_attach_file_model;

class A_ItemController extends Controller
{
    //
    //
    public function index(){
        $item_arr = item_model::all();
        return view("administrator.item.index", compact('item_arr'));
    }

    public function create(){
        $category_option = category_model::where('active','=', '1')->orderBy('name')->pluck('name', 'id');
        return view('administrator.item.detail', compact('category_option'));
    }

    public function show($id){
        $domain = array();
        if($id > 0){
            $domain = item_model::findorfail($id);
        }
        return view("administrator.item.detail", compact('domain'));
    }

    public function edit($item_id){
        $domain = item_model::findorfail($item_id);

        $sql = " select * from item_attach_files where item_id = ? ";
        $attach_files = DB::select($sql, [$item_id]);

        $category_option = category_model::where('active','=', '1')->orderBy('name')->pluck('name', 'id');


        return view('administrator.item.detail', compact('category_option', 'domain', 'attach_files'));
    }


    public function update($item_id, Request $request){

        $item_obj = item_model::findorfail($item_id);

        $data = array();
        $data['name'] = $request->input('name');
        $data['name_ascii'] = Str::ascii($request->input('name'));
        $data['name_url'] = $this->getUrlFriendlyString($data['name_ascii']);
        $data['code'] = $request->input('code');

        if ($request->input("is_remove_thumbnail")=='Y') {
            $image_path = public_path() . DIRECTORY_SEPARATOR . 'upload_file'. DIRECTORY_SEPARATOR ."avatar". DIRECTORY_SEPARATOR .$item_obj->image_file_name;
            if(file_exists($image_path)){
                unlink($image_path);
            }
        }
        
        if ($request->hasFile('image_file')) {
            $data['image_file_name'] = $this->savePhoto($request->file('image_file'), 'avatar');
        }
        $data['active'] = !empty($request->input('active')) ? $request->input('active') : "9";
        $data['is_new'] = !empty($request->input('is_new')) ? $request->input('is_new') : "9";
        $data['is_out_of_stock'] = !empty($request->input('is_out_of_stock')) ? $request->input('is_out_of_stock') : "9";
        $data['brand'] = $request->input('brand');
        $data['color'] = $request->input('color');
        $data['manufacturer'] = $request->input('manufacturer');
        $data['unit_price'] = !empty($request->input('unit_price')) ? str_replace(",","", $request->input('unit_price')) : 0;
        $data['old_price'] = !empty($request->input('old_price')) ? str_replace(",","", $request->input('old_price')) : 0;
        $data['currency'] = $request->input('currency');
        $data['category_id'] = $request->input('category_id');
        $data['description'] = $request->input('description');
        $data['updated_by'] = Auth::user()->id;
        $data['updated_at'] = date('Y-m-d H:i:s');
        DB::table('items')->where('id', $item_id)->update($data);

        $attachment_id_arr = $request->input('attachment_id');
        if ($attachment_id_arr != null && count($attachment_id_arr)>0) {

            $sql = " select * from item_attach_files where item_id = $item_id and id not in (".implode(",", $attachment_id_arr).")";
            $attach_files = DB::select($sql);

            foreach($attach_files as $attach_obj){
                $attach_file = public_path() . DIRECTORY_SEPARATOR . 'upload_file'. DIRECTORY_SEPARATOR ."attach". DIRECTORY_SEPARATOR .$attach_obj->path_file;
                if(file_exists($attach_file)){
                    unlink($attach_file);
                }

            }
            DB::delete("delete from item_attach_files where item_id = $item_id and id not in (".implode(",", $attachment_id_arr).")");
        }

        $attach_file_arr = $request->file('attach_file');
        if(count($attach_file_arr) > 0 && $item_id > 0){
            foreach($attach_file_arr as $file){
                if ($file) {
                    $attach_arr = array();
                    $attach_arr['item_id'] = $item_id;
                    $attach_arr['path_file'] = $this->savePhoto($file, 'attach');
                    $attach_id = DB::table('item_attach_files')->insertGetId($attach_arr);
                }
            }
        }


        $item_arr = item_model::all();
        return view("administrator.item.index", compact('item_arr'));
    }

    public function store(Request $request){
       /* if(!empty($request->input('name'))){
            $category_obj = new item_model();
            $category_obj->name = $request->input('name');
            $category_obj->name_ascii = Str::ascii($request->input('name'));
            $category_obj->name_url = Str::ascii($request->input('name'));
            $category_obj->active = !empty($request->input('active')) ? $request->input('active') : "9";
            $category_obj->save();
            echo "<script>close_modal();</script>";
        } */



        $data = array();
        $data['name'] = $request->input('name');
        $data['name_ascii'] = Str::ascii($request->input('name'));
        $data['name_url'] = $this->getUrlFriendlyString($data['name_ascii']);
        $data['code'] = $request->input('code');
        if ($request->hasFile('image_file')) {
            $data['image_file_name'] = $this->savePhoto($request->file('image_file'), 'avatar');
        }
        $data['active'] = !empty($request->input('active')) ? $request->input('active') : "9";
        $data['is_new'] = !empty($request->input('is_new')) ? $request->input('is_new') : "9";
        $data['is_out_of_stock'] = !empty($request->input('is_out_of_stock')) ? $request->input('is_out_of_stock') : "9";
        $data['brand'] = $request->input('brand');
        $data['color'] = $request->input('color');
        $data['manufacturer'] = $request->input('manufacturer');
        $data['unit_price'] = !empty($request->input('unit_price')) ? str_replace(",","", $request->input('unit_price')) : 0;
        $data['old_price'] = !empty($request->input('old_price')) ? str_replace(",","", $request->input('old_price')) : 0;
        $data['currency'] = $request->input('currency');
        $data['category_id'] = $request->input('category_id');
        $data['description'] = $request->input('description');
        $data['created_by'] = Auth::user()->id;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_by'] = Auth::user()->id;
        $data['updated_at'] = date('Y-m-d H:i:s');
        $new_item_id = DB::table('items')->insertGetId($data);
        if($new_item_id > 0){
            $attach_file_arr = $request->file('attach_file');
            if(count($attach_file_arr) > 0){
                foreach($attach_file_arr as $file){
                    if ($file) {
                        $attach_arr = array();
                        $attach_arr['item_id'] = $new_item_id;
                        $attach_arr['path_file'] = $this->savePhoto($file, 'attach');
                        $attach_id = DB::table('item_attach_files')->insertGetId($attach_arr);
                        //echo "-----".$attach_arr['path_file']."-----\n";
                    }
                }
            }


        }

        //exit(0);

        $item_arr = item_model::all();
        return view("administrator.item.index", compact('item_arr'));

    }


    /**
     * Move uploaded photo to public/img folder
     * @param  UploadedFile $photo
     * @return string
     */
    protected function savePhoto(UploadedFile $photo, $folder_name = 'avatar')
    {
        $fileName = str_random(40) . '.' . $photo->guessClientExtension();
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'upload_file'. DIRECTORY_SEPARATOR .$folder_name;
        $photo->move($destinationPath, $fileName);
        return $fileName;
    }

    protected function getUrlFriendlyString($str)
  {
     return  trim(preg_replace('/[-]{2,}/', '-', preg_replace('/[^a-z0-9]+/', '-', strtolower($str))), '-'); 
  }



    /**
     * @param  $id
     * @return mixed
     */
    public function delete($id)
    {
        item_model::destroy($id);
        return redirect()->back();
    }
}
