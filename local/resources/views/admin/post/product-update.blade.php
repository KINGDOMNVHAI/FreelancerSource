@extends("admin.index")

@section("content")

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('product-update', $dataProduct->product_id) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="product_id" value="{{ $dataProduct->product_id }}">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">contacts</i>
                        </div>
                        <h4 class="card-title">Thông tin bắt buộc</h4>
                    </div>
                    <div class="card-body ">
                        <form class="form-horizontal">
                            <div class="row">
                                <label class="col-md-3 col-form-label">Tên sản phẩm</label>
                                <div class="col-md-9">
                                    <div class="form-group has-default">
                                        <input type="text" name="product_name" value="{{ $dataProduct->product_name }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Giá sản phẩm</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="product_price" value="{{ $dataProduct->product_price }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Giới thiệu sản phẩm</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="product_description" value="{{ $dataProduct->product_description }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Gian hàng</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        @foreach ($listStore as $store)
                                        <select class="selectpicker" name="product_store_id" data-style="select-with-transition" multiple="" data-size="7" tabindex="-98">

                                            @if ($store->store_id == $dataProduct->product_store_id)
                                            <option value="{{ $store->store_id }}" selected>
                                            @else
                                            <option value="{{ $store->store_id }}">
                                            @endif

                                            {{ $store->store_name }}
                                            </option>
                                        </select>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Hình ảnh sản phẩm</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="product_images" value="{{ $dataProduct->product_description }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer ">
                        <div class="row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-fill btn-rose">Cập nhật sản phẩm</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>

            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">contacts</i>
                        </div>
                        <h4 class="card-title">Thông tin khác vể sản phẩm</h4>
                    </div>
                    <div class="card-body ">
                        <form class="form-horizontal">
                            <div class="row">
                                <label class="col-md-3 col-form-label">Tình trạng</label>
                                <div class="col-md-6 form-check" style="margin:20px 0 0 20px;">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="exampleRadios" value="option2" checked> Còn hàng
                                        <span class="circle">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="exampleRadios" value="option2"> Hết hàng
                                        <span class="circle">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Kích thước</label>
                                <div class="col-md-9">
                                    <div class="form-group has-default">
                                        <input type="text" class="form-control" value="{{ $dataProduct->product_size }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Khối lượng</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Hạn sử dụng</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ $dataProduct->product_expirationdate }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Hình ảnh sản phẩm</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer ">
                        <div class="row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-fill btn-rose">Tạo sản phẩm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-text">
                        <div class="card-text">
                            <h4 class="card-title">Form Elements</h4>
                        </div>
                    </div>
                    <div class="card-body ">
                        <form method="get" action="https://demos.creative-tim.com/" class="form-horizontal">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">With help</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                        <span class="bmd-help">A block of help text that breaks onto a new line.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Placeholder</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="placeholder">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Disabled</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Disabled input here.." disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Static control</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <p class="form-control-static"><a href="https://demos.creative-tim.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3f575a5353507f5c4d5a5e4b56495a124b5652115c5052">[email&#160;protected]</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label label-checkbox">Checkboxes and radios</label>
                                <div class="col-sm-10 checkbox-radios">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value=""> First Checkbox
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value=""> Second Checkbox
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="exampleRadios" value="option2" checked> First Radio
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="exampleRadios" value="option1"> Second Radio
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label label-checkbox">Inline checkboxes</label>
                                <div class="col-sm-10 checkbox-radios">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value=""> a
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value=""> b
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value=""> c
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-text">
                        <div class="card-text">
                            <h4 class="card-title">Input Variants</h4>
                        </div>
                    </div>
                    <div class="card-body ">
                        <form method="get" action="https://demos.creative-tim.com/" class="form-horizontal">
                            <div class="row">
                                <label class="col-sm-2 col-form-label label-checkbox">Custom Checkboxes &amp; radios</label>
                                <div class="col-sm-4 col-sm-offset-1 checkbox-radios">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" checked> Checked
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value=""> Unchecked
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" disabled checked> Disabled Checked
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" disabled> Disabled Unchecked
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-5 checkbox-radios">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="exampleRadios" value="option1" checked> Radio is on
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="exampleRadios" value="option2"> Radio is off
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="exampleRadios2" value="option1" checked disabled> Disabled Radio is on
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="exampleRadios2" value="option2" disabled> Disabled Radio is off
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Input with success</label>
                                <div class="col-sm-10">
                                    <div class="form-group has-success">
                                        <label for="exampleInput2" class="bmd-label-floating">Success input</label>
                                        <input type="text" class="form-control" id="exampleInput2">
                                        <span class="form-control-feedback">
                                            <i class="material-icons">done</i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Input with error</label>
                                <div class="col-sm-10">
                                    <div class="form-group has-danger">
                                        <label for="exampleInput3" class="bmd-label-floating">Error input</label>
                                        <input type="email" class="form-control" id="exampleInput3">
                                        <span class="form-control-feedback">
                                            <i class="material-icons">clear</i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Column sizing</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder=".col-md-3">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder=".col-md-4">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder=".col-md-5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
