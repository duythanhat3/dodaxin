<?php
/**
 * Created by PhpStorm.
 * User: manhdung
 * Date: 6/18/16
 * Time: 2:41 PM
 */
?>
@extends("layouts.main_backend")
@section('title') Item Detail | @parent @stop
@section('style')
    {{--<link href="{{ asset('backend/assets/plugins/bootstrap-multiselect/bootstrap-multiselect.css') }}" rel="stylesheet" />--}}
    <link href="{{ asset('backend/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet"/>

    <link href="{{ asset('backend/assets/plugins/jquery-file-upload/css/jquery.fileupload.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/assets/plugins/jquery-file-upload/css/jquery.fileupload-ui.css') }}"
          rel="stylesheet"/>

@endsection

@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Administrator</a></li>
            <li><a href="javascript:;">Item</a></li>
            <li class="active">Detail</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Item detail</h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                               data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            {{--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>--}}
                        </div>
                        <h4 class="panel-title">Item Detail</h4>
                    </div>
                    <div class="panel-body">

                        <?php $attr_arr = array('id' => "item_detail_frm", 'class' => 'form-horizontal', 'files' => true, 'data-parsley-validate' => true);

                        if (isset($domain->id) && $domain->id > 0) {
                            $attr_arr['route'] = array('backend.a.item.update', $domain->id);
                            $attr_arr['method'] = 'PATCH';

                        } else {
                            $attr_arr['route'] = "backend.a.item.store";
                            $attr_arr['method'] = 'POST';
                        }

                        ?>
                        {!! Form::open($attr_arr) !!}

                        <div class="form-group">
                            <label class="col-md-2 control-label">Tên sản phẩm</label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Tên sản phẩm"
                                       data-parsley-required="true" value="{{ $domain->name or '' }}"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Mã sản phẩm</label>
                            <div class="col-md-6">
                                <input type="text" name="code" class="form-control" placeholder="Mã sản phẩm"
                                       data-parsley-required="true" value="{{ $domain->code or '' }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Thương hiệu</label>
                            <div class="col-md-6">
                                <input type="text" name="brand" class="form-control" placeholder="Thương hiệu"
                                       value="{{ $domain->brand or '' }}"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Màu sắc</label>
                            <div class="col-md-6">
                                <input type="text" name="color" class="form-control" placeholder="Màu sắc"
                                       value="{{ $domain->color or '' }}"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Nhà sản xuất</label>
                            <div class="col-md-6">
                                <input type="text" name="manufacturer" class="form-control" placeholder="Nhà sản xuất"
                                       value="{{ $domain->manufacturer or '' }}"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Đơn giá</label>
                            <div class="col-md-6">
                                <input type="text" name="unit_price"  id="unit_price" class="form-control" placeholder="Đơn giá"
                                       value="{{ !empty($domain->unit_price) && $domain->unit_price > 0 ? number_format($domain->unit_price) : '' }}"/>
                            </div>
                        </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Giá bán cũ</label>
                                <div class="col-md-6">
                                    <input type="text" name="old_price"  id="old_price" class="form-control" placeholder="Giá bán cũ"
                                           value="{{ !empty($domain->old_price) && $domain->old_price > 0 ? number_format($domain->old_price) : '' }}"/>
                                </div>
                            </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Loại Tiền</label>
                            <div class="col-md-6">
                                <input type="text" name="currency" class="form-control" placeholder="Loại tiền"
                                       value="{{ $domain->currency or 'VND' }}"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Loại sản phẩm</label>
                            <div class="col-md-6">
                                <select name="category_id" data-parsley-required="true" class="form-control">
                                    <option value="">Please choose</option>
                                    @foreach($category_option as $k=>$v)
                                        <option value="{{ $k }}" <?= isset($domain->category_id) && $domain->category_id == $k ? 'selected' : ''  ?> >{{ $v or "" }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                            <div class="form-group">
                                <label class="control-label col-md-2">Hàng mới</label>
                                <div class="col-md-9">
                                    <input type="checkbox" name="is_new" data-render="switchery" data-theme="blue" value="1"
                                           @if(isset($domain->is_new) && $domain->is_new == '1') checked @endif />
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Hết hàng</label>
                                <div class="col-md-9">
                                    <input type="checkbox" name="is_out_of_stock" data-render="switchery" data-theme="blue" value="1"
                                           @if(isset($domain->is_out_of_stock) && $domain->is_out_of_stock == '1') checked @endif />
                                </div>

                            </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Hình đại diện</label>
                            <div class="col-md-8">
                                <div class="col-md-5">
                                    @if(!empty($domain->image_file_name) )
                                        <div id="exist_image" class="fileupload fileupload-new">
                                            <div class="fileupload-preview fileupload-small thumbnail">
                                                <img src="{{ asset('upload_file/avatar/'.$domain->image_file_name) }}">
                                            </div>
                                            <div>
                                                <a href="javascript:void(0)" onclick="remove_thumbnail();" class="btn btn-danger">Remove</a>
                                            </div>
                                        </div>
                                    @endif

                                    <div id="upload_image" class="fileupload fileupload-new @if(!empty($domain->image_file_name)) hide @endif " data-provides="fileupload" >
                                        <div class="fileupload-preview fileupload-small thumbnail">
                                            <img src="{{ asset('backend/assets/img/upload-50x50.png') }}">
                                        </div>
                                        <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileupload-new">Select image</span>
                                        <span class="fileupload-exists">Change</span>
                                        <input type="file" name="image_file"/>
                                    </span>
                                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                        </div>
                                    </div>

                                    <input type="hidden" id="is_remove_thumbnail" name="is_remove_thumbnail" value="N" />
                                </div>
                                <div class="col-md-6"><i>kích thước: width=700px; height: 700px </i></div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Hình đính kèm </label>
                            <div class="col-md-8">
                                <a href="javascript:void(0)" onclick="add_attachment_row()"><i
                                            class="fa fa-2x fa-plus-square"></i></a>
                                <table id="attachment_table" class="table">

                                <? if (isset($attach_files) && count($attach_files) > 0) { ?>
                                    <? for ($i=0; $i<count($attach_files); $i++) { ?>
                                    <tr id="attachment_row_<?=$i?>" class="list_item_2">
                                        <td>
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-preview fileupload-small thumbnail">
                                                    <img src="{{ asset('upload_file/attach/'.$attach_files[$i]->path_file) }}">
                                                </div>
                                                <div>
                                                    <span class="btn btn-default btn-file">
                                                        <span class="fileupload-new">Select image</span>
                                                        <span class="fileupload-exists">Change</span>
                                                        <input type="file" name="attach_file[]"/>
                                                    </span>
                                                    <a href="#" class="btn btn-danger fileupload-exists"
                                                       data-dismiss="fileupload">Remove</a>
                                                </div>
                                            </div>

                                            <input type="hidden" name="attachment_id[]" value="<?=$attach_files[$i]->id?>"/>
                                        </td>
                                        <td><a href="javascript:void(0)" onclick="remove_attachment_row('<?=$i?>')"> <i class="fa fa-trash-o bigger-130"></i> Xóa</a></td>
                                    </tr>
                                <? } } ?>


                                </table>
                            </div>
                        </div>

                            <div class="form-group">
                                <label class="control-label col-md-2">Mô tả sản phẩm</label>
                                <div class="col-md-10">
                                    <textarea name="description" class="tinymce" id="editor1">{{ $domain->description or '' }}</textarea>
                                </div>

                            </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Status</label>
                            <div class="col-md-9">
                                <input type="checkbox" name="active" data-render="switchery" data-theme="blue" value="1"
                                       @if(!isset($domain->active) || $domain->active == '1') checked @endif />

                            </div>

                        </div>


                        <div class="form-group">
                            <div class="col-md-12 center">
                                <button type="submit" class="btn btn-sm btn-success width-100">Save</button>
                            </div>
                        </div>

                        {!! Form::close() !!}


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')



    {{--<script src="{{ asset('backend/assets/plugins/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>--}}


    <script src="{{ asset('backend/assets/plugins/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/form-slider-switcher.demo.min.js') }}"></script>

    <!-- Fileupload plugin -->
    <script src="{{ asset('backend/assets/plugins/fileupload/bootstrap-fileupload.js') }}"></script>


    <script src="{{ asset('backend/assets/plugins/tinymce/js/tinymce/tinymce.min.js') }}"></script>

    <script src="{{ asset('backend/assets/my/js/jquery.number.js') }}"></script>

    <script>


        $(document).ready(function () {

            $("#unit_price").number(true,0);
            $("#old_price").number(true,0);



            FormSliderSwitcher.init();


            tinymce.init({
                selector: "textarea.tinymce",
                theme: "modern",
                height: 350,
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table contextmenu directionality",
                    "emoticons template paste textcolor colorpicker textpattern"
                ],
                toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
                //file_browser_callback: RoxyFileBrowser,
                toolbar2: "print preview media | forecolor backcolor emoticons mybutton | sizeselect fontselect fontsizeselect",
                keep_styles: false,
                relative_urls: false,
                convert_urls: false,
                fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",

            });

//            $('#cbo_queue').multiselect({
//                numberDisplayed: 4,
//                buttonClass: 'btn btn-white',
//                templates: {
//                    button: '<button type="button" class="multiselect dropdown-toggle" data-toggle="dropdown"><span class="multiselect-selected-text"></span> <b class="caret"></b></button>',
//                    ul: '<ul class="multiselect-container dropdown-menu"></ul>',
//                    filter: '<li class="multiselect-item multiselect-filter"><div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span><input class="form-control multiselect-search" type="text"></div></li>',
//                    filterClearBtn: '<span class="input-group-btn"><button class="btn btn-white multiselect-clear-filter" type="button"><i class="glyphicon glyphicon-remove-circle"></i></button></span>',
//                    li: '<li><a tabindex="0"><label></label></a></li>',
//                    divider: '<li class="multiselect-item divider"></li>',
//                    liGroup: '<li class="multiselect-item multiselect-group"><label></label></li>'
//                }
//            });


        });

        function add_attachment_row() {
            var length = $("#attachment_table tr").length;
            var row = '<tr id="attachment_row_' + length + '" >'
                    + '<td>'
                    + '    <div class="fileupload fileupload-new" data-provides="fileupload">'
                    + '    <div class="fileupload-preview fileupload-small thumbnail"><img src="{{ asset('backend/assets/img/upload-50x50.png') }}"></div>'
                    + '    <div>'
                    + '    <span class="btn btn-default btn-file">'
                    + '    <span class="fileupload-new">Select image</span>'
                    + '    <span class="fileupload-exists">Change</span>'
                    + '    <input type="file" name="attach_file[]" />'
                    + '    </span>'
                    + '    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>'
                    + '    </div></div>'
                    + '</td>'
                    + '<td>'
                    + '<a href="#null" onclick="remove_attachment_row(\'' + length + '\')"> <i class="fa fa-trash-o bigger-130"></i> Xóa </a>'
                    + '</td>'
                    + '</tr>';
            $("#attachment_table").append(row);
        }
        function remove_attachment_row(index) {
            $("#attachment_row_" + index).remove();
        }

        function remove_thumbnail() {
            $("#exist_image").hide();
            $("#upload_image").removeClass('hide');
            $("#is_remove_thumbnail").val("Y");
        }

    </script>
@endsection
