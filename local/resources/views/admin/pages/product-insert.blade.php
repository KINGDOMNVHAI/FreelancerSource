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
                <form action="{{ route('product-insert-update', $model->id_product) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id_product" class="form-control" value="{{ $model->id_product }}">
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
                                    <input type="text" name="name_product" class="form-control" placeholder="Tên sản phẩm" value="{{ $model->name_product }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 col-form-label">URL</label>
                            <div class="col-md-10">
                                <div class="form-group has-default">
                                    <input type="text" name="url_product" class="form-control" placeholder="duong-dan-than-thien" value="{{ $model->url_product }}" required>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <label class="col-md-1 col-form-label">Ngày đăng</label>
                            <div class="col-md-10">
                                <div class="form-group has-default">
                                    <input type="date" name="date_post" class="form-control" value="{{ $model->date_post }}" required>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <label class="col-md-1 col-form-label">Thông tin</label>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <textarea name="info_product" class="form-control" placeholder="Thông tin" rows="4" cols="50" required>{{ $model->info_product }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 col-form-label">Giới thiệu</label>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <textarea name="present_product" class="form-control" placeholder="Giới thiệu" rows="4" cols="50" required>{{ $model->present_product }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 col-form-label">Chuyên mục</label>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <select class="selectpicker" name="id_cat_post" data-style="select-with-transition" data-size="7" tabindex="-98">
                                        @foreach ($listcat as $cat)
                                        <option value="{{ $cat->id_cat }}" <?php echo ($cat->id_cat == $model->id_cat_post) ? 'selected' : '' ?>>{{ $cat->name_cat }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 col-form-label">Nội dung mô tả</label>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <textarea name="content_product" class="form-control" placeholder="Nội dung" rows="20" cols="50" required>{{ $model->content_product }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 col-form-label">Giá</label>
                            <div class="col-md-10">
                                <div class="form-group has-default">
                                    <input type="number" name="price_product" class="form-control" placeholder="10000" value="{{ $model->price_product }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 col-form-label">Đơn vị</label>
                            <div class="col-md-10">
                                <div class="form-group has-default">
                                    <input type="text" name="unit_product" class="form-control" placeholder="10000" value="{{ $model->unit_product }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 col-form-label">Tình trạng (Enable)</label>
                            <div class="col-md-10 form-check" style="margin:20px 0 0 20px;">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="enable" value="0" <?= ($model->enable_product == 0) ? 'checked' : '' ?>> Ẩn
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="enable" value="1" <?= ($model->enable_product == 1) ? 'checked' : '' ?>> Hiện
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
                                    <img src="{{asset('upload/images/thumbnail/products/' . $model->thumbnail_product)}}" width="200px;">
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
        </div>
    </div>
</div>
@stop
