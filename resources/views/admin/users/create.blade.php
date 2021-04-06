@extends('layout.dashboard')
@section('title') Thêm người dùng @endsection
@section('body')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản lý người dùng</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home.index')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Admin Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.users')}}">Quản lý người dùng</a></li>
                        <li class="breadcrumb-item active">Thêm mới người dùng</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-7 m-auto align-self-center">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm mới người dùng</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.users.create')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Tên</label>
                                    <input type="email" class="form-control" id="name" name="name" placeholder="Nhập tên người dùng">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại">
                                </div>
                                <div class="form-group">
                                    <label for="address">Địa chỉ</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Tạo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
