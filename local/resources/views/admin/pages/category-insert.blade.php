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
                @if ($model->id_cat != null)
                <form action="{{ route('category-insert-update', $model->id_cat) }}" method="post" enctype="multipart/form-data">
                @else
                <form action="{{ route('category-insert-update', 0) }}" method="post" enctype="multipart/form-data">
                @endif
                
                {{ csrf_field() }}

                @if ($model->id_cat != null)
                <input type="hidden" name="id_cat" class="form-control" value="{{ $model->id_cat }}">
                @else
                <input type="hidden" name="id_cat" class="form-control" value="0">
                @endif
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">contacts</i>
                        </div>
                        <h4 class="card-title">Thông tin bắt buộc</h4>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <label class="col-md-1 col-form-label">Tên chuyên mục</label>
                            <div class="col-md-10">
                                <div class="form-group has-default">
                                    <input type="text" name="name_cat" class="form-control" placeholder="Tên chuyên mục" value="{{ $model->name_cat }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 col-form-label">URL</label>
                            <div class="col-md-10">
                                <div class="form-group has-default">
                                    <input type="text" name="url_cat" class="form-control" placeholder="duong-dan" value="{{ $model->url_cat }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 col-form-label">Tình trạng (Enable)</label>
                            <div class="col-md-10 form-check" style="margin:20px 0 0 20px;">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="enable" value="0" <?= ($model->enable_cat == 0) ? 'checked' : '' ?>> Ẩn
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="enable" value="1" <?= ($model->enable_cat == 1) ? 'checked' : '' ?>> Hiện
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
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
        </div>
    </div>
</div>
@stop
