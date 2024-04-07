@extends("admin.index")

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
            <!-- <div class="col-md-12">
                <a href="" class="btn btn-fill btn-rose">In file PDF</a>
            </div> -->

            <div class="col-md-12">
                <form action="{{route('user-profile-update')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id_post" class="form-control" value="{{ $user->id }}">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon"><i class="material-icons">contacts</i></div>
                        <h4 class="card-title">Thông tin bắt buộc</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label class="col-md-1 col-form-label">Họ</label>
                            <div class="col-md-4">
                                <div class="form-group has-default">
                                    <input type="text" name="lastname" class="form-control" placeholder="Lastname" value="{{ $user->lastname }}" required>
                                </div>
                            </div>
                            <label class="col-md-1 col-form-label">Tên</label>
                            <div class="col-md-4">
                                <div class="form-group has-default">
                                    <input type="text" name="firstname" class="form-control" placeholder="Firstname" value="{{ $user->firstname }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 col-form-label">Username</label>
                            <div class="col-md-4">
                                <div class="form-group has-default">
                                    <input type="text" name="username" class="form-control" placeholder="Username" value="{{ $user->username }}" required>
                                </div>
                            </div>
                            <label class="col-md-1 col-form-label">Password</label>
                            <div class="col-md-4">
                                <div class="form-group has-default">
                                    <input type="password" name="password" class="form-control" placeholder="1234" value="{{ $user->password }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 col-form-label">Email</label>
                            <div class="col-md-10">
                                <div class="form-group has-default">
                                    <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-1 col-form-label">Về bản thân</label>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <textarea name="description" class="form-control" placeholder="Description" rows="4" cols="50" required>{{ $user->description }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:5px">
                            <label class="col-md-1 col-form-label">Avatar</label>
                            <div class="col-md-10 col-sm-10">
                                <div class="fileinput-new thumbnail">
                                    @if($user->avatar)
                                    <img src="{{asset('upload/images/avatar/' . $user->avatar)}}" width="200px;">
                                    @else
                                    <img src="{{asset('admin/assets/img/image_placeholder.jpg')}}" width="200px;">
                                    @endif <br><br>
                                </div>
                                <input type="file" name="avatar" id="avatar">
                                <input type="hidden" name="avatar-hidden" id="img" value="{{ $user->avatar }}">
                            </div>
                        </div>
                        <div class="row" style="margin-top:5px">
                            <label class="col-md-1 col-form-label">Banner</label>
                            <div class="col-md-10 col-sm-10">
                                <div class="fileinput-new thumbnail">
                                    @if($user->banner)
                                    <img src="{{asset('upload/images/banner/' . $user->banner)}}" width="400px;">
                                    @else
                                    <img src="{{asset('admin/assets/img/image_placeholder.jpg')}}" width="400px;">
                                    @endif <br><br>
                                </div>
                                <input type="file" name="banner" id="banner">
                                <input type="hidden" name="banner-hidden" id="img" value="{{ $user->banner }}">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-fill btn-rose">Cập nhật</button>
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
