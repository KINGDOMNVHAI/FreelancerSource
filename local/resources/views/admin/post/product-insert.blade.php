@extends("admin.index")

@section('content-head')

@endsection

@section("content")

<div class="content">
    <div class="container-fluid">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('product-insert-update', $product->id_product) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id_post" class="form-control" value="{{ $product->id_product }}">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">contacts</i>
                        </div>
                        <h4 class="card-title">Thông tin bắt buộc</h4>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <label class="col-md-1 col-form-label">Tên sản phẩm</label>
                            <div class="col-md-10">
                                <div class="form-group has-default">
                                    <input type="text" name="name_post" class="form-control" placeholder="Tên bài viết" value="{{ $model->name_post }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 col-form-label">URL</label>
                            <div class="col-md-10">
                                <div class="form-group has-default">
                                    <input type="text" name="url_post" class="form-control" placeholder="duong-dan-than-thien" value="{{ $model->url_post }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 col-form-label">Ngày đăng</label>
                            <div class="col-md-10">
                                <div class="form-group has-default">
                                    <input type="date" name="date_post" class="form-control" value="{{ $model->date_post }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 col-form-label">Giới thiệu</label>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <textarea name="present_post" class="form-control" placeholder="Present Vie" rows="4" cols="50" required>{{ $model->present_post }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 col-form-label">Chuyên mục</label>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <select class="selectpicker" name="id_cat_post" data-style="select-with-transition" data-size="7" tabindex="-98">
                                        @foreach ($listcat as $cat)
                                        <option value="{{ $cat->id_category }}" <?php echo ($cat->id_category == $model->id_cat_post) ? 'selected' : '' ?>>{{ $cat->name_category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 col-form-label">Nội dung</label>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <textarea name="content_post" class="form-control" placeholder="Content Vie" rows="20" cols="50" required>{{ $model->content_post }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 col-form-label">Tình trạng (Enable)</label>
                            <div class="col-md-10 form-check" style="margin:20px 0 0 20px;">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="enable" value="0" <?= ($model->enable_post == 0) ? 'checked' : '' ?>> Ẩn
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="enable" value="1" <?= ($model->enable_post == 1) ? 'checked' : '' ?>> Hiện
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="row" style="margin-top:5px">
                            <label class="col-md-1 col-form-label">Thumbnail</label>
                            <div class="col-md-10 col-sm-10">
                                <div class="fileinput-new thumbnail">
                                    @if($model->thumbnail_product)
                                    <img src="{{ asset('upload/images/thumbnail/posts/' . $model->thumbnail_product) }}" width="200px;">
                                    @else
                                    <img src="{{ asset('admin/assets/img/image_placeholder.jpg') }}" width="200px;">
                                    @endif <br><br>
                                </div>
                                <input type="file" name="thumbnail" id="thumbnail">
                                <input type="hidden" name="img" id="img" value="{{ $model->thumbnail_product }}">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-fill btn-rose">Đăng bài</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>

            <div class="col-md-12">
                <form method="post" action="{{ route('posts-many-image') }}" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card ">
                        <div class="card-header card-header-rose card-header-text">
                            <div class="card-text">
                                <h4 class="card-title">Upload nhiều ảnh lên một chuyên mục</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Ảnh</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image1" id="image1">
                                    <input type="file" name="image2" id="image2">
                                    <input type="file" name="image3" id="image3">
                                    <input type="file" name="image4" id="image4">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Chuyên mục</label>
                                <div class="col-sm-10">
                                    <select class="selectpicker" name="id_category" data-style="select-with-transition"  data-size="7" tabindex="-98">
                                        @foreach ($listcat as $cat)
                                        <option value="{{ $cat->id_cat_post }}" <?php echo ($cat->id_cat_post == $model->id_cat_post) ? 'selected' : '' ?>>{{ $cat->name_cat_post }}</option>
                                        @endforeach
                                        <option value="thumbnail">Thumbnail</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-fill btn-rose">Upload ảnh</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
